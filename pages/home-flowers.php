<?php include '../includes/header.php'; ?>

<div class="patterns">
    <div class="container">
        <div class="title">
            <h2>Perú</h2>
            <h1>Cantuta</h1>
            <h2>Flower</h2>
        </div>
        <div class="description">
            <p>Inspirada en la flor sagrada de los Incas <strong>“La Cantuta”</strong>, y en todos los ritos dónde
                la
                dan como ofrenda;
                me conmovió mucho un peregrinaje largo que se hace en Cusco, bordeando las montañas sagradas
                <strong>“APUS”</strong>; y
                al pie de cada una, se ponen piedras adornándolas con esta bella flor, representando así el aprecio
                y
                devoción hacia la Madre Tierra <strong>“Pachamama”</strong>. Imaginando esto, me deje llevar por el
                lápiz y la música al
                dibujarla, para que después el estilógrafo delinee sus formas y sea sellada con la fluida acuarela.
            </p>
        </div>

        <div class=row>
            <div style="background-image: url(../images/flowers1.jpg);" id="flowers1" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/flowers2.jpg);" id="flowers2" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/flowers3.jpg);" class="card"></div>
            <div style="background-image: url(../images/flowers4.png);" class="card"></div>
        </div>

        <div class="title">
            <h2>Inspiration</h2>
            <h1>Flowers</h1>
            <h2>Textiles</h2>
        </div>
        <div class="description">
            <p>Al apreciar detenidamente las flores textiles de la artista francesa <strong>“Laurence Aguerre”</strong>;
                conecté
                enseguida con la asimetría, sus hilos fluidos, tener ese desordenOrden a la vez, y en cómo estas flores
                textiles y flexibles pueden cambiar a diferentes estados; dieron rienda suelta a mi mano para
                dibujarlas, usando directamente el estilógrafo, sin la opción de borrar y sin pretensión de la
                perfección, me deje llevar como si los hilos de sus flores me hablaran.
            </p>
        </div>

        <div class=row>
            <div style="background-image: url(../images/flowers5.jpg);" id="flowers5" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/flowers3.jpg);"></div>
            <div style="background-image: url(../images/flowers4.png);"></div>
        </div>

        <?php 
            include '../includes/logo.php';
            includePagination('/pages/home-amazonas.php', '/pages/home-tejidos.php');
        ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>