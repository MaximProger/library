<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Library</title>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <? if ($_SERVER['REQUEST_URI'] == '/') : ?>active<? endif;?>">
                        <a class="nav-link" href="/">Add Book</a>
                    </li>
                    <li class="nav-item <? if (strripos($_SERVER['REQUEST_URI'], 'AddAuthor.php')) : ?>active<? endif;?>">
                        <a class="nav-link" href="../AddAuthor.php">Add Author</a>
                    </li>
                    <li class="nav-item <? if (strripos($_SERVER['REQUEST_URI'], 'BooksList.php')) : ?>active<? endif;?>">
                        <a class="nav-link" href="../BooksList.php">Books List</a>
                    </li>
                    <li class="nav-item <? if (strripos($_SERVER['REQUEST_URI'], 'AuthorsList.php')) : ?>active<? endif;?>">
                        <a class="nav-link" href="../AuthorsList.php">Authors List</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>