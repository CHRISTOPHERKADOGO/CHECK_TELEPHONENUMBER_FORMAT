<?php
function check_telephone_number() {
    $mtn_prefixes = ["077", "076", "078"];
    $airtel_prefixes = ["075", "074", "070"];

    if (isset($_POST['tel_number'])) {
        $tel_number = $_POST['tel_number'];

        if (ctype_digit($tel_number) && strlen($tel_number) == 10) {
            $prefix = substr($tel_number, 0, 3);

            if (in_array($prefix, $mtn_prefixes)) {
                echo "It is an MTN number.";
            } elseif (in_array($prefix, $airtel_prefixes)) {
                echo "It is an Airtel number.";
            } else {
                echo "It is not an MTN or Airtel number.";
            }
        } else {
            echo "You have entered an invalid number.";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_telephone_number();
}
?>
