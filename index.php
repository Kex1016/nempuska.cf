<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nempuska.cf - Epic style</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="grey darken-2">
    <!-- epic background  -->
    <div style="background: rgba(70, 70, 70, 0.644);">
        <div style="background: url(img/bg/4.jpg) center/100% no-repeat;">
            <!-- Navbar -->
            <div class="navbar">
                <nav role="navigation" style="background: rgba(58, 209, 255, 0.199);">
                    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo center black-text">nempuska.cf</a>
                        <ul class="right hide-on-med-and-down">
                            <!--
                                <li class="active"><a href="#" class="waves-effect">Home</a></li>
                            -->
                        </ul>
                    </div>
                </nav>
            </div>
            
            <!-- title & subtitle  -->
            <div class="section" id="index-banner">
                <div class="container center">
                    <br><br>
                    <h1 class="header center pink-text"><span id="titlestuff">Nem puska oldal.</span></h1>
                    <div class="row center">
                        <h5 class="header col s12 light white-text" id="subtitle">Epikus stílus</h5>
                    </div>
                    <a class="btn purple lighten-4 black-text waves-effect waves-purple" href="bekuld.php">Puska beküldése</a>
                </div>
            </div>
        </div>
    </div>

    <!-- content  -->
    <div class="container white-text" id="content">
    <div class="card indigo lighten-3"><div class="card-content black-text"><span class="card-title">Epikus házik</span><p id="feed"></p></div></div>
        <p style="margin-top: 20%;"></p>
    </div>

    <!-- footer  -->
    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Az oldalról</h5>
                    <p class="grey-text text-lighten-4">
                        Epikus oldal. Itt található meg a 11B szutykos házi feladatai.
                    </p>
                    <p class="grey-text text-lighten-4">
                        Fun fact: <span id="funfact"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Készítette <a class="orange-text text-lighten-3" href="https://kex1016.ga">Nyilas Dávid</a>.
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="js/jquery-min.js" type="text/javascript"></script>
	<script src="js/materialize.js" type="text/javascript"></script>
	<script src="js/init.js" type="text/javascript"></script>
	<script src="js/feed.js" type="text/javascript"></script>
</body>
</html>