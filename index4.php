<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacto - ACalix Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    body {
      background: linear-gradient(to right, #000428, #004e92);
      color: #ffffff;
    }
    .brand-link, .nav-sidebar > .nav-item > .nav-link {
      color: #ffffff;
      background-color: #000428;
      transition: all 0.3s;
    }
    .nav-sidebar > .nav-item > .nav-link:hover {
      background-color: #004e92;
    }
    .main-header {
      background-color: #004e92;
    }
    .contact-card {
      background-color: #1a1a1a;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      transition: transform 0.3s ease;
    }
    .contact-card:hover {
      transform: scale(1.05);
    }
    .contact-card h3 {
      color: #00aaff;
    }
    .contact-card label {
      color: #ffffff;
    }
    .contact-card input, .contact-card textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      margin-bottom: 15px;
    }
    .contact-card button {
      background-color: #00aaff;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .contact-card button:hover {
      background-color: #007acc;
    }
    .social-icons {
      margin-top: 20px;
      text-align: center;
    }
    .social-icons a {
      color: #00aaff;
      margin: 0 10px;
      font-size: 24px;
      transition: color 0.3s;
    }
    .social-icons a:hover {
      color: #007acc;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">ACalix</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/yo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- Additional Buttons -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Portfolio</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contact</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>Help</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Contacto</h1>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="contact-card">
          <h3 class="text-center">Ponte en contacto conmigo</h3>
          <form action="" method="post">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" placeholder="Tu nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="5" placeholder="Tu mensaje" required></textarea>

            <div class="text-center">
              <button type="submit" name="submit">Enviar Mensaje</button>
            </div>
          </form>

          <div class="social-icons">
            <h4>Sígueme en redes sociales:</h4>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Definir el nombre del archivo y la ruta
    $filename = "contact_form_data_" . date('Y-m-d_H-i-s') . ".txt";
    $filepath = "data/" . $filename;

    // Crear la carpeta 'data' si no existe
    if (!is_dir("data")) {
        mkdir("data", 0777, true);
    }

    // Contenido del archivo
    $fileContent = "Nombre: $name\nCorreo Electrónico: $email\nMensaje: $message\n\n";

    // Guardar el archivo
    file_put_contents($filepath, $fileContent);

    // Iniciar la descarga del archivo
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    readfile($filepath);

    // Eliminar el archivo después de la descarga
    unlink($filepath);
    exit();
}
?>
</body>
</html>
