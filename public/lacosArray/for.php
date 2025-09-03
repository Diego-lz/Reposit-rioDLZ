<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action="for.php" method="post">
        <label for="number">Digite um número:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Calcular</button>
    </form>
    <br>

    <?php
    $number = $_POST['number'] ?? '';
    echo "Tabuada do $number:<br>";

    for($i = 1; $i <= 10; $i++){
    echo " $number x $i = " . ($number * $i) . "<br>";
} ?>
    

</body>
</html>


