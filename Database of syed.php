<?php
//varaiable setting
$name = $_REQUEST['name'];

$email = $_REQUEST['email'];

$phonenumber =$_REQUEST['phonenumber'];

//check input keys
if(empty($name)||empty($email)||empty($phonenumber))
{
    echo " Please all the fields";
}
else
{
    mail("syed.ibrahim.vazeer@gmail.com","Customer Request", "From:$name $email $phonenumber" );
    echo "<script type='text/jvascript'>alert('The Meassge is sent Successfully');
    windows.history.log(-1);
    </script>";
}
?>