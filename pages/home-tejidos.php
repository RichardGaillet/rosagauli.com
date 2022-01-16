<?php include '../includes/header.php'; ?>

<div class="patterns">
    <div class="container">
        <div class="title">
            <h1>Juego de</br>
                <span>Tejidos</span></br>
                Y color
            </h1>
        </div>
        <div class="description">
            <p>Llegaron a mi repitiéndome la palabra “juego”, sastrería, accesorios y hogar divirtiéndose con el color,
                funcionando los dos tejidos más clásicos de la historia “Pata de Gallo y Escocés”.</p>
        </div>

        <div class=row>
            <div style="background-image: url(../images/color1.jpg);" id="color1" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/color2.jpg);" id="color2" class="card"></div>
            <div style="background-image: url(../images/color3.jpg);" id="color3" class="card"></div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/color4.jpg);" id="color4" class="card-large">
            </div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/color5.jpg);" class="card"></div>
            <div style="background-image: url(../images/color6.jpg);" id="color6" class="card"></div>
        </div>

        <div class=row>
            <div style="background-image: url(../images/color7.jpg);" id="color7" class="card-large">
            </div>
        </div>

        <?php 
            include '../includes/logo.php';
            includePagination('/pages/home-flowers.php', '/pages/home-naturaleza.php');
        ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>