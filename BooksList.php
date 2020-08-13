<? require "./includes/header.php" ?>

<!--DB Connection-->
<?php
require './database/connected_db.php';
$query1 = mysqli_query($conn, "SELECT * FROM books");
?>

<div class="container">
    <h1 class="mb-3">Books List</h1>

    <? if ($_GET['delete'] == true) : ?>
        <div class="alert alert-warning">
            The entry has been deleted
        </div>
    <? endif; ?>

    <? while($row=mysqli_fetch_array($query1)) : ?>
    <div class="card mt-2 mb-2">
        <div class="card-header">
            <? echo $row['author'] ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><? echo $row['title'] ?></h5>
            <p class="card-text"><? echo $row['description'] ?></p>
            <div class="d-flex">
                <a href="./database/edit_entry.php?id=<?php echo $row['id'];?>&title=<?php echo $row['title'];?>&description=<?php echo $row['description'];?>&author=<?php echo $row['author'];?>" class="btn btn-warning mr-2">Edit</a>
                <a href="./database/delete_entry.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <? endwhile; ?>

</div>

<? require "./includes/footer.php" ?>
