
        <!-- Navigation-->
        <?php include "base/navegacao.php"?>
        
        <!-- Masthead-->
        <?php include "base/head.php"?>

        <!-- Portfolio Grid-->
        <?php include "portfolios/portfolio_grid.php"?>

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
                                <input type="text" name="login" placeholder="Nome de usuário">
                                <input type="password" name="senha" placeholder="Senha"> 
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
