<?php
include "header.php";
?>
<div class="container">
    <div class="row">
        <h1>Show Gallery</h1>
   
    <br>



<?php
$f=glob("upload/*");

echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>Images</th>";
echo "<th>Action</th>";
echo "</tr>";
foreach($f as $z){
    echo "<tr>";
        echo "<td>";
        ?>

        <img src="<?php echo  $z; ?>" width="200">
        <?php

        echo "</td>";

        echo "<td>";
        ?>
        <!-- passing parameter and url inside link -->
        <a href="delete.php?c=<?php echo $z; ?>">Delete</a>
        <?php
        echo "</td>";

    echo"</tr>";
    ?>
   
    <?php 
}

echo "</table>";
?>


</div>
</div>


<?php
include "footer.php";
?>