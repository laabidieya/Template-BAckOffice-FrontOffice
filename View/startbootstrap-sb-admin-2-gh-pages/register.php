<?php
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Travel Offer</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f6f9; color: #333; }
            .form-container { width: 100%; max-width: 600px; margin: auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); }
            h1 { text-align: center; font-size: 28px; color: #524434; }
            label { display: block; font-size: 16px; color: #524434; }
            input, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
            button { background-color: #524434; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
            button:hover { background-color: #3d2b2b; }
        </style>
        <!-- JavaScript function to validate the form -->
        <script type="text/javascript">
            function validerFormulaire() {
                var title = document.getElementById("title").value;
                var destination = document.getElementById("destination").value;
                var departureDate = document.getElementById("departure_date").value;
                var returnDate = document.getElementById("return_date").value;
                var price = document.getElementById("price").value;

                if (title.length < 3) {
                    alert("The title must contain at least 3 characters.");
                    return false;
                }

                var destinationPattern = /^[A-Za-z\s]{3,}$/;
                if (!destinationPattern.test(destination)) {
                    alert("The destination must contain only letters and spaces, and at least 3 characters.");
                    return false;
                }

                if (new Date(returnDate) <= new Date(departureDate)) {
                    alert("The return date must be later than the departure date.");
                    return false;
                }

                if (price <= 0 || isNaN(price)) {
                    alert("The price must be a positive number.");
                    return false;
                }

                alert("Form successfully submitted !");
                return true;
            }
        </script>
    </head>
    <body>
        <div class="form-container">
            <h1>Add a Travel Offer</h1>
            <form id="addTravelOfferForm" action="verification.php" method="POST" onsubmit="return validerFormulaire()">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
                <label for="departure_date">Departure Date:</label>
                <input type="date" id="departure_date" name="departure_date" required>
                <label for="return_date">Return Date:</label>
                <input type="date" id="return_date" name="return_date" required>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required step="0.01" min="0">
                <label for="availability">Availability:</label>
                <input type="checkbox" id="availability" name="availability">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="adventure">Adventure</option>
                    <option value="relaxation">Relaxation</option>
                    <option value="culture">Culture</option>
                </select>
                <button type="submit">Add Offer</button>
            </form>
        </div>
    </body>
    </html>';
?>


