<div class="center">
<?php 

require_once 'model/modelTrabalhoRealizado.php';
$Model = new ModelTrabalhoRealizado();
require_once 'controller/controllerTrabalhoRealizado.php';
$Controller = new ControllerTrabalhoRealizado();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidTrabalhoRealizado']) && isset($_POST['addidAtividadesPrevistas']) && isset($_POST['addidPessoa']) && isset($_POST['addDtTrabRealizado']) && isset($_POST['addDetalhe']) && isset($_POST['addHorasAplicadas']) ) {
		$Controller->adicionar($_POST['addidTrabalhoRealizado'],$_POST['addidAtividadesPrevistas'],$_POST['addidPessoa'],$_POST['addDtTrabRealizado'],$_POST['addDetalhe'],$_POST['addHorasAplicadas']);
	}
?>

<?php 
	if (isset($_POST['editidTrabalhoRealizado']) && isset($_POST['editidAtividadesPrevistas']) && isset($_POST['editidPessoa']) && isset($_POST['editDtTrabRealizado']) && isset($_POST['editDetalhe']) && isset($_POST['editHorasAplicadas']) ) {
		$Controller->editar($_POST['editidTrabalhoRealizado'],$_POST['editidAtividadesPrevistas'],$_POST['editidPessoa'],$_POST['editDtTrabRealizado'],$_POST['editDetalhe'],$_POST['editHorasAplicadas']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>


<table border="1" >
<tr><td>idTrabalhoRealizado</td><td>idAtividadesPrevistas</td><td>idPessoa</td><td>DtTrabRealizado</td><td>Detalhe</td><td>HorasAplicadas</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idTrabalhoRealizado; ?></td>
	<td><?php echo $value1->idAtividadesPrevistas; ?></td>
	<td><?php echo $value1->idPessoa; ?></td>
	<td><?php echo $value1->DtTrabRealizado; ?></td>
	<td><?php echo $value1->Detalhe; ?></td>
	<td><?php echo $value1->HorasAplicadas; ?></td>
	<td><button onclick="window.location.href='?view=trabalhorealizado&delete=<?php echo($value1->idTrabalhoRealizado)?>';">del</button></td>
	<td><button onclick="window.location.href='view/trabalhorealizado/trabalhorealizadoEdit.php?editId=<?php echo($value1->idTrabalhoRealizado)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idTrabalhoRealizado </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idTrabalhoRealizado; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=trabalhorealizado&delete=<?php echo($value1->idTrabalhoRealizado)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/trabalhorealizado/trabalhorealizadoEdit.php?editId=<?php echo($value1->idTrabalhoRealizado)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">idAtividadesPrevistas</a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idAtividadesPrevistas; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">idPessoa             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idPessoa; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtTrabRealizado 	          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtTrabRealizado; ?>             </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Detalhe              </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Detalhe; ?>          </a>   </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">HorasAplicadas     </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->HorasAplicadas; ?>    </a>    </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>



<footer >
	<button class="button_add" onclick="window.location.href='view/trabalhorealizado/trabalhorealizadoAdd.php'">adicionar</button>
</footer>