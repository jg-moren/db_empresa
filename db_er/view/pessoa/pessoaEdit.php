<?php 
require_once '../../model/modelPessoa.php';
$Model = new ModelPessoa();
require_once '../../controller/controllerPessoa.php';
$Controller = new ControllerPessoa();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=pessoa" method="POST">
<table>
	<td class="nomes_alter">idPessoa   </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidPessoa" value="<?php echo $valores[0]->idPessoa ?>"  readonly></td><tr>
	<td class="nomes_alter">idEmpresa  </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidEmpresa" name="editidEmpresa" onchange="confirmar_idEmpresa()" value="<?php echo $valores[0]->idEmpresa ?>"></td><tr>
	<td class="nomes_alter">Apelido    </td><td class="nomes_alter"><input class="values_alter" type="text" name="editApelido" value="<?php echo $valores[0]->Apelido ?>"></td><tr>
	<td class="nomes_alter">Nome       </td><td class="nomes_alter"><input class="values_alter" type="text" name="editNome" value="<?php echo $valores[0]->Nome ?>"></td><tr>
	<td class="nomes_alter">Email      </td><td class="nomes_alter"><input class="values_alter" type="email" name="editEmail" value="<?php echo $valores[0]->email ?>"></td><tr>
	<td class="nomes_alter">Telefone   </td><td class="nomes_alter"><input class="values_alter" type="text" name="editTelefone" value="<?php echo $valores[0]->Telefone ?>"></td><tr>
</table>	
<div>
<input class="button_alter" type="submit" value="salvar">
</div>
</form>


<script>

function confirmar_idEmpresa()
{
var id = document.getElementById("editidEmpresa").value; 
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