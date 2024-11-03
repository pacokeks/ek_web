<?php
$title = "Über mich";
require_once 'misc/header.php';
?>

<div class="d-flex flex-column min-vh-100">
    <header class="masthead bg-primary text-white text-center flex-grow-1">
        <section class="page-section bg-primary text-white mb-0" id="secret">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Geheime Informationen</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead"><strong>Vollständiger Name:</strong> Pascal Stein</p>
                    </div>
                    <div class="col-lg-4 me-auto">
                        <p class="lead"><strong>Adresse:</strong> Detmold</p>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <?php require_once 'misc/footer.php'; ?>
</div>
