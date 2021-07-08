
        <!-- Navigation-->
        <?php include "base/navegacao.php"?>
        
        <!-- Masthead-->
        <?php include "base/head.php"?>

        <!-- Portfolio Grid-->
        <?php include "portfolios/portfolio_grid.php"?>

        <!-- Contact-->
        <!-- Contact-->
 <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Entre em contato!</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->               
                <form id="contactForm" 
                data-sb-form-api-token="API_TOKEN" 
                method = "post"
			    action = "index">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->

                                <input class="form-control" id="nome" type="text" placeholder="Seu nome *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="nome:required">Digite o seu nome.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Seu e-mail *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Digite seu email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email inválido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="telefone" type="tel" placeholder="Seu telefone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="telefone:required">Digite seu número de contato.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="mensagem" placeholder="Sua mensagem *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="mensagem:required">Digite sua mensagem.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Enviado com sucesso!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro no Enviar!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar</button></div>
                </form>
            </div>
        </section>

        <!-- Portfolio Modals-->
        <?php include "portfolios/portfolio_modal.php"?>

        <!-- login pop-up -->

        <div class="login-modal modal fade" id="loginPage" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url('assets/img/close-icon.svg')?>" alt="Close modal" /></div>
                    <div class="container login">
                        <div class="row">
                            <form onsubmit="event.preventDefault(" class="box" name = "login" method = "post">
                                <h1>Login</h1>
                                <p class="text-muted"> Entre com seu usuário e senha!</p> 
                                <input type="text" name="login" placeholder="Nome de usuário">
                                <input type="password" name="senha" placeholder="Senha"> 
                                <a class="forgot text-muted" href="#">Esqueceu sua senha?</a> 
                                <input type="submit" value="Login" href="<?php echo site_url('projeto/login'); ?>)">
                                <input type="button" class="criar-conta" value="Criar conta">
                            </form>
                        </div>
                    </div>
                    <div class="container cadastro">
                        <div class="row">
                            <form onsubmit="event.preventDefault()" class="box" name = "cadastro"
			method = "post">
                                <h1>Cadastro</h1>
                                <p class="text-muted"> Faça o seu cadastro!</p> 
                                <input type="text" name="user" placeholder="Nome de usuário">
                                <input type="email" name="email" placeholder="E-mail">
                                <input type="text" name="nome" placeholder="Nome Completo">
                                <input type="password" name="senha" placeholder="Senha"> 
                                <a class="forgot text-muted fazer-login" href="#">Já tem conta?</a>
                                <input type="submit"value="Cadastrar" class="cadastrar" href="#">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
