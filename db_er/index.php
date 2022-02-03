<!DOCTYPE html>
<html>
<head>
	<title>aa</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>
</head>
<body>

<header >
	<div>
		<button class="show_button" onclick="myFunction()">↔</button>
		<label class="title">
			<?php if(isset($_GET['view']))echo $_GET['view'];
				?>
		</label>
		<?php  
		if(isset($_GET['view'])){ 
			if (isset($_GET['alpha'])) {?>
			<button class="alpha_button" onclick="window.location.href='?view=<?php echo $_GET['view']?>' ">α</button>
			<?php }else{ ?>
			<button class="alpha_button" onclick="window.location.href='?view=<?php echo $_GET['view']?>&alpha=true' ">α</button>
		<?php } } ?>
	</div>
</header> 
<div  id="myDropdown" class="dropdown-content">
	<div><button class="navigation" onclick="window.location.href='?view=produto'">produto</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=empresa'">empresa</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=atividade'">atividade</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=custocliente'">custocliente</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=pessoa'">pessoa</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=trabalhosolicitado'">trabalhosolicitado</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=atividadesprevistas'">atividadesprevistas</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=trabalhorealizado'">trabalhorealizado</a></div>
	<div><button class="navigation" onclick="window.location.href='?view=eventos'">eventos</a></div>


</div>
<?php 

if(isset($_GET['view'])){

	if($_GET['view']=='produto'){
		include'view/produto/produto.php';	
	}if($_GET['view']=='empresa'){
		include'view/empresa/empresa.php';	
	}if($_GET['view']=='atividade'){
		include'view/atividade/atividade.php';	
	}if($_GET['view']=='custocliente'){
		include'view/custocliente/custocliente.php';	
	}if($_GET['view']=='pessoa'){
		include'view/pessoa/pessoa.php';	
	}if($_GET['view']=='trabalhosolicitado'){
		include'view/trabalhosolicitado/trabalhosolicitado.php';	
	}if($_GET['view']=='atividadesprevistas'){
		include'view/atividadesprevistas/atividadesprevistas.php';	
	}if($_GET['view']=='trabalhorealizado'){
		include'view/trabalhorealizado/trabalhorealizado.php';	
	}if($_GET['view']=='eventos'){
		include'view/eventos/eventos.php';	
	}
	
}



?>

</body>
</html>