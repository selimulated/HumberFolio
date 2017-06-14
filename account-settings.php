<?php

require_once "includes/header.php";


?>
<body>
    <?php 
    require_once "includes/loggedin_sidebar.php";
    ?>
    
    <main>
    <div class="container">  
        <div class="row" id="acctSettForm__cont">
            
            <!--CONTENT GOES IN HERE: Please use the Materialize grid system!-->
    
            <div class="col s12">
            <form>
                
                    <div class="col s2">
                        <p>Img go here</p>
                    </div>
                  <div class="file-field input-field col s10">
                    <div class="file-path-wrapper">
                      <input class="file-path" type="text" placeholder="Profile Picture">
                    </div>

                    <div class="btn">
                      <span>Browse...</span>
                      <input type="file">
                    </div>

                  </div>
                
                
                
                  <input id="acctSettForm__emailField" type="text" placeholder="Email Address">
                
                  <input id="acctSettForm__passField" type="password"placeholder="Password">
                
                  <input id="acctSettForm__passConfField" type="password" placeholder="Confirm Password">
                
                  <input id="acctSettForm__introField" type="text" placeholder="Personal Description (short)">
                
                    <textarea id="acctSettForm__descField" class="materialize-textarea" data-length="120" placeholder="Personal Description (long)"></textarea>
                
                <input type="submit" value="Save Changes" class="save">
            </form>
            </div>
            
        </div>
    </div> 
    </main>    
</body>

<?php

require_once "includes/footer.php";
?>