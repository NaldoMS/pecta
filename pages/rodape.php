<link rel="stylesheet" href="css/rodape.css">

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Entrar em contato</span>
            </div>
            <div class="col-md-5">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Acompanhe nossos cursos preparatórios sempre em evolução. Insira o seu e-mail e subscreva a nossa newsletter.</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger hidden" id="newsletterError"></div>

                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-details">
                    <h4>Contato</h4>
                    <ul class="contact">
                        <!--<li><p><i class="fa fa-map-marker"></i><strong>Endereço:</strong><a href="/contato">Av Washington Soares 909 - Loja 97 - Shopping Salinas - Edson Queiroz, Fortaleza - CE, 60811-341</a></p></li>-->
                        <li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong><a target="_blank" href="https://web.whatsapp.com/"> +55 85 98848-2528</a></p></li>
                        <li><p><i class="fa fa-envelope"></i> <strong>E-mail:</strong> <a href="mailto:contato@pecta.com.br">contato@pecta.com.br</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Siga-nos</h4>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/pect4/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-instagram"><a href="https://www.instagram.com/pecta_projetos/?hl=en" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="social-icons-linkedin"><a href="https://br.linkedin.com/in/pecta-tecnologia-e-gest%C3%A3o-de-projetos-b312a1139" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="/pecta" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="images/logoRodapeDark.png">
                    </a>
                </div>
                <div class="col-md-7 direitos">
                    <p>© Copyright 2017 <a href="\pecta">PECTA</a>. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-4 direitos">
                    <nav id="sub-menu">
                        <ul>
                            <li><a target="_blank" href="https://github.com/NaldoMS">Desenvolvido por Reginaldo</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>