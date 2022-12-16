<?php
include "header.php";
?>



<div id="templatemo_background_section_middle">
    
    <div class="templatemo_container">
    
        <div id="templatemo_left_section">
            
            <div class="templatemo_post">
            
                <div class="templatemo_post_top">
                    <h1>Login</h1>
                </div>
                <div class="templatemo_post_mid_top">
                </div>
                
          <div class="templatemo_post_mid">
            <center><form action="" method="post">
                <label for="">Email</label>
                <input type="email" name="e1"><br><br>
                <label for="">Password</label>
                <input type="password" name="p1"><br><br>
                
                
            <div class="g-recaptcha" data-sitekey="6LdlrpIiAAAAALcF3Fm02phq7xHDILlB3nETJl-L"></div>
            <br/>
                <input type="submit" class="btn btn-primary">

                
            </form></center>

            <!-- QUERIES FOR LOGIN  -->

            <?php
        if($_POST){
            extract($_POST);
            $c=mysqli_connect("localhost","root","","blog");
            $q=mysqli_query($c,"Select * from users where email='$e1' and password='$p1'");
                    //alternate of count
            $count=mysqli_num_rows($q);
            
            if($count==0){
                echo "<script>swal('Invalid Login','error');</script>";
            }
            else{
                session_start();
                $_SESSION['mysession']=$e1;
                // REDIRECT TO Home
                header("location:home.php");

            }
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