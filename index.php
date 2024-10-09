<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate the Lowest Common Multiplier (LCM)</title>
</head>
<body>
    <?php
    $a = 8;
    $b = 12;
    $lcm = ($a > $b) ? $a : $b;

    do {
        if ($lcm % $a == 0 && $lcm % $b == 0) {
            echo "The LCM of $a and $b is: $lcm";
            break;
        }
        $lcm++;
    } while (true);
    ?>
</body>
</html>