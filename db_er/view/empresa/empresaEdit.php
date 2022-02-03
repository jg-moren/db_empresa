<?php 

require_once '../../model/modelEmpresa.php';
$Model = new ModelEmpresa();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=empresa" method="POST">
<table>
	<td class="nomes_alter">idEmpresa :   </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidEmpresa" value="<?php echo $valores[0]->idEmpresa ?>"  readonly></td><tr>
	<td class="nomes_alter">SiglaEmpresa :</td><td class="nomes_alter"><input class="values_alter" type="text" name="editSiglaEmpresa" value="<?php echo $valores[0]->SiglaEmpresa ?>"></td><tr>
	<td class="nomes_alter">NomeEmpresa : </td><td class="nomes_alter"><input class="values_alter" type="text" name="editNomeEmpresa" value="<?php echo $valores[0]->NomeEmpresa ?>"></td><tr>
</table>	
<div>
<input class="button_alter" type="submit" value="salvar">
</div>
</form>