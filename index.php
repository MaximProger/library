<? require "./includes/header.php" ?>

<?php
require './database/connected_db.php';

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['author'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];

    $sql = $conn->query("INSERT INTO books (title, description, author) VALUES ('$title', '$description', '$author')");

}
?>


<div class="container">

    <? if ($sql == true) : ?>
        <div class="alert alert-success">
            Entry added
        </div>
    <? endif; ?>

    <h1>Add a book</h1>

    <form method="post" class="mt-2 mb-2">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Description" required></textarea>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Author" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<? require "./includes/footer.php" ?>

