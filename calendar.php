<!DOCTYPE html>
<html>
<head>
    <title>16 Box Grid</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(7, 100px);
            grid-gap: 30px;
        }
        .box {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #000;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    for ($i = 1; $i <= 30; $i++) {
        echo "<div class='box'>Day $i</div>";
    }
    ?>
</div>

</body>
</html>
