<div class="center">
<?php 

require_once 'model/modelPessoa.php';
$Model = new ModelPessoa();
require_once 'controller/controllerPessoa.php';
$Controller = new ControllerPessoa();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
	//	header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidPessoa']) && isset($_POST['addidEmpresa']) && isset($_POST['addApelido']) && isset($_POST['addNome']) && isset($_POST['addEmail'])&& isset($_POST['addTelefone']) ) {
		$Controller->adicionar($_POST['addidPessoa'],$_POST['addidEmpresa'],$_POST['addApelido'],$_POST['addNome'],$_POST['addEmail'],$_POST['addTelefone']);
	}
?>

<?php 
	if (isset($_POST['editidPessoa']) && isset($_POST['editidEmpresa']) && isset($_POST['editApelido']) && isset($_POST['editNome']) && isset($_POST['editEmail'])&& isset($_POST['editTelefone']) ) {
		$Controller->editar($_POST['editidPessoa'],$_POST['editidEmpresa'],$_POST['editApelido'],$_POST['editNome'],$_POST['editEmail'],$_POST['editTelefone']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>

<table border="1" >
<tr><td>idPessoa</td><td>idEmpresa</td><td>Apelido</td><td>Nome</td><td>email</td><td>Telefone</td></tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<tr>
	<td><?php echo $value1->idPessoa; ?></td>
	<td><?php echo $value1->idEmpresa; ?></td>
	<td><?php echo $value1->Apelido; ?></td>
	<td><?php echo $value1->Nome; ?></td>
	<td><?php echo $value1->email; ?></td>
	<td><?php echo $value1->Telefone; ?></td>
	<td><button onclick="window.location.href='?view=pessoa&delete=<?php echo($value1->idPessoa)?>';">del</button></td>
	<td><button onclick="window.location.href='view/pessoa/pessoaEdit.php?editId=<?php echo($value1->idPessoa)?>';">edit</button></td>
</tr>
<?php } ?>
</table>


<?php  
}else{
?>

<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
<div class="table">
<table class="cabecalho_table" >
	<td class="cabecalho_valores"><a>idPessoa </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idPessoa; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=pessoa&delete=<?php echo($value1->idPessoa)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/pessoa/pessoaEdit.php?editId=<?php echo($value1->idPessoa)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">idEmpresa     </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idEmpresa; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Apelido       </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Apelido; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Nome 	        </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Nome; ?>             </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">email         </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->email; ?>          </a>   </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Telefone      </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Telefone; ?>    </a>    </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>


</div>



<footer >
	<button class="button_add"  onclick="window.location.href='view/pessoa/pessoaAdd.php'">adicionar</button>
</footer>