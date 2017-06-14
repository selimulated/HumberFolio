<?php

require_once "includes/header.php";


?>
<body>
    <?php 
    require_once "includes/logged_sidebar.php";
    ?>
    
    <main>
    <div class="container">  
        <div class="row" id="acctSettForm__cont">
            
            <!--CONTENT GOES IN HERE: Please use the Materialize grid system!-->
    
            <div class="col s12">
            <form>              
                
                  <input id="studentLoginForm__emailField" type="text" placeholder="Email Address">
                
                  <input id="studentLoginForm__passwField" type="password" placeholder="Password">
                
                <div id="studentLoginForm__promptLoginCont">
                <a id="studentLoginForm__passwPrompt">Forgotten Your Password?</a>
                <input type="submit" value="Login" class="studentLoginForm__loginBtn">
                </div>
            </form>
            </div>
            
        </div>
    </div> 
    </main>    
</body>

<?php

require_once "includes/footer.php";
?>