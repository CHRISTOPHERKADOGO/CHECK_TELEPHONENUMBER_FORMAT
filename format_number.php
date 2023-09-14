<!DOCTYPE html>
<html>
<head>
    <title>Telephone Number Formatter</title>
</head>
<body>
    <h1>Telephone Number Formatter</h1>
    <form method="post" action="">
        <label for="tel_number">Enter telephone number:</label>
        <input type="text" name="tel_number" id="tel_number">
        <input type="submit" name="submit" value="Format">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        function format_telephone_number($tel_number) {
            if (ctype_digit($tel_number) && strlen($tel_number) == 10) {
                if (substr($tel_number, 0, 1) === "0") {
                    $tel_number = "+256" . substr($tel_number, 1);
                } elseif (substr($tel_number, 0, 3) === "256") {
                    $tel_number = "+" . $tel_number;
                }
                return $tel_number;
            } else {
                return "Invalid number";
            }
        }

        $tel_number = $_POST['tel_number'];
        $formatted_number = format_telephone_number($tel_number);
        

        if (isset($formatted_number)) {
            echo "<p>Formatted telephone number: $formatted_number</p>";
        }

       
    }
    ?>
</body>
</html>

