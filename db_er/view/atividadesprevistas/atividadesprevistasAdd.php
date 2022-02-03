<?php 
require_once '../../controller/controllerAtividadesPrevistas.php';
$Controller = new ControlleraTividadesPrevistas();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>


<form action="../../index.php?view=atividadesprevistas" method="POST" >
<table>
	<tr><td class="nomes_alter">idAtividadesPrevistas </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidAtividadesPrevistas" name="addidAtividadesPrevistas" onchange="confirmar_idAtividadesPrevistas()" required></td></tr>
	<tr><td class="nomes_alter">idTrabalhoSolicitado  </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidTrabalhoSolicitado" name="addidTrabalhoSolicitado" onchange="confirmar_idTrabalhoSolicitado()" required></td></tr>
	<tr><td class="nomes_alter">idProduto </td>            <td class="nomes_alter"><input class="values_alter" type="number" id="addidProduto" name="addidProduto" onchange="confirmar_idProduto()" required></td></tr>
	<tr><td class="nomes_alter">idAtividade </td>          <td class="nomes_alter"><input class="values_alter" type="number" id="addidAtividade" name="addidAtividade" onchange="confirmar_idAtividade()" required></td></tr>
	<tr><td class="nomes_alter">HorasPrevistas </td>       <td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="addHorasPrevistas" ></td></tr>
	<tr><td class="nomes_alter">DetalheAtividade  </td>    <td class="nomes_alter"><input class="values_alter" type="Text" name="addDetalheAtividade" ></td></tr>
	<tr><td class="nomes_alter">Obs </td>                  <td class="nomes_alter"><input class="values_alter" type="text" name="addObs" ></td></tr>


</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=atividadesprevistas';" value="cancelar">
</div>
</form>
</div>

<script>
function confirmar_idAtividadesPrevistas()
{
var id = document.getElementById("addidAtividadesPrevistas").value; 
var verificacao=true;
<?php foreach ($Controller->getId() as $key => $value): ?>
var php = "<?php echo $value ?>"; 
//alert(id+"-"+php);
	if (id === php)
	{
	alert(id+" ja existe");
	window.location.href='';
	}
<?php endforeach ?>
}

function confirmar_idTrabalhoSolicitado()
{
var id = document.getElementById("addidTrabalhoSolicitado").value; 
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
var id = document.getElementById("addidProduto").value; 
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
var id = document.getElementById("addidAtividade").value; 
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