<?php
include "header.php";
?>



<div id="templatemo_background_section_middle">
    
    <div class="templatemo_container">
    
        <div id="templatemo_left_section">
            
            <div class="templatemo_post">
            
                <div class="templatemo_post_top">
                    <h1>Donate</h1>
                </div>
                <div class="templatemo_post_mid_top">
                </div>
                <center>
          <div class="templatemo_post_mid">
                            
          <table>
          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type='hidden' name='business' value='sinha.amit95@outlook.com'> <!-- value="Paypal Email" -->
            <tr class = "abc"><td>
            Item Name :</td>
            <td><input type='text' name='item_name' value='Donation' readonly>
            </td></tr>
            <tr class="abc">
            <td>
            Name : </td>
            <td><input type="text" name="n1" id="" class=""></td>
            </td></tr>
            <tr class="abc"><td>
            Email :</td>
            <td><input type="email"></td>
            </tr>
            <tr class ="abc"><td>
            Mobile : </td>
            <td><input type="text" name="m1" value=""></td>
            <input type='hidden' name='item_number' value='CAM#N1'>
            </tr>
            <tr class ="abc"><td>
            Amount : </td>
            <td><input type='text' name='amount' value='1000' readonly> </td>
            <input type='hidden' name='no_shipping' value='1'> 
            <input type='hidden' name='currency_code' value='USD'> 
            <input type='hidden' name='notify_url' value='http://sitename/paypal-payment-gateway-integration-in-php/notify.php'>
            <input type='hidden' name='cancel_return' value='http://sitename/paypal-payment-gateway-integration-in-php/cancel.php'>
            <input type='hidden' name='return' value='http://sitename/paypal-payment-gateway-integration-in-php/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> 
            </tr>
           
            <tr><td colspan='2' id='sub'><center>
            <input type="submit" name="pay_now" id="pay_now" Value="Pay Now">
            </center></td></tr>
            </form>
            </table>
            <div class="clear"></div>
                    
                </div></center>
                <div class="templatemo_post_bottom">
                
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