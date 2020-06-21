<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container">
    <div class="bg-dark">
      <div class="alert alert-primary">
        <strong>Mensaje de: </strong> Jhonny
      </div>

      <div class="mensaje">
        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/11/14/04/45/bicycle-1822640__340.jpg" alt="Mensaje">

        <div class="texto">Este el el mensaje que te queria enviar</div>
      </div>

      <div class="footer">
        Puedes llamarlo al <span>999999999</span> o escribirle a <span>algo@gmail.com</span>
      </div>
    </div>
  </div>
</body>
</html>