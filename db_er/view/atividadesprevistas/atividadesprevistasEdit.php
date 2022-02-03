<?php 
require_once '../../model/modelAtividadesPrevistas.php';
$Model = new ModelAtividadesPrevistas();
require_once '../../controller/controllerAtividadesPrevistas.php';
$Controller = new ControllerAtividadesPrevistas();
?>

<link rel="stylesheet" type="text/css" href="../../style.css">

<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=atividadesprevistas" method="POST">
<table>
	<td class="nomes_alter">idAtividadesPrevistas  </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidAtividadesPrevistas" value="<?php echo $valores[0]->idAtividadesPrevistas ?>"  readonly></td><tr>
	<td class="nomes_alter">idTrabalhoSolicitado   </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidTrabalhoSolicitado" name="editidTrabalhoSolicitado" onchange="confirmar_idTrabalhoSolicitado()" value="<?php echo $valores[0]->idTrabalhoSolicitado ?>"></td><tr>
	<td class="nomes_alter">idProduto              </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidProduto" name="editidProduto" onchange="confirmar_idProduto()" value="<?php echo $valores[0]->idProduto ?>"></td><tr>
	<td class="nomes_alter">idAtividade            </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidAtividade" name="editidAtividade" onchange="confirmar_idAtividade()" value="<?php echo $valores[0]->idAtividade ?>"></td><tr>
	<td class="nomes_alter">HorasPrevistas         </td><td class="nomes_alter"><input class="values_alter" type="text" name="editHorasPrevistas" value="<?php echo $valores[0]->HorasPrevistas ?>"></td><tr>
	<td class="nomes_alter">DetalheAtividade       </td><td class="nomes_alter"><input class="values_alter" type="text" name="editDetalheAtividade" value="<?php echo $valores[0]->DetalheAtividade ?>"></td><tr>
	<td class="nomes_alter">Obs                    </td><td class="nomes_alter"><input class="values_alter" type="text" name="editObs" value="<?php echo $valores[0]->Obs ?>"></td><tr>
</table>

<div>
<input class="button_alter" type="submit" value="salvar">
</div>

</form>



<script>
function confirmar_idTrabalhoSolicitado()
{
var id = document.getElementById("editidTrabalhoSolicitado").value; 
var verificacao=true;
<?php foreach ($Controller->getIdTrabalhoSolicitado() as $key => $value): ?>
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

function confirmar_idProduto()
{
var id = document.getElementById("editidProduto").value; 
var verificacao=true;
<?php foreach ($Controller->getIdProduto() as $key => $value): ?>
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

function confirmar_idAtividade()
{
var id = document.getElementById("editidAtividade").value; 
var verificacao=true;
<?php foreach ($Controller->getIdAtividade() as $key => $value): ?>
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