<? require "../includes/header.php" ?>

<? require './connected_db.php'; ?>

<?
if(isset($_POST['name']) && isset($_POST['id'])){

    $id = htmlentities(mysqli_real_escape_string($conn, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));

    $query ="UPDATE authors SET name='$name' WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die("Error " . mysqli_error($conn));
}
?>

<div class="container">

    <? if($result) : ?>
        <div class="alert alert-success">
            The entry has been changed
        </div>
    <? endif; ?>

    <h1>Edit an author</h1>
    <form method="post" class="mt-2 mb-2">
        <input type='hidden' name="id" value="<? echo $_GET['id'] ?>" />
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<? echo $_GET['name'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<?
mysqli_close($conn);
?>
<? require "../includes/footer.php" ?>
