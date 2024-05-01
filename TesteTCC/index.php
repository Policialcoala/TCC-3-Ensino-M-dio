<?php 
include ('conexao.php');
?>
<!DOCTYPE html>
<html lang="en.">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>

<body>
    <!-- SISTEMA ONDE O CADASTRO OU LOGIN DO USUARIO MOSTRA O PRODUTO QUE ELE POSSUI PARA BAIXAR OU ACHAR MAIS RAPIDO O SOFTWARE DO APARENHO (MOUSE, TECLADO, ...) -->
    <nav>
        <div class="logo">
            <h1>Logo</h1>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">casa</a></li>
            <li><a href="pagina2.php">Produtos</a></li>
            <li><a href="pagina3.php">Software</a></li>
            <li><a href="login.php" class="login-button">Login</a></li>
        </ul>
        
            
        </div>
    </nav>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.png" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="img/2.png" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="img/3.png" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" aria-label="Previous">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" aria-label="Next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    <div class="bloco">
        <div class="conteudo">
            <h2>Teste de texto principal</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At delectus laboriosam corporis excepturi magni
                quia eligendi a mollitia numquam hic obcaecati adipisci quo officia qui culpa, doloribus aspernatur sed
                modi.</p>
        </div>
        <div class="conteudo">
            <h2>Teste de texto principal</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At delectus laboriosam corporis excepturi magni
                quia eligendi a mollitia numquam hic obcaecati adipisci quo officia qui culpa, doloribus aspernatur sed
                modi.</p>
        </div>
        <div class="conteudo">
            <h2>Teste de texto principal</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At delectus laboriosam corporis excepturi magni
                quia eligendi a mollitia numquam hic obcaecati adipisci quo officia qui culpa, doloribus aspernatur sed
                modi.</p>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h2>Sobre nós</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna
                    sed, convallis ex.</p>
            </div>
            <div class="footer-section">
                <h2>Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h2>Redes sociais?</h2>
                <ul>
                    <li><a href="#" class="fa-facebook"></a>FACE</li>
                    <li><a href="#" class="fa-twitter"></a>X</li>
                    <li><a href="#" class="fa-instagram">INSTA</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">Copyright 2023 - All Rights Reserved</p>
    </footer>
</body>
<script src="script.js"></script>

</html>