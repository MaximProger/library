<? require "./includes/header.php" ?>

<!--DB Connection-->
<?php
require './database/connected_db.php';

//Display only those authors who have books
$query1 = mysqli_query($conn, "SELECT * FROM authors as A LEFT JOIN books as B ON (A.name = B.author) where B.title is NOT null");
?>

<div class="container">
    <h1 class="mb-3">Authors List</h1>
    
    <? if ($_GET['delete'] == true) : ?>
        <div class="alert alert-warning">
            The entry has been deleted
        </div>
    <? endif; ?>

    <? while($row=mysqli_fetch_array($query1)) : ?>
        <div class="card mt-2 mb-2">
            <div class="card-body">
                <h5 class="card-title"><? echo $row['name'] ?></h5>
                <p class="card-text">Book name: <? echo $row['title'] ?></p>
                <div class="d-flex">
                    <a href="./database/edit_author.php?id=<?php echo $row[0];?>&name=<?php echo $row['name'];?>" class="btn btn-warning mr-2">Edit</a>
                    <a href="./database/delete_author.php?id=<?php echo $row[0];?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    <? endwhile; ?>

</div>

<? require "./includes/footer.php" ?>
