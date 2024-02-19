<?php
    $url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <title>Bendita Limpeza - Serviços e Conservação</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../public/ico/favicon-32x32.png">
    <link rel="stylesheet" href="../public/CSS/bootstrap.min.css">
    <link href="../public/CSS/style.css" rel="stylesheet">
    <!-- <link href="../public/CSS/style-calendar.css" rel="stylesheet"> -->
    <!-- <link href="css/cssi.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer>
        
        window.addEventListener('scroll', function(){
            let header = document.getElementById("header");
            let screen = document.getElementById("section1");
            header.classList.toggle('navWhite', window.scrollY > 600);
        })
        
        </script>
    
</head>
<body class="bg-placeholder">

    <header class="navbar1" id="header" style="z-index:12;background-color:white">
        <a class="logo1" href="#" id="Logo"></a>
        <ul class="nav1" id="Nav">
            <!-- <li><a href="#section1">Home</a></li> -->
            <li><a href="#sectionAbt2">Sobre Nós</a></li>
            <li><a href="#section2">Valores</a></li>
            <li><a href="#section4">Perguntas Frequentes</a></li>
            <li><a href="#section3">Nos Acompanhe!</a></li>
            <li><a href="#contact" onclick="document.getElementById('id01').style.display='block'">Faça Um Orçamento!</a></li>
        </ul>
    </header>

    <header class="navbar2" style="z-index:12;background-color:white;">
        <span onclick="document.getElementById('id02').style.display='block'"
            class="w3-button w3-display-topleft" style="font-size: 3rem;">☰</span>
        <center><a class="" href="#" id=""><img src="public/img/bendita-logo.jpg"></a></center>
    </header>
    <div id="id02" class="w3-modal" style="overflow-x: hidden; z-index: 13;">
    <div class="w3-modal-content">
        <div class="w3-container">
            <span onclick="document.getElementById('id02').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <center><h2>BEM VINDO À BENDITA LIMPEZA!</h2>
            <ul style="">
                <!-- <li><a href="#section1">Home</a></li> -->
                <li><a href="#sectionAbt2" onclick="document.getElementById('id02').style.display='none'">Sobre Nós</a></li>
                <!-- <li><a href="#section2" onclick="document.getElementById('id02').style.display='none'">Valores</a></li> -->
                <li><a href="#section4" onclick="document.getElementById('id02').style.display='none'">Perguntas Frequentes</a></li>
                <li><a href="#section3" onclick="document.getElementById('id02').style.display='none'">Nos Acompanhe!</a></li>
                <li><a href="#contact" onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block'">Faça Um Orçamento!</a></li></center>
            </ul>
        </div>                   

    </div> 
</div>
     

    


    <!-- The Modal -->
<div id="id01" class="w3-modal" style="overflow-x: hidden;">
    <div class="w3-modal-content">
        <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5" style="text-align: center;">
                        <h2>
                            Alguma dúvida que não conseguiu sanar?
                        </h2>
                        <h4>Entre em contato conosco!</h4>
                        <hr>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="w3-center">Nos Acompanhe!</h2>
                        <div class="w3-center">
                            <br>
                            <a class="w3-button btn-social" href="https://www.facebook.com/BenditaLimpezaJM" target="_blank" style="">Facebook</a>
                            <br>
                            <a class="w3-button btn-social" href="https://instagram.com/benditalimpeza.ofc" target="_blank" style="background-image: linear-gradient(to bottom right,#002296,#82008f,#C0007a,#ea0c5f,#ff5341);">Instagram</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <ul>
                            <li>(31)99328-0420</li>
                            <li>grupobenditalimpeza@outlook.com</li>
                            <li><a href="wa.me/message/4TXT67OLUHUCM1" target="_blank">Enviar uma mensagem no Whatsapp</a></li>
                            <li><a href="https://www.google.com/maps/place/Bendita+Limpeza+Serviços+e+conservação/@-19.8131169,-43.1848937,17z/data=!3m1!4b1!4m5!3m4!1s0xa5a9aa5a810551:0x5c9d80e61da3c0ed!8m2!3d-19.813122!4d-43.182705">R. Santa Luzia, 291 - Novo Horizonte, João Monlevade</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
            </div> 
        </div>                   

    </div> 
</div>
      
    


    <section id="section1">
        <div class="" id="" style="display: none;align-items: center;justify-content: center;align-self: center;">
            <h1 class="" href="" id="" style="">Bendita Limpeza</h1>
            <ul class="" id="">
                <li><a href="#home">Home</a></li>
                <li><a href="#section2">About</a></li>
                <li><a href="#section4">Portfolio</a></li>
                <li><a href="#section3">Service</a></li>
                <li><a href="#contact" onclick="document.getElementById('id01').style.display='block'">Contact</a></li>
            </ul>
        </div>
        <div class="waveSpacer layer1" id="spacer"></div>
    </section>
