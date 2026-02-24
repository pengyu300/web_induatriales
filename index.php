<!DOCTYPE html>
<html lang="en">

<div id="cabeceragenerica" style="display:none">
    <?php
    require_once ('./src/php/dom/cabecera.php');
    ?>
</div>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPM</title>
    <link rel="icon" href="./src/imagenes/lododept.jpg">
    <link rel="stylesheet" href="./src/css/styles.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="./src/js/funciones.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <style>
        .img-container {
            width: 100%;
            height: 700px;
            /* Define una altura fija para todas las imágenes */
            overflow: hidden;
        }

        .img-container img {
            width: 100%;
            height: 70%;
            /* Cubre completamente el contenedor */
        }

        .img-container2 {
            height: 400px;
            /* Altura fija para todas las imágenes */
            overflow: hidden;
        }

        .img-container2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cubre completamente el contenedor */
        }
    </style>

    <script>
        function mostrarMiembro(id_miembro) {
            document.getElementById("body").style.display = "none";
            document.getElementById("headertt").style.display = "none";
            document.getElementById("cabeceragenerica").style.display = "block";

            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let miembro = document.getElementById("miembro");
                    miembro.innerHTML = this.responseText;
                }
            };

            xmlhttp.open("POST", "Asincronas/mostrarMiembroPorId.php");
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id=" + id_miembro);
        }

        function mostrarProyecto(idproyecto) {
            console.log(idproyecto);
            document.getElementById("body").style.display = "none";
            document.getElementById("headertt").style.display = "none";
            document.getElementById("cabeceragenerica").style.display = "block";

            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let miembro = document.getElementById("miembro");
                    miembro.innerHTML = this.responseText;
                }
            };

            xmlhttp.open("POST", "Asincronas/mostrarProyectoPorId.php");
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id=" + idproyecto);
        }



        function quitarLogoTitulo() {
            let avisador = 0;
            let menuDesplegable = document.getElementById("navbarNavPrimaryDropdown");
            if (logoTitulo.classList.contains("d-none")) {

                logoTitulo.classList.remove("d-none"); //mostrar
                avisador = 1;

            } else {

                logoTitulo.classList.add("d-none"); //ocultar
                avisador = 0;
            }


        }

        window.addEventListener('resize', function mostrarLogoTituloVentanaGrande() {
            let menuDesplegable = document.getElementById("navbarNavPrimaryDropdown");
            let logoTitulo = document.getElementById("logoTitulo");
            if (window.innerWidth > 767 && logoTitulo.classList.contains("d-none")) {

                logoTitulo.classList.remove("d-none"); //mostrar

            } else if (window.innerWidth < 767 && avisador == 0) {

                logoTitulo.classList.add("d-none"); //ocultar

            }
        });




    </script>

</head>

