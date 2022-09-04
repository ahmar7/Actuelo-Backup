<?php

include 'header-index.php';
?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Recrutement</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Recrutement</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">

            <div class="col-lg-3 " style="min-height: 400px;">

            </div>

            <div class="col-lg-6  py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Remplir vos informations</h6>
                    <h1 class="mb-4">Formulaire de Recrutement</h1>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nom">
                                    <label for="name">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="prenom" placeholder="Prenom">
                                    <label for="Prenom">Prenom</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="tel" placeholder="tel">
                                    <label for="Tel">Tel</label>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" accept=".doc, .docx,.pdf" placeholder="CV">
                                    <label for="subject">CV</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Laissez un message ici" id="message" style="height: 100px"></textarea>
                                    <label for="message">Description</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0" style="min-height: 400px;">

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->




<?php

include 'footer.php';
?>