<!DOCTYPE html>
<html>
<head>
    <title>Reversed Name</title>
</head>
<body>
    <?php

        $name = $_POST["name"];
        $reversedName = strrev($name);
        echo "Your name in reverse is: " . $reversedName;

    ?>
</body>
</html>