<div class="row container" style="text-align:center;padding-right: 15%;margin-top:100px;width:75%;border-bottom:2px solid var(--azulClaro)">
            <h1 style="letter-spacing: .5em;font-weight: bold;">Sobre Nós</h1>
        </div>
        
    <section id="sectionAbout">
        <h3 style="padding: 7.5% 5% 5% 0; box-shadow: -10px 10px 25px 75px white; margin-left:auto;width: 50%;"> 
            <span style="width:100%;font-size:1.25em">A Bendita Limpeza foi criada em 2020 com objetivo de atuar no mercado de João Monlevade e Região.</span><br><br>Preocupada em proporcionar mais <strong>qualidade de vida</strong> para as pessoas, a empresa oferece serviços domésticos, empresariais, pós obra e passadoria.<br>O intuito é fazer com que o público <strong>economize o seu tempo</strong> aproveitando a família e tendo momentos de lazer e saúde. <br><br><span style="font-weight:600;font-size:.85em">Buscamos oferecer comodidade, facilidade e segurança, suprindo a necessidade diária de um ambiente limpo e organizado.</span>
        </h3>
    </section>

    <section id="sectionAbt2">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding: 13% 0;">
                    <h3 style="color: whitesmoke;text-align: right;padding: 10%;">
                        A Bendita Limpeza é uma empresa especializada em atividades do lar, limpeza comercial, pós obra e serviços de passadoria. A empresa oferece soluções para o dia a dia das pessoas, com um serviço sob medida para atender as necessidades do cliente. Com uma equipe selecionada e qualificada para realizar as mais diversas atividades do lar e ambientes comerciais.
                    </h3>
                </div>
                <div class="col-md-6" style="padding: 15% 0;">
                    <h3 style="color: whitesmoke;border-left: 2px solid whitesmoke;padding: 0 10%;">
                        Oferecemos um serviço personalizado, trazendo soluções de acordo com a necessidade de cada cliente, seja ele residencial ou empresarial. Com uma equipe de profissionais, treinadas e aptas para um pronto atendimento, garantindo assim qualidade e eficiência. Estamos cada dia em busca de constante evolução, atento as oportunidades para melhorar constantemente nosso trabalho. Experiencias passadas, críticas e sugestões são levadas a sério e nos faz lembrar que somos eternos aprendizes.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section id="section2">

        <div class="container">
            <div class="row" style="margin-bottom: 5%;">
                <div class="col-md-4" style="padding-top: 5%;">
                    <div class="card-novo"> 
                        <div class="cont"> 
                            <h2 style="top: -1.5rem;">MISSÃO</h2>
                            <p>A nossa missão é fornecer serviços de altíssima qualidade, gerando valor e facilidade na vida de nossos clientes.</p>
                        </div>  
                    </div> 
                </div>
                <div class="col-md-4">
                   

                    <div class="card-novo"> 
                        <div class="cont"> 
                            <h2>VISÃO</h2>
                            <p>Ser uma empresa competitiva no mercado de Limpeza residencial e comercial, e expandir suas operações por todo território regional. Onde existir alguém com necessidade de limpeza residencial e comercial, a Bendita Limpeza deseja estar presente.</p>
                        </div>  
                    </div> 
                    
                </div>
                <div class="col-md-4" style="padding-top: 5%;">
                    <div class="card-novo"> 
                        <div class="cont"> 
                            <h2 style="top: -1.5rem;">VALORES</h2>
                            <p>Honestidade, ética e respeito. Liderança e trabalho em equipe. Proatividade e Qualidade.</p>
                        </div>  
                    </div> 
                </div>
            </div>
        <!-- </div>
        <div class="container"> -->
            <center>
                <h1>Solicite um serviço</h1>
                <h3>E nossos administradores reservarão o melhor profissional para você</h3>
                <hr style="width: 15%">
                <a class="w3-button btn-calendar" href="<?=$url?>login" target="_blank">Acesse nosso calendário</a>
            </center>
        </div>
        <div class="waveSpacer layer2"></div>
    </section>
    
    <section id="section4">
        <div class="faq">
            <div>
                <center>
                    <h1>Perguntas Frequentes</h1>
                    <hr style="width: 25%">
                </center>
            </div>

                <button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align" style="box-shadow: 0px 0 5px  lightgrey; text-align: center !important; background-color: white !important; color: black !important">Qual a história da Bendita Limpeza?</button>
                <div id="Demo1" class="w3-hide w3-white">
                  <div class="w3-container" style="border-top: 1px solid whitesmoke;">
                    <p>A Bendita Limpeza foi criada em 2020 com objetivo de atuar no mercado de João Monlevade e Região. Preocupada em proporcionar mais qualidade de vida para as pessoas, a empresa oferece serviços domésticos, empresariais, pós obras e passadoria. O intuito é fazer com que o seu público economize o seu tempo com tais serviços, e passe esse tempo com a família, com os filhos, tenha momentos de lazer, ou dedique mais tempo a sua saúde. Trazendo assim aos seus clientes mais comodidade, facilidade e segurança, suprindo a necessidade diária de um ambiente limpo e organizado.</p>
                  </div>
                </div>
                <button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"  style="text-align: center !important; box-shadow: 0px 0 5px  lightgrey;background-color: white !important; color: black !important">O que é a Bendita Limpeza?</button>
                <div id="Demo2" class="w3-hide w3-white">
                  <!-- <a href="#" class="w3-button w3-block w3-left-align">Link 1</a>
                  <a href="#" class="w3-button w3-block w3-left-align">Link 2</a>
                  <a href="#" class="w3-button w3-block w3-left-align">Link 3</a> -->
                  <div class="w3-container" style="border-top: 1px solid whitesmoke;">
                    <p>A Bendita Limpeza é uma empresa especializada em atividades do lar, limpeza comercial, pós obra e serviços de passadoria. A empresa oferece soluções para o dia a dia das pessoas, com um serviço sob medida para atender as necessidades do cliente. Com uma equipe selecionada e qualificada para realizar as mais diversas atividades do lar e ambientes comerciais.</p>
                  </div>
                </div>
                <button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align" style="text-align: center !important; box-shadow: 0px 0 5px  lightgrey;background-color: white !important; color: black !important">Que tipo de serviço é oferecido?</button>
                <div id="Demo3" class="w3-hide w3-white">
                  <div class="w3-container" style="border-top: 1px solid whitesmoke;">
                    <!-- <p>Accordion with Images:</p>
                    <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
                    <p>French Alps</p> -->
                    <div class="w3-container">
                        <p>Oferecemos um serviço personalizado, trazendo soluções de acordo com a necessidade de cada cliente, seja ele residencial ou empresarial. Com uma equipe de profissionais , treinadas e aptas para um pronto atendimento, garantindo assim qualidade e eficiência. Estamos cada dia em busca de constante evolução, atento as oportunidades para melhorar constantemente nosso trabalho. Experiencias passadas, críticas e sugestões são levadas a sério e nos faz lembrar que somos eternos aprendizes.</p>
                      </div>
                  </div>
                </div>
                <center>
        </div>
        <div class="sidebar">
            <h1>Alguma dúvida restante?</h1>
            <a>Veja mais respostas</a>
            <h2> ou </h2>
            <button class="btn btn-block btn-primary"  onclick="document.getElementById('id01').style.display='block'"> Entre em contato"</button>
        </div>

