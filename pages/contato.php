<div role="main" class="main">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location.
    <div id="googlemaps" class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2186556293864!2d-38.48302118582445!3d-3.7625290972626804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c746036daa41b3%3A0x28f6373538ae7d3b!2sIvia!5e0!3m2!1sen!2sbr!4v1490399014883" frameborder="0" style="border:0; width: 100%; height: 100%" allowfullscreen=""></iframe>
    </div>
-->
    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                    <strong>Successo!</strong> sua mensage foi enviada com sucesso.
                </div>

                <div class="alert alert-danger hidden mt-lg" id="contactError">
                    <strong>Error!</strong> Ocorreu um erro no envio do e-mail, tente mais tarde.
                    <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                </div>

                <h2 class="mb-sm mt-sm"><strong>Contato</strong></h2>
                <form id="contactForm" action="php/contact-form.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Nome *</label>
                                <input type="text" value="" data-msg-required="Por favor, entre com seu nome" maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>E-mail *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Por favor, entre com seu e-mail" maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Assunto</label>
                                <input type="text" value="" data-msg-required="Entre com seu assunto" maxlength="100" class="form-control" name="subject" id="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Mensagem *</label>
                                <textarea maxlength="5000" data-msg-required="Entre com sua mensagem" rows="10" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Enviar" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4 class="heading-primary mt-lg">Entre em <strong>Contato</strong></h4>
                <p>Entre em contato conosco para esclarecer dúvidas, relatar reclamações ou dar sugestões!</p>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-envelope"></i> <strong>E-mail:</strong> <a href="mailto:contato@pecta.com.br">contato@pecta.com.br</a></li>
                </ul>

                <hr>

                <h4 class="heading-primary">Horário de <strong>Funcionamento</strong></h4>
                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i> Segunda - Sexta - 09h às 17h</li>
                    <li><i class="fa fa-clock-o"></i> Sábado - 09h às 14h</li>
                    <li><i class="fa fa-clock-o"></i> Domingo - Fechado</li>
                </ul>

            </div>

        </div>

    </div>

</div>
