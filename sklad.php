<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koło Naukowe Informatyki Lider, działające na Wydziale Zarządzania (Katedra Informatyki Ekonomicznej) Uniwersytetu Gdańskiego" />
    <meta name="keywords" content="Lider, Koło, Naukowe, UG, Informatyka, Uniwersytet Gdański" />

    <link rel="apple-touch-icon" sizes="57x57" href="./images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/icon/favicon-16x16.png">
    <link rel="manifest" href="./images/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./images/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#0D1E3A">

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href="./css/default.css" rel="stylesheet">
    <title>KNI Lider 👥 Skład</title>

</head>

<body>
<!-- START NAVBAR -->
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container exo ">
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Przycisk menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="./index.htm">L<font color="#E50E30">!</font>der</a>
          <p class="navbar-text visible-sm visible-xs"><p2 class="navbar-tytol">SKŁAD</p2></p>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav ">
            <li><a href="./index.htm">O nas</a></li>
            <li><a href="./galeria.htm">Galeria</a></li>
            <li><a href="./rekrutacja.htm">Rekrutacja</a></li>
            <li><a href="./partnerzy.htm">Partnerzy</a></li>
            <li class="active"><a href="./sklad.php">Skład</a></li>
            <li><a href="./statut.htm">Statut</a></li>
            <li><a href="./kontakt.htm">Kontakt</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.lwd2017.pl/" target="_blank">L<font color="#E50E30">!</font>der Workshop Days</a></li>
            <li><a href="http://liderferencja.pl/" target="_blank">L<font color="#E50E30">!</font>derferencja</a></li>
          </ul>
        </div>
      </div>
  </nav>
<!-- END NAVBAR -->


<div class="container">
  <!--- START CURRENT PEOPLE -->
  <h1 class="exo center">Członkowie KNI Lider</h1>
    <div class="row center">
              <img src="./images/sklad/jacekmaslankowski.jpg" class="center-block img-circle img-responsive" alt="dr Jacek Maślankowski"></br>
              <h4><strong>dr Jacek Maślankowski</strong></h4>
              <p>Opiekun KNI Lider</p>
    </div>

  <?php
  $members = file('./assets/sklad1718.csv');
  $length = count($members);

  foreach($members as $member) {
    $data = explode(";", $member);

    $name = $data[0];
    $position = $data[1];
    $id = $data[2];

    echo '
    <div class="container col-md-6 col-sm-6">
    <div class="col-md-5 col-sm-5 col-xs-5 item-zoom">
    <img class="row center-block img-circle img-responsive marginmargin" src="./images/sklad/'.$id.'.jpg" alt="'.$name.' '.$position.'"/>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-5 marginmargin">
    <h4 class=""><strong>'.$name.'</strong></h4>
    ';

    if($position != "") {
      echo '<p class="">'.$position.'</p>';
      }
      echo '</div></div>';
    }
  ?>

  <!--- END CURRENT PEOPLE -->

  <!--- START PAST PEOPLE -->

  <!--- START 2016/17 -->
  <h2 data-toggle="" data-target="#sklad16" class="text-center exo col-xs-12 marginmargin">Skład 2016/17</h2>
  <div id="sklad16" class="">
  <?php
  $members = file('./assets/sklad1617.csv');
  $length = count($members);

  foreach($members as $member) {
    $data = explode(";", $member);

    $name = $data[0];

    echo '
    <div class="center">
    <h4 class="col-md-4 col-sm-6">'.$name.'</h4>
    </div>
    ';
    }
  ?>
  </div>
  <!--- END 2016/17 -->
  <!--- START 2015/16 -->
  <h2 data-toggle="" data-target="#sklad15" class="text-center exo col-xs-12 marginmargin">Skład 2015/16</h2>
  <div id="sklad15" class="">
  <?php
  $members = file('./assets/sklad1516.csv');
  $length = count($members);

  foreach($members as $member) {
    $data = explode(";", $member);

    $name = $data[0];

    echo '
    <div class="center">
    <h4 class="col-md-4 col-sm-6">'.$name.'</h4>
    </div>
    ';
    }
  ?>
  </div>
  <!--- END 2015/16 -->
  <!--- START 2014/15 -->
  <h2 data-toggle="" data-target="#sklad14" class="text-center exo col-xs-12 marginmargin">Skład 2014/15</h2></br></br>
          
  <div id="sklad14" class="">
  <?php
  $members = file('./assets/sklad1415.csv');
  $length = count($members);

  foreach($members as $member) {
    $data = explode(";", $member);

    $name = $data[0];

    echo '
    <div class="center">
    <h4 class="col-md-4 col-sm-6">'.$name.'</h4>
    </div>
    ';
    }
  ?>
  </div>
  <!--- END 2014/15 -->
<!--- END PAST PEOPLE -->
</div>

</br>
</br>
</br>
<!-- START FOOTER -->
  <footer class="footer exo">
      <div class="container">
          <row>
              <div class="col-md-6">
                  <a href="./index.htm">Koło Naukowe Informatyki Lider</a></br>
                    Centrum Dydaktyczno-Konferencyjne Wydziału Zarządzania Uniwersytetu Gdańskiego</br>
                    Katedra Informatyki Ekonomicznej</br>ul. Piaskowa 9, Sopot, Polska</br>
              </div>
              <div class="col-md-6 text-right"></br>
                    <a href="https://www.facebook.com/KNI.Lider/" target="_blank"><i class="fa fa-3x fa-social fa-facebook text-inverse"></i></a>
                    <a href="https://www.instagram.com/kni.lider/" target="_blank"><i class="fa fa-3x fa-social fa-instagram text-inverse"></i></a>
                    <a href="https://www.youtube.com/channel/UClZQSCK7B51aB9kSTFimrIw" target="_blank"><i class="fa fa-3x fa-social fa-youtube text-inverse"></i></a>

              </div>
          </row>
      </div>
  </footer>
<!-- END FOOTER -->

    <script src="./js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>