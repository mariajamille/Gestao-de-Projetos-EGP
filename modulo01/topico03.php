<!DOCTYPE html>
<html lang="pt-br">
<?php
include('layout/header.php');
?>

<body>
    <!-- COMEÇO DA NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV  -->

    <!-- COMEÇO DO MENU  -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM DO MENU  -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!--  Título Pricipal -->
                        <h2 class="Titulo fw-bolder">03 - Elaboração de Projeto</h2><br>

                        <div class="bd scrool">
                            <p><strong>Objetivo:</strong></p>

                            <!-- Lista de Movimento-->
                            <div>
                                <ul class="list02">
                                    <li class="img-fluid wow fadeInLeft " data-wow-delay="0.3s"><i
                                            class=" fa fa-arrow-right CorLaranja"></i> Interpretar o significado de
                                        Plano do Projeto; </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                            class="fa fa-arrow-right CorLaranja"></i> Classificar e organizar as
                                        atividades de maneira analítica e em forma de miniprojetos;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i
                                            class="fa fa-arrow-right CorLaranja"></i> Planejar as atividades por meios
                                        de gráficos;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i
                                            class="fa fa-arrow-right CorLaranja"></i> Identificar o caminho crítico das
                                        atividades de um projeto.</li>

                                </ul>
                            </div>
                        </div>
                        <br>

                        <!-- subtítulo-->
                        <h3 class="Subtopico fw-bolder scrool">Plano do Projeto</h3>
                        <!-- subtítulo -->

                        <p>É nessa fase de elaboração que se concentram os esforços de planejamento de todas as
                            características do projeto.</p>
                        <p>O Plano de Projeto é um documento que apresenta, de forma completa e organizada, toda a
                            concepção, a fundamentação, o planejamento e os meios de acompanhamento e da avaliação do
                            projeto, sendo referência básica para a sua execução.</p>
                        <p>O papel importante nesse momento é conhecer os principais componentes do plano de um projeto
                            e como elaborar a sua estruturação.</p>

                        <div class="bd-callout bd-callout-success">
                            <p class="scrool">
                                "Plano do Projeto deve ser estruturado a partir de três componentes básicos: Escopo,
                                Plano de Ação e Plano de Monitoramento."
                            <p class="text-end">(MOURA ; BARBOSA 2008, p. 42) –</p>
                            </p>
                        </div>
                        <br>

                        <!-- subtítulo-->
                        <h3 class="Subtopico fw-bolder scrool">Escopo</h3>
                        <!-- subtítulo -->

                        <p>A declaração do escopo do projeto visa descrever com clareza o produto final ou o serviço que
                            deverá ser feito. Por sua vez, ele é composto pelos seguintes elementos:</p>

                        <!-- Lista de Movimento-->
                        <div>
                            <ul class="list02">
                                <li class="img-fluid wow fadeInLeft " data-wow-delay="0.3s"><i
                                        class=" fa fa-bullseye CorVerdeEstado"></i> Definição do problema ou
                                    situação geradora; </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i> Justificativa (Por quê? O que
                                    pretendo realizar é importante?);</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i> Objetivos geral e específicos;
                                </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i> Resultados esperados;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i> Abrangência (delimitação dos
                                    objetivos).</li>

                            </ul>
                        </div>
                        <br>

                        <!-- subtítulo-->
                        <h3 class="Subtopico fw-bolder scrool">Plano de Ação</h3>
                        <!-- subtítulo -->

                        <p>É um documento que apresenta de forma estruturada todos os procedimentos e os recursos
                            necessários para a execução do escopo do projeto.</p>
                        <p>Fazem parte do Plano de Ação os seguintes elementos:</p>
                        <br>

                        <div class="alert alert-primary" role="alert">
                            <p><strong>Desdobramento de atividades e tarefas</strong> </p>
                            <p>Quais as atividades que devem ser realizadas para concluir o escopo estabelecido?</p>
                        </div>
                        <!--Fim Alerta -->
                        <!--Alerta -->

                        <div class="alert alert-warning" role="alert">
                            <p><strong>Estimativa de prazos</strong> </p>
                            <p>Qual a duração de cada atividade e o impacto no conjunto do escopo?</p>
                        </div>
                        <!--Fim Alerta -->
                        <!--Alerta -->

                        <div class="alert alert-success" role="alert">
                            <p><strong>Estimativa de custos e recursos</strong> </p>
                            <p>Qual o custo econômico e financeiro de cada atividade? Quais os recursos e os tipos
                                envolvidos para a realização de cada atividade?</p>
                        </div>
                        <!--Fim Alerta -->
                        <!--Alerta -->

                        <div class="alert alert-info" role="alert">
                            <p><strong>Rede de tarefas</strong> </p>
                            <p>A rede de tarefas, ou cronograma de rede, visa organizar as tarefas em ordem de sequência
                                e de dependência. Quais as tarefas que devem ser realizadas primeiro? Qual o impacto do
                                atraso de uma tarefa sobre as outras?</p>
                        </div>
                        <!--Fim Alerta -->
                        <!--Alerta -->

                        <div class="alert alert-danger" role="alert">
                            <p><strong>Cronograma</strong> </p>
                            <p>Disposição das atividades e dos prazos de execução, de forma gráfica.</p>
                        </div>
                        <!--Fim Alerta -->
                        <br>

                        <!-- subtítulo-->
                        <h3 class="Subtopico fw-bolder scrool">Plano do Projeto</h3>
                        <!-- subtítulo -->

                        <p>É de fundamental importância para a Equipe de Projeto, a fim de garantir o sucesso do alcance
                            dos objetivos propostos no Plano do Escopo e a execução do projeto.</p>
                        <p>O Plano de Monitoramento e Avaliação é um documento que contém os procedimentos necessários
                            para o acompanhamento e a avaliação sistemática da execução do projeto e dos resultados
                            alcançados. Reporta-se à forma e a quando e como vai ser feito esse acompanhamento. Além
                            disso, indica a qualidade requerida e os parâmetros de qualidade.</p>
                        <p>Os elementos do Plano de Monitoramento e Avaliação são: </p>
                        <br>
                        <!-- Lista de Movimento-->
                        <div>
                            <ul class="list02">
                                <li class="img-fluid wow fadeInLeft " data-wow-delay="0.3s"><i
                                        class=" fa fa-arrow-right CorVerdeEstado"></i> Matriz de Resultados e
                                    Serviços/Produtos; </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                        class="fa fa-arrow-right CorVerdeEstado"></i> Planilha de Procedimentos de
                                    Monitoramento;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i
                                        class="fa fa-arrow-right CorVerdeEstado"></i> Planilha de Procedimentos de
                                    Avaliação;
                                </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i
                                        class="fa fa-arrow-right CorVerdeEstado"></i> Análise de Risco.</li>
                            </ul>
                        </div>
                        <br>


                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item03.1">
                            03.1 - Definição das Atividades e da Estrutura Analítica do Projeto – EAP</h3>
                        <!-- subtopico -->
                        <p>Essa etapa consiste em organizar as atividades a serem executadas sob a forma de miniprojetos
                            ou sob a forma de pacotes de atividades.</p>
                        <p>Significa analisar e estruturar o cronograma de uma forma sistematizada para que se tenha uma
                            sequência lógica de atividades, inclusive entender se existe alguma dependência entre uma
                            atividade e outra em relação à ordem de execução, à ordem de prioridade. Isso vai impactar
                            na estimativa de prazos e custos e na execução do projeto.</p>
                        <p>Observe o exemplo da imagem a seguir, que representa a Estrutura Analítica de Projeto. No
                            caso específico, corresponde ao projeto de Implantação do Escritório Corporativo da COGERH,
                            conhecido como EPC.</p>
                        <br>

                        <!-- FIM DO CONTEUDO INICIO  -->

                        <!-- IMAGEM 11 -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Descrição de cima</p>
                            <div class="zoom">
                                <a href="imgs/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img src="imgs/Figura11.png" alt="Imagem que remete a organização" id="img-teste">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Projeto de
                                Implantação</p>
                        </div>

                        <!-- Imagem - 11 -->
                        <div class="modal fade text-center" id="Imagem11" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura11.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>EAP do Projeto de Implantação do
                                        Escritório de Projetos da Cogerh. (Cogerh, 2012)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 11 - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <p><strong>Algumas atividades:</strong></p>
                        <!-- Lista de Movimento-->
                        <div>
                            <ul class="list02">
                                <li class="img-fluid wow fadeInLeft " data-wow-delay="0.3s"><i
                                        class=" fa fa-bullseye CorVerdeEstado"></i> Elaborar e registrar projetos;
                                </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i> Solicitar licença de construção
                                    junto aos órgãos responsáveis;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i> Contratar e treinar pessoas;
                                </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i
                                        class="fa fa-bullseye CorVerdeEstado"></i>
                                    Comprar materiais etc.</li>
                            </ul>
                        </div>
                        <br>
                        <p><strong>Pacote de Atividades/Miniprojetos</strong></p>
                        <br>

                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloexemplo">
                                        <div class="div_teste">
                                            <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <div class="txt-caixasecundaria">Aquisição de Equipamentos é uma atividade que
                                            poderá apresentar as seguintes tarefas:

                                            <p>kkkk</p>
                                        <div>
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->


                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                            </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria"> Ao conhecermos detalhadamente o que devemos
                                            fazer, precisaremos saber em quanto tempo as atividades serão executadas e a
                                            que custo.
                                            Para se fazer uma análise de viabilidade de projetos é necessário definir
                                            antecipadamente quanto será o tempo necessário para fazer determinada ação e
                                            qual será o custo a ser gerado.</p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->



                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Botões de navegação -->
    <div class="text-center">
        <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                class="fa-solid fa-chevron-right"></i></a>
    </div>

    <!-- INÍCIO DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP -->
    <!-- BOTÃO BACK TO TOP COM UMA BARRA DE PROGRESSO -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <!-- FIM DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP-->

    <!-- COMEÇO DO FOOTER  -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- FIM DO FOOTER  -->
</body>

</html>