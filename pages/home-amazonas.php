<?php include '../includes/header.php'; ?>

<div class="patterns">
    <div class="container">
        <div class="title">
            <h2>Perú</h2>
            <h1>Amazonas</h1>
            <h2>Barcelona</h2>
        </div>
        <div class="description">
            <p>Mi amor por Barcelona, el modernismo y la naturaleza, fusionado con <strong>“los trazos fluidos y
                    sinceros”</strong> de los niños de la amazonía peruana, al pintarse sus tatuajes con sus propias
                manos, dieron vida a esta inspiración, que vá acompañada de las iniciales de Dalí y Gaudí (mis padres
                del arte) y Máximo Laura, artista textil peruano, al cual admiro por su forma de trasmitir la
                Cosmovisión Andina.</p>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas1_bis.jpg);" id="amazonas1_bis">
                <img src="../images/amazonas2.jpg" alt="amazonas2"
                    style="max-width: 625px; min-height: 745px; -webkit-transform: scaleX(-1); transform: scaleX(-1);">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas3.png);" class="card"></div>
            <div style="background-image: url(../images/amazonas6.jpg);" id="amazonas6" class="card"></div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas9.jpg);" class="card"></div>
            <div style="background-image: url(../images/amazonas4.jpg);" id="amazonas4" class="card"></div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas8.jpg);" id="amazonas8" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas11.jpg);" id="amazonas11" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas10.jpg);" class="card"></div>
            <div style="background-image: url(../images/amazonas7.jpg);" class="card"></div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/amazonas12.jpg);" id="amazonas12" class="card-large">
            </div>
        </div>

        <?php 
            include '../includes/logo.php';

            includePagination('/', '/pages/home-flowers.php');
        ?>
    </div>


</div>

<?php include '../includes/footer.php'; ?>