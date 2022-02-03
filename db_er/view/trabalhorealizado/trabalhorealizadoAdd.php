<?php 
require_once '../../controller/controllerTrabalhoRealizado.php';
$Controller = new ControllerTrabalhoRealizado();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">


<form action="../../index.php?view=trabalhorealizado" method="POST" >
<table>
	<tr><td class="nomes_alter">idTrabalhoRealizado   </td><td class="nomes_alter"><input class="values_alter" type="text" id="addidTrabalhoRealizado" name="addidTrabalhoRealizado" onchange="confirmar_idTrabalhoRealizado()" required></td></tr>
	<tr><td class="nomes_alter">idAtividadesPrevistas </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidAtividadesPrevistas" name="addidAtividadesPrevistas" onchange="confirmar_idAtividadesPrevistas()" required></td></tr>
	<tr><td class="nomes_alter">idPessoa              </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidPessoa" name="addidPessoa" onchange="confirmar_idPessoa()" required></td></tr>
	<tr><td class="nomes_alter">DtTrabRealizado       </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtTrabRealizado" required></td></tr>
	<tr><td class="nomes_alter">Detalhe               </td><td class="nomes_alter"><input class="values_alter" type="text" name="addDetalhe"required ></td></tr>
	<tr><td class="nomes_alter">HorasAplicadas        </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="addHorasAplicadas"required ></td></tr>

</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=trabalhorealizado';" value="cancelar">
</div>
</form>
</div>

<script>
function confirmar_idTrabalhoRealizado()
{
var id = document.getElementById("addidTrabalhoRealizado").value; 
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

function confirmar_idAtividadesPrevistas()
{
var id = document.getElementById("addidAtividadesPrevistas").value; 
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
var id = document.getElementById("addidPessoa").value; 
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