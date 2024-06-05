<?php
// Carrega os dados dos imóveis
include 'data.php';

// Obtém o ID do imóvel da URL
$id = $_GET['id'];
$imovel = null;

foreach ($imoveis as $item) {
    if ($item['id'] == $id) {
        $imovel = $item;
        break;
    }
}

if (!$imovel) {
    echo "Imóvel não encontrado!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title><?php echo $imovel['titulo']; ?></title>
</head>
<body>
    <header>
        <h1>Imobiliária</h1>
    </header>
    <main>
        <div class="detalhe-imovel">
            <img src="<?php echo $imovel['imagem']; ?>" alt="Imagem do imóvel">
            <h2><?php echo $imovel['titulo']; ?></h2>
            <p><?php echo $imovel['descricao']; ?></p>
            <p>Preço: Kwz <?php echo number_format($imovel['preco'], 2, ',', '.'); ?></p>
            <p>Localização: <?php echo $imovel['localizacao']; ?></p>
        </div>
        <a href="index.php">Voltar à lista de imóveis</a>
    </main>
   
</body>
</html>
