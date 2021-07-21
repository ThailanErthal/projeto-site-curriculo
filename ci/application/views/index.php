
        <!-- Navigation-->
        <?php include "base/navegacao.php"?>
        
        <!-- Masthead-->
        <?php include "base/head.php"?>

        <!-- Portfolio Grid-->    
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Currículos</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#loginPage">
                                
                                <div class="portfolio-hover mx-auto rounded-circle">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid mx-auto rounded-circle img-curriculo" src="<?php echo base_url('assets/img/portfolio/Allan.jpg')?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Allan</div>
                                <div class="portfolio-caption-subheading text-muted">Ferreira Botomé</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#loginPage">
                                <div class="portfolio-hover mx-auto rounded-circle">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid mx-auto rounded-circle img-curriculo" src="<?php echo base_url('assets/img/portfolio/Magno.jpg')?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Magno</div>
                                <div class="portfolio-caption-subheading text-muted">Korzekwa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#loginPage">
                                <div class="portfolio-hover mx-auto rounded-circle">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid mx-auto rounded-circle img-curriculo" src="<?php echo base_url('assets/img/portfolio/Thailan.png')?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Thailan</div>
                                <div class="portfolio-caption-subheading text-muted">Chiele Erthal</div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#loginPage">
                                <div class="portfolio-hover mx-auto rounded-circle">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid mx-auto rounded-circle img-curriculo" src="<?php echo base_url('assets/img/portfolio/Thomas.jpg')?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Thomas</div>
                                <div class="portfolio-caption-subheading text-muted">Dahlin Dias Schuster</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- Contact-->
        <?php include "base/contato.php"?>

        <!-- login pop-up -->

        <div class="login-modal modal fade" id="loginPage" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url('assets/img/close-icon.svg')?>" alt="Close modal" /></div>
                    <div class="container login">
                        <div class="row">
                            <form class="box" name = "login" method = "post" action="<?php echo site_url('projeto/login'); ?>">  >
                                <h1>Login</h1>
                                <p class="text-muted"> Entre com seu usuário e senha!</p> 
                                <input type="text" name="login" placeholder="Nome de usuário" required>
                                <input type="password" name="senha" placeholder="Senha" required> 
                                <a class="forgot text-muted" href="#">Esqueceu sua senha?</a> 
                                <input type="submit" value="Login" href="#">
                                <input type="button" class="criar-conta" value="Criar conta">
                            </form>
                        </div>
                    </div>
                    <div class="container cadastro">
                        <div class="row">
                            <form class="box" name = "cadastro" method = "post" action="<?php echo site_url('projeto/cadastro'); ?>">>
                                <h1>Cadastro</h1>
                                <p class="text-muted"> Faça o seu cadastro!</p> 
                                <input type="text" name="user" placeholder="Nome de usuário" required>
                                <input type="email" name="email" placeholder="E-mail" required>
                                <input type="text" name="nome" placeholder="Nome Completo" required>
                                <input type="password" name="senha" placeholder="Senha" required> 
                                <a class="forgot text-muted fazer-login" href="#">Já tem conta?</a>
                                <input type="submit"value="Cadastrar" class="cadastrar" href="#">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
