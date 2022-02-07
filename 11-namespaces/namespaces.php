<?php
require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as classProduto;
use models\Produto as modelProduto;

$produto = new classProduto();
$produto2 = new modelProduto();

$produto->mostrarDetalhes();
echo "<br>";
$produto2->mostrarDetalhes();