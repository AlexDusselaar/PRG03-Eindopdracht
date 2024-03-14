<?php
/**
 * @return array
 */
function getMovies()
{
    return [
        [
            "id" => 1,
            "name" => "Sonic the Hedgehog 2",
            "poster" => "https://m.media-amazon.com/images/M/MV5BODRlNTY5ZjktZjE0Ni00YjZhLTk3NTItYzk0ZjYxN2QxMWEzXkEyXkFqcGdeQXVyMjMwNDgzNjc@._V1_.jpg",
        ],
        [
            "id" => 2,
            "name" => "Hardcore Never Dies",
            "poster" => "https://m.media-amazon.com/images/M/MV5BZGEyNjZmNTAtYWE2NS00ZGU2LTkyOGItMTEzZmRhNWMxYzcyXkEyXkFqcGdeQXVyMjQwNTYzODk@._V1_.jpg",
        ],
        [
            "id" => 3,
            "name" => "Final Fantasy VII Advent Children",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMWUxYjFhN2MtYTgzNS00NDNkLThhOWUtNzEzNWYzNmUyMjRkXkEyXkFqcGdeQXVyMTEwNDU1MzEy._V1_.jpg",
        ],
        [
            "id" => 4,
            "name" => "Scream",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMjA2NjU5MTg5OF5BMl5BanBnXkFtZTgwOTkyMzQxMDE@._V1_.jpg",
        ],
        [
            "id" => 5,
            "name" => "The Amazing Spider-Man",
            "poster" => "https://m.media-amazon.com/images/M/MV5BYWYxYTc0YzctZjQxZi00ZTBhLWEzOWQtODc4YzMzZGZkYTJiXkEyXkFqcGdeQXVyMzExODEzNDA@._V1_.jpg",
        ],
        [
            "id" => 6,
            "name" => "Fanfik",
            "poster" => "https://m.media-amazon.com/images/M/MV5BNWYwZjA0NDEtZmE4ZC00YTU4LTlkNDMtMzhmNWU1NmZmYjc1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg",
        ],
        [
            "id" => 7,
            "name" => "Jennifer's Body",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTMxNzYwMjc1Ml5BMl5BanBnXkFtZTcwNDI3MDE3Mg@@._V1_.jpg",
        ],
        [
            "id" => 8,
            "name" => "Call Me by Your Name",
            "poster" => "https://m.media-amazon.com/images/M/MV5BNDk3NTEwNjc0MV5BMl5BanBnXkFtZTgwNzYxNTMwMzI@._V1_.jpg",
        ],
        [
            "id" => 9,
            "name" => "No Country for Old Men",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMjA5Njk3MjM4OV5BMl5BanBnXkFtZTcwMTc5MTE1MQ@@._V1_.jpg",
        ],
        [
            "id" => 10,
            "name" => "Carrie",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTlhNmVkZGUtNjdjOC00YWY3LTljZWQtMTY1YWFhNGYwNDQwXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getMovieDetails($id)
{
    $tags = [
        1 => [
            "title" => "Sonic The Hedgehog 2",
            "description" => "When the manic Dr. Robotnik returns to Earth with a new ally, Knuckles the Echidna, Sonic and his new friend Tails is all that stands in their way.",
            "release" => "2022",
            "genre" => "Adventure, Comedy",
            "poster" => "https://m.media-amazon.com/images/M/MV5BODRlNTY5ZjktZjE0Ni00YjZhLTk3NTItYzk0ZjYxN2QxMWEzXkEyXkFqcGdeQXVyMjMwNDgzNjc@._V1_.jpg",
        ],
        2 => [
            "title" => "Hardcore Never Dies",
            "description" => "Michael dreams of a future as a pianist but his music education doesn't go well. In search of inspiration his brother Danny introduces him to the Rotterdam gabber scene. Danny's drug business reaches international proportions and the brothers must fight for their lives.",
            "release" => "2023",
            "genre" => "Crime",
            "poster" => "https://m.media-amazon.com/images/M/MV5BZGEyNjZmNTAtYWE2NS00ZGU2LTkyOGItMTEzZmRhNWMxYzcyXkEyXkFqcGdeQXVyMjQwNTYzODk@._V1_.jpg",
        ],
        3 => [
            "title" => "Final Fantasy VII - Advent Children",
            "description" => "An ex-mercenary is forced out of isolation when three mysterious men kidnap and brainwash the city's children afflicted with the Geostigma disease.",
            "release" => "2006",
            "genre" => "Animation, Action, Adventure",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMWUxYjFhN2MtYTgzNS00NDNkLThhOWUtNzEzNWYzNmUyMjRkXkEyXkFqcGdeQXVyMTEwNDU1MzEy._V1_.jpg",
        ],
        4 => [
            "title" => "Scream",
            "description" => "A year after the murder of her mother, a teenage girl is terrorized by a masked killer who targets her and her friends by using scary movies as part of a deadly game.",
            "release" => "1996",
            "genre" => "Horror, Mystery",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMjA2NjU5MTg5OF5BMl5BanBnXkFtZTgwOTkyMzQxMDE@._V1_.jpg",
        ],
        5 => [
            "title" => "The Amazing Spider-Man",
            "description" => "After Peter Parker is bitten by a genetically altered spider, he gains newfound, spider-like powers and ventures out to save the city from the machinations of a mysterious reptilian foe.",
            "release" => "2012",
            "genre" => "Action, Adventure, Sci-Fi",
            "poster" => "https://m.media-amazon.com/images/M/MV5BYWYxYTc0YzctZjQxZi00ZTBhLWEzOWQtODc4YzMzZGZkYTJiXkEyXkFqcGdeQXVyMzExODEzNDA@._V1_.jpg",
        ],
        6 => [
            "title" => "FanFik",
            "description" => "Two high school students form an intense connection as they navigate the challenges of discovering and expressing their truest selves.",
            "release" => "2023",
            "genre" => "Drama",
            "poster" => "https://m.media-amazon.com/images/M/MV5BNWYwZjA0NDEtZmE4ZC00YTU4LTlkNDMtMzhmNWU1NmZmYjc1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg",
        ],
        7 => [
            "title" => "Jennifer's Body",
            "description" => "A newly-possessed high-school cheerleader turns into a succubus who specializes in killing her male classmates. Can her best friend put an end to the horror?",
            "release" => "2009",
            "genre" => "Comedy, Horror",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTMxNzYwMjc1Ml5BMl5BanBnXkFtZTcwNDI3MDE3Mg@@._V1_.jpg",
        ],
        8 => [
            "title" => "Call Me By Your Name",
            "description" => "In 1980s Italy, romance blossoms between a seventeen-year-old student and the older man hired as his father's research assistant.",
            "release" => "2017",
            "genre" => "Drama, Romance",
            "poster" => "https://m.media-amazon.com/images/M/MV5BNDk3NTEwNjc0MV5BMl5BanBnXkFtZTgwNzYxNTMwMzI@._V1_.jpg",
        ],
        9 => [
            "title" => "No Country For Old Men",
            "description" => "Violence and mayhem ensue after a hunter stumbles upon the aftermath of a drug deal gone wrong and over two million dollars in cash near the Rio Grande.",
            "release" => "2007",
            "genre" => "Crime, Drama, Thriller",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMjA5Njk3MjM4OV5BMl5BanBnXkFtZTcwMTc5MTE1MQ@@._V1_.jpg",
        ],
        10 => [
            "title" => "Carrie",
            "description" => "Carrie White, a shy, friendless teenage girl who is sheltered by her domineering, religious mother, unleashes her telekinetic powers after being humiliated by her classmates at her senior prom.",
            "release" => "1976",
            "genre" => "Horror, Mystery",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTlhNmVkZGUtNjdjOC00YWY3LTljZWQtMTY1YWFhNGYwNDQwXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg",
        ]
    ];

    return $tags[$id];
}
