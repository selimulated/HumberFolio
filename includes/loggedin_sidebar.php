<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Humber Student Folio</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Custome styles-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/styles.css">
    <script>
        $(".button-collapse").sideNav();
        $(document).ready(function () {
            Materialize.updateTextFields();
        });
    </script>
    <script>
        $(".button-collapse").sideNav();
    </script>
</head>

<body>
    <!--Sidebar-->
    <div class="">
        <ul class="collapsible side-nav fixed bar-color" id="slide-out" data-collapsible="accordion"> <img class="logo" src="img/humber_logo.png" alt="Humber Logo image"> <img class="circle" id="icon" src="img/yuna.jpg" alt="Humber Logo image">
            <input id="text" type="search" placeholder="Bob Wislon" />
            <li>
                <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Account Settings</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">settings</i>Project Settings</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">note_add</i>Add Projet</div>
            </li>
        </ul>
        <div class="navbar-fixed mobile-only">
            <nav>
                <div class="nav-wrapper"> <a href="#" class="brand-logo left"><img id="mobile-logo" src="img/humber_logo.png" alt=""></a>
                    <ul id="nav-mobile" class="right">
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Project Settings</a></li>
                        <li><a href="#">Add Projet</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--jquery and materialize js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>