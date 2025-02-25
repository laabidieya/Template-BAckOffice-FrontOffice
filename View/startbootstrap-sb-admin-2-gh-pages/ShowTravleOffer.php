<?php
// Inclure la classe TravelOffer
include 'C:\XAMPP\htdocs\TravelBooking\Model\TravelOffer.php';

// Créer une instance de TravelOffer
$offre1 = new TravelOffer(
    1,                           // ID de l'offre
    'Discover Paris',            // Titre
    'Paris, France',             // Destination
    '2024-10-15',                // Date de départ
    '2024-10-22',                // Date de retour
    1200.00,                     // Prix
    true,                        // Disponibilité
    'Cultural'                   // Catégorie
);

// Afficher les informations de l'offre avec var_dump
var_dump($offre1);
echo '<br><hr><br>';

// Afficher les informations avec la méthode show()
$offre1->show();
?>







