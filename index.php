<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Te tengo un obsequio 🎀">
    <meta property="og:description" content="El amor no se encuentra en el mirar a los ojos, sino en mirar juntos en la misma dirección.">
    <meta property="og:image" content="https://th.bing.com/th/id/R.89c494348adce1eab39a03358664748d?rik=QVbNvx3C8iEUtA&pid=ImgRaw&r=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Te gustaria ir conmigo Daines?</title>
    <link rel="shortcut icon" href="https://th.bing.com/th/id/OIP.lBh-2EtIpP_DYl6lQuSrSwHaHa?pid=ImgDet&rs=1" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <img src="20230708205820__fpdl.in__primer-plano-buganvillas-realista-aislado_181653-4977_large-removebg-preview.png" alt="" style="position: absolute;">
        <img src="20230708205820__fpdl.in__primer-plano-buganvillas-realista-aislado_181653-4977_large-removebg-preview.png" alt="" style="position: absolute;right:0;transform: scaleX(-1);"">
        <img src="20230708205845__fpdl.in__fondo-transparente-marco-hojas-naturaleza-roja_1308-76688_large-removebg-preview.png" alt="" style="position: absolute;top:429px;">
        <img src="20230708205845__fpdl.in__fondo-transparente-marco-hojas-naturaleza-roja_1308-76688_large-removebg-preview.png" alt="" style="position: absolute;top:429px;right:0;transform: scaleX(-1);">
        <section id="titulo">
            <h1 id="titulo-texto" class="titulo"></h1>
            <p id="subtitulo-texto" class="subtitulo"></p>
        </section>
        <div class="botones">
            <a href="https://www.youtube.com/watch?v=ZyhrYis509A" class="si">Acepto</a>
            <a onclick="mostrarMensaje()" class="no">No Acepto</a>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var titulo = document.getElementById('titulo-texto');
            var subtitulo = document.getElementById('subtitulo-texto');

            function typeWriter(element, text, interval) {
                var characters = text.split('');
                var i = 0;

                var timer = setInterval(function () {
                    if (i < characters.length) {
                        element.textContent += characters[i];
                        i++;
                    } else {
                        clearInterval(timer);
                    }
                }, interval);
            }

            typeWriter(titulo, 'Daines Mosquera', 100);
            typeWriter(subtitulo, '¿Te gustaría ir conmigo a ver Barbie?', 100);
        });


    </script>

<script>
    function mostrarMensaje() {
      alert("Sé quién es mi chica, y se que está no es tu decisión por que te amo, más de lo que tu piensas y de lo que mi mirada revela al estar a tu lado ❤");
    }
  </script>
  
</body>

</html>