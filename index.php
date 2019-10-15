<?php

$cuerpo='<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
	body{
		/*background-color: white;*/
		background-color: #f6f6f6;
		font-family: sans-serif;
		font-size: 14px;
		margin: 0;
		padding: 0;
	}
	.body{
		background-color: #f6f6f6;
		width: 100%;
	}
	.container{
		display: block;
		margin: 0 auto;
		max-width: 580px;
		padding: 10px;
		width: 580px;
	}
	.main{
		margin-top: 10px;
		border-radius: 3px;
		width: 100%;
		background-color: white;
		padding: 20px;
		line-height: 25px;
	}
	.footer{
		margin-top: 10px;
		padding: 10px;
		text-align: center;
		color: #999999;
	}
</style>
<body>

 <table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>

		<td class="container">
		    <div class="content">

			    <!-- START CENTERED WHITE CONTAINER -->
			    <table class="main">

				    <!-- START MAIN CONTENT AREA -->
				    <tr>
					    <td class="wrapper" align="center">
						    <table >
							    <tr>
								    <td align="center">
								    	<!--<img src="clase/banner.png">-->//debe de ser ruta completa: https://wsbrb-services.com/appsmo/servicios/clase/logo-ammtac.png
								    </td>
							    </tr>
							    <tr>
							    	
								    <td align="">
									    <br>
									    <p style="font-weight: bold;">Estimado(a)  ' . $_POST['nombre'] . " " . $_POST['apellido'] . '.</p>
									    <br>
									    <p>Este es un correo de prueba y los datos son recibidos a traves de POST <br>
									       su nombre completo es  ' . $_POST['nombre'] . " " . $_POST['apellido'] . ' <br>
									       con telefono ' .  $_POST['telefono'] . ' y email ' . $_POST['email'] . '

									    <br><br>
									    <p>Sin más por el momento le enviamos un gran saludo.</p>
								    </td>
							    </tr>
						    </table>
					    </td>
				    </tr>

			    </table>

			    <div class="footer" align="center">
				    <table border="0" cellpadding="0" cellspacing="0" align="center">
					    <tr>
						    <td class="" align="center">
							        Dirección: Boston 99, Col. Nochebuena, 03720 CDMX.
							    <br><a href="www.smo.org.mx">www.smo.org.mx</a><br>
							    <span> 52 (55) 5563-9393, 5563-7812, 5598-3827 y 5598-5372</span><br>
							    <span class="apple-link">contacto@smo.org.mx</span>
						    </td>
					    </tr>
				    </table>
			    </div>

		    </div>
	    </td>
	   
    </tr>
   </table>
</body>
</html>';

//echo $cuerpo;
//exit;

require_once 'clase/class.phpmailer.php';
$mail = new phpmailer();
$mail->PluginDir = "clase/";
$mail->Mailer = "smtp";
$mail->Host = "mail.brb.com.mx";
$mail->SMTPAuth = 1;
$mail->IsSendMail();
$mail->Username = "ammtac@gmail.com";
$mail->Password = "Registro1;19";
$mail->Port = "2525";
$mail->CharSet = 'UTF-8';
$mail->From = "abel93lk@gmail.com";
$mail->FromName = ("Titulo grande");
$mail->Timeout = 15;

//$mail->AddAddress($asistente->email);
$mail->AddAddress("abel@jc-innovation.com");
//$mail->AddAttachment($constancia);
$mail->AddBCC('jesus@jc-innovation.com');
$mail->IsHTML(true);

$mail->Subject = ("Titulo chico");
$mail->Body = ($cuerpo);

if ($mail->Send()) {

	echo "<center><h3>Se envio correctamente!</h3></center>";
	
} else {
	echo "<center><h3>No pudo enviarse el correo</h3></center>";

}