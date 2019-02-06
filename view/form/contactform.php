<form action="" method="post" role="form" class="contactForm">
                                        <div id="sendmessage">Votre message a été envoyé. Merci !</div>
                                        <div id="errormessage"></div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="S'il vous plaît entrer au moins 4 caractères" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="S'il vous plaît entrer un email valide" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 8 caractères du sujet" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose pour nous" placeholder="Message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-light col-5">Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
