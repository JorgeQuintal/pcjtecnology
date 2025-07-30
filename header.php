<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="keywords" content="tecnología, reparaciones de computadoras, videovigilancia y seguridad, programación" />
        <title>PCJTECNOLOGY - Soluciones integrales en tecnología </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
        .user-cannot-see {
            display:none
        }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">PCJTECHNOLOGY</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
            <?php if (isset($message)) : ?>
                <div class="alert alert-success alert-dismissible text-center">
                    <?= $message ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Soluciones integrales en tecnología.</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                       
                        <a class="btn btn-primary btn-xl" href="#about">Ver más</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Misión</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Somos una empresa dedicada ayudar a nuestros clientes, buscando la máxima calidad de nuestras soluciones a través de la mejora tecnológica, del servicio y producto que brindamos. 
                        Todos los servicios son de alta innovación, con el objetivo de incrementar su competitividad y 
                        productividad. Cumpliendo con los objetivos estructurados de nuevas soluciones creativas adaptadas a las necesidades del cliente.
                        </p>
                        
                    </div>

                </div>

                <div class="row gx-4 gx-lg-5 justify-content-center">

                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Visión</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Estar comprometidos de forma transparente y eficaz, ser una empresa de referencia tecnológica que destaque por su calidad, eficacia y excelencia.  Desempeñando de forma ética y satisfactoria para crear una alianza de compromiso con nuestros clientes. </p>
                        
                    </div>
                </div>


                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Valores</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Compromiso, Respeto, Innovación, Servicio e Integridad.
                </p>
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Nuestros Servicios</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Mantenimiento Y Soporte</h3>
                            <p class="text-muted mb-0">Atención de sistemas operativos, servidores y redes de datos relacionados con instalación, configuración y actualización.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Reparación De Equipos</h3>
                            <p class="text-muted mb-0">Mantenimiento correctivo de sus equipos tecnológicos, con asesoría técnica garantizada.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Accesos y Asistencia</h3>
                            <p class="text-muted mb-0">Asesoria y soporte en sistemas de control para accceso a sistemas de seguridad.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-screwdriver fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Cableado</h3>
                            <p class="text-muted mb-0">Conectores y dispositivos desde una infraestructura de red.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2p.jpeg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/fullsize/2p.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Mantenimiento y Soporte</div>
                                <!--<div class="project-name">Project Name</div>-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1p.jpeg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/fullsize/1p.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Cableado</div>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3p.jpeg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/fullsize/3p.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Reparación de equipos</div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">¡Comencemos!</h2>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">¡Contacta a los expertos!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->