<?php 
require_once '../../controller/controllerCustoCliente.php';
$Controller = new ControllerCustoCliente();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>


<form action="../../index.php?view=custocliente" method="POST" >
<table>
	<tr><td class="nomes_alter" >idCustoClieente  </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidCustoCliente" name="addidCustoCliente" onchange="confirmar_idCustoClieente()" required></td></tr>
	<tr><td class="nomes_alter" >ValorHH          </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="addValorHH"></td></tr>
	<tr><td class="nomes_alter" >idEmpresa        </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidEmpresa" name="addidEmpresa" onchange="confirmar_idEmpresa()" required></td></tr>
	<tr><td class="nomes_alter" >idProduto        </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidProduto" name="addidProduto" onchange="confirmar_idProduto()" required></td></tr>
	<tr><td class="nomes_alter" >DtLimite         </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtLimite" ></td></tr>

</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=custocliente';" value="cancelar">
</div>
</form>

</div>

<script>
function confirmar_idCustoClieente()
{
var id = document.getElementById("addidCustoCliente").value; 
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

function confirmar_idEmpresa()
{
var id = document.getElementById("addidEmpresa").value; 
var verificacao=true;
<?php foreach ($Controller->getIdEmpresa() as $key => $value): ?>
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


</script>