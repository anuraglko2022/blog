<?php
include "header.php";
?>



<div id="templatemo_background_section_middle">
    
    <div class="templatemo_container">
    
        <div id="templatemo_left_section">
            
    <?php
    $c=mysqli_connect('localhost','root','','blog');
    $k=mysqli_query($c,'Select * from posts ORDER BY id DESC');
    while($r=mysqli_fetch_array($k)){

   
    ?>
            <div class="templatemo_post">
            
                <div class="templatemo_post_top">
                    <h1><?php echo $r['title']; ?> </h1>
                </div>
                <div class="templatemo_post_mid_top">
                </div>
                
          <div class="templatemo_post_mid">
                                            
                    <p><img alt="Blog" src="<?php echo $r['image'];?>" width="100">
                    <?php echo $r['description']; ?> </p>
            <div class="clear"></div>
                    
                </div>
                <div class="templatemo_post_bottom">
                    <span class="post">Posted By: <?php echo $r['user_email'];?> | Category: <?php
                    echo $r['categories'];?></span>
                    
                </div>
                
            </div><!-- end of templatemo_post-->
            <?php
    }
    ?>
            
                
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