<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/5e5f9fbe22.js" crossorigin="anonymous"></script>



  <link href="css/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">



  <style>


  </style>

</head>

<body>
  <!--HEADER-->
  <header class="navwrap" data-aos="fade-down">
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar padding-content-header fixed-top">
      <a class="navbar-brand" href="index.html">
        <img class="logo" src="imgs/logo-t4f.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

        <!--just add these span here-->
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <!--/end span-->
      </button>

      <div class="collapse navbar-collapse josefin overlay-content" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto stroke">
          <a class="nav-item nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="sobre-t4f.html">SOBRE A T4F</a>

          <a class="nav-item nav-link" href="nossas-casas.html">CASAS</a>
          <a class="nav-item nav-link" href="venda-grupo.html">VENDA A GRUPOS</a>
          <button class="btn btn-gradient navbar-btn" onclick="window.location.href = 'contato.php';">CONTATO</button>
        </div>
      </div>
    </nav>
  </header>
  <div class="bg-loader" >
      <div id="logocontainer" >
          <img id="pelogo" src="imgs/logo-t4f.png"></img>
          <div class="loader" style="left:2vh; top:0; height:2vh; width:0; animation:slide1 1s linear forwards infinite"></div>
          <div class="loader" style="right:0; top:2vh; width:2vh; height:0; animation:slide2 1s linear forwards infinite; animation-delay:0.5s"></div>
          <div class="loader" style="right:2vh; bottom:0; height:2vh; width:0; animation:slide3 1s linear forwards infinite"></div>
          <div class="loader" style="left:0; bottom:2vh; width:2vh; height:0; animation:slide4 1s linear forwards infinite; animation-delay:0.5s"></div>
        </div>
      </div>
  <!--.SECTION BANNER-->
  <section class="banner-topo">

    <div id="carouselExampleIndicators" class="carousel slide " data-interval="6000" data-ride="carousel">

      <div class="carousel-inner ">
        <div class="carousel-item active">

          <div class="hero2 ">
            <hgroup class="animated fadeInLeft delay-1s color-l-yellow " style="position: fixed">
              <h1>CONTATO</h1>
              <hr class="style3 animated fadeInLeft delay-0.5s">


            </hgroup>
          </div>

          <picture class="d-block w-100 img-carousel-paginas slide-pg-contato" alt="First slide"></picture>



        </div>

      </div>

    </div>
  </section>
  <main>


  <?php
  if(isset($_POST['submit'])){
    $nome = htmlspecialchars(stripslashes(trim($_POST['nome'])));
    $empresa = htmlspecialchars(stripslashes(trim($_POST['empresa'])));
    $telefone = htmlspecialchars(stripslashes(trim($_POST['telefone'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['assunto'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['mensagem'])));
    if(!preg_match("/^[A-Za-z .'-]+$/", $nome)){
      $nome_error = 'Por favor escreve o seu nome e tente novamente!';
    }
  
    if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
      $email_error = 'Por favor digite seu email tente novamente!';
    }
    
    if(strlen($subject) === 0){
        $subject_error = 'Por favor selecione o assunto e tente novamente!';
      }
  }
?>

    <!--.SECTION FAÇA SEU EVENTO CONOSCO-->
    <section class="mb-5  margin-content mt-5 pt-5 max-wrap pl-4 pr-4 pr-lg-0 pl-lg-0 pr-xl-0 pl-xl-0">
      <div class="conteiner-fluid d-flex justify-content-center">
        <div class="row justify-content-center w-100 ">

          <div class="mt-4 col-12 order-last col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-0 p-0 pl-xl-5"
            data-aos="fade-right">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="needs-validation" novalidate>

              <div class="px-0 col-xl-8 group-form mb-3">

                <label class="txt-grey" for="nome">Nome*</label>

                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome..." required>
                <p><?php if(isset($nome_error)) echo $nome_error; ?></p>
                <div class="valid-tooltip">
                  Tudo certo! :)
                </div>
                <div class="invalid-tooltip">
                  Por favor digite seu nome.
                </div>
              </div>

              <div class="px-0 col-xl-8 group-form mb-3">

                <label class="txt-grey"  for="email">E-mail*</label>

                <input type="email" class="form-control" name="email" id="email"  pattern="^\w*(\.\w*)?@\w*\.[a-z]+(\.[a-z]+)?$" placeholder="Digite seu e-mail..." required>

                <div class="valid-tooltip">
                  Tudo certo! :)
                </div>
                <div class="invalid-tooltip">
                  Por favor digite e-mail válido :/
                </div>
              </div>

              <div class="px-0 col-xl-4 group-form mb-3">

                <label class="txt-grey"  for="telefone">Telefone*</label>

                <input type="text" class="form-control" name="telefone" id="telefone" pattern="[\(]{0,1}[0-9]{2}[\)]{0,1}[\s]{0,1}[0-9]{4,}[-]{0,1}[\s]{0,1}[0-9]{4}" placeholder="(00) 00000-0000"  minlength="7" maxlength="20" required>
                  

                <div class="valid-tooltip">
                  Tudo certo! :)
                </div>
                <div class="invalid-tooltip">
                  Por favor digite o seu número:/
                </div>
              </div>

              <div class="px-0 col-xl-8 group-form mb-3">

                <label class="txt-grey"  for="empresa">Empresa*</label>

                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Digite o nome da sua empresa..."
                  required>

                <div class="valid-tooltip">
                  Tudo certo! :)
                </div>
                <div class="invalid-tooltip">
                  Por favor digite o nome da sua empresa :/
                </div>
              </div>

              <div class="px-0 col-xl-8 group-form mb-3">
                <label class="txt-grey d-flex" for="mensagem">Mensagem:<p
                    class="small font-weight-regular color-dark-grey ml-1">Opcional </p> </label>
                <textarea class="form-control mensagem-mt" name="mensagem" id="mensagem"
                  placeholder="Digite sua mensagem..." rows="3"></textarea>

              </div>

              <div class="px-0 col-xl-8 group-form mb-3">
                <label class="txt-grey" for="assunto">Assunto*</label>

                <div id="assunto" class="dropdown" required>
                  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                    <ins>Selecione o Assunto</ins>
                  </button>
                  <div class="dropdown-menu radio">
                  <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio"  checked="checked" value="001" name="assunto" value="unimed-hall">
                      <i>Selecione o Assunto</i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="001" name="assunto" value="unimed-hall">
                      <i>Locação Unimed Hall</i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="002" name="assunto" value="teatro-renault">
                      <i>Locação Teatro Renaut
                      </i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="003" name="assunto" value="km-rj">
                      <i>Locação KM de Vantagens Hall Rio </i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="004" name="assunto" value="km-bh">
                      <i>Locação Km de Vantagens Hall BH</i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="005" name="assunto" value="açao-relacionamento">
                      <i>Ações de Relacionamento</i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="006" name="assunto" value="venda-grupos">
                      <i>Venda a Grupos </i>
                    </label>

                    <label class="dropdown-item">
                      <input class="jRadioDropdown" type="radio" value="007" name="assunto" value="outros-assuntos">
                      <i>Outros Assuntos</i>
                    </label>


                  </div>
                </div>

              </div>

              <!--  <div class="form-row">
                <div class="col-xl-6 group-form col-md-5 mb-3 wrapper-form">
                  <label class="txt-grey" for="data">Data do evento:</label>

                  <input type="text" name="data" id="data" data-provide="datepicker" placeholder="Clique e selecione..."
                    max="-12-31" min="2018-01-01" autocomplete="off" class="form-control data-picker " required>


                  <div class="valid-tooltip">
                    Tudo certo! :)
                  </div>
                  <div class="invalid-tooltip">
                    Por favor selecione a data :/
                  </div>
                </div>

              </div>
            -->
              <button type="submit" name="submit" value="submit" class="btn btn-gradient mb-2 mt-4">ENVIAR</button>
              <?php 
    if(isset($_POST['submit']) && !isset($nome_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
      
      
      $to = 'arthurroberto20@gmail.com'; // edit here
      $body = " Name: $nome\n E-mail: $email\n Message:\n $message Empresa:\n $empresa Telefone:\n $telefone" ;

      $headers = array(
        'From' => 'arthurroberto20@gmail.com',
        'Reply-To' => 'arthurroberto20@gmail.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    $headers = implode("\r\n", $headers);
      if(mail($to, $subject, $body, $headers)){
        echo '<p style="color:#b7e96a">Sua Mensagem foi enviada com sucesso! :)</p>';
      }else{
        echo '<p>Aconteceu um erro, por favor tente novamente :/ </p>';
      }
    }
  ?>
            </form>

          </div>
          <div class="order-first col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-0 p-0" data-aos="fade-up">
            <h1 class="color-l-yellow  h1-sections ">FAÇA SEU EVENTO <br>CONOSCO!</h1>
            <img class="w-100 p-0 img-mobile pr-xl-5" src="imgs/ilustra-contato.svg" alt="" data-aos="zoom-in">

            </p>

            <p class=" mt-3 mt-sm-4 mt-md-5 mt-xl-5 txt-grey " data-aos="fade-up">São Paulo: <br>
              eventos@t4f.com.br

            </p>
            <p class=" mt-3 mt-sm-4 mt-md-5 mt-xl-5 txt-grey " data-aos="fade-up">Belo Horizonte:<br>
              kcruz@t4f.com.br

            </p>
            <p class=" mt-3 mt-sm-4 mt-md-5 mt-xl-5 txt-grey " data-aos="fade-up">Rio de Janeiro:<br>
              rhassid@t4f.com.br

            </p>

          </div>
          
          
        </div>
      </div>
      </div>
    </section>

   



    </div>
  </main>
  <footer>
    <!--SECTION RODAPE-->
    <section class="rodape bg-purple mt-5">
      <address
        class="conteiner-fluid  d-flex justify-content-center pl-4 pr-4 pr-lg-0 pl-lg-0 pr-xl-0 pl-xl-0 max-wrap">
        <div class="row mt-5 pt-2">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pl-5 pr-5">
            <img class="logo" src="imgs/logo-t4f.png" alt="logo T4F Eventos">
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pl-5 pr-5">
            <h6 class="text-white font-weight-bold mt-5 mt-5 mt-sm-0 mt-lg-0 mt-xl-0">CONTATO</h6>
            <p class="text-white">t4feventos@t4f.com.br</p>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pl-5 pr-5">
            <h6 class="text-white font-weight-bold">REDES SOCIAIS</h6>
            <div class="row">
              <a class="facebook" href="https://www.facebook.com/t4feventos/" target="_blank">
                <img class="icon-social pl-3 pr-1" src="imgs/facebook-logo.svg" alt="logo Facebook"></a>
              <a class="instagram" href="#" target="_blank">
                <img class="icon-social pl-3 pr-1" src="imgs/instagram-logo.svg" alt="logo Instagram"></a>
              <a class="instagram" href="#" target="_blank">
                <img class="icon-social pl-3 pr-1" src="imgs/linkedin-logo.svg" alt="logo Linkedin"></a>
            </div>

          </div>
        </div>
      </address>
      <div class="conteiner-fluid margin-content pt-4 d-flex justify-content-center  pl-4 pr-4">
        <div class="row">
          <div class="col-12">
            <p class="txt-grey text-center small" style=" max-width: 900px;">

              <span>
                Copyright© Time For Fun - Todos os direitos reservados
              </span><br>
              <span>
                Desenvolvido por <a href="https://www.behance.net/ArthurRobertoGB" target="_blank">Arthur Roberto</a>
              </span>
            </p>

          </div>
        </div>
      </div>

    </section>
  </footer>




  <script defer src="js/jquery.min.js"></script>
 

  <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>


  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script defer src="js/script.js"></script>

  <script>
   
  </script>
  
</body>

</html>