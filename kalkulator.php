<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aplikasi Kalkulator Sederhana</h1>
    <form action="kalkulator.php" method="post">
        <p>Input 1 : <input type="text" name="input1"></p>
        <p>Input 2 : <input type="text" name="input2"> </p>
        <p>
            <input type="button" value="+">
            <input type="button" value="-">
            <input type="button" value="*">
            <input type="button" value="/">
        </p> 
        <p>Hasil: </p>
    </form>


    <?php
        echo "Hasil: " . $hasil;
    ?>
</body>
</html>