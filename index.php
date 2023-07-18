<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inovvo</title>
</head>
<body>
<h1>Identificador de numeros primos</h1>
</body>
<section>
        <form method="post" action="">
            <label for="valor">Insira um número:</label>
            <input type="numeric" name="number" >
            <input type="submit" value="Verificar">
        </form>
<?php
 
 function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= $number/2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        if (is_numeric($number) && intval($number) == $number) {
            if (isPrime($number)) {
                echo "$number é um número primo.";
            } else {
                echo "$number não é um número primo.";
            }
        }
    }
}
 ?>
</section><br><br><br><br><br><br><br><br>

<footer>
<p class="p">
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="index.html" target="_blank"><span style="color: #e76565;">Rafael Apolinario</span></a>
  </p>
</footer>
</html>

