<?php
// Inclure la classe TravelOffer
include 'C:/XAMPP/htdocs/TravelBooking/Model/TravelOffer.php'; // Assurez-vous que le chemin est correct

// Vérifier si les données sont soumises via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées par le formulaire
    $title = $_POST['title'];
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure_date'];
    $return_date = $_POST['return_date'];
    $price = $_POST['price'];
    $availability = isset($_POST['availability']) ? $_POST['availability'] : false;
    $category = $_POST['category'];

    // Création de l'objet avec les données du formulaire
    $offre1 = new TravelOffer($title, $destination, $departure_date, $return_date, $price, $availability, $category);

    // Affichage des informations avec var_dump()
    echo "<h2>Affichage avec var_dump()</h2>";
    echo "<pre>";
    var_dump($offre1);
    echo "</pre>";

    // Affichage des informations avec la méthode show()
    echo "<h2>Affichage avec show()</h2>";
    $offre1->show();
} else {
    echo "Aucune donnée reçue.";
}
?>


