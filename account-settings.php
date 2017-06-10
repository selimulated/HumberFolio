<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Humber Student Folio</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/account-settings.css">
</head>
<body>
   <main>
        <div class="row" id="acctSettForm__cont">
            
            <div class="col s12">
            <form>
                
              <div class="row">
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
                    </div>
                
                
                
              <div class="row">
                <div class="input-field col s12">
                  <input id="acctSettForm__emailField" type="text" placeholder="Email Address">
                </div>
                </div>
                
              <div class="row">
                <div class="input-field col s12">
                  <input id="acctSettForm__passField" type="password"placeholder="Password">
                </div>
                </div>  
                
              <div class="row">
                <div class="input-field col s12">
                  <input id="acctSettForm__passConfField" type="password" placeholder="Confirm Password">
                </div>
                </div>  
                
              <div class="row">
                <div class="input-field col s12">
                  <input id="acctSettForm__introField" type="text" placeholder="Personal Description (short)">
                </div>
                </div>  
                
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="acctSettForm__descField" class="materialize-textarea" data-length="120" placeholder="Personal Description (long)"></textarea>
                  </div>
                </div>
                
                <input type="submit" value="Save Changes" class="save">
            </form>
            </div>
       </div>
    
    
    </main>
</body>
</html>