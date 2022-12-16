<?php
include "header.php";
?>

<div class="container">
    <div class="row">
        <h1>All Users</h1>
   <br>
   

<?php
$c=mysqli_connect('localhost','root','','blog');
$k=mysqli_query($c,"Select * from users");
echo "<table class='table table-bordered'>";
        echo"<tr>";
        echo"<th>Name</th>";
        echo"<th>Email</th>";
        echo"<th>Password</th>";
        echo"<th>Mobile</th>";
        echo"<th>Country</th>";
        echo"<th>Action</th>";
        echo"</tr>";

        while($r=mysqli_fetch_array($k)){
            echo"<tr>";
                echo"<td>".$r['name']. "</td>";
                echo"<td>".$r['email']. "</td>";
                echo"<td>".$r['password']. "</td>";
                echo"<td>".$r['mobile']. "</td>";
                echo"<td>".$r['country']. "</td>";
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
            url : "deleteuser.php",
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

