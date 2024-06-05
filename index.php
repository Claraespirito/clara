<?php
// Carrega os dados dos imóveis
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Imobiliária</title>
</head>
<body>
    <header>
        <h1>Agência Imobiliária</h1>
    </header>
    <main>
        <h2>Lista de Imóveis</h2>
        <div class="imoveis">
            <?php foreach ($imoveis as $imovel): ?>
                <div class="imovel">
                    <img src="<?php echo $imovel['imagem']; ?>" alt="Imagem do imóvel">
                    <h3><?php echo $imovel['titulo']; ?></h3>
                    <p><?php echo $imovel['descricao']; ?></p>
                    <p>Preço: Kwz <?php echo number_format($imovel['preco'], 2, ',', '.'); ?></p>
                    <a href="detalhe.php?id=<?php echo $imovel['id']; ?>">Ver mais</a>
                </div>
            <?php endforeach; ?>
        </div>
        <footer>
        <p>Contactos: 927177711/933151503.</p>
    </footer>
    </main>
   
</body>
</html>
