<?php
  $nombreUsuario = $_POST['nombre'];
  $telefonoUsuario = $_POST['telefono'];
  $mensajeUsuario = $_POST['mensaje'];
  $correoUsuario = $_POST['correo'];

  $email = $_POST['email'];

  // Las 2 primeras lineas habilitan el informe de errores
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );

  // de quien es el mensaje
  $from = $correoUsuario;
  // para quien es el mensaje
  $to = $email;
  // asunto del mensaje
  $subject = "Mensaje de Contácto !IMPORTANTE!";
  // cual es el mensaje
  $mensaje = "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Mensaje</title>
    
      <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
    
        .container {
          max-width: 1000px;
          width: 90%;
          margin: 0 auto;
        }
        .bg-dark {
          background: #343a40;
          margin-top: 40px;
          padding: 20px 0;
        }
        .alert {
          font-size: 1.5em;
          position: relative;
          padding: .75rem 1.25rem;
          margin-bottom: 2rem;
          border: 1px solid transparent;
          border-radius: .25rem;
        }
        .alert-primary {
          color: #004085;
          background-color: #cce5ff;
          border-color: #b8daff;
        }
    
        .img-fluid {
          max-width: 100%;
          height: auto;
        }
    
        .mensaje {
          width: 80%;
          font-size: 20px;
          margin: 0 auto 40px;
          color: #eee;
        }
    
        .texto {
          margin-top: 20px;
        }
    
        .footer {
          width: 100%;
          background: #48494a;
          text-align: center;
          color: #ddd;
          padding: 10px;
          font-size: 14px;
        }

        .footer span {
          text-decoration: underline;
        }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='bg-dark'>
          <div class='alert alert-primary'>
            <strong>Mensaje de: </strong> $nombreUsuario
          </div>
    
          <div class='mensaje'>
            <img class='img-fluid' src='https://cdn.pixabay.com/photo/2016/11/14/04/45/bicycle-1822640__340.jpg' alt='Mensaje'>
    
            <div class='texto'>$mensajeUsuario</div>
          </div>
    
          <div class='footer'>
            Puedes llamarlo al <span>$telefonoUsuario</span> o escribirle a <span>$correoUsuario</span>
          </div>
        </div>
      </div>
    </body>
    </html>
  ";

  //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  // More headers
  $headers .= "From: <$correoUsuario>" . "\r\n";
  $headers .= "Cc: $to" . "\r\n";

  // esta funcion ejecuta el correo PHP
  $sendMail = mail($to, $subject, $mensaje, $headers);

  if( $sendMail ) {
    echo json_encode(array(
      'error' => false,
      'mensaje' => "Mensaje Enviado 😉"
    ));
  } else {
    echo json_encode(array(
      'error' => true,
      'mensaje' => "Hubo un problema al enviar su mensaje. Intentélo mas terde."
    ));
  } 

  //echo($nombre);

?>