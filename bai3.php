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
        <input type="radio" name="cong" class="radio1"> Cong<br>
        <input type="radio" name="tru" class="radio1"> Tru<br>
        <input type="radio" name="nhan" class="radio1"> Nhan<br>
        <input type="radio" name="chia" class="radio1"> Chia<br>
        <button type="submit">Tinh</button>
    </form>

    <script>
        const radioElement = document.querySelectorAll(".radio1");
        for (let i = 0; i < radioElement.length; i++) {
            radioElement[i].onclick = () => {
                for (let j = 0; j < radioElement.length; j++) {
                    radioElement[j].checked = false;

                };
                radioElement[i].checked = true;
            };
        }
    </script>

    <?php
    $numb1 = (float) $_POST["numb1"];
    $numb2 = (float) $_POST["numb2"];
    if (isset($_POST["cong"])) {
        echo "<h1> " . $numb1 + $numb2 . "</h1>";
    } else if (isset($_POST["tru"])) {
        echo "<h1>" . $numb1 - $numb2 . "</h1>";
    } else if (isset($_POST["nhan"])) {
        echo "<h1>" . $numb1 * $numb2 . "</h1>";
    } else if (isset($_POST["chia"])) {
        echo "<h1>" . $numb1 / $numb2 . "</h1>";
    }
    ?>
</body>

</html>