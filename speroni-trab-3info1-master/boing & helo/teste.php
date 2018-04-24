<link rel="stylesheet" type="text/css" href="stilus/estilo.css">
<?php


include "model/Conexao.php";
include "model/CategoriaCrud.php";
include "model/ProdutoCrud.php";

 $c = new CategoriaCrud();
 getCategorias();




  ?>