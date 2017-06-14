<?php

require_once "includes/header.php";


?>
<body>
    <?php 
    require_once "includes/loggedin_sidebar.php";
    ?>
    
    <main>
    <div class="container">  
        <div class="row">
            
            <!--CONTENT GOES IN HERE: Please use the Materialize grid system!-->
    
            <div class="col s12 myProjectsForm__header">
                <h2>Mia's Projects</h2>
            </div>
            
            <div class="col s12">
                <form>
                <table>
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Hero</th>
                            <th>Order</th>
                            <th>Delete</th>
                        </tr>
                    
                    </thead>
                    
                    <!--The data in tbody is placeholder content! Delete if you want-->
                    <tbody>
                        <tr>
                            <td>Img ImgImgImgImgImgImgImg</td>
                            <td>
                                  <input name="group1" type="radio" id="test1" />
                                  <label for="test1">Yes</label>
                            
                            </td>
                            <td>
                                <select class="select">
                                  <option value="1">1</option>
                                </select>    
                            </td>
                        </tr>
                    </tbody>
                </table>
                    
                    <button>Add Project</button>
                    
                <div class="col s12">
                    <input type="submit" value="Save Changes" class="save">
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