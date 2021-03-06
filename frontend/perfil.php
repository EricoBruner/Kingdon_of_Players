<?php
  include_once "scripts/vincular.php";
  $result = ($_SESSION['dataUser']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script type="text/javascript" src="scripts/validacao.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta http-equiv="Content-Language" content="en">
  <title>KOP | Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" type="imagem/png" href="img/icon.png" />
  <script src="https://use.fontawesome.com/a2dd855306.js"></script>
  <body>

  <header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="img/icon.png" alt="Girl in a jacket" width="70" height="70"> <a class="navbar-brand" href="index.php" style="margin-right:30px;padding: 10px;">Kingdon Of Player</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-md-5"></div>
  <div> 
  <div class="collapse navbar-collapse" class="col-md-6" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php" style="padding: 15px;"> <label>Reino </label></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="maps.php" style="padding: 15px;"> <label>Mapa </label></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ranking.php" style="padding: 15px;"> <label>Ranking </label></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="options.php" style="padding: 15px;"> <label>Opções </label></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help.php" style="padding: 15px;" class="fa fa-sign-in" aria-hidden="true"> <label>Ajuda </label></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php" style="padding: 15px;" class="fa fa-sign-in" aria-hidden="true"> <label>Sobre </label></a>
      </li>
      <li class="nav-item dropdown">
        <a style="padding: 15px;"  class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 10px;">
          <label>Perfil</label>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php" >Login</a>
          <a class="dropdown-item" href="cadastro.php">Cadastrar-se</a>
          <a class="dropdown-item active" href="perfil.php">Perfil</a>
          <a class="dropdown-item" href="login.php">Sair</a>
        </div>
      </li>
    </ul>
  </div>
  <div>
</nav>
  </header>

  <main id="perfil">
    <div class="container">
      <div class="capa">
        
      </div>
      <div class="foto-perfil">
        <img class="perfil-foto" src="http://ddragon.leagueoflegends.com/cdn/10.15.1/img/profileicon/<?php print_r($result->data->user->profileIconId)?>.png" width="200">
        
      </div>
      <div class="desc-perfil">
        <h5><?php print_r($result->data->kingdomUser->name)?></h5>
        <p><?php print_r($result->data->kingdomUser->email)?></p>
      </div>
      <div class="social">
      <ul>
        <li><i class="fa fa-address-book" aria-hidden="true" title="Adicionar aos amigos"></i></li>
        <li><i class="fa fa-commenting-o" aria-hidden="true" title="Convensar"></i></li>
        <li><i class="fa fa-ban" aria-hidden="true" title="Bloquear"></i></li>
      </ul>
    </div>  
    <div class="games-list">
      <ul>
        <li>League Of Legends</li>
      </ul>
    </div>   
    <hr style="margin-top: 100px;border: 1px solid #272303;border-radius: 1px; width: 90%;">
    <h1>Estatísticas</h1>
    
    <div class="row">
      <div class="col-5 list-stats">
        <br>
        <h3>League OF Legends</h3>
        <br>
        <table>
          <tr>
            <td>Nick:</td>
            <td>
              <?php
                print_r($result->data->user->name);
              ?>
            </td>
          </tr>
          <tr>
            <td>Nivel:</td>
            <td>
              <?php
                print_r($result->data->user->summonerLevel);
              ?>
            </td>
          </tr>
            <?php 
            $value = 0;
            foreach($result->data->elo as $value){ ?>
              <tr>
                <td>Rank:</td>
                <td>
                  <?php 
                  print_r(ucfirst(strtolower($value->tier))); 
                  echo "&nbsp";
                  print_r($value->rank);
                  echo " - ";
                  print_r($value->queueType);
                  echo "<br>";
                  echo " W: ";
                  print_r($value->wins);
                  echo " L: ";
                  print_r($value->losses);
                  echo " <br>";
                  ?>
                </td>
              </tr>
            <?php }?>
        </table>
      </div>
      
      <div class="col-2"></div>
      
      <div class="col-5">

      </div>

    </div>
    
    </div>

  </main>

  <footer class="footer navbar-fixed-bottom">
    © Todos os direitos reservados | Kingdon OF Player
  </footer>


</body>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>