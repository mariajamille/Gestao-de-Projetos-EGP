<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layout/header.php');
?>

<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM do menu lateral   -->

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">

                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Apresentação</h2>
                        <br>

                        <div class="text-center">
                            <a href="imgs/banner.jpg" data-bs-toggle="modal" data-bs-target="#Imagem00">
                                <img class="img-fluid" src="imgs/banner.jpg" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"></p>
                        </div><br>

                        <p>Prezado (a) cursista,
                        </p>
                        <p>Esta aula tem como objetivo apresentar a compreensão sobre as metodologias em gerenciamento
                            de projetos e como podem ser desenvolvidas propostas para construção de uma cultura de
                            gerenciamento de projetos no ambiente de trabalho.</p><br>
                        <!-- Título -->
                        <h2 class="Titulo">Objetivo</h2><br>
                        <p><i class="fa fa-bullseye"></i> Discorrer sobre o significado e a importância da metodologia
                            em gerenciamento de projetos.</p>
                        <p><i class="fa fa-bullseye"></i> Apresentar orientações de como a metodologia é vista no PMBOK.
                        </p>
                        <p><i class="fa fa-bullseye"></i> Apresentar passos de como construir uma proposta metodológica
                            de gerenciamento de projetos no ambiente de trabalho.
                        </p>
                        <p><i class="fa fa-bullseye"></i> Discutir a avaliação de programas e projetos, o monitoramento
                            e o controle.
                        </p>
                        <br><br>

                        <!-- SCRIPT INTERAÇAO COM ALUNO-->
                        <ul class="none ">
                            <li><i></i>
                                <h4>
                                    Olá! Nome_Completo, Bem-vindo(a) ao módulo 01 do curso Gestão de
                                    Projetos! Esperamos que o conteúdo proposto contribua para aprimorar o seu
                                    conhecimento acerca do tema. Bons estudos!
                                </h4>
                            </li>
                        </ul>
                        <!-- FIM SCRIPT INTERAÇAO COM ALUNO--> <br><br>

                        <!-- Botões de navegação -->
                        <div class="text-center">
                            <a href="topico01.php" class="btn btn-outline-success" role="button"
                                aria-pressed="true">Próximo <i class="bi bi-chevron-right"></i></a>
                        </div>

                        <?php
                        include('layout/footer.php');
                        ?>
</body>

</html>