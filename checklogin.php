<?php
	session_start();
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("keystroke") or die("Cannot connect to database"); //Connect to database

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = mysql_query("SELECT * from users WHERE username='$username'"); //Query the users table if there are matching rows equal to $username
	$exists = mysql_num_rows($query); //Checks if username exists
	$table_users = "";	
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
			$done=$row['done'];
		}
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$myfile = fopen("data.txt","r");
					$str=fread($myfile,filesize("data.txt"));
					$str="".$str;
					$arr=explode(",",$str);
					//echo $str;
					//echo "password  correct";
					fclose($myfile);
					$myfile = fopen("data.txt","w");
					fclose($myfile);
					//print_r($arr);
					
					
					if($done==1)
					{
						$res= shell_exec("\"C:/Program Files/R/R-3.2.0/bin/i386/Rscript.exe\" C:/xampp/htdocs/valkyrie/rscripts/user_identification_euclidean.R $username $str 2>&1") ;
						$res3= shell_exec("\"C:/Program Files/R/R-3.2.0/bin/i386/Rscript.exe\" C:/xampp/htdocs/valkyrie/rscripts/user_identification.R $username $str 2>&1") ;
						$res4= shell_exec("\"C:/Program Files/R/R-3.2.0/bin/i386/Rscript.exe\" C:/xampp/htdocs/valkyrie/rscripts/user_identification_median.R $username $str 2>&1") ;
						echo $res."<br>".$res3."<br>".$res4;
						//echo $res;
						$res2=$res;
						$res=substr($res,5,3);
						//print $res;
						
							$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
							$_SESSION['str'] = $res2;
							$_SESSION['strn'] = $res3;

							$_SESSION['strm'] = $res4;							
							Print '<script>
							window.location.assign("profile.php");</script>'; 

							
								
								
					}
					else
					{

						
						$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
							Print '<script>
							alert("Enter keystoke information for secure access!");
							window.location.assign("profile.php");</script>'; 

					}  
					
				}
				
		}
		else{

					Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("keystroke_demo.php");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("keystroke_demo.php");</script>'; // redirects to login.php
	}
?>