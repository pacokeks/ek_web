<?php
$title = "Contact";
require_once 'misc/header.php';
?>

<header class="masthead bg-primary text-white text-center" style="padding: 1rem 0; margin-bottom: 0;"></header>

<section class="page-section bg-primary text-white mb-0" id="contact" style="margin-top: 0;">
    <div class="container d-flex align-items-center flex-column">
        <h2 class="page-section-heading text-center text-uppercase text-white">Contact</h2>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        </div>
        <div class="col-lg-8 col-xl-7">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                    <label for="name">Full name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                    <label for="phone">Phone number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once 'misc/footer.php'; ?>
