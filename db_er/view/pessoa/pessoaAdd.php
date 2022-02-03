<?php 
require_once '../../controller/controllerPessoa.php';
$Controller = new ControllerPessoa();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>


<form action="../../index.php?view=pessoa" method="POST" >
<table>
	<tr><td class="nomes_alter">idPessoa : </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidPessoa" name="addidPessoa" onchange="confirmar_idPessoa()" required></td></tr>
	<tr><td class="nomes_alter">idEmpresa :</td><td class="nomes_alter"><input class="values_alter" type="number" id="addidEmpresa" name="addidEmpresa" onchange="confirmar_idEmpresa()" required></td></tr>
	<tr><td class="nomes_alter">Apelido :  </td><td class="nomes_alter"><input class="values_alter" type="text" name="addApelido"></td></tr>
	<tr><td class="nomes_alter">Nome :     </td><td class="nomes_alter"><input class="values_alter" type="text" name="addNome" ></td></tr>
	<tr><td class="nomes_alter">email :    </td><td class="nomes_alter"><input class="values_alter" type="email" name="addEmail" ></td></tr>
	<tr><td class="nomes_alter">Telefone : </td><td class="nomes_alter"><input class="values_alter" type="text" name="addTelefone" ></td></tr>


</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=pessoa';" value="cancelar">
</div>
</form>
</div>

<script>
function confirmar_idPessoa()
{
var id = document.getElementById("addidPessoa").value; 
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




</script>