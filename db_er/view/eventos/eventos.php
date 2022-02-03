<div class="center">
<?php 

require_once 'model/modelEventos.php';
$Model = new ModelEventos();
require_once 'controller/controllerEventos.php';
$Controller = new ControllerEventos();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidEvento']) && isset($_POST['addidTrabalhoSolicitado']) && isset($_POST['addDataEvento']) && isset($_POST['addAnotacoes'])  ) {
		$Controller->adicionar($_POST['addidEvento'],$_POST['addidTrabalhoSolicitado'],$_POST['addDataEvento'],$_POST['addAnotacoes']);
	}
?>

<?php 
	if (isset($_POST['editidEvento']) && isset($_POST['editidTrabalhoSolicitado']) && isset($_POST['editDataEvento']) && isset($_POST['editAnotacoes'])  ) {
		$Controller->editar($_POST['editidEvento'],$_POST['editidTrabalhoSolicitado'],$_POST['editDataEvento'],$_POST['editAnotacoes']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>

<table border="1" >
<tr><td>idEvento</td><td>idTrabalhoSolicitado </td><td>DataEvento</td><td>Anotacoes</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idEvento; ?></td>
	<td><?php echo $value1->idTrabalhoSolicitado; ?></td>
	<td><?php echo $value1->DataEvento; ?></td>
	<td><?php echo $value1->Anotacoes; ?></td>
	<td><button onclick="window.location.href='?view=eventos&delete=<?php echo($value1->idEvento)?>';">del</button></td>
	<td><button onclick="window.location.href='view/eventos/eventosEdit.php?editId=<?php echo($value1->idEvento)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idEvento </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idEvento; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=eventos&delete=<?php echo($value1->idEvento)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/eventos/eventosEdit.php?editId=<?php echo($value1->idEvento)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">idTrabalhoSolicitado</a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idTrabalhoSolicitado; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DataEvento             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DataEvento; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Anotacoes 	          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Anotacoes; ?>             </a>      </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>


<footer >
	<button class="button_add" onclick="window.location.href='view/eventos/eventosAdd.php'">adicionar</button>
</footer>