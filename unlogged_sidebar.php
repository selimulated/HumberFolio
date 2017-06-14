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
        
    </script>
</head>
<body>
    <!--Sidebar-->
           
            <ul class="collapsible side-nav fixed bar-color" id="slide-out" data-collapsible="accordion">

   <img class="logo" src="img/humber_logo.png" alt="Humber Logo Image">
        <h1 class="year">2017</h1>
        <input id="search" type="search" placeholder="Search by language, skill or discipline."/>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"> <i class="material-icons">menu</i></a>
        <div class="sidebar-footer">	&copy; Humber College 2017</div>

    <!--jquery and materialize js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>