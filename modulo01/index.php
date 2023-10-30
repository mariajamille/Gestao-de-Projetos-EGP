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
                        </div>

                        <p>Prezado (a) cursista,
                        </p>
                        <p>Nesta aula, a ideia é entendermos que o planejamento estratégico de uma organização e, em
                            especial, no serviço público é melhor efetivado por intermédio do gerenciamento de projetos.
                            Para tanto, serão apresentadas noções de planejamento estratégico e de gerenciamento de
                            projetos.</p><br>
                        <!-- Título -->
                        <h2 class="Titulo">Objetivo</h2><br>
                        <p><i class="fa fa-bullseye"></i> Apresentar noções básicas de planejamento
                            estratégico e de gerenciamento de projetos, de modo a instrumentalizar os participantes para
                            o reconhecimento da importância desses aspectos, tendo em vista as mudanças nas
                            organizações.</p>
                        <br><br>

                        <!-- SCRIPT INTERAÇAO COM ALUNO-->
                        <ul class="none ">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
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