<script>
var randomString = function(length) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@*&#";
    for(var i = 0; i < length; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
}

var str=randomString(16);
//    alert(str);
    
    

</script>

<?php
    $client_id= $_GET['client_id'];
    $param= $_GET['param'];

    $jsonString = file_get_contents('B_Auth.json');
    echo $jsonString;
?>



<script>
var client_id="<?php echo  $form_name= $_GET['client_id'];?>";
var param="<?php echo  $form_name= $_GET['param'];?>";
     

</script>