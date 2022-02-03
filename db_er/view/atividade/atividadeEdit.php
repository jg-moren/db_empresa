<?php 

require_once '../../model/modelAtividade.php';
$Model = new ModelAtividade();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">

<div class="sized_box"></div>
<form action="../../index.php?view=atividade" method="POST">
<table>
	<td class="nomes_alter">idAtividade  </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidAtividade" value="<?php echo $valores[0]->idAtividade ?>"  readonly></td><tr>
	<td class="nomes_alter">AbrAtividade </td><td class="nomes_alter"><input class="values_alter" type="text" name="editAbrAtividade" value="<?php echo $valores[0]->AbrAtividade ?>"></td><tr>
	<td class="nomes_alter">Descricao    </td><td class="nomes_alter"><input class="values_alter" type="text" name="editDescricao" value="<?php echo $valores[0]->Descricao ?>"></td><tr>
</table>	

<div>
	
<input class="button_alter" type="submit" value="salvar">

</div>

</form>

</div>
