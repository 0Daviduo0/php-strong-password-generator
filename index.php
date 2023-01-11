<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>

        <input type="number" name="passwordLength">
        <input type="submit">

    </form>

    <?php

        function randomPasswordGen() {
            $lowercase = "abcdefghijklmnopqrstuvwxyz";
            $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $numbers = "1234567890";
            $symbols = "~`!@#$%^&*()_-+={[}]|\:;<,>.?/";
            $all = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~`!@#$%^&*()_-+={[}]|\:;<,>.?/";
            $password = [];
            $length = $_GET["passwordLength"];

        }

    ?>
    
</body>
</html>