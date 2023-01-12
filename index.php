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

        $length = $_GET["passwordLength"];
        if ($length > 0) {
            
            $all = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~`!@#$%^&*()_-+={[}]|\:;<,>.?/";

            $shuffle = str_shuffle($all);
            $password = mb_substr($shuffle, 0, $length);
            echo $password;
            
        }

    function randomPasswordGen($length){
        // $lowercase = "abcdefghijklmnopqrstuvwxyz";
        // $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // $numbers = "1234567890";
        // $symbols = "~`!@#$%^&*()_-+={[}]|\:;<,>.?/";
        $all = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~`!@#$%^&*()_-+={[}]|\:;<,>.?/";

        $shuffle = str_shuffle($all);
        $password = mb_substr($shuffle, 0, $length);
        echo $password;
    };
    

    ?>
    
</body>
</html>