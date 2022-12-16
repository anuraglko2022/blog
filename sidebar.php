<div id="templatemo_right_section">
            	
                <div class="templatemo_section_box">
					
                	<div class="templatemo_section_box_top">
                    	<h1>Categories</h1>
                    </div>
					<div class="templatemo_section_box_mid">
					<?php
						 $a = mysqli_connect('localhost', 'root', '', 'blog');
						 $b = mysqli_query($a, "select * from posts");
						 echo "<ul>";

						 while ($c = mysqli_fetch_array($b))
						 {
							echo "<li>".$c['categories']."</li>";
						 }
						 echo "</ul>";
						?>
                   		
						
                        
					</div>
                    <div class="templatemo_section_box_bottom"></div>
					<div class="templatemo_section_box_top">
                 <h1>About This Blog</h1>
             </div>
             <div class="templatemo_section_box_mid">

                 <p>This blog site is created by Anurag Verma. This is free platform where you can post your every type of blog.
                 </p>
             </div>
             <div class="templatemo_section_box_bottom"></div>
         </div><!-- end of section box -->


					
                </div><!-- end of section box -->