<?php 

require_once '../../model/modelProduto.php';
$Model = new ModelProduto();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=produto" method="POST">
<table>
	<td class="nomes_alter">idProduto  </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidProduto" value="<?php echo $valores[0]->idProduto ?>"  readonly></td><tr>
	<td class="nomes_alter">AbrProduto </td><td class="nomes_alter"><input class="values_alter" type="text" name="editAbrProduto" value="<?php echo $valores[0]->AbrProduto ?>"></td><tr>
	<td class="nomes_alter">Descricao  </td><td class="nomes_alter"><input class="values_alter" type="text" name="editDescricao" value="<?php echo $valores[0]->Descricao ?>"></td><tr>
</table>	
<div>
<input class="button_alter" type="submit" value="salvar">
</div>
</form>