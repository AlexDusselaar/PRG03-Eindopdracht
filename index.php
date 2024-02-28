<?php
//Require functions for actions
require_once "includes/actions.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getMovies();
} else {
    $data = getMovieDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
//header("Content-Type: application/json");
//echo json_encode($data);
//exit;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watchlist Maker</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
</head>
<body>
    <header>
        <h1>Watchlist Maker</h1>
    </header>
    <section>
        <ul id="movies">
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BODRlNTY5ZjktZjE0Ni00YjZhLTk3NTItYzk0ZjYxN2QxMWEzXkEyXkFqcGdeQXVyMjMwNDgzNjc@._V1_.jpg" alt="sonic poster">
                <p>Sonic the Hedgehog 2</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BZGEyNjZmNTAtYWE2NS00ZGU2LTkyOGItMTEzZmRhNWMxYzcyXkEyXkFqcGdeQXVyMjQwNTYzODk@._V1_.jpg" alt="hardcore never dies poster">
                <p>Hardcore Never Dies</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BMWUxYjFhN2MtYTgzNS00NDNkLThhOWUtNzEzNWYzNmUyMjRkXkEyXkFqcGdeQXVyMTEwNDU1MzEy._V1_.jpg" alt="advent children poster">
                <p>Final Fantasy VII <br> Advent Children</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BMjA2NjU5MTg5OF5BMl5BanBnXkFtZTgwOTkyMzQxMDE@._V1_.jpg" alt="scream poster">
                <p>Scream</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BYWYxYTc0YzctZjQxZi00ZTBhLWEzOWQtODc4YzMzZGZkYTJiXkEyXkFqcGdeQXVyMzExODEzNDA@._V1_.jpg" alt="poster">
                <p>The Amazing <br> Spider-Man</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BNWYwZjA0NDEtZmE4ZC00YTU4LTlkNDMtMzhmNWU1NmZmYjc1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg" alt="poster">
                <p>FanFik</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BMTMxNzYwMjc1Ml5BMl5BanBnXkFtZTcwNDI3MDE3Mg@@._V1_.jpg" alt="poster">
                <p>Jennifer's Body</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BNDk3NTEwNjc0MV5BMl5BanBnXkFtZTgwNzYxNTMwMzI@._V1_.jpg" alt="poster">
                <p>Call Me by Your Name</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BMjA5Njk3MjM4OV5BMl5BanBnXkFtZTcwMTc5MTE1MQ@@._V1_.jpg" alt="No Country for Old Men poster">
                <p>No Country for Old Men</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
            <li>
                <img src="https://m.media-amazon.com/images/M/MV5BMTlhNmVkZGUtNjdjOC00YWY3LTljZWQtMTY1YWFhNGYwNDQwXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg" alt="poster">
                <p>Carrie</p>
                <div>
                    <a>Details</a>
                    <a>Add to watchlist</a>
                </div>
            </li>
        </ul>
    </section>
    <footer>
        <p>Website by Alex Dusselaar</p>
    </footer>
</body>
</html>
