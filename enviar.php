<?php 

$mail='mdelpuertox@hotmail.com'; 


$nombre = $_POST['name']; 
$email = $_POST['email']; 
$mensaje = $_POST['message']; 

$thank="index4.html"; 

$message = " 
nombre:".$nombre." 
email:".$email." 
mensaje:".$mensaje.""; 

if (mail($mail,"Formulario de Consulta",$message)) 
Header ("Location: $thank");

?> 