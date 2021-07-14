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
                name="contato"
                method = "post"
			    action="<?php echo site_url('projeto/contato'); ?>">
                <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->

                                <input class="form-control" name="nome" id="nome" type="text" placeholder="Seu nome *" required/>
                                <div class="invalid-feedback" data-sb-feedback="nome:required">Digite o seu nome.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" id="email" type="email" placeholder="Seu e-mail *" required />
                                <div class="invalid-feedback">Digite seu email.</div>
                                <div class="invalid-feedback">Email inválido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="telefone" id="telefone" type="tel" placeholder="Seu telefone *" required />
                                <div class="invalid-feedback">Digite seu número de contato.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Sua mensagem *" required></textarea>
                                <div class="invalid-feedback">Digite sua mensagem.</div>
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
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar</button></div>

                </form>
            </div>
        </section>
   