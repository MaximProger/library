<? require "./includes/header.php" ?>

<?php
require './database/connected_db.php';

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['name'])){

    $name = $_POST['name'];

    $sql = $conn->query("INSERT INTO authors (name) VALUES ('$name')");

}
?>


<div class="container">

    <? if ($sql == true) : ?>
        <div class="alert alert-success">
            Entry added
        </div>
    <? endif; ?>

    <h1>Add an author</h1>

    <form method="post" class="mt-2 mb-2">
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<? require "./includes/footer.php" ?>

