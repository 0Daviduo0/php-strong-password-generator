<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

    session_start();

    require_once __DIR__ . "helper.php";

        $length = $_GET["passwordLength"] ?? -1;
        $min = $_GET["min"] ?? false;
        $max = $_GET["max"] ?? false;
        $numb = $_GET["numb"] ?? false;
        $Symb = $_GET["Symb"] ?? false;
        $duble = $_GET["duble"] ?? false;
        
        if ($length > 0) {

            $password = randomPasswordGen($length, $min, $max, $numb, $Symb, $duble);
            $_SESSION["password"] = $password;
            header("Location: landing-page.php");

    }
    ;

    ?>

</head>
<body>

    <form>

        <input type="number" name="passwordLength">

        <input type="checkbox" name="min">
        <label for="min">Lettere minuscole</label>

        <input type="checkbox" name="max">
        <label for="max">Lettere maiuscole</label>

        <input type="checkbox" name="numb">
        <label for="numb">Numbers</label>

        <input type="checkbox" name="Symb">
        <label for="Symb">Symbols</label>

        <input type="submit" value="🔑">


    </form>
    
</body>
</html>