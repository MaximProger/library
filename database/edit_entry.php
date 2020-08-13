<? require "../includes/header.php" ?>

<? require './connected_db.php'; ?>

<?
if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['id']) && isset($_POST['author'])){

    $id = htmlentities(mysqli_real_escape_string($conn, $_POST['id']));
    $title = htmlentities(mysqli_real_escape_string($conn, $_POST['title']));
    $description = htmlentities(mysqli_real_escape_string($conn, $_POST['description']));
    $author = htmlentities(mysqli_real_escape_string($conn, $_POST['author']));

    $query ="UPDATE books SET title='$title', description='$description', author='$author' WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
}
?>

        <div class="container">

            <? if($result) : ?>
                <div class="alert alert-success">
                    The entry has been changed
                </div>
            <? endif; ?>

            <h1>Edit a book</h1>
            <form method="post" class="mt-2 mb-2">
                <input type='hidden' name="id" value="<? echo $_GET['id'] ?>" />
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<? echo $_GET['title'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Description" required><? echo $_GET['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Author" value="<? echo $_GET['author'] ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
<?
// close connection
mysqli_close($conn);
?>

<? require "../includes/footer.php" ?>
