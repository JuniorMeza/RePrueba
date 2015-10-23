<?php


$mensaje = "<p> Hola <b style='color: #0067B5;font-size: 16px;'>".$_REQUEST['nombres']."</b></b></p>
<p>Gracias por escribirnos. Su mensaje se envió satisfactoriamente. En breve responderemos a su consulta.<br /><br /> 
<a href='http://solucionperu.com/janis_sheryl'><img border='0'  src='http://solucionperu.com/janis_sheryl/logotipo.jpg' /></a><br /><br />Celular: <b>949322317 / 987110973 / 973009826</b></p>
";




$htmlheader='MIME-Version: 1.0' . "\r\n";
$htmlheader.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to 			= $_POST['email'];
$subject 		= "Formulario de Contactenos - Janis -Sheryl";
$message 		= $mensaje;
//$from 			= "From: ventas@web4peru.com";
$from             = "From: janis Sheryl <pedidos@janissheryl.com>";

$header 		= $from; 
$header 	   .= "\n"; 
$header 	   .= "MIME-version: 1.0\n"; 
$header 	   .= $htmlheader."\n";
mail($to, $subject, $message, $header);


//MANDANDO UN MENSAJE AL ADMINISTRADOR DE LA EMPRESA 

$mensaje2 = '<table width="642" border="0"  style=" margin-left:0px;font-family:Arial, Helvetica, sans-serif; color:#000; font-size:12px;"><tr ><td width="194"><b>Datos</b></td><td width="438">&nbsp;</td></tr><tr><td class="fila">Nombres</td><td>'.$_POST['nombres'].'</td></tr><tr><td class="fila">Email</td><td >'.$_POST['email'].'</td></tr><tr><td class="fila">Telefonos</td><td >'.$_POST['telefonos'].'</td></tr><tr><td class="fila">Asunto</td><td >'.$_POST['asunto'].'</td></tr></tr><tr><td class="fila">Mensaje</td><td >'.$_POST['mensaje'].'</td></tr><tr><td class="fila">fecha</td><td >'.date('Y-m-d').'</td></tr><tr><td class="fila">IP</td><td >'.$_SERVER['REMOTE_ADDR'].'</td></tr></table>';

//   
$htmlheader='MIME-Version: 1.0' . "\r\n";
$htmlheader.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to 			= 'juniormezapr@gmail.com';
$subject 		= "Formulario de Contactenos - Janis Sheryl" ;
$message 		= $mensaje2;
$from 		= "From:".trim($_POST['email']);
$header 		= $from; 
$header 	   .= "\n"; 
$header 	   .= "MIME-version: 1.0\n"; 
$header 	   .= $htmlheader."\n";
mail($to, $subject, $message, $header);

$nombres    = $_REQUEST['nombres']." ".$_REQUEST['apellido'];
$email      = $_REQUEST['email'];
$telefono   = $_REQUEST['telefonos'];
$comentario = $_REQUEST['comentario'];
$fecha      = date("d-M-y H:i");

?>