<?php
/**
 * @return array
 */
function getCostumerInfo()
{
    return [
        [
            "id" => 1,
            "time" => "09:00",
            "status" => "Heel rustig",
        ],
        [
            "id" => 2,
            "time" => "09:30",
            "status" => "Heel rustig",
        ],
        [
            "id" => 3,
            "time" => "10:00",
            "status" => "Heel rustig",
        ],
        [
            "id" => 4,
            "time" => "10:30",
            "status" => "Heel rustig",
        ],
        [
            "id" => 5,
            "time" => "11:00",
            "status" => "Heel Rustig",
        ],
        [
            "id" => 6,
            "time" => "11:30",
            "status" => "Rustig",
        ],
        [
            "id" => 7,
            "time" => "12:00",
            "status" => "Rustig",
        ],
        [
            "id" => 8,
            "time" => "12:30",
            "status" => "Niet te druk",
        ],
        [
            "id" => 9,
            "time" => "13:00",
            "status" => "Niet te druk",
        ],
        [
            "id" => 10,
            "time" => "13:30",
            "status" => "Druk",
        ],
        [
            "id" => 11,
            "time" => "14:00",
            "status" => "Druk",
        ],
        [
            "id" => 12,
            "time" => "14:30",
            "status" => "Heel erg druk",
        ],
        [
            "id" => 13,
            "time" => "15:00",
            "status" => "Heel erg druk",
        ],
        [
            "id" => 14,
            "time" => "15:30",
            "status" => "Heel erg druk",
        ],
        [
            "id" => 15,
            "time" => "16:00",
            "status" => "Heel erg druk",
        ],
        [
            "id" => 16,
            "time" => "16:30",
            "status" => "Heel erg druk",
        ],
        [
            "id" => 17,
            "time" => "17:00",
            "status" => "Druk",
        ],
        [
            "id" => 18,
            "time" => "17:30",
            "status" => "Druk",
        ],
        [
            "id" => 19,
            "time" => "18:00",
            "status" => "Druk",
        ],
        [
            "id" => 20,
            "time" => "18:30",
            "status" => "Niet te druk",
        ],
        [
            "id" => 21,
            "time" => "19:00",
            "status" => "Niet te druk",
        ],
        [
            "id" => 22,
            "time" => "19:30",
            "status" => "Rustig",
        ],
        [
            "id" => 23,
            "time" => "20:00",
            "status" => "Rustig",
        ],
        [
            "id" => 24,
            "time" => "20:30",
            "status" => "Rustig",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getCustumerInfoDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}
