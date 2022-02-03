<?php 
require_once '../../controller/controllerEmpresa.php';
$Controller = new ControllerEmpresa();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=empresa" method="POST" >
<table>
	<tr><td class="nomes_alter">idEmpresa   </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidEmpresa" name="addidEmpresa" onchange="confirmar()" required></td></tr>
	<tr><td class="nomes_alter">SiglaEmpresa</td><td class="nomes_alter"><input class="values_alter" type="text" name="addSiglaEmpresa"required></td></tr>
	<tr><td class="nomes_alter">NomeEmpresa </td><td class="nomes_alter"><input class="values_alter" type="text" name="addNomeEmpresa" required></td></tr>
</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=empresa';" value="cancelar">
</div>
</form>
</div>
<script>
function confirmar()
{
var id = document.getElementById("addidEmpresa").value; 
var verificacao=true;
<?php foreach ($Controller->getId() as $key => $value): ?>
var php = "<?php echo $value ?>"; 
//alert(id+" "+php);
	if (id === php)
	{
	alert(id+" ja existe");
	window.location.href='';
	}
<?php endforeach ?>
}
</script>