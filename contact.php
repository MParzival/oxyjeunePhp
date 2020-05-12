<?php
$title = "Contactez Oxyjeune";
require 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-5 text-center mt-4">
            <img src="img/OFF-LOGO-OXY.png" class="logoContact" alt="logoContact">
        </div>
        <div class="col-md-7 mt-2">
            <div class="listContact p-5">
                <h5 class="mb-4 titreContact elephant">Comment nous contacter : </h5>
                <ul class="listContact">
                    <li class="mt-3 segeoUI"><span>e-mail</span> : oxyjeune@free.fr</li>
                    <li class="mt-3 segeoUI"><span>portable</span> : 06.63.08.65.73</li>
                    <li class="mt-3 segeoUI"><span>par le formulaire, à remplir ci-dessous</span></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="formulaire">
        <div class="row">
            <div class="col-lg-12">
                <form id="contact-form" action="" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Votre prénom <span class="green">*</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control formPrenom" placeholder="Votre prénom" value="" >
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Votre nom <span class="green">*</span></label>
                            <input type="text" id="name" name="name" class="form-control formNom" placeholder="Votre nom" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Votre email <span class="green">*</span></label>
                            <input type="email" id="email" name="email" class="form-control formEmail" placeholder="Votre email" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Votre téléphone <span class="green">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control formPhone" placeholder="Votre téléphone" value="" required>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="sujet">Sujet <span class="green">*</span></label>
                            <input type="text" id="sujet" name="sujet" class="form-control formSujet" placeholder="Sujet" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="societe">Raison social</label>
                            <input type="text" id="societe" name="societe" class="form-control formSujet" placeholder="societe ou association" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Votre message <span class="green">*</span></label>
                            <textarea id="message" name="message" class="form-control formMessage" placeholder="Votre message" rows="5" value=""></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <p class="green"><b>* ces informations sont requises</b></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn-fabric" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php
require 'footer.php';
?>