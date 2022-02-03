<div class="center">
<?php 

require_once 'model/modelAtividade.php';
$Model = new ModelAtividade();
require_once 'controller/controllerAtividade.php';
$Controller = new ControllerAtividade();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidAtividade']) && isset($_POST['addAbrAtividade']) && isset($_POST['addDescricao']) ) {
		$Controller->adicionar($_POST['addidAtividade'],$_POST['addAbrAtividade'],$_POST['addDescricao']);
	}
?>

<?php 
	if (isset($_POST['editidAtividade']) && isset($_POST['editAbrAtividade']) && isset($_POST['editDescricao']) ) {
		$Controller->editar($_POST['editidAtividade'],$_POST['editAbrAtividade'],$_POST['editDescricao']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>

<table border="1" >
<tr><td>idAtividade</td><td>AbrAtividade </td><td>Descricao</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idAtividade; ?></td>
	<td><?php echo $value1->AbrAtividade; ?></td>
	<td><?php echo $value1->Descricao; ?></td>
	<td><button onclick="window.location.href='?view=atividade&delete=<?php echo($value1->idAtividade)?>';">del</button></td>
	<td><button onclick="window.location.href='view/atividade/atividadeEdit.php?editId=<?php echo($value1->idAtividade)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idAtividade </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idAtividade; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=atividade&delete=<?php echo($value1->idAtividade)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/atividade/atividadeEdit.php?editId=<?php echo($value1->idAtividade)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a>AbrAtividade</a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->AbrAtividade; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a>Descricao             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Descricao; ?>        </a>     </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>



<footer >
	<button class="button_add" onclick="window.location.href='view/atividade/atividadeAdd.php'">adicionar</button>
</footer>