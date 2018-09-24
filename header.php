<?php ob_start(); 
$pasta_de_imagens=get_template_directory_uri();
define("tema",$pasta_de_imagens);
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/estilos/estilo.css" ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>

<body>
	<div class='container-fluid' id="topo">



		<div class="row-fluid header" style="background-image: url('<?php echo tema?>/imagens/criação-de-sites-em-santos-2.jpg');">
			<header class="col-md-12" >
				<small>precisando criar um site? está no lugar certo!</small>
				<h1>Planet 1 criação de sites em santos</h1>
			</header>
		</div>

		<?php get_template_part("componentes/menuHtml");?>