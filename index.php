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
        <header><h2 id="home">Criação de sites em Santos</h2></header>
        Procurando criação de sites em santos? Seus problemas acabaram!! Conheça a Planet1 criação de sites em santos e veja as vatagens de trabalhar com a gente
      </div>
    </main>

    <hr>


    <section class="row divBase" id="serviços">
      <div class="col-md-11 offset-md-1">
        <header>
          <h2 class="cabecalhosBrancos" id="servicos">
            Serviços
          </h2>
          <small>Conheça alguns serviços oferecidos pela planet1</small>
        </header>
      </div>
      <br>
      <div  class="col-md-10 offset-md-2">
        <h3 class="cabecalhosBrancos">Criação de sites</h3>
        <span>
          Ter um site na internet hoje em dia não é mais uma opção, é uma necessidade! Ou seu negócio está na internet ou seu negócio ficou para trás!
          Ter um site atualmente equivale a ter um vendedor 24H por dia atendendo aos seus clientes, apresentando a sua empresa ou pequeno negócio para aqueles que o buscam!
          A Planet1 <a href="planet1.com.br/criacao-de-sites">criação de sites</a> em santos desenvolve sites de forma simples e rápida, focando na sua necessidade e priorizando a eficiência da sua aplicação!
        </span>
      </div>
      <div  class="col-md-10 offset-md-2">
        <h3 class="cabecalhosBrancos">Hospedagem de sites</h3>
        <span>
          A planet1 Criação de sites em Santos também atua com criação de sites em wordpress, oferecendo aos nossos clientes uma gama enorme de plugins (mini programas) que podem ser incorporado ao site, tornando-o muito mais atraente para seu público!
          Além disso, o desenvolvimento pode ser mais rápido que o processo tradicional, pois o wordpress oferece toda uma estrutura administrativa pronta, bastando que seja instalado!
          Um outro detalhe no desenvolvimento de sistes em wordpress é que seu desenvolvimento pode ser mais interessante em relação ao desenvolvimento tradicional!
        </span>
      </div>
      <div  class="col-md-10 offset-md-2">
        <h3 class="cabecalhosBrancos" >Criação de sistemas</h3>    
        <span>
          Como definir a melhor estratégia? Qual funcionário vendeu mais? qual vendeu menos? Que mês sua empresa faturou mais? e porque? Essas perguntas são respondidas através de sistemas focados especificamente nas necessidades dos cliente!
          Trabalhamos conhecendo o dia a dia da empresa, entendendo sua necessidade, sabendo como ela funciona e qual sua real necessidade!!
          Diferente de sistemas prontos, nosso foco e atender a empresa de maneira exclusiva, apresentando os dados que a empresa realmente precisa!
        </span>
      </div>
      <div  class="col-md-10 offset-md-2">
        <h3 class="cabecalhosBrancos" >Criação de aplicativos</h3>
        <span>
          Hoje o mundo é mobile! Tudo está na palma da mão e nada mais necessário que colocar sua empresa na versão para smartphone!
          Converse com seu cliente usando os recursos disponível das plataformas móveis.
          Interaja com seu clientes e fornecedores em tempo real, dizendo onde esta, oferecendo promoções, realizando cadastros e tudo diretamente do seu smartphone!
        </span>
      </div>
    </section>

    <hr>


    <section class="row">


      <div class="col-md-10 offset-md-1">
        <header><h2 id="contato">contato</h2></header>
        <small>utilize o formulário abaixo e entre em contato conosco! responderemos o mais breve possível!</small>
      </div>

      <div class='col-md-3 offset-md-1'>
       Se você está interessado em algum de nossos serviços, entre em contato conosco através do formulário ao lado!
       Entraremos em contato assim que recebermos seu e-mail!
     </div>

     <div class='col-md-3 offset-md-1'> 



      <?php if( !isset($_POST["contatos"]) ): ?>
        <form action="" method="post" name="contatos">
          <label for="for-nome">Nome</label><input type="text" name= contatos[nome] required="required" id="for-nome" class="form-control">
          <label for="for-email">E-mail</label><input type="text" name=contatos[email] required="required" id="for-email" class="form-control">
          <label for="for-telefone">Telefone</label><input type="text" name=contatos[telefone] required="required" id="for-telefone" class="form-control">
          <label for="for-interesse">interesse em:</label>

          <select  class="form-control" id="for-interesse" name=contatos[interesse]>
            <option class="option" value="site">website</option>
            <option class="option" value="siteWordpress">website em wordpress</option>
            <option class="option" value="criacao-de-sistemas">criação de sistemas</option>
            <option class="option" value="criacao-de-aplicativos">criação de aplicativos</option>
          </select>
          <p><input type="submit" value="enviar" class="btnP1"></p>
        </form>
      <?php endif; ?>
      

      <?php if(isset($_POST["contatos"])): 
      $chaves = array_keys($_POST["contatos"]);

      $email="";

      foreach($chaves as $c):
        $email .= $c.": ".$_POST["contatos"][$c]."<br>";
      endforeach;
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $from = "contato@planet1.com.br";
            $to = "lanterna_@hotmail.com";
            $subject = "contato do site";
            $message = $email;
            $headers = "De:". $_POST['contatos']['nome'];
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            mail($to, $subject, $message, $headers);
            echo "A mensagem de e-mail foi enviada.";
            //echo "$email";
      endif; ?>



      </div>
      <div class='col-md-3 offset-md-1'> 
        <p>Nossos contatos:</p>
        <p><a href=tel:+5513991159522>telefone: 13 9-9115-9522</a></p>
        <p><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5513991159522" target="_blank">whatsApp</a></p>
        <p><a href="https://www.facebook.com/planet1sites/" target="_blank">facebook</a></p>
      </div>

    </section>




    <hr>

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