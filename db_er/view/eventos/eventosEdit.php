<?php 
require_once '../../model/modelEventos.php';
$Model = new ModelEventos();
require_once '../../controller/controllerEventos.php';
$Controller = new ControllerEventos();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=eventos" method="POST">
<table>
	<td class="nomes_alter">idEvento             </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidEvento" value="<?php echo $valores[0]->idEvento ?>"  readonly></td><tr>
	<td class="nomes_alter">idTrabalhoSolicitado </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidTrabalhoSolicitado" name="editidTrabalhoSolicitado" onchange="confirmar_idTrabalhoSolicitado()" value="<?php echo $valores[0]->idTrabalhoSolicitado ?>"></td><tr>
	<td class="nomes_alter">DataEvento           </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDataEvento" value="<?php echo $valores[0]->DataEvento ?>"></td><tr>
	<td class="nomes_alter">Anotacoes            </td><td class="nomes_alter"><input class="values_alter" type="text" name="editAnotacoes" value="<?php echo $valores[0]->Anotacoes ?>"></td><tr>
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



</script>