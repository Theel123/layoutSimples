<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title> Oh Braia! </title>
        
        <!-- REFERENCIA CSS -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="shortcut icon" href="imagens/braia.jpg">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
        
        <!-- REFERENCIA JS -->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>   
        <script type="text/javascript" src="js/lightslider.js"></script> 
        
        <script type="text/javascript">

           $(document).ready(function() {
                $("#content-slider").lightSlider({
                    loop:true,
                    keyPress:true
                });
                $('#image-gallery').lightSlider({
                    gallery:true,
                    item:1,
                    thumbItem:9,
                    slideMargin: 0,
                    speed:500,
                    auto:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#image-gallery').removeClass('cS-hidden');
                    }  
                });
            });

            $(document).ready(function() {
                $('.newsletter').click(function(){
                    $('.background, .box').animate({'opacity':'.60'}, 200, 'linear');
                    $('.box').animate({'opacity':'1.00'},200, 'linear');
                    $('.background, .box').css('display', 'block')
                });

                $('.close').click(function() {
                    $('.background, .box').animate({'opacity':'0'},200, 'linear', function() {
                        $('.background, .box').css('display', 'none');

                    });
                });

                    $('.background').click(function() {
                    $('.background, .box').animate({'opacity':'0'},200, 'linear', function() {
                    $('.background, .box').css('display', 'none');

                    });
                });
            });
        </script>
        
        <style type="text/css">
            /* SLIDER */
            ul {
                list-style: none outside none;
                padding-left: 0;
                margin: 0;
            }
            
            .demo .item {
                margin-bottom: 60px;
            }
            
            .content-slider li {
                background-color: #000000;
                text-align: center;
                color: #FFF;
            }
            
            .content-slider h3 {
                margin: 0;
                padding: 70px 0;
            }
            
            .demo {
                width: 100%;
            }
            /* FIM DO SLIDER */

            /* LightBox */
            .background {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #000000;
                opacity: .0;
                -moz-opacity: .0;
                filter:alpha(opacity=0);
                z-index:100;
                display: none;
            }

            .box {
                position: absolute;
                top: 10%;
                left: 20%;
                width: 750px;
                height: 550px;
                background-color: #FFFFFF;
                z-index: 101;
                padding: 14px;
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius:4px;
                box-shadow: 2px 2px 2px #333333; 
                display: none;

            }
            
            .close {
                float: right;
                margin-right: 10px;
                cursor: pointer;
            }
            /* Fim do LightBox */
        </style>
    </head>
    <body>
        
        <header class="titulo-principal">
            <img class="foto-home" src="imagens/braia.jpg" alt="Foto"/>
            <h1> Oh Braia! </h1>
            <p class="subtitulo-principal">Robô Segue Linha</p>
            <ul class="palavras-home">
                <li class="palavra-home arduino" style="color: #e0c502;">Arduíno</li>
                <li class="palavra-home multimidia" style="color: #e0c502;">Multimídia</li>
                <li class="palavra-home audio" style="color: #e0c502;">Áudio</li>
                <li class="palavra-home autoria" style="color: #e0c502;">Autoria</li>
                <li class="palavra-home html5" style="color: #e0c502;">HTML5</li>
                <li class="palavra-home javascript" style="color: #e0c502;">JavaScript</li>
                <li class="palavra-home videos" style="color: #e0c502;">Vídeo</li>
                <li class="palavra-home animacoes" style="color: #e0c502;">Animações</li>
                <li class="palavra-home projetos" style="color: #e0c502;">Projetos</li>
                <li class="palavra-home imagens" style="color: #e0c502;">Imagens</li>
                <li class="palavra-home css3" style="color: #e0c502;">CSS3</li>
            </ul>
        </header>

        <main>
            <!--<a class="newsletter"  href="#" onMouseOver="this.style.textDecoration='none';" onMouseOut="this.style.textDecoration='none';">NewsLetter</a>-->
            <div class="background"></div>

            <div class="box">
                <div class="close">X</div> 
                <form action="index_submit" method="get" accept-charset="utf-8">
                  
                    <div class="container">
            
                        <button type="submit" class="btn btn-info">Buscar</button>
                    
                </form>
            </div>    
        </div>
            
            <nav id="menu">
                <ul>
                     <li><a href="index.php">Início</a></li>
                    <li><a href="portfolio.php">Mídias</a></li>
                    <li><a href="bio.php">Equipe</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="desenvolvedores.php">Funções</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
            <section class="secao-inicio saudacao">
                <p class="saudacao">
                    <span class="saudacao-inicio" style="font-family: cursive;">Olá, </span>
                    <span style="font-size: 49px;"> meu nome é &nbsp;</span>
                    <strong style="font-family: cursive;">Braia O'Conner</strong> 
                    <br/>
                    <br/>
                    <div style="text-align: center;">
                        <br/><br/><br/>
                        <span class="saudacao-ultima-linha" style="font-family: cursive; font-size: 2em; color: #889;">sigo linhas de forma</span>
                    </div>
                    <div style="text-align: right;">
                        <em style="font-family: Antique Olive Std Nord Italic;text-align: center;margin-top: -15%; font-weight: bold;">
                            THE FAST <br/> AND <br/> THE FURIOUS
                        </em>
                    </div>
                </p>
                <a class="botao-index" href="bio.php" onMouseOver="this.style.textDecoration='none';" onMouseOut="this.style.textDecoration='none';">Acesse Nosso Guia de Desenvolvimento</a>
            </section>
            
            <section class="secao-inicio trabalhos">
                <h2>Principais Fotos</h2>

                <!---- SLIDER ------>

                <div class="demo">
                    <div class="item">            
                        <div class="clearfix" >
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <?php 
                                    $pasta = 'imagens/fotosSlider/';
                                    $arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);

                                    $i = 0;
                                    foreach($arquivos as $img){

                                        echo '<li data-thumb='.$img.'><img src='.$img.'></li>';

                                        $i++;
                                    }    
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            <!------------------>
                <a class="botao-index" href="portfolio.php" onMouseOver="this.style.textDecoration='none';" onMouseOut="this.style.textDecoration='none';">Acesse Nossa Galeria</a>
            </section>
            <section class="secao-inicio blog">
                <h2 style="color: #0073b9">Blog</h2>
                <small>Últimos posts</small>
                <ol>
                    <li class="mais-recente">
                        <a href="blog.php">O essencial de design responsivo</a>
                        <p class="inicio-post">
                            Design responsivo tem ganho cada vez mais atenção como técnica de desenvolvimento de páginas web para dispositivos móveis. Mas como começar?
                        </p>
                    </li>
                    <li>
                        <a href="blog.php">Por que fazer páginas acessíveis?</a>
                    </li>
                    <li>
                        <a href="blog.php">JavaScript não obstrusivo</a>
                    </li>
                </ol>
                <a class="botao-index" href="blog.php" onMouseOver="this.style.textDecoration='none';" onMouseOut="this.style.textDecoration='none';">Visite nosso blog</a>
            </section>
        </main>
       <footer class="rodape-pagina">
            <h2>Vamos conversar?</h2>
            <p style="FONT-WEIGHT: bold; FONT-FAMILY: cursive;">VOCÊ PODE NOS CONTATAR <span style="color: #ffcb4b"> POR E-MAIL </span> CDC.UNIB@GMAIL.COM </p>
        <ul class="icones-redes-sociais">
            <li>
                <a href="https://github.com/Theel123/layoutSimples" target="_blank" class="github">
                    Github
                </a>
            </li>
            <li>
                <a href="https://twitter.com/BraiaUnib" target="_blank" class="twitter">
                    Twitter
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UC_ygpg8nRycLi1jnTpXZH6w" target="_blank" class="youtube">
                    Youtube
                </a>
            </li>
            <li>
                <a href="https://instagram.com/" target="_blank" class="instagram">
                   Instagram
                </a>
            </li>
        </ul>
        </footer>
    </body>
</html>
