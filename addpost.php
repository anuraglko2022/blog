<?php
include "header.php";
session_start();
$e1 = $_SESSION['mysession'];

if(!$e1)
{
    header("location:login.php");
}
?>



<div id="templatemo_background_section_middle">
    
    <div class="templatemo_container">
    
        <div id="templatemo_left_section">
            
            <div class="templatemo_post">
            
                <div class="templatemo_post_top">
                    <h1>Add Post</h1>
                </div>
                <div class="templatemo_post_mid_top">
                </div>
                
          <div class="templatemo_post_mid">
            <center><form action="" method="post" enctype="multipart/form-data">
                <label for="">Categories :</label>
                <input type="text" name="c1"><br><br>
                <label for="">Title :</label>
                <input type="text" name="t1"><br><br>
                <label for="">Description :</label>
                <textarea name="d1" id="" cols="30" rows="10"></textarea><br><br>
                <label for="">Image :</label>
                <input type="file" name="f1"><br><br>

               
                <div class="g-recaptcha" data-sitekey="6LdlrpIiAAAAALcF3Fm02phq7xHDILlB3nETJl-L"></div>
                <br/>
                <input type="submit" class="btn btn-primary" name="s2">

                
            </form></center>



                           <!-- INSERT TABLE -->
            <?php
            if(isset($_POST['s2'])){
                extract($_POST);

                //    for upload posts
                $t=$_FILES['f1']['tmp_name'];
                $p=$_FILES['f1']['name'];
                $f="images/";
                $m=$f.$p;
                move_uploaded_file($t,$m);


                
               
               $c= mysqli_connect("localhost","root","","blog");
                
                mysqli_query($c,"Insert into posts(id,categories,title,description,user_email,image,date,status) values('','$c1','$t1','$d1','$e1','$m',CURRENT_TIMESTAMP,'0')");
                echo "<script>swal('Post added successfully','success');</script>";
            }
            
            
            ?>
                                            

            <div class="clear"></div>
                    
                </div>
                <div class="templatemo_post_bottom">
                    <span class="post">Posted By: Admin | Category: <a href="#">Javascripts</a> | Added: 15:45, 31 March 2048</span>
                    
                </div>
                
            </div><!-- end of templatemo_post-->
            
            
            
        </div><!-- end of left section-->
        
        <?php
        include "sidebar.php";
        ?>

            
            <div class="templatemo_section_box">
                <div class="templatemo_section_box_top">
                    <h1>About This Blog</h1>
                </div>
                <div class="templatemo_section_box_mid">
                       
                    <p>This free website blog layout is provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> website. You may download, modify and apply this layout for any web blog CMS templates.</p>
                </div>
                <div class="templatemo_section_box_bottom"></div>
            </div><!-- end of section box -->
            
            <div class="templatemo_section_box">
                <div class="templatemo_section_box_top">
                
                    <h1>Categories</h1>
                    
                </div>
                <div class="templatemo_section_box_mid">
                       
                    <ul>
                        <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design</a></li>
                        <li><a href="#">JavaScripts</a></li>
                        <li><a href="http://www.templatemo.com" target="_parent">CSS Templates</a></li>
                        <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                        <li><a href="#">Photo Gallery</a></li>
                    </ul>
                </div>
                <div class="templatemo_section_box_bottom"></div>
            </div><!-- end of section box -->

        </div><!-- end of right Section -->

    </div><!-- end of container-->

</div><!-- end of background middle-->













<?php
include "footer.php";
?> 
