<?php
include 'C:/XAMPP/htdocs/TravelBooking/Model/TravelOffer.php';
include 'C:/XAMPP/htdocs/TravelBooking/Controller/TravelOfferController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $title = isset($_POST['title']) ? trim($_POST['title']) : null;
    $destination = isset($_POST['destination']) ? trim($_POST['destination']) : null;
    $departure_date = isset($_POST['departure_date']) ? trim($_POST['departure_date']) : null;
    $return_date = isset($_POST['return_date']) ? trim($_POST['return_date']) : null;
    $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    $availability = isset($_POST['availability']) ? 1 : 0; // 1 si coché, sinon 0
    $category = isset($_POST['category']) ? trim($_POST['category']) : null;

    // Vérification des champs obligatoires
    if (!$title || !$destination || !$departure_date || !$return_date || !$price || !$category) {
        die("Erreur : Tous les champs doivent être remplis.");
    }

    if (!is_numeric($price) || $price <= 0) {
        die("Erreur : Le prix doit être un nombre positif.");
    }

    // 3️⃣ Création de l'objet offre1
    $offre1 = new TravelOffer(null, $title, $destination, $departure_date, $return_date, $price, $availability, $category);

    // 4️⃣ Affichage avec var_dump()
    echo "<h3>Affichage avec var_dump()</h3>";
    echo "<pre>";
    var_dump($offre1);
    echo "</pre>";

    // 5️⃣ Affichage avec showTravelOffer()
    $offerC = new TravelOfferController();
    echo "<h3>Affichage avec showTravelOffer()</h3>";
    $offerC->showTravelOffer($offre1);
}
?>





