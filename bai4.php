<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>nhap a:</label>
        <input type="number" name="numb1"> <br>
        <label>nhap b:</label>
        <input type="number" name="numb2"> <br>
        <label>Lua chon phep tinh:</label> <br>
        <select name="pheptoan" id="">
            <option value="+">cong</option>
            <option value="-">tru</option>
            <option value="*">nhan</option>
            <option value="/">chia</option>
        </select> <br>
        <button type="submit">Tinh</button>
    </form>

    <?php
    $numb1 = (float) $_POST["numb1"];
    $numb2 = (float) $_POST["numb2"];
    $op =  $_POST["pheptoan"];
    switch ($op) {
        case '+':
            echo "<h1> " . $numb1 + $numb2 . "</h1>";
            break;
        case '-':
            echo "<h1> " . $numb1 - $numb2 . "</h1>";
            break;
        case '*':
            echo "<h1> " . $numb1 * $numb2 . "</h1>";
            break;
        case '/':
            echo "<h1> " . $numb1 / $numb2 . "</h1>";
            break;
        default:
            # code...
            break;
    }
    ?>

</body>

</html>