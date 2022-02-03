<div class="center">
<?php 

require_once 'model/modelTrabalhoSolicitado.php';
$Model = new ModelTrabalhoSolicitado();
require_once 'controller/controllerTrabalhoSolicitado.php';
$Controller = new ControllerTrabalhoSolicitado();
?>

<?php 
	if (isset($_GET['delete']) ) {
		$Controller->deletar($_GET['delete']);
		//header("Refresh: 0; url = ?");
		# code...
	}
?>

<?php 

	if (isset($_POST['addidTrabalhoSolicitado']) && isset($_POST['addidPessoa']) && isset($_POST['addCodTrabalho']) && isset($_POST['addTitulo']) && isset($_POST['addDescricao'])&& isset($_POST['addDtInicioAnalise']) && isset($_POST['addDtEntregaET']) && isset($_POST['addDtAceiteET']) && isset($_POST['addDtAceiteProposta']) && isset($_POST['addDtInicioProgr'])&& isset($_POST['addDtEntregaProgt']) && isset($_POST['addDtAceitacaoTrabalho']) && isset($_POST['addCusto']) && isset($_POST['addValorAcordado']) && isset($_POST['addDtPgto']) ) {
		$Controller->adicionar($_POST['addidTrabalhoSolicitado'],$_POST['addidPessoa'],$_POST['addCodTrabalho'],$_POST['addTitulo'],$_POST['addDescricao'],$_POST['addDtInicioAnalise'],$_POST['addDtEntregaET'],$_POST['addDtAceiteET'],$_POST['addDtAceiteProposta'],$_POST['addDtInicioProgr'],$_POST['addDtEntregaProgt'],$_POST['addDtAceitacaoTrabalho'],$_POST['addCusto'],$_POST['addValorAcordado'],$_POST['addDtPgto']);
	}
?>

<?php 
	if (isset($_POST['editidTrabalhoSolicitado']) && isset($_POST['editidPessoa']) && isset($_POST['editCodTrabalho']) && isset($_POST['editTitulo']) && isset($_POST['editDescricao'])&& isset($_POST['editDtInicioAnalise'])&& isset($_POST['editDtEntregaET']) && isset($_POST['editDtAceiteET']) && isset($_POST['editDtAceiteProposta']) && isset($_POST['editDtInicioProgr'])&& isset($_POST['editDtEntregaProgt'])&& isset($_POST['editDtAceitacaoTrabalho']) && isset($_POST['editCusto']) && isset($_POST['editValorAcordado']) && isset($_POST['editDtPgto']) ) {
		$Controller->editar($_POST['editidTrabalhoSolicitado'],$_POST['editidPessoa'],$_POST['editCodTrabalho'],$_POST['editTitulo'],$_POST['editDescricao'],$_POST['editDtInicioAnalise'],$_POST['editDtEntregaET'],$_POST['editDtAceiteET'],$_POST['editDtAceiteProposta'],$_POST['editDtInicioProgr'],$_POST['editDtEntregaProgt'],$_POST['editDtAceitacaoTrabalho'],$_POST['editCusto'],$_POST['editValorAcordado'],$_POST['editDtPgto']);
	}
?>

<div class="table_size"></div>

<?php  
if (isset($_GET['alpha'])) {
?>






        
<table border="1">
<tr>
<td>idTrabalhoSolicitado </td> 	 
<td> idPessoa 	         </td>
<td> CodTrabalho         </td>
<td> Titulo 	         </td>
<td> Descricao           </td>
<td> DtInicioAnalise     </td>
<td> DtEntregaET         </td>
<td> DtAceiteET          </td>
<td> DtAceiteProposta    </td>
<td> DtInicioProgr       </td>
<td> DtEntregaProgt      </td>
<td> DtAceitacaoTrabalho </td>
<td> Custo               </td>
<td> ValorAcordado       </td>
<td> DtPgto         	 </td>
</tr>
<?php
$tabela = $Model->getTable();
foreach ($tabela as $key1 => $value1) {
?>
	<tr>
      <td> <?php echo $value1->idTrabalhoSolicitado; ?>  </td>
	  <td> <?php echo $value1->idPessoa; ?>              </td>
	  <td> <?php echo $value1->CodTrabalho; ?>           </td>
	  <td> <?php echo $value1->Titulo; ?>                </td>
	  <td> <?php echo $value1->Descricao; ?>             </td>
	  <td> <?php echo $value1->DtInicioAnalise; ?>       </td>
	  <td> <?php echo $value1->DtEntregaET; ?>           </td>
	  <td> <?php echo $value1->DtAceiteET; ?>            </td>
	  <td> <?php echo $value1->DtAceiteProposta; ?>      </td>
	  <td> <?php echo $value1->DtInicioProgr; ?>         </td>
	  <td> <?php echo $value1->DtEntregaProgt; ?>        </td>
	  <td> <?php echo $value1->DtAceitacaoTrabalho; ?>   </td>
	  <td> <?php echo $value1->Custo; ?>                 </td>
	  <td> <?php echo $value1->ValorAcordado; ?>         </td>
	  <td> <?php echo $value1->DtPgto; ?>                </td>
	  <td><button onclick="window.location.href='?view=trabalhosolicitado&delete=<?php echo($value1->idTrabalhoSolicitado)?>';">del</button></td>
	  <td><button onclick="window.location.href='view/trabalhosolicitado/trabalhosolicitadoEdit.php?editId=<?php echo($value1->idTrabalhoSolicitado)?>';">edit</button></td>
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
	<td class="cabecalho_valores"><a>idTrabalhoSolicitado </a></td>
	<td class="cabecalho_valores"><a>	  <?php echo $value1->idTrabalhoSolicitado; ?>    </a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='?view=trabalhosolicitado&delete=<?php echo($value1->idTrabalhoSolicitado)?>';">del</button></a></td>
	<td class="cabecalho_valores"><a><button class="button_table" onclick="window.location.href='view/trabalhosolicitado/trabalhosolicitadoEdit.php?editId=<?php echo($value1->idTrabalhoSolicitado)?>';">edit</button></a></td>
</table>
<table class="valores_table">
	<tr><td class="valores_nomes"><a class="valores_text">idPessoa      	  </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->idPessoa; ?>           </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">CodTrabalho         </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->CodTrabalho; ?>        </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Titulo 	          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Titulo; ?>             </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Descricao           </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Descricao; ?>          </a>   </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtInicioAnalise     </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtInicioAnalise; ?>    </a>    </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtEntregaET         </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtEntregaET; ?>        </a>        </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtAceiteET          </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtAceiteET; ?>         </a>         </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtAceiteProposta    </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtAceiteProposta; ?>   </a>   </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtInicioProgr       </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtInicioProgr; ?>      </a>      </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtEntregaProgt      </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtEntregaProgt; ?>     </a>     </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtAceitacaoTrabalho </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtAceitacaoTrabalho; ?></a></td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">Custo               </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->Custo; ?>              </a>         </td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">ValorAcordado       </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->ValorAcordado; ?>      </a></td></tr>
	<tr><td class="valores_nomes"><a class="valores_text">DtPgto         	  </a></td><td class="valores_valores"><a class="valores_text">    <?php echo $value1->DtPgto; ?>             </a>             </td></tr>
</table>
</div>
<?php } ?>


<?php } ?>

<div class="table_size"></div>

</div>

<footer >
	<button class="button_add" onclick="window.location.href='view/trabalhosolicitado/trabalhosolicitadoAdd.php'">adicionar</button>
</footer>