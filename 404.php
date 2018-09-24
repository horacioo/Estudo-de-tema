<?php ob_start(); 
$pasta_de_imagens=get_template_directory_uri();
define("tema",$pasta_de_imagens);
?> 
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>

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

    <hr>

    <main class="divBase row">
      <div class="col-md-10 offset-md-1">

        Opa!! não encontrou o link que procurava? não tem problema, conheça nosso site, com certeza, poderemos lhe apoiar se você procura por <a href="http://planet1.com.br">criação de sites</a> em santos ou demais cidades! 

      </div>
    </main>



    <footer>

      <pictures id="whats">
       <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5513991159522" target="_blank"> 
        <img src="<?php  echo get_template_directory_uri()?>/imagens/fale-conosco-pelo-whatsapp.png">
      </a>
    </pictures>

  </footer>
</div>


<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Alfa+Slab+One|Raleway');
h1,h2,h3,h4{font-family: 'Alfa Slab One', cursive;}
*{font-family: 'Raleway', sans-serif;}
</style>


<script async src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script async  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script async  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>
</html>
<?php wp_footer(); ?>
<?php ob_end_flush(); ?>