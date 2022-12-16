<?php
include "header.php";
?>



<div id="templatemo_background_section_middle">
    
    <div class="templatemo_container">
    
        <div id="templatemo_left_section">
            
            <div class="templatemo_post">
            
                <div class="templatemo_post_top">
                    <h1>Contact Us</h1>
                </div>
                <div class="templatemo_post_mid_top">
                </div>
                
          <div class="templatemo_post_mid">

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
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=624&amp;height=353&amp;hl=en&amp;q=skylab engineers&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:353px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:353px;}.gmap_iframe {height:353px!important;}</style></div>

                <div>
                    <p><strong>
                        Name:Anurag Verma <br> Mobile:8881073028 <br> Email:micropsycho107@gmail.com
                    <strong></p>
                </div>
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