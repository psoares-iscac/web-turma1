<?php
$ficheiro = __DIR__ . "/dados/relatos.json";

if(!file_exists($ficheiro)){
    die("Ficheiro não encontrado");
}


$conteudo = file_get_contents($ficheiro);
try{
    $dados = json_decode($conteudo, true);
}catch(JsonException $e){
    die('JSON inválido: ' . $e->getMessage());
}

//print_r($dados);

?>
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
require __DIR__ . "/inc/cabecalho.php";
?>

<main class="mx-auto max-w-6xl px-4 py-8 flex flex-col gap-6">
    
    <!-- lista de relatos -->
    <ul class="grid gap-4 md:grid-cols-2">
        
        <?php 
        foreach($dados as $relato):
        ?>

        <li class="rounded-lg border border-slate-200 bg-white p-4 flex flex-col gap-2">
            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
            <a href="local.html" class="font-semibold hover:underline"><?= $relato['local'] ?></a>
            <span class="text-slate-500"><?= $relato['data'] ?> · <?= $relato['autor'] ?></span>
            </div>
            <p><?= $relato['texto'] ?></p>
            <div class="flex flex-wrap items-center justify-between gap-2 text-sm">
            <span class="text-slate-500">Nota 
                <span aria-label="2 em 5">
                    <?php 
                        $n = $relato['nota'];
                        echo str_repeat("★", $n);
                        echo str_repeat("☆", 5 - $n);
                    ?>
                </span>
                </span>
                <?php  
                if (true) $classes = " bg-red-100 text-red-700 ";
                
                ?>
            <span class="<?= $classes ?> font-['IBM_Plex_Mono',monospace] text-xs rounded px-2 py-0.5">vento 38 obs. / 34 prev.</span>
            </div>
        </li>

        <?php endforeach ?>

    </ul>


</main>
    
★☆☆☆
<?php include __DIR__ . "/inc/rodape.php" ?>
</body>
</html>