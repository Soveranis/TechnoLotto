<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los nombres de los jugadores
    $nombreJugador1 = $_POST["name-1"];
    $nombreJugador2 = $_POST["name-2"];
    $nombreJugador3 = $_POST["name-3"];
    $nombreJugador4 = $_POST["name-4"];

    // Procesar los datos adicionales si es necesario
    // Por ejemplo, guardarlos en una base de datos o realizar cálculos
} else {
    // Si se accede a esta página de forma incorrecta, muestra un mensaje de error
    echo "Error: Acceso incorrecto.";
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
    <title>TechnoLotto</title>
</head>




<style>
</style>



<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="index.html">
                        <img src="../images/logo.png" alt="" /><span>
                            TechnoLotto
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link animated-item " href="../index.html">Incio <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link animated-item" href="../reglas.html">Reglas</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link animated-item active" href="#">Jugando</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link animated-item" href="../Creacion.html">Informacion Creacion </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>



        <section class="service_section layout_padding">
            <div class="container">
                <div>
                    <div class="card animated-item" style="width: 200px; height:300px; margin:auto;">
                        <img id="card-image" src="" alt="">
                    </div><br>
                    <center> <button id="next-button" class="text-uppercase custom_orange-btn mr-3 animated-item"
                            style="margin:auto;">Mostrar Carta</button></center>
                </div>


                <div class="layout_padding2">
                    <div class="card-deck">


                        <div style="margin:10px;">
                            <div class="tablero animated-item">
                                <!-- Fila 1 -->
                                <div class="cartas-fila">
                                    <div>
                                        <div class="carta" id="carta">

                                        </div>

                                    </div>


                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 2 -->
                                <div class=" cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 3 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <center><label for="" class=" animated-item"><?php  echo $nombreJugador1 ?></label>
                            </center>
                        </div>


                        <div style="margin:10px;">
                            <div class="tablero_2 tabla2 animated-item">
                                <!-- Fila 1 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 2 -->
                                <div class=" cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 3 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <center><label for="" class=" animated-item"><?php echo $nombreJugador2 ?></label>
                            </center>
                        </div>



                        <div style="margin:10px;">
                            <div class="tablero_3 tabla3 animated-item">
                                <!-- Fila 1 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 2 -->
                                <div class=" cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 3 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <center><label for="" class=" animated-item"><?php  echo  $nombreJugador3 ?></label>
                            </center>
                        </div>




                        <div style="margin:10px;">
                            <div class="tablero_4 tabla4 animated-item">
                                <!-- Fila 1 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 2 -->
                                <div class=" cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fila 3 -->
                                <div class="cartas-fila">
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="carta" id="carta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <center><label for="" class=" animated-item"><?php  echo $nombreJugador4 ?></label>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- footer section -->
        <section class="container-fluid footer_section">
            <p>
                Copyright &copy; 2024 Creador
                <a href="https://www.instagram.com/sovera_nis?igsh=dnB3b2FuM2dkZ3Z0&utm_source=qr" target="_blank"
                    style="     font-weight: 700;color:#443D73;">Axel Soveranis Valencia</a>
            </p>
        </section>
    </div>

<!-- 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Launch static backdrop modal
    </button>
 
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tenemos ganador</h5>

                </div>
                <div class="modal-body">
                <canvas id="confetti-canvas"></canvas>
                </div>
                <div class="modal-footer">
                    <a href="../" class="btn btn-secondary" data-dismiss="modal">Finalizar</a>
                </div>
            </div>
        </div>
    </div> -->

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/confetti.js"></script>
    <script>
    $(document).ready(function() {
        // Mostrar el modal al cargar la página
        $('#staticBackdrop').modal('show');

        // Función para mostrar confeti
        function showConfetti() {
            var confettiSettings = {
                target: 'confetti-canvas'
            };
            var confetti = new ConfettiGenerator(confettiSettings);
            confetti.render();
        }

        // Mostrar confeti cuando se muestre el modal
        $('#staticBackdrop').on('shown.bs.modal', function() {
            showConfetti();
        });
    });

    function ocultarCarta(element) {
        if (element.classList.contains('oscurecida')) {
            element.classList.remove('oscurecida');
        } else {
            element.classList.add('oscurecida');
        }
    }


    // Array con los nombres de las imágenes
    const images = [
        'carta1.png',
        'carta2.png',
        'carta3.png',
        'carta4.png',
        'carta5.png',
        'carta6.png',
        'carta7.png',
        'carta8.png',
        'carta9.png',
        'carta10.png',
        'carta11.png',
        'carta12.png',
        'carta13.png',
        'carta14.png',
        'carta15.png',
        'carta16.png',
        'carta17.png',
        'carta18.png',
        'carta19.png',
        'carta20.png',
        'carta21.png',
        'carta22.png',
        'carta23.png',
        'carta24.png',
        'carta25.png',
        'carta26.png',
        'carta27.png',
        'carta28.png',
        'carta29.png',
        'carta30.png',
        'carta31.png'
    ];






    // Selecciona los elementos del DOM
    const cardImage = document.getElementById('card-image');
    const nextButton = document.getElementById('next-button');

    // Función para cambiar la imagen
    function changeImage() {
        // Selecciona una imagen aleatoria del array
        const randomIndex = Math.floor(Math.random() * images.length);
        const selectedImage = images[randomIndex];

        // Cambia la src de la imagen
        cardImage.src = `../images/Cartas/${selectedImage}`;
    }
    // Añade el evento click al botón
    nextButton.addEventListener('click', changeImage);





    // Función para mezclar aleatoriamente las imágenes
    function shuffleImages() {
        const tablero = document.querySelector('.tablero');

        // Limpiar el contenido del tablero
        tablero.innerHTML = '';

        // Mezclar las imágenes aleatoriamente
        images.sort(() => Math.random() - 0.5);

        let cartaIndex = 0;
        for (let i = 0; i < 3; i++) {
            const cartasFila = document.createElement('div');
            cartasFila.className = 'cartas-fila';
            for (let j = 0; j < 3; j++) {
                const cartaDiv = document.createElement('div');
                cartaDiv.className = 'carta';
                cartaDiv.innerHTML = `<img src="../images/Cartas/${images[cartaIndex]}" alt="Carta ${
                cartaIndex + 1
            }" class="Cartas-tablero" id="card-image" onclick="ocultarCarta(this)">`;
                cartasFila.appendChild(cartaDiv);
                cartaIndex++;
            }
            tablero.appendChild(cartasFila);
        }

        // Mezclar las imágenes del tablero 2 al mismo tiempo
        shuffleImages_2();
    }









    // Función para mezclar aleatoriamente las imágenes del tablero 2
    function shuffleImages_2() {
        const tabla2 = document.querySelector('.tabla2');

        // Limpiar el contenido del tablero 2
        tabla2.innerHTML = '';

        // Mezclar las imágenes aleatoriamente
        images.sort(() => Math.random() - 0.5);

        let cartaIndex_2 = 0;
        for (let i = 0; i < 3; i++) {
            const cartasFila_2 = document.createElement('div');
            cartasFila_2.className = 'cartas-fila';
            for (let j = 0; j < 3; j++) {
                const cartaDiv = document.createElement('div');
                cartaDiv.className = 'carta_2'; // Cambio en la clase de la carta para el tablero 2
                cartaDiv.innerHTML = `<img src="../images/Cartas/${images[cartaIndex_2]}" alt="Carta ${
                cartaIndex_2 + 1
            }" class="Cartas-tablero"  onclick="ocultarCarta(this)">`;
                cartasFila_2.appendChild(cartaDiv);
                cartaIndex_2++;
            }
            tabla2.appendChild(cartasFila_2);
        }
    }



    function shuffleImages_3() {
        const tabla3 = document.querySelector('.tabla3'); // Cambio en la selección del tablero

        // Limpiar el contenido del tablero 2
        tabla3.innerHTML = '';

        // Mezclar las imágenes aleatoriamente
        images.sort(() => Math.random() - 0.5);

        let cartaIndex_3 = 0; // Cambio en el nombre del índice de carta para el tablero 3
        for (let i = 0; i < 3; i++) {
            const cartasFila_3 = document.createElement('div'); // Cambio en el nombre de las filas para el tablero 3
            cartasFila_3.className = 'cartas-fila';
            for (let j = 0; j < 3; j++) {
                const cartaDiv = document.createElement('div');
                cartaDiv.className = 'carta_3'; // Cambio en la clase de la carta para el tablero 3
                cartaDiv.innerHTML = `<img src="../images/Cartas/${images[cartaIndex_3]}" alt="Carta ${
                cartaIndex_3 + 1
            }" class="Cartas-tablero"  onclick="ocultarCarta(this)">`;
                cartasFila_3.appendChild(cartaDiv);
                cartaIndex_3++;
            }
            tabla3.appendChild(cartasFila_3);
        }
    }

    function shuffleImages_4() {
        const tabla4 = document.querySelector('.tabla4'); // Updated selection for table 4

        // Clear the content of table 4
        tabla4.innerHTML = '';

        // Shuffle the images randomly
        images.sort(() => Math.random() - 0.5);

        let cartaIndex_4 = 0; // Updated card index name for table 4
        for (let i = 0; i < 3; i++) {
            const cartasFila_4 = document.createElement('div'); // Updated row name for table 4
            cartasFila_4.className = 'cartas-fila';
            for (let j = 0; j < 3; j++) {
                const cartaDiv = document.createElement('div');
                cartaDiv.className = 'carta_4'; // Updated card class for table 4
                cartaDiv.innerHTML = `<img src="../images/Cartas/${images[cartaIndex_4]}" alt="Carta ${
                cartaIndex_4 + 1
            }" class="Cartas-tablero"  onclick="ocultarCarta(this)">`;
                cartasFila_4.appendChild(cartaDiv);
                cartaIndex_4++;
            }
            tabla4.appendChild(cartasFila_4);
        }
    }



    // Llamar a la función para mezclar las imágenes cuando se carga la página
    window.onload = function() {
        shuffleImages(); // Llama a la función principal de mezcla de imágenes
        shuffleImages_2();
        shuffleImages_3();
        shuffleImages_4();
    };
    </script>

</body>

</html>