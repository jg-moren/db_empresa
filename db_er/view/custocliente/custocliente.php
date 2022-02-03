<div class="center">
<?php 

require_once 'model/modelCustoCliente.php';
$Model = new ModelCustoCliente();
require_once 'controller/controllerCustoCliente.php';
$Controller = new ControllerCustoCliente();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidCustoCliente']) && isset($_POST['addValorHH']) && isset($_POST['addidEmpresa']) && isset($_POST['addidProduto']) && isset($_POST['addDtLimite']) ) {
		$Controller->adicionar($_POST['addidCustoCliente'],$_POST['addValorHH'],$_POST['addidEmpresa'],$_POST['addidProduto'],$_POST['addDtLimite']);
	}
?>

<?php 
	if (isset($_POST['editidCustoCliente']) && isset($_POST['editValorHH']) && isset($_POST['editidEmpresa']) && isset($_POST['editidProduto']) && isset($_POST['editDtLimite']) ) {
		$Controller->editar($_POST['editidCustoCliente'],$_POST['editValorHH'],$_POST['editidEmpresa'],$_POST['editidProduto'],$_POST['editDtLimite']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>


<table border="1" >
<tr><td>idCustoCliente</td><td>ValorHH </td><td>idEmpresa</td><td>idProduto</td><td>DtLimite</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idCustoCliente; ?></td>
	<td><?php echo $value1->ValorHH; ?></td>
	<td><?php echo $value1->idEmpresa; ?></td>
	<td><?php echo $value1->idProduto; ?></td>
	<td><?php echo $value1->DtLimite; ?></td>
	<td><button onclick="window.location.href='?view=custocliente&delete=<?php echo($value1->idCustoCliente)?>';">del</button></td>
	<td><button onclick="window.location.href='view/custocliente/custoclienteEdit.php?editId=<?php echo($value1->idCustoCliente)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idCustoCliente </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idCustoCliente; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=custocliente&delete=<?php echo($value1->idCustoCliente)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/custocliente/custoclienteEdit.php?editId=<?php echo($value1->idCustoCliente)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">ValorHH             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->ValorHH; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">idEmpresa             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idEmpresa; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">idProduto 	          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idProduto; ?>             </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtLimite              </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtLimite; ?>          </a>   </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>



<footer >
	<button class="button_add" onclick="window.location.href='view/custocliente/custoclienteAdd.php'">adicionar</button>
</footer>