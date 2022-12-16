<?php
include "header.php";
?>

<div class="container">
    <div class="row">
        <h1>All Posts</h1>
   <br>
   

<?php
$c=mysqli_connect('localhost','root','','blog');
$k=mysqli_query($c,"Select * from posts");
echo "<table class='table table-bordered'>";
        echo"<tr>";
        echo"<th>Category</th>";
        echo"<th>Title</th>";
        echo"<th>User Email</th>";
        echo"<th>Images</th>";
        echo"<th>Action</th>";
        echo"</tr>";

        while($r=mysqli_fetch_array($k)){
            echo"<tr>";
                echo"<td>".$r['categories']. "</td>";
                echo"<td>".$r['title']. "</td>";
                //echo"<td>".$r['description']. "</td>";
                echo"<td>".$r['user_email']. "</td>";
                echo"<td><img src='../".$r['image']."' width='100'></td>";
                ?>
                <td>
                <a href="#" class="delete" id="<?php echo $r['id']; ?>">Delete</a>
                </td>
            <?php   
            echo "</tr>";
        }
echo "</table>";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(function(){
    $(".delete").click(function(){
        // fetch id
        id = $(this).attr('id'); // fetch id

        $.ajax({
            url : "deletepost.php",
            method : "POST",
            data :{'id':id},
            success:function(k)
            {
                location.reload();
            }
        })
    });
})

</script>

</div>
</div>

<?php
include "footer.php";
?>

