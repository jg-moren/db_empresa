<?php 
require_once '../../controller/controllerEventos.php';
$Controller = new ControllerEventos();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>


<form action="../../index.php?view=eventos" method="POST" >
<table>
	<tr><td class="nomes_alter">idEvento             </td><td class="nomes_alter"><input class="values_alter" type="text" id="addidEvento" name="addidEvento" onchange="confirmar_idEvento()" required></td></tr>
	<tr><td class="nomes_alter">idTrabalhoSolicitado  </td><td class="nomes_alter"><input class="values_alter" type="number" name="addidTrabalhoSolicitado" id="addidTrabalhoSolicitado" onchange="confirmar_idTrabalhoSolicitado()" required></td></tr>
	<tr><td class="nomes_alter">DataEvento            </td><td class="nomes_alter"><input class="values_alter" type="text"  name="addDataEvento"  required></td></tr>
	<tr><td class="nomes_alter">Anotacoes             </td><td class="nomes_alter"><input class="values_alter" type="text"  name="addAnotacoes"  required></td></tr>
   
</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=eventos';" value="cancelar">
</div>
</form>
</div>

<script>
function confirmar_idEvento()
{
var id = document.getElementById("addidEvento").value; 
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


</script>