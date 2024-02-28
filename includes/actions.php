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
            "release" => "2022",
        ],
        [
            "id" => 2,
            "name" => "Hardcore Never Dies",
            "release" => "2023",
        ],
        [
            "id" => 3,
            "name" => "Final Fantasy VII Advent Children",
            "release" => "2006",
        ],
        [
            "id" => 4,
            "name" => "Scream",
            "release" => "1996",
        ],
        [
            "id" => 5,
            "name" => "The Amazing Spider-Man",
            "release" => "2012",
        ],
        [
            "id" => 6,
            "name" => "Fanfik",
            "release" => "2023",
        ],
        [
            "id" => 7,
            "name" => "Jennifer's Body",
            "release" => "2009",
        ],
        [
            "id" => 8,
            "name" => "Call Me by Your Name",
            "release" => "2017",
        ],
        [
            "id" => 9,
            "name" => "No Country for Old Men",
            "release" => "2007",
        ],
        [
            "id" => 10,
            "name" => "Carrie",
            "release" => "1976",
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
            "description" => "SHADOW IS IN THE MOVIE I HAVE TO WATCH IT",
            "tags" => ['movie', 'released', 'English']
        ],
        2 => [
            "description" => "Shoutout naar de gabbers",
            "tags" => ['movie', 'released', 'Dutch']
        ],
        3 => [
            "description" => "Must watch for all the FFVII fans",
            "tags" => ['movie', 'released', 'Japanese']
        ],
        4 => [
            "description" => "AAAAAAAAAAAAAA",
            "tags" => ['movie', 'released', 'English']
        ],
        5 => [
            "description" => "ITS SPIDER MAN???@?@?!!?!",
            "tags" => ['movie']
        ],
        6 => [
            "description" => "He's just like me fr",
            "tags" => ['movie']
        ],
        7 => [
            "description" => " ",
            "tags" => ['movie']
        ],
        8 => [
            "description" => " ",
            "tags" => ['movie']
        ],
        9 => [
            "description" => " ",
            "tags" => ['movie']
        ],
        10 => [
            "description" => " ",
            "tags" => ['movie']
        ]
    ];

    return $tags[$id];
}
