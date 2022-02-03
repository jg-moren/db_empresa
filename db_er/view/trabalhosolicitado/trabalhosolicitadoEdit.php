<?php 
require_once '../../model/modelTrabalhoSolicitado.php';
$Model = new ModelTrabalhoSolicitado();
require_once '../../controller/controllerTrabalhoSolicitado.php';
$Controller = new ControllerTrabalhoSolicitado();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=trabalhosolicitado" method="POST">
<table>
	<tr><td class="nomes_alter">idTrabalhoSolicitado </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidTrabalhoSolicitado" value="<?php echo $valores[0]->idPessoa ?>"  readonly></td></tr>
	<tr><td class="nomes_alter">idPessoa             </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidPessoa" name="editidPessoa" onchange="confirmar_idPessoa()" value="<?php echo $valores[0]->idPessoa ?>"></td><//tr>
	<tr><td class="nomes_alter">CodTrabalho          </td><td class="nomes_alter"><input class="values_alter" type="text" name="editCodTrabalho"        value="<?php echo $valores[0]->CodTrabalho ?>"></td></tr>
	<tr><td class="nomes_alter">Titulo               </td><td class="nomes_alter"><input class="values_alter" type="text" name="editTitulo"             value="<?php echo $valores[0]->Titulo ?>"></td></tr>
	<tr><td class="nomes_alter">Descricao            </td><td class="nomes_alter"><input class="values_alter" type="text" name="editDescricao"          value="<?php echo $valores[0]->Descricao ?>"></td></tr>
	<tr><td class="nomes_alter">DtInicioAnalise      </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtInicioAnalise"    value="<?php echo $valores[0]->DtInicioAnalise ?>"></td></tr>
	<tr><td class="nomes_alter">DtEntregaET          </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtEntregaET"        value="<?php echo $valores[0]->DtEntregaET ?>"></td></tr>
	<tr><td class="nomes_alter">DtAceiteET           </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtAceiteET"         value="<?php echo $valores[0]->DtAceiteET ?>"></td></tr>
	<tr><td class="nomes_alter">DtAceiteProposta     </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtAceiteProposta"   value="<?php echo $valores[0]->DtAceiteProposta ?>"></td></tr>
	<tr><td class="nomes_alter">DtInicioProgr        </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtInicioProgr"      value="<?php echo $valores[0]->DtInicioProgr ?>"></td></tr>
	<tr><td class="nomes_alter">DtEntregaProgt       </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtEntregaProgt"     value="<?php echo $valores[0]->DtEntregaProgt ?>"></td></tr>
	<tr><td class="nomes_alter">DtAceitacaoTrabalho  </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtAceitacaoTrabalho"value="<?php echo $valores[0]->DtAceitacaoTrabalho ?>"></td></tr>
	<tr><td class="nomes_alter">Custo                </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="editCusto"             value="<?php echo $valores[0]->Custo ?>"></td></tr>
	<tr><td class="nomes_alter">ValorAcordado        </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="editValorAcordado"     value="<?php echo $valores[0]->ValorAcordado ?>"></td></tr>
	<tr><td class="nomes_alter">DtPgto               </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtPgto"             value="<?php echo $valores[0]->DtPgto ?>"></td></tr>
</table>
<dir>
<input class="button_alter" type="submit" value="salvar">
</dir>

</form>

<script>

function confirmar_idPessoa()
{
var id = document.getElementById("addidPessoa").value; 
var verificacao=true;
<?php foreach ($Controller->getIdPessoa() as $key => $value): ?>
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