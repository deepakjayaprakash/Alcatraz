<?php
	session_start();

		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("keystroke") or die("Cannot connect to database"); //Connect to database

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = mysql_query("SELECT * from A_Auth WHERE username='$username'"); //Query the users table if there are matching rows equal to $username
	$exists = mysql_num_rows($query); //Checks if username exists
	$table_users = "";	
	$table_password = "";

	if($exists > 0) //IF there are no returning rows or no existing username
	{
        
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
            
			$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
            
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
			
		}
     //   Print $username.$password. $table_users.$table_password;
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
           // Print 'Hello';
            
				if($password == $table_password)
				{
					
					
						
							$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
							
							Print '<script>
							window.location.assign("auth_profile.php");</script>'; 

							
								
								
					}
					  
					
				}
				
		}
		else{

					Print '<script>alert("Incorrect Information!");</script>'; //Prompts the user
			Print '<script>window.location.assign("auth_login.php");</script>'; // redirects to login.php
		}
	
	
?>