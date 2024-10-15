<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Aplikasi Kalkulator Sederhana</h1>
    <form name="kalkulator" action="" method="POST">
        <label for="input1">Input 1 : </label>
        <input type="text" id="input1" name="input1" value="<?php echo isset($_POST['input1']) ? ($_POST['input1']) : ''; ?>" ><br><br>

        <label for="input2">Input 2 : </label>
        <input type="text" id="input2" name="input2" value="<?php echo isset($_POST['input2']) ? ($_POST['input2']) : ''; ?>" ><br><br>

            <button type="submit" name="operator" value="+">+</button>
            <button type="submit" name="operator" value="-">-</button>
            <button type="submit" name="operator" value="*">*</button>
            <button type="submit" name="operator" value="/">/</button><br><br>

        <label>Hasil: </label>
        <span>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $input1 = $_POST['input1'];
                    $input2 = $_POST['input2'];
                    $operator = $_POST['operator'];
            
                    if (is_numeric($input1) && is_numeric($input2)) {
                        if ($operator == '+') {
                            $hasil = $input1 + $input2;
                        } else if ($operator == '-') {
                            $hasil = $input1 - $input2;
                        } else if ($operator == '*') {
                            $hasil = $input1 * $input2;
                        } else if ($operator == '/') {
                            if ($input2 == 0) {
                                echo "Tidak bisa dibagi dengan nol";
                            } else {
                                $hasil = $input1 / $input2;
                            }
                        }
                        echo $hasil;
                    }
                }
            ?>
        </span>
    </form>
</body>
</html>