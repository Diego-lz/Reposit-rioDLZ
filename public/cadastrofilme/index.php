<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body{
            text-align: center;
        }
        input,label{display: block;
            margin: 0 auto;
            width: 200px;}
            label{margin-bottom: -10px}
            p{text-align: center;}
            img{display: block;
            margin: 0 auto}
      
    </style>

</head>
<body>



<?php include 'cabecalho.php'; ?>

<br>

<form action="index.php" method="post">
    <label for="filme">Nome do Filme:</label>  <br> <input type="text" name="nome" placeholder="Digite o nome do filme"> 
    <br>

    <label for="Genero" >Genêro:</label>   <br>
    <select name="genero" id="Genero">
        <option value="Ação">Ação</option>
        <option value="Comédia">Comédia</option>
        <option value="Drama">Drama</option>
        <option value="Terror">Terror</option>
        <option value="Romance">Romance</option>
        <option value="Aventura">Aventura</option>
        <option value="Suspense">Suspense</option>
        <option value="Documentario">Documentário</option>
        <option value="Animacao">Animação</option>
        <option value="Ficcao">Ficção Científica</option>
        <option value="Fantasia">Fantasia</option>
    </select>

    <br><br>

    <button type="submit">Enviar</button>
</form>

<br>

<?php $nome = $_POST['nome'] ?? '';
      $genero = $_POST['genero'] ?? '';
?>

<p>Filme cadastrado: <?php echo $nome; ?> (<?php echo $genero; ?>) </p>


<?php if ($genero == 'Terror') {
    echo "<p style='color: red;'>Atenção! Filme de Terror cadastrado.</p>";
} ?>
<?php if ($genero == 'Comédia') {
    echo "<p style='color: green;'>Atenção! Filme de Comédia cadastrado.</p>";
} ?>


</body>
</html>