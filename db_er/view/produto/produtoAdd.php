<?php 
require_once '../../controller/controllerProduto.php';
$Controller = new ControllerProduto();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=produto" method="POST" >
<table>
	<tr><td class="nomes_alter">idProduto  </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidProduto" name="addidProduto" onchange="confirmar()" required></td></tr>
	<tr><td class="nomes_alter">AbrProduto </td><td class="nomes_alter"><input class="values_alter" type="text" name="addAbrProduto"required></td></tr>
	<tr><td class="nomes_alter">Descricao  </td><td class="nomes_alter"><input class="values_alter" type="text" name="addDescricao" required></td></tr>
</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=produto';" value="cancelar">
</div>
</form>
</div>
<script>
function confirmar()
{
var id = document.getElementById("addidProduto").value; 
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