<div class="waveSpacer layer1" style="z-index:1"></div>
    </section>

    <section id="section3">
        <div class="container">
            <center>
                <h1>Siga-nos</h1>
                <h3>E acompanhe todos os nossos conteúdos!</h3>
                <hr style="width: 15%">
                <div class="row">
                    <div class="col-md-4" id="insta1">
                        <blockquote class="instagram-media" data-instgrm-permalink="https:// www.instagram.com/p/CK9zlNrr4fP/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);max-height: 75vh">
                            <div style="padding:8px;"> 
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> 
                                    <div style=" display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                        
                                    </div>
                                </div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicaÃ§Ã£o compartilhada por </a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime=""></time></p>
                            </div>
                        </blockquote> 
                        <script async defer src="//www. instagram.com/embed.js"></script>
                    </div>
                    <div class="col-md-4" id="insta2">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www. instagram.com/p/CKRR4zeLQge/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);max-height: 75vh">
                            <div style="padding:8px;"> 
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> 
                                    <div style=" display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                        
                                    </div>
                                </div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicaÃ§Ã£o compartilhada por </a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime=""></time></p>
                            </div>
                        </blockquote> 
                        <script async defer src="//www. instagram.com/embed.js"></script>
                    </div>
                    <div class="col-md-4" id="insta3">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www. instagram.com/p/CKMUqJpLhpB/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);max-height: 75vh">
                            <div style="padding:8px;"> 
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> 
                                    <div style=" display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                        
                                    </div>
                                </div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicaÃ§Ã£o compartilhada por </a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime=""></time></p>
                            </div>
                        </blockquote> 
                        <script async defer src="//www. instagram.com/embed.js"></script>
                    </div>
                </div>
            </center>
        </div>
    </section>

<div class="pre-footer">
    <h2 class="w3-center">Nos Acompanhe!</h2>
    <div class="w3-center">
      <br>
      <a class="w3-button btn-social" href="https://www.facebook.com/BenditaLimpezaJM" target="_blank" style="">Facebook</a>
      <a class="w3-button btn-social" href="https://instagram.com/benditalimpeza.ofc" target="_blank" style="background-image: linear-gradient(to bottom right,#002296,#82008f,#C0007a,#ea0c5f,#ff5341)">Instagram</a>
      <br><br>
      </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16" style="background-image: linear-gradient(to top right, var(--azul3), var(--azulClaro));color: black !important;">
    <div class="waveSpacer layer2"></div>
    <div class="footer-container">
        <center><h3>Bendita Limpeza</h3></center>
        <center><p>A Melhor Em Serviços e Conservação<a href="" target="_blank"></a></p></center>
        <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">

        <!-- <a class="w3-text-white" href="google.com" style="z-index:500"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
        </div> -->
        <!-- <center><a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank" style="margin-right: -2.25%;z-index:101">Faça um Pedido Agora</a></center> -->
    </div>
</footer>


<script>

function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}




var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();


function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


</script>
<script src="../public/singleton.js"></script>
<script src="../public/script.js"></script>

</body>
</html>