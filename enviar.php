<?php
   //Reseteamos variables a 0.
   $name = $email = $subject = $message = $to = $headers = $msnMail = NULL;

   if (isset($_POST['submit']))
   {
      //Obtenemos valores input formulario
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];   
      $message = $_POST['message'];
      $to = "tadeo.mej@gmail.com";

      //Creamos cabecera.
      $header = 'From: ' . $mail . " \r\n";
      $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
      $header .= "Mime-Version: 1.0 \r\n";
      $header .= "Content-Type: text/plain";

      $msnMail = "Este mendaje fue enviado por: " . $name . ".\r\n\n";
      $msnMail .= "Su email es: " . $mail . "\r\n\n";
      $msnMail .= "Mensaje: " . $message . " \r\n\n";
      $msnMail .= "Enviado el " . date('d/m/Y', time());

      $to = 'tadeo.mej@gmail.com';
      $subject = 'Mensaje de mi sitio web';

    if (mail($to, $subject, utf8_decode($msnMail), $headers))
    {
      echo
      "<script language='javascript'>
        alert('Mensaje enviado, muchas gracias.');
      </script>";
      header("Location:index.html");
    }
    else
    {
      echo
      "<script language='javascript'>
        alert('fallado');
      </script>";
    }
  }
?>