
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A good day !</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    



    <div class="footer">
        <div class="contain">
            <div class="col">
                <h1>Politicas y condiciones</h1>
                <ul>
                    <li>Política de Cookies</li>
                    <li>Política de Privacidad de Datos Personales</li>
                    <li>Política de Envío</li>
                    <li>Politica De Garantias</li>
                    <li>Términos y Condiciones</li>
                </ul>
            </div>
            <div class="col">
                <h1>Creation</h1>
                <ul>
                    <li>Chat-bot</li>
                    <li>Social-site</li>
                    <li>Software</li>
                    <li>Games</li>
                    <li>News-blogs</li>
                </ul>
            </div>
            <div class="col">
                <h1>Tienda 1</h1>
                <ul>
                    <li>Terms</li>
                    <li>Mission</li>
                    <li>Services</li>
                    <li>Education</li>
                    <li>Get in touch</li>
                </ul>
            </div>
            <div class="col">
                <h1>Tienda 2</h1>
                <ul>
                    <li>Mz.B Lt.14</li>
                    <li>ASC. Milagrosa cruz de motupe</li>
                    <li>LIMA - LIMA - PUENTE PIEDRA</li>
                    <li>REFERENCIA: Paradero Establo</li>
                    <a href="https://goo.gl/maps/5M9P9D1qSaQ8fZWP6" target="blank"><li>Google Maps</li></a>
        
                </ul>
            </div>
            <div class="col">
                <h1>Soporte</h1>
                <ul>
                    <li>Contactanos</li>
                    <li>Enviar Email</li>
                    <li>Llamanos</li>
                </ul>
            </div>
            <div class="col social">
                <h1>Social</h1>
                <ul>
                    <li><a href="https://www.facebook.com/computosanagustin/" target="blank"><img src="images/1.png" width="32" style="width: 32px;"></a></li>
                    <li><a><img src="images/2.png" width="32" style="width: 32px;"></a></li>
                    <li><a><img src="images/3.png" width="32" style="width: 32px;"></a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <footer class="foot" id="contacto">
                <p> Copyright &copy;2022 Computo "San Agutin". Todos los derechos reservados </p>
            </footer>
        </div>


    </div>



    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function () {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function () { div.style.display = "none"; }, 600);
            }
        }
    </script>
</body>

</html>