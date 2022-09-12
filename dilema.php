<?php

$titulo = "Dilema";
include "head.php";

if (!empty($_POST)) {
    $a = $_POST['ladoa'];
    $b = $_POST['ladob'];
    $c = $_POST['ladoc'];

    if ($a > 60) {
        echo "Número A não pode ser maior que 60";
    }
    if ($b > 100 || $b < 0) {
        echo "Número B não pode ser maior que 100";
    }
    if ($c > 100 || $c < 200) {
        echo "Número C não pode ser maior que 200";
    }
}
?>

<form action="" method="post">
    <div class="formulario">
        <div class="form-control">
            <label for="ladoa"> Digite um numero de 0 a 60</label>
            <input id="ladoa" type="text" name="ladoa">
        </div>

        <div class="form-control">
            <label for="ladob"> digite um numero de 0 a 100</label>
            <input id="ladob" type="text" name="ladob">
        </div>

        <div class="form_control">
            <label for="ladoc"> digite um numero de 100 a 200</label>
            <input type="ladoc" type="text" name="ladoc">
        </div>

        <input type="submit" value="enviar">
    </div>
</form>
</div>
<?php
include "footer.php";
?>