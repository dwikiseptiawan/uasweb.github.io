<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
<link
rel="stylesheet"
href="./assets/css/simple-line-icons.css"
type="text/css"
media="all"
/>
<link
rel="stylesheet"
href="./assets/css/jquery.fancybox.css"
type="text/css"
media="all"
/>
</head>

<body class="grey lighten-5">

  <nav>
    <div class="nav-wrapper blue-grey lighten-1">




<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: false
    });
  });
  </script>


    

      <a href="index.php" class="brand-logo"><span class="black-text">Profesional IT</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php?page=create"><i class="material-icons">add</i></a></li>
        <li><a href="index.php?page=read"><i class="material-icons">event_note</i></a></li>
        <li><a href="index.php?page=update"><i class="material-icons">edit</i></a></li>
        <li><a href="index.php?page=search"><i class="material-icons">search</i></a></li>
      </ul>
    </div>
  </nav>





  <div class="fixed-action-btn">
  <a class="btn-floating btn-large grey darken-4">
    <i class="large material-icons">menu</i>
  </a>
  
  <ul>
    <li><a href="index.php?page=create" class="btn-floating grey darken-1"><i class="material-icons">add</i></a></li>
    <li><a href="index.php?page=read" class="btn-floating grey darken-2"><i class="material-icons">event_note</i></a></li>
    <li><a href="index.php?page=update" class="btn-floating grey darken-3"><i class="material-icons">edit</i></a></li>
    <li><a href="index.php?page=search" class="btn-floating grey darken-4"><i class="material-icons">search</i></a></li>
  </ul>
</div>



  

  <?php
  $page = "";

  if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = addslashes(($_GET['page']));
  }

  switch ($page) {
    case 'create':
      require 'form.php';
      break;
    case 'update':
      require 'view.php';
      break;
    case 'read':
      require 'read.php';
      break;
    case 'search':
      require 'search.php';
      break;
    case 'query':
      require 'query.php';
      break;
    case 'edit':
      require 'edit.php';
      break;
    case 'formEdit':
      require 'formEdit.php?id_user=$id_user';
      break;
    case 'delete':
      require 'delete.php';
      break;
    default:
      require 'home.php';
      break;
  }
  ?>




</body>

</html>