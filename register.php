<?php
include "header.php";
?>



<div id="templatemo_background_section_middle">
    
    <div class="templatemo_container">
    
        <div id="templatemo_left_section">
            
            <div class="templatemo_post">
            
                <div class="templatemo_post_top">
                    <h1>Registration</h1>
                </div>
                <div class="templatemo_post_mid_top">
                </div>
                
          <div class="templatemo_post_mid">
            <center><form action="" method="post">
                <label for="">Name</label>
                <input type="text" name="n1"><br><br>
                <label for="">Email</label>
                <input type="email" name="e1"><br><br>
                <label for="">Password</label>
                <input type="password" name="p1"><br><br>
                <label for="">mobile</label>
                <input type="text" name="m1"><br><br>
                <label for="">Country</label>
                <input type="text" name="c1"><br><br>
                
                
                <div class="g-recaptcha" data-sitekey="6LdlrpIiAAAAALcF3Fm02phq7xHDILlB3nETJl-L"></div>
                <br/>
                <button type="submit" class="btn btn-primary">Register</button>

                
            </form></center>

                           <!-- INSERT TABLE -->
            <?php
            if($_POST){
                extract($_POST);
                $c= mysqli_connect("localhost","root","","blog");
                mysqli_query($c,"Insert into users(id,name,email,password,mobile,country) values('','$n1','$e1','$p1','$m1','$c1')");

                echo "<script>swal('Registration success','success');</script>";
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

            
           <!-- end of right Section -->

    </div><!-- end of container-->

</div><!-- end of background middle-->













<?php
include "footer.php";
?>