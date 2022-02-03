<div class="center">
<?php 

require_once 'model/modelAtividadesPrevistas.php';
$Model = new ModelAtividadesPrevistas();
require_once 'controller/controllerAtividadesPrevistas.php';
$Controller = new ControllerAtividadesPrevistas();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidAtividadesPrevistas']) && isset($_POST['addidTrabalhoSolicitado']) && isset($_POST['addidProduto']) && isset($_POST['addidAtividade']) && isset($_POST['addHorasPrevistas']) && isset($_POST['addDetalheAtividade']) && isset($_POST['addObs']) ) {
		$Controller->adicionar($_POST['addidAtividadesPrevistas'],$_POST['addidTrabalhoSolicitado'],$_POST['addidProduto'],$_POST['addidAtividade'],$_POST['addHorasPrevistas'],$_POST['addDetalheAtividade'],$_POST['addObs']);
	}
?>

<?php 
	if (isset($_POST['editidAtividadesPrevistas']) && isset($_POST['editidTrabalhoSolicitado']) && isset($_POST['editidProduto']) && isset($_POST['editidAtividade']) && isset($_POST['editHorasPrevistas']) && isset($_POST['editDetalheAtividade']) && isset($_POST['editObs']) ) {
		$Controller->editar($_POST['editidAtividadesPrevistas'],$_POST['editidTrabalhoSolicitado'],$_POST['editidProduto'],$_POST['editidAtividade'],$_POST['editHorasPrevistas'],$_POST['editDetalheAtividade'],$_POST['editObs']);
	}
?>

<div class="table_size"></div>


<?php  
if (isset($_GET['alpha'])) {
?>

<table border="1" >
<tr><td>idAtividadesPrevistas</td><td>idTrabalhoSolicitado </td><td>idProduto</td><td>idAtividade</td><td>HorasPrevistas</td><td>DetalheAtividade</td><td>Obs</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idAtividadesPrevistas; ?></td>
	<td><?php echo $value1->idTrabalhoSolicitado; ?></td>
	<td><?php echo $value1->idProduto; ?></td>
	<td><?php echo $value1->idAtividade; ?></td>
	<td><?php echo $value1->HorasPrevistas; ?></td>
	<td><?php echo $value1->DetalheAtividade; ?></td>
	<td><?php echo $value1->Obs; ?></td>
	<td><button onclick="window.location.href='?view=atividadesprevistas&delete=<?php echo($value1->idAtividadesPrevistas)?>';">del</button></td>
	<td><button onclick="window.location.href='view/atividadesprevistas/atividadesprevistasEdit.php?editId=<?php echo($value1->idAtividadesPrevistas)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idAtividadesPrevistas </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idAtividadesPrevistas; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=atividadesprevistas&delete=<?php echo($value1->idAtividadesPrevistas)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/atividadesprevistas/atividadesprevistasEdit.php?editId=<?php echo($value1->idAtividadesPrevistas)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">idTrabalhoSolicitado</a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idTrabalhoSolicitado; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">idProduto             </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idProduto; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">idAtividade 	          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idAtividade; ?>             </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">HorasPrevistas              </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->HorasPrevistas; ?>          </a>   </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DetalheAtividade     </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DetalheAtividade; ?>    </a>    </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Obs     </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Obs; ?>    </a>    </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>




<footer >
	<button class="button_add" onclick="window.location.href='view/atividadesprevistas/atividadesprevistasAdd.php'">adicionar</button>
</footer>