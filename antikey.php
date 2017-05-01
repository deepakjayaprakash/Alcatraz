<?php
    $username= $_GET['username'];
    $email= $_GET['email'];
    $password= $_GET['password'];
    $form_name= $_GET['form_name'];
    $address= $_GET['address'];

?>

<script>

var auth;
var pagename="<?php echo  $form_name= $_GET['form_name'];?>";
    
    function isAuthenticationRequired(){
        
        var reply,reply_JSON;
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                reply=this.responseText;
               
                reply_JSON=JSON.parse(reply);
                
                for( var i in reply_JSON.pages){
                   
                    if(pagename==reply_JSON.pages[i].name){
                         alert(reply_JSON.pages[i].name);
                        auth=reply_JSON.pages[i].auth_required;
                        break;
                    }
                }
                
              //  alert(auth);
                
            }
        };
        xmlhttp.open("GET", "auth_required.txt", true);
        xmlhttp.send();
    }
    
    
isAuthenticationRequired();
</script>