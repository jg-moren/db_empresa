<?php 
require_once '../../model/modelTrabalhoRealizado.php';
$Model = new ModelTrabalhoRealizado();
require_once '../../controller/controllerTrabalhoRealizado.php';
$Controller = new ControllerTrabalhoRealizado();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=trabalhorealizado" method="POST">
<table>
	<td class="nomes_alter">idTrabalhoRealizado   </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidTrabalhoRealizado" value="<?php echo $valores[0]->idTrabalhoRealizado ?>"  readonly></td><tr>
	<td class="nomes_alter">idAtividadesPrevistas </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidAtividadesPrevistas" name="editidAtividadesPrevistas"  onchange="confirmar_idAtividadesPrevistas()"  value="<?php echo $valores[0]->idAtividadesPrevistas ?>"></td><tr>
	<td class="nomes_alter">idPessoa              </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidPessoa" name="editidPessoa" onchange="confirmar_idPessoa()" value="<?php echo $valores[0]->idPessoa	 ?>"></td><tr>
	<td class="nomes_alter">DtTrabRealizado       </td><td class="nomes_alter"><input class="values_alter" type="date"  name="editDtTrabRealizado"value="<?php echo $valores[0]->DtTrabRealizado ?>"></td><tr>
	<td class="nomes_alter">Detalhe               </td><td class="nomes_alter"><input class="values_alter" type="text" name="editDetalhe" value="<?php echo $valores[0]->Detalhe ?>"></td><tr>
	<td class="nomes_alter">HorasAplicadas        </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="editHorasAplicadas" value="<?php echo $valores[0]->HorasAplicadas ?>"></td><tr>

</table>	
<div>
<input class="button_alter" type="submit" value="salvar">
</div>
</form>


<script>

function confirmar_idAtividadesPrevistas()
{
var id = document.getElementById("editidAtividadesPrevistas").value; 
var verificacao=true;
<?php foreach ($Controller->getIdAtividadesPrevistas() as $key => $value): ?>
var php = "<?php echo $value ?>"; 
//alert(id+"-"+php);
	if  (id === php)
	{
		verificacao = false;
	}


<?php endforeach ?>
if (verificacao) {
	alert(id+" nao existe");
	window.location.href='';
}
}

function confirmar_idPessoa()
{
var id = document.getElementById("editidPessoa").value; 
var verificacao=true;
<?php foreach ($Controller->getIdPessoa() as $key => $value): ?>
var php = "<?php echo $value ?>"; 
//alert(id+"-"+php);
	if  (id === php)
	{
		verificacao = false;
	}


<?php endforeach ?>
if (verificacao) {
	alert(id+" nao existe");
	window.location.href='';
}
}


</script>