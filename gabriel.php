<?php
$titulo = "Gabriel";
include "head.php";
?>

<form action="" method="GET">
    <fieldset>
        <legend>Gabriel</legend>
        <p>
            <strong>Qual seu nome?</strong>

            <dl>
                <dd>
                    <textarea name="comentarios" rows="5" cols="50"> </textarea>
                </dd>
            </dl>

            <strong>das seguintes coisas, me diz qual avaliação você da: </strong>

            <dl>
                <dd>
                    <p> sorvete:
                        <input type="radio" name="avaliacao" value="muitobom">muito bom
                        <input type="radio" name="avaliacao" value="bom">bom
                        <input type="radio" name="avaliacao" value="regular">regular
                        <input type="radio" name="avaliacao" value="um lixo" checked> um lixo
                    </p>
                </dd>
            </dl>
          
            <p> carro:
                <input type="radio" name="avaliacao" value="muitobom">muito bom
                <input type="radio" name="avaliacao" value="bom">bom
                <input type="radio" name="avaliacao" value="regular">regular
                <input type="radio" name="avaliacao" value="um lixo" checked> um lixo
            </p>
            </dd>
            </dl>
            <p> futebol:
                <input type="radio" name="avaliacao" value="muitobom">muito bom
                <input type="radio" name="avaliacao" value="bom">bom
                <input type="radio" name="avaliacao" value="regular">regular
                <input type="radio" name="avaliacao" value="um lixo" checked> um lixo
            </p>
            </dd>
            </dl>
            <p> cachorro:
                <input type="radio" name="avaliacao" value="muitobom">muito bom
                <input type="radio" name="avaliacao" value="bom">bom
                <input type="radio" name="avaliacao" value="regular">regular
                <input type="radio" name="avaliacao" value="um lixo" checked> um lixo
            </p>
            </dd>
            </dl>
    </fieldset>


    <?php
    include "footer.php";
    ?>