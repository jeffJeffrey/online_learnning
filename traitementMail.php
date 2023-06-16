<?php
include('session.php');
include('fonction.php');
$tabDest = [
    'dongmojunior010@gmail.com',
    'wilfriednecdem@gmail;.com',
    'metiekampatricia@gmail.com',
    'jelfnguimdo@gmail.com',
];

$nom = $_GET['nom'];
$email = $_SESSION['email'];
$subject = 'jobsite Form Submilted';
$body = $_GET['message'];
$body=wordwrap($message,30,"\r\n");
$headers= 'From:'.$email;
if(isset($_GET['submit'])){
    foreach($tabDest as $to){
        mail($to,$subject,$body,$headers);
    }
    header('location: ./index.php');
}
 ?>
