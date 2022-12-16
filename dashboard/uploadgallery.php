<?php
include"header.php";
?>
<div class="container">
    <div class="row">
        <h1>Upload Gallery</h1>
    </div>
    <br>

    <form action="" method="post" enctype="multipart/form-data">
        Choose Files:
        <input type="file" name="f1" class="form-control">
        <br>
        <input type="submit" name="s1">
    </form>


    <!-- upload images -->
    <?php
    if(isset($_POST['s1'])){
        extract($_POST);
        $t=$_FILES['f1']['tmp_name'];
        $p=$_FILES['f1']['name'];
        $f="upload/";
        $m=$f.$p;
        move_uploaded_file($t,$m);
        echo "<script>swal('Successfully Uploaded','success');</script>";
    }
    ?>
    
</div>

<?php
include "footer.php";
?>