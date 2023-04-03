<?php
/**
 * @return array
 */
function getStores()
{
    return [
        [
            "id" => 1,
            "name" => "H&M",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 2,
            "name" => "ZARA",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 3,
            "name" => "Mango",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 4,
            "name" => "WE Fashion",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 5,
            "name" => "Sting",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 6,
            "name" => "Bijenkorf",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 7,
            "name" => "PRIMARK",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 8,
            "name" => "Vero Moda",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 9,
            "name" => "Sissy-boy",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 10,
            "name" => "Scotch & Soda",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 11,
            "name" => "American Today",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ],
        [
            "id" => 12,
            "name" => "Nike",
            "afbeelding" => "https://www.emerce.nl/content/uploads/2021/04/HM_Westfield-Mall-Of-The-Netherlands-1-web35036-430x400.jpg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getStoresDetails($id)
{
    $faciliteiten = [
        1 => [
            "beschrijving" => "Put it in the oven and go!",
            "faciliteiten" => ["Toegankelijke ingangen met brede deuren en hellingbanen voor rolstoelen en mobiliteitsapparaten", "Ruime paskamers die toegankelijk zijn voor rolstoelgebruikers", "Verstelbare paskamerspiegels op verschillende hoogtes", "Hulp van medewerkers bij het passen van kleding en het zoeken naar maten", "Online winkelen en thuisbezorging als alternatief voor fysiek winkelen", "Braille-labels op de kledingrekken om klanten te helpen bij het navigeren in de winkel", "Signage en informatie in grote letters voor klanten met een visuele beperking"]
        ],
        2 => [
            "beschrijving" => "You can make this delicious Dutch meal by ...",
            "faciliteiten" => ["Ruime gangpaden en ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Toegankelijke en gemarkeerde parkeerplaatsen dicht bij de ingang van de winkel",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen."]
        ],
        3 => [
            "beschrijving" => "Very nice when your grandma prepares this meal",
            "faciliteiten" => [  "Ruime gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen"]
        ],
        4 => [
            "beschrijving" => "Everytime in the city after midnight",
            "faciliteiten" => [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen"]
        ],
        5 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten" => [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen"]
        ],
        6 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten" => [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen",  "Een speciale klantenservice voor hulp bij het winkelen en toegang tot de faciliteiten"]
        ],
        7 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten" => [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen",  "Een speciale klantenservice voor hulp bij het winkelen en toegang tot de faciliteiten"]
        ],
        8 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten"=> [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen",  "Een speciale klantenservice voor hulp bij het winkelen en toegang tot de faciliteiten"]
        ],
        9 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten" => [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen",  "Een speciale klantenservice voor hulp bij het winkelen en toegang tot de faciliteiten"]
        ],
        10 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten"=> [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen",  "Een speciale klantenservice voor hulp bij het winkelen en toegang tot de faciliteiten"]
        ],
        11 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten" => [  "Brede gangpaden en voldoende ruimte om te manoeuvreren in een rolstoel of scootmobiel",  "Toegankelijke ingang en uitgang met automatische deuren of hellingbanen",  "Lift of roltrap voor toegang tot verschillende verdiepingen van de winkel",  "Aangepaste paskamers met voldoende ruimte en een lage spiegel",  "Hulpmiddelen zoals grijpers of hulpmiddelen voor het vasthouden van kledingstukken",  "Zitplaatsen beschikbaar in de winkel, zoals banken of stoelen",  "Duidelijke en goed leesbare bewegwijzering en etiketten",  "Vriendelijke en getrainde medewerkers die kunnen helpen bij het vinden van de juiste maat en het geven van advies en ondersteuning bij het winkelen",  "Een speciale klantenservice voor hulp bij het winkelen en toegang tot de faciliteiten"]
        ],
        12 => [
            "beschrijving" => "Specialty when on holiday in Spain",
            "faciliteiten" => ["Breed gangpad voor gemakkelijke toegang tot alle delen van de winkel", "Lage planken of tafels voor gemakkelijke toegang tot producten", "Speciale kleedruimtes die geschikt zijn voor rolstoelgebruikers", "Assistentie van het personeel bij het vinden van producten en bij het passen van kleding", "Online winkelen met thuisbezorging als alternatief voor fysiek winkelen", "Rolstoeltoegankelijke ingang en uitgang", "Aangepaste kassa's voor rolstoelgebruikers"]
        ]
    ];

    return $faciliteiten[$id];
}
