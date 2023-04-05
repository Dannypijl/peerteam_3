<?php
/**
 * @return array
 */
function getInformation()
{
    return [
        [
            "id" => 1,
            "name" => "algemene informatie",
        ],
        [
            "id" => 2,
            "name" => "Mensen in een rolstoel",
        ],
        [
            "id" => 3,
            "name" => "Mensen die slecht te voet zijn",
        ],
        [
            "id" => 4,
            "name" => "Mensen die slecht kunnen tillen",
        ],
        [
            "id" => 5,
            "name" => "Mensen op leeftijd",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getInformationDetails($id)
{
    $tags = [
        1 => [
            "text" => "test",
        ],
        2 => [
            "text" => "Hoe haal je nu die dagelijkse boodschappen als rolstoelgebruiker in huis?

Natuurlijk kan jij je dagelijkse boodschappen online bestellen en dat gebeurt ook steeds meer, door vrijwel iedereen. Maar de lokale- en versproducten wil je vaak toch zelf eerst even gezien of geproefd hebben. En ook de producten die niet of verkeerd geleverd zijn wil je toch nog wel in huis halen.

De supermarkten zijn over het algemeen de winkels waar de dagelijkse boodschappen het meest worden gekocht. Echter valt het wel op dat de inrichtingen van de prijsvechters minder toegankelijk zijn dan de luxere winkelketens. En zijn de delicatesse winkels vaak niet eens te bezoeken.

Het moment van boodschappen doen heeft ook veel invloed op de toegankelijkheid. Iedere dag van de week heeft zo zijn eigen voor- en nadeel. Noteer maar eens voor je zelf wat dat in kan houden. Vaak worden in het weekend de meeste boodschappen ingeslagen worden en daarom zijn op maandagen de winkels het leegste. Op maandag wordt vanuit de groothandel alles weer aangeleverd en staat dat veelal in de gangpaden te wachten op vakkenvullers. Het vakken vullen wordt veelal door jongeren gedaan naast hun opleiding, maar dat is veelal aan het einde van de dag en in de avonduren. Dit komt de toegankelijkheid niet ten goede.",
        ],
        3 => [
            "text" => "test",
        ],
        4 => [
            "text" => "test",
        ],
        5 => [
            "text" => "test",
        ],
    ];

    return $tags[$id];
}
