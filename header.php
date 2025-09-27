 <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
   <title>EduGlobal - Cursos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="<?php echo base_url('assets/imagenes/logo.png'); ?>" alt="EduGlobal">
            <h1>EduGlobal</h1>
        </div>
        <nav>
            <ul>
                <?php foreach($secciones as $sec): ?>
                    <li><a href="<?php echo site_url($sec->Id); ?>"><?php echo $sec->nombre_seccion; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>




</head>
