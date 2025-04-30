<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta data and page setup -->
    <meta charset="UTF-8">
    <meta name="description" content="Calculate Surface Area and Volume of a Pentagonal Prism, PHP">
    <meta name="keywords" content="Immaculata, ICD2O">
    <meta name="author" content="Isaaq Simon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (16)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (16)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (16)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_io (16)/site.webmanifest">>
</head>
<body>
    <h1>Pentagonal Prism Calculator</h1>

        <!-- External stylesheet -->
    <link rel="stylesheet" href="./css/style.css">

    <p class="info">Enter the side length, apothem, and height to calculate the <strong>Surface Area</strong> and <strong>Volume</strong> of a pentagonal prism.</p>

    <p class="info">Formula: <strong>Base Area</strong> = (5 × side × apothem) / 2, <strong>Lateral Area</strong> = 5 × side × height, <strong>Surface Area</strong> = 2 × Base Area + Lateral Area, <strong>Volume</strong> = Base Area × height.</p>

    <!-- Form to get user input -->
    <form method="post" action="">
        <label>Side Length (s): 
            <input type="number" name="side" step="0.01" min="0.01" max="100" required>
        </label><br>

        <label>Apothem (a): 
            <input type="number" name="apothem" step="0.01" min="0.01" max="100" required>
        </label><br>

        <label>Height (h): 
            <input type="number" name="height" step="0.01" min="0.01" max="100" required>
        </label><br><br>

        <button type="submit">Calculate</button>
    </form>

    <!-- PHP to process and display results -->
    <div id="result">
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve and validate form values
            $side = floatval($_POST["side"]);
            $apothem = floatval($_POST["apothem"]);
            $height = floatval($_POST["height"]);

            if ($side > 0 && $apothem > 0 && $height > 0) {
                // Calculate base area of the pentagon
                $baseArea = (5 * $side * $apothem) / 2;

                // Calculate lateral surface area
                $lateralArea = 5 * $side * $height;

                // Total surface area
                $surfaceArea = 2 * $baseArea + $lateralArea;

                // Volume
                $volume = $baseArea * $height;

                // Display results with 2 decimal places
                echo "<h2>Results</h2>";
                echo "<p>Surface Area: " . number_format($surfaceArea, 2) . " cm²</p>";
                echo "<p>Volume: " . number_format($volume, 2) . " cm³</p>";

                // IF statement (bonus)
                if ($volume > 100) {
                    echo "<p>The prism has a large volume!</p>";
                }
            } else {
                echo "<p>Please enter valid positive numbers.</p>";
            }
        }
        ?>
    </div>

    <!-- Image of the prism -->
    <img src="./images/Prism.png" alt="Pentagonal Prism" width="300">
</body>
</html>
