<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SendMail with PHP || JCode</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <button class="btn btn-success ingresar-email" id="ingresar-email">Ingresar Email</button>

  <section class="mail w-100">
    <div class="container">
      <div class="row">
        <div class="col col-sm-10 offset-sm-1 col-md-6 offset-md-3">
          <!-- CARD -->
          <div class="card">
            <div class="card-header text-center">
              <h3 class="font-weight-bold text-info">
                Enviar Email con PHP
              </h3>
            </div>

            <div class="card-body">
              <!-- Formulario -->
              <form id="form-mail" class="mt-3">
                <div class="form-group row">
                  <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" placeholder="Mi nombre es..." name="nombre">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="telefono" class="col-sm-4 col-form-label">Teléfono</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="telefono" placeholder="Mi teléfono es..." name="telefono">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="mensaje" class="col-sm-4 col-form-label">Mensaje</label>
                  <div class="col-sm-8">
                    <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Escribe tu mensaje"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="correo" class="col-sm-4 col-form-label">Correo</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="correo" placeholder="Mi correo es..." name="correo">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 offset-sm-3 mt-3">
                    <button type="submit" class="btn btn-success btn-block">Enviar</button>
                  </div>
                </div>
              </form>
              <!-- Formulario -->
            </div>
          </div>
          <!-- CARD -->
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="Controller/mail.js"></script>
</body>
</html>