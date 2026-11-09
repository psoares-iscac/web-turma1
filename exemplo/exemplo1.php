<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
</head>
<body>
<?php 
    $titulo = "Título da página";
?>


<div class="mt-8 mx-auto max-w4xl">
    <?php 
        echo "Hello world!!!";
    ?>
</div>
    


<div class="mx-auto max-w4xl text-4xl text-center text-emerald-900">
    <?= $titulo ?>
</div>

    
</body>
</html>