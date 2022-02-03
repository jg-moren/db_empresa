<?php 
require_once '../../controller/controllerTrabalhoSolicitado.php';
$Controller = new ControllerTrabalhoSolicitado();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=trabalhosolicitado" method="POST" >
<table>
	<tr><td class="nomes_alter">idTrabalhoSolicitado </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidTrabalhoSolicitado" name="addidTrabalhoSolicitado" onchange="confirmar_idTrabalhoSolicitado()" required></td></tr>
	<tr><td class="nomes_alter">idPessoa             </td><td class="nomes_alter"><input class="values_alter" type="number" id="addidPessoa" name="addidPessoa" onchange="confirmar_idPessoa()" required></td></tr>
	<tr><td class="nomes_alter">CodTrabalho          </td><td class="nomes_alter"><input class="values_alter" type="text" name="addCodTrabalho"required></td></tr>
	<tr><td class="nomes_alter">Titulo               </td><td class="nomes_alter"><input class="values_alter" type="text" name="addTitulo" required></td></tr>
	<tr><td class="nomes_alter">Descricao            </td><td class="nomes_alter"><input class="values_alter" type="text" name="addDescricao" required></td></tr>
	<tr><td class="nomes_alter">DtInicioAnalise      </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtInicioAnalise" ></td></tr>
	<tr><td class="nomes_alter">DtEntregaET          </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtEntregaET"></td></tr>
	<tr><td class="nomes_alter">DtAceiteET           </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtAceiteET" ></td></tr>
	<tr><td class="nomes_alter">DtAceiteProposta     </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtAceiteProposta" ></td></tr>
	<tr><td class="nomes_alter">DtInicioProgr        </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtInicioProgr" ></td></tr>
	<tr><td class="nomes_alter">DtEntregaProgt       </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtEntregaProgt"></td></tr>
	<tr><td class="nomes_alter">DtAceitacaoTrabalho  </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtAceitacaoTrabalho" ></td></tr>
	<tr><td class="nomes_alter">Custo                </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="addCusto" ></td></tr>
	<tr><td class="nomes_alter">ValorAcordado        </td><td class="nomes_alter"><input class="values_alter" type="number" step=0.01 name="addValorAcordado" ></td></tr>
	<tr><td class="nomes_alter">DtPgto               </td><td class="nomes_alter"><input class="values_alter" type="date" name="addDtPgto" ></td></tr>

</table>
<div>
	<input class="button_alter" type="submit"  value="salvar" >

	<input class="button_alter" type="reset" onclick="window.location.href='../../index.php?view=trabalhosolicitado';" value="cancelar">
</div>
</form>
</div>

<script>
function confirmar_idTrabalhoSolicitado()
{
var id = document.getElementById("addidTrabalhoSolicitado").value; 
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