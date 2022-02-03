<div class="center">
<?php 

require_once 'model/modelEmpresa.php';
$Model = new ModelEmpresa();
require_once 'controller/controllerEmpresa.php';
$Controller = new ControllerEmpresa();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidEmpresa']) && isset($_POST['addSiglaEmpresa']) && isset($_POST['addNomeEmpresa']) ) {
		$Controller->adicionar($_POST['addidEmpresa'],$_POST['addSiglaEmpresa'],$_POST['addNomeEmpresa']);
	}
?>

<?php 
	if (isset($_POST['editidEmpresa']) && isset($_POST['editSiglaEmpresa']) && isset($_POST['editNomeEmpresa']) ) {
		$Controller->editar($_POST['editidEmpresa'],$_POST['editSiglaEmpresa'],$_POST['editNomeEmpresa']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>

<table border="1" >
<tr><td>idEmpresa</td><td>SiglaEmpresa </td><td>NomeEmpresa</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idEmpresa; ?></td>
	<td><?php echo $value1->SiglaEmpresa; ?></td>
	<td><?php echo $value1->NomeEmpresa; ?></td>
	<td><button onclick="window.location.href='?view=empresa&delete=<?php echo($value1->idEmpresa)?>';">del</button></td>
	<td><button onclick="window.location.href='view/empresa/empresaEdit.php?editId=<?php echo($value1->idEmpresa)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idEmpresa </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idEmpresa; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=empresa&delete=<?php echo($value1->idEmpresa)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/empresa/empresaEdit.php?editId=<?php echo($value1->idEmpresa)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">SiglaEmpresa            </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->SiglaEmpresa; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">NomeEmpresa             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->NomeEmpresa; ?>        </a>     </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>


<footer >
	<button class="button_add"  onclick="window.location.href='view/empresa/empresaAdd.php'">adicionar</button>
</footer>