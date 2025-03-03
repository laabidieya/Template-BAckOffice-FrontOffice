<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Travel Offer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }
        .form-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 28px;
            color: #524434;
        }
        label {
            display: block;
            font-size: 16px;
            color: #524434;
        }
        input[type="text"], input[type="date"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
            vertical-align: middle;
        }
        select {
            border: 1px solid #ddd;
        }
        button {
            background-color: #524434;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #3d2b2b;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
        .valid-message {
            color: green;
            font-size: 14px;
        }
    </style>
    <script>
        function validateForm() {
            let isValid = true;
            let errorMessage = "";

            const departureDate = document.getElementById("departure_date").value;
            const returnDate = document.getElementById("return_date").value;

            if (new Date(returnDate) < new Date(departureDate)) {
                errorMessage = "La date de retour ne peut pas être avant la date de départ.";
                isValid = false;
            }

            if (!isValid) {
                alert(errorMessage);
            }

            return isValid;
        }
    </script>
</head>
<body>

    <div class="form-container">
        <h1>Add a Travel Offer</h1>

        <form id="addTravelOfferForm" action="showTravelOffer.php" method="POST" onsubmit="return validateForm()">
            <div style="margin-bottom: 15px;">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <span id="title_error" class="error-message"></span>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
                <span id="destination_error" class="error-message"></span>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="departure_date">Departure Date:</label>
                <input type="date" id="departure_date" name="departure_date" required>
                <span id="departure_date_error" class="error-message"></span>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="return_date">Return Date:</label>
                <input type="date" id="return_date" name="return_date" required>
                <span id="return_date_error" class="error-message"></span>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required step="0.01" min="0">
                <span id="price_error" class="error-message"></span>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="availability">Availability:</label>
                <input type="checkbox" id="availability" name="availability">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="adventure">Adventure</option>
                    <option value="relaxation">Relaxation</option>
                    <option value="culture">Culture</option>
                </select>
            </div>

            <div style="text-align: center;">
                <button type="submit">Add Offer</button>
            </div>

        </form>
    </div>

</body>
</html>';
?>

