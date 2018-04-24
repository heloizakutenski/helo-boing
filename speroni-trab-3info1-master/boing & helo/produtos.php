<html>
<link rel="stylesheet" type="text/css" href="stilus/estilo.css">
<?php if(isset($_GET['produto'])): ?>
    <h1><?= $_GET['produto'] ?></h1>
<?php elseif(isset($_POST['busca'])): ?>
    <h1>O objeto "<?= $_POST['busca'] ?>" nao foi encontrado</h1>
<?php else:
    header('Location: index.php');
endif;
?>
<?php include 'perfil.php' ?>
<?php include 'stilus/rodape.php' ?>

</html>