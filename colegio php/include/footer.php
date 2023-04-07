    <!-- star footer -->

    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo">
                    <h4>Maria de Nazaret</h4>
                </a>
                <p>
                    Entonces dime: <br>
                    ¿Qué es lo mejor te ha pasado? <br>
                    Haber nacido MUJER!!! <br>
                    <img src="./imagenes/nazaret.webp" class="imagenfooter" alt="mmmm Aquí debe haber una imagen"
                        style="width: 65%;">
            </div>

            <div class="footer_2">
                <h4>Accesos Internos</h4>
                <ul class="permalinks">
                    <li><a href="./documentos/ANEXO 01 REGLAMENTO INTERNO - 2023.pdf" target="_blank">Reglamento Interno</a></li>
                    <li><a href="./documentos/ANEXO 03 EVALUACIÓN DE LOS APRENDIZAJES.pdf" target="_blank">Evaluación de aprendizaje</a></li>
                    <li><a href="galeria/index.html">Galería</a></li>
                    <li><a href="pages/admision.html">Admisión</a></li>
                    <li><a href="pages/contacto.html">Contacto</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Institucional</h4>
                <ul class="permalinks">
                    <li><a href="http://ugelcajamarca.gob.pe/" target="_blank">UGEL</a></li>
                    <li><a href="https://www.gob.pe/minedu" target="_blank">MINEDU</a></li>
                    <br>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contacto</h4>
                <div>
                    <i class="fas fa-phone-alt" style="zoom: 1.2;"></i>
                    <p>(076) 363545</p>
                    <br>
                    <i class="fas fa-envelope" style="zoom: 1.2;" mail></i><a
                        href="mailto:secretaria@mariadenazaret.edu.pe"><br> secretaria@mariadenazaret.edu.pe</a> <br>
                    <br>
                    <i class="fas fa-map-marker-alt" style="zoom: 1.2;"></i>
                    <p>Av. Hoyos Rubio 1050 <br> Urb. Horacio Zeballos Gamez</p>
                </div>

                <ul class="footer_social">

                    <li>
                        <a href="https://www.facebook.com/mariadenazaretcajamarca" target="_blank"><i
                                class="uil uil-facebook-f"></i></a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/" target="_blank"><i class="uil uil-instagram"></i></a>
                    </li>

                    <li>
                        <a href="https://youtube.com/channel/UCLUIynDJbZCsjyiAWhYfgkw" target="_blank"><i
                                class="uil uil-youtube"></i></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </footer>

    <!-- end footer -->
    <br>
    <center>
        <span style="text-align: center; justify-content: center; font-size: 0.6rem;">&copy;2023 Made by CQF X
            DSD</span>
    </center>

    <script src="./java/script2.js"></script>





<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./java/js.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        //------------
        breakpoints: {
            600: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
</script>
<script src="java/navscript.js"></script>
<script src="index.js"></script>

</body>

<!-- fancyscript -->

<script src="java/fancybox.umd.js"></script>

<script>
Fancybox.bind("[data-fancybox]", {
    Animation: "slide;"
});
</script>



<!-- preloader -->

<script>
window.addEventListener("load", function () {
    const preloader = document.querySelector("#preloader");
    preloader.classList.add("hide");

    setTimeout(function () {
        preloader.style.display = "none";
    }, 500);
});
</script>


<!--ANIMACION-->


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
 AOS.init();
</script>

</html>