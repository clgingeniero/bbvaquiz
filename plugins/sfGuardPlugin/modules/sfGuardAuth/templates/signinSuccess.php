<div class="fond-home"></div>
    <div class="pers-inicio"></div>
    <div class="tit-ini">
        <p class="tit">GANA EL MAYOR PUNTAJE!</p>
        <p class="subtit">Calidad eje fundamental del crecimiento</p>
    </div>
    <div class="menu-inicio">
        <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table>
        <?php echo $form ?>
        </table>

        <input type="submit" value="Iniciar sesión" />
        <a href="" class="btn"> Registro </a>
        </form>
    </div>
