<div class="center">
<?php 

require_once 'model/modelProduto.php';
$Model = new ModelProduto();
require_once 'controller/controllerProduto.php';
$Controller = new ControllerProduto();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidProduto']) && isset($_POST['addAbrProduto']) && isset($_POST['addDescricao']) ) {
		$Controller->adicionar($_POST['addidProduto'],$_POST['addAbrProduto'],$_POST['addDescricao']);
	}
?>

<?php 
	if (isset($_POST['editidProduto']) && isset($_POST['editAbrProduto']) && isset($_POST['editDescricao']) ) {
		$Controller->editar($_POST['editidProduto'],$_POST['editAbrProduto'],$_POST['editDescricao']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>

<table border="1" >
<tr><td>idProduto</td><td>AbrProduto </td><td>Descricao</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idProduto; ?></td>
	<td><?php echo $value1->AbrProduto; ?></td>
	<td><?php echo $value1->Descricao; ?></td>
	<td><button onclick="window.location.href='?view=produto&delete=<?php echo($value1->idProduto)?>';">del</button></td>
	<td><button onclick="window.location.href='view/produto/produtoEdit.php?editId=<?php echo($value1->idProduto)?>';">edit</button></td>
</tr>
<?php } ?>
</table>

<?php  
}else{
?>

<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<div class="table">
<table class="cabecalho_table" >
	<td class="cabecalho_valores"><a>idProduto </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idProduto; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=produto&delete=<?php echo($value1->idProduto)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/produto/produtoEdit.php?editId=<?php echo($value1->idProduto)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">idProduto</a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idProduto; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">AbrProduto             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->AbrProduto; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Descricao 	          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Descricao; ?>             </a>      </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>


<footer >
	<button class="button_add" onclick="window.location.href='view/produto/produtoAdd.php'">adicionar</button>
</footer>