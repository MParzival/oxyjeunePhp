<?php
$title = "Une réparation c'est ici !";
require 'header.php';
?>

<h1 class="textRepairIntro text-center">Réparation / Atelier</h1>
    <img src="img/repair/IMG_1675.jpg" alt="image d'un velo en reparation" class="imgRepair">
<hr>
<section class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Atelier de réparation de vélos à Saint-Médard-en-Jalles</h3>
            <p class="text-center">
                Oxy’jeune c’est aussi l’entretien et la réparation de votre vélo. <br>
            </p>
            <ul><u>Pour cela plusieurs solutions s'offrent à vous :</u>
                <li>soit nous vous accueillons à notre local de saint Médard en Jalles <b>(Sur rendez-vous)</b></li>
                <li>soit nous nous déplacerons à votre domicile ou sur votre lieu de travail.</li>
            </ul>
            <p class="text-center">
                La prise de contact se fait par téléphone au
                <b>0663086573</b> ou par mail à <b>oxy’jeune@free.fr</b> afin de voir ensemble la solution la plus
                <b>adaptée</b>. <br>
            </p>
            <p class="text-center">
                Quelque soit le problème mécanique rencontré, nous ferons notre maximum pour remettre en état
                de marche votre vélo avec le professionnalisme et le sérieux qui nous caractérise à des tarifs
                attractifs !
                C’est là notre philosophie, pouvoir vous proposez nos services aux meilleurs prix !
            </p>
            <p class="text-center textHookRepair">
                Alors n’hésitez pas à nous contacter !
            </p>
        </div>
    </div>
</section>
<hr class="container">
<section class="container mt-5">
    <div class="d-flex justify-content-around">
        <div class="gallery">
            <video id="video1" width="300" height="300" controls="controls" onmouseover="piloteVideo()">
                <source src="img/repair/IMG_1631.mp4" type="video/mp4">
            </video>
            <div class="titre">
                Forfait révision
                <hr>
            </div>
            <div class="btnSection">
                <a href="img/tarif/forfait.pdf" target="_blank">Tarifs révision</a>
            </div>
        </div>

        <div class="gallery">
            <div class="divImg"></div>
            <div class="titre">
                Prestation freinage
                <hr>
            </div>
            <div class="btnSection">
                <a href="img/tarif/freinage.pdf" target="_blank">Tarifs freinage</a>
            </div>
        </div>

        <div class="gallery">
            <div class="divImg1"></div>
            <div class="titre">
                Prestation transmission
                <hr>
            </div>
            <div class="btnSection">
                <a href="img/tarif/transmission.pdf" target="_blank">Tarifs transmission</a>
            </div>
        </div>

        <div class="gallery">
            <div class="divImg2"></div>
            <div class="titre">
                Prestation roues
                <hr>
            </div>
            <div class="btnSection">
                <a href="img/tarif/roues.pdf" target="_blank">Tarifs roues</a>
            </div>
        </div>

        <div class="gallery">
            <div class="divImg3"></div>
            <div class="titre">
                Prestation direction
                <hr>
            </div>
            <div class="btnSection">
                <a href="img/tarif/direction.pdf" target="_blank">Tarifs direction</a>
            </div>
        </div>

        <div class="gallery">
            <div class="divImg4"></div>
            <div class="titre">
                Prestation cadre
                <hr>
            </div>
            <div class="btnSection">
                <a href="img/tarif/roues.pdf" target="_blank">Tarifs cadre</a>
            </div>
        </div>

    </div>
</section>
<?php
require 'footer.php';
?>