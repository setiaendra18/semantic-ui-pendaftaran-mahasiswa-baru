<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>PMB UTM ADMIN LOGIN</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/semantic.css">
  <link rel="stylesheet" type="text/css" href="..assets/css/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/site.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/components/container.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/header.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/image.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/form.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/input.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/button.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/list.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/message.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/components/icon.css">

  <script src="../assets/library/jquery.min.js"></script>
  <script src="../assets/css/components/form.js"></script>
  <script src="../assets/css/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui blue image header">
    
      <div class="content">
        ADMIN LOGIN
      </div>
    </h2>
    <form class="ui large form"  method="POST" action="user_login.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Masukan Username" required>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Masukan Password" required>
          </div>
        </div>
        <button type="submit" class="ui fluid large blue submit button">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>

  </div>
</div>

</body>

</html>