<body onload="activarIndex();">

    <div id="headertt" style="display:block">
        <section id="header">
            <header id="cabeceraPrincipal">

                <nav class="navbar navbar-expand-md navbar-dark justify-content-center">



                    <div class="container-fluid">
                        <button id="hamburguesa" onclick="quitarLogoTitulo()"
                            class="navbar-toggler border-white bg-primary border-2 ms-0 me-0" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavPrimaryDropdown"
                            aria-controls="navbarNavPrimaryDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavPrimaryDropdown">

                            <ul class="navbar-nav mx-auto my-4" id="menu">
                                <li class="nav-item">
                                    <a href="index.php" id="index"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./src/php/lineaInvestigacion/researchLines.php"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">LINEAS DE
                                        INVESTIGACIÓN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./src/php/miembros/team.php"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">EQUIPO</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./src/php/proyectos/projects.php"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">PROYECTOS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./src/php/publicaciones/publications.php"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">PUBLICACIONES</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./src/php/noticias/noticias.php"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">NOTICIAS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./src/php/docencia/docencia.php"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">DOCENCIA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pie"
                                        class="efecto1 nav-link btn btn-sm btn-primary mx-5 btn-lg">CONTACTO</a>
                                </li>

                            </ul>
                            <a href="./src/php/login/login.php"><img src="./src/imagenes/dom/candado.png"
                                    style="z-index:400; height:30px; width:30p; margin-bottom:80px"
                                    alt="candado de administrador" class="efecto1"></a>
                        </div>

                    </div>
                </nav>
                <div id="logoTitulo" class="efecto1 animate__animated animate__lightSpeedInLeft container-fluid">
                    <div class="row justify-content-center align-items-center flex-nowrap mx-5">
                        <div class="col-auto">
                            <img class="mb-3 img-fluid" src="./src/imagenes/dom/logodept.png" style="max-width: 6vh;"
                                alt="logo dept">
                        </div>
                        <div class="col-auto">
                            <img class="img-fluid" src="./src/imagenes/dom/titulo.png" style="max-width: 100%;"
                                alt="titulo">
                        </div>
                    </div>
                </div>




    </div>
    </header>


    </section>
    </div>


    <!-- Body  -->
    <section id="body">



        <div class="container mt-4 mb-5">
            <div class="container text-center">
                <h1 class="underline-title text-center mt-5 text-uppercase fs-1">Noticias destacadas</h1>
            </div>
            
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <!-- PONER IMAGEN DE LA UNIVERSIDAD -->

        <!-- Modal para mostrar la información detallada de la noticia -->
        <div class="modal fade" id="noticiaModal" tabindex="-1" aria-labelledby="noticiaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content px-5">
                    <div class="modal-header ">
                        <h2 class="modal-title" id="noticiaModalLabel"></h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="noticiaModalContent">
                        <!-- Aquí se cargará el contenido de la noticia -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="prevButton">Anterior</button>
                        <button type="button" class="btn btn-secondary" id="nextButton">Siguiente</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let currentNoticiaIndex = 0; // Inicializar currentNoticiaIndex en 0
            let noticias = <?php echo json_encode($noticias); ?>;

            function mostrarNoticiaModal(idNoticia) {
                idNoticiaBuscada = idNoticia + "";
                let posicion = noticias.findIndex(noticia => noticia.id_noticia === idNoticiaBuscada);

                if (posicion !== -1) {
                    console.log("La posición en el array de la noticia con ID", idNoticiaBuscada, "es", posicion);
                } else {
                    console.log("No se encontró ninguna noticia con ID", idNoticiaBuscada, "en el array.");
                }

                mostrarNoticia(posicion);
            }

            function mostrarNoticia(index) {
                let modalContent = document.getElementById("noticiaModalContent");
                modalContent.innerHTML = `
                <h6>${noticias[index].fecha}</h6>
            <img src="./src/imagenes/noticias/${noticias[index].foto}" alt="Imagen de la noticia" style="height: 200px; width: 200px; margin-right: 15px;"
                                                    class="mt-4 float-start" alt="Imagen de la noticia.">
            <p class="fs-4">${noticias[index].texto}</p>
        `;
                document.getElementById("noticiaModalLabel").innerText = noticias[index].titulo;
            }

            function mostrarNoticiaInicial() {
                if (currentNoticiaIndex < 0 || currentNoticiaIndex >= noticias.length) {
                    currentNoticiaIndex = 0; // Establecer en 0 si es un valor inválido
                }
                mostrarNoticia(currentNoticiaIndex);
            }

            document.getElementById("prevButton").addEventListener("click", function () {
                currentNoticiaIndex = (currentNoticiaIndex - 1 + noticias.length) % noticias.length;
                mostrarNoticia(currentNoticiaIndex);
            });

            document.getElementById("nextButton").addEventListener("click", function () {
                currentNoticiaIndex = (currentNoticiaIndex + 1) % noticias.length;
                mostrarNoticia(currentNoticiaIndex);
            });


        </script>
        <?php
        require_once ('./src/php/db.php');
        $db = new industrialesDB(); ?>

        



        



    </section>



    <div id="miembro"></div>
    <?php
    require_once ('./src/php/dom/pie.php');
    ?>
</body>

</html>