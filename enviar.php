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
      $headers = "From:" . " " . $email . "\r\n";

      //Componemos el cuerpo del correo.
      $msnMail = "Nombre: " . $name;
      $msnMail .= "\r\n";
      $msnMail .= "Email: " . $email;
      $msnMail .= "\r\n";
      $msnMail .= "Asunto: " . $subject;
      $msnMail .= "\r\n";
      $msnMail .= "Mensaje: " . $message;
      $msnMail .= "\r\n";

    if (mail($to, $subject, $msnMail, $headers))
    {
      echo
      "<script language='javascript'>
        alert('Mensaje enviado, muchas gracias.');
      </script>";
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