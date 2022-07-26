<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Carrinho Novinho</title>
  <link rel="shortcut icon" href="images/icone.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
</head>

<body>
  <div class="container">  
    <header class="header">
      <a href="index.php" title="Home" class="header-logo">
        <img src="images/logo.png" alt="Meu Carrinho Novinho">
      </a>

      <a href="javascript:menu()" title="Menu" class="header-menu">
        <i class="fa-solid fa-bars"></i>
      </a>

      <nav class="header-nav">
        <ul class="header-ul">
          <li>
            <a href="home" title="Home">
              <i class="fa-solid fa-house-chimney"></i>
              Home
            </a>
          </li>
          <li>
            <a href="sobre" title="Sobre">
              <i class="fa-solid fa-user-tie"></i>
              Sobre
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <?php
      $pagina = $_GET["param"] ?? "home";
      $pagina = "pages/{$pagina}.php";

      if (file_exists($pagina)) 
        include $pagina;
      else
        include "pages/404.php";
    ?>

    <footer class="footer">
      <p>Desenvolvido por: Wellington da Silva Ferreira</p>
      <p>
        <a href="https://www.linkedin.com/in/wellingtondeveloper" title="Linkedin" target="_blank">
          <i class="fa-brands fa-linkedin"></i>
        </a>
      </p>
    </footer>
  </div>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/lightbox.min.js"></script>
  <script>
    function menu() {
      $(".header-nav").toggle();
    }
  </script>
</body>
</html>