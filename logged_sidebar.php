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
</head>
<body>
    <!--Sidebar-->
    <ul class="collapsible side-nav fixed bar-color" id="slide-out" data-collapsible="accordion"> 
       <img class="logo" src="img/humber_logo.png" alt="Humber Logo image"> 
       <img class="circle" id="icon" src="img/yuna.jpg" alt="Humber Logo image">
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
    <a href="#" data-activates="slide-out" class="button-collapse"> <i class="material-icons">menu</i></a>
    <div class="sidebar-footer"> &copy; Humber College 2017</div>
    <!--jquery and materialize js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>