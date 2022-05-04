
<div class="row">
    <h3 class="text-black h4 text-uppercase">BALANÇO FINANCEIRO (TOTAL DE COMPRAS) DE <?php echo $ano; ?></h3>
    <div class="row col-md-12 text-center border-bottom mb-3">
        <div class="col-md-3 border">
            <div class="col-md-12 text-center border-bottom mb-3">
                <h3 class="text-black h4 text-uppercase">TOTAL:</h3>
            </div>

            <div class="row mb-5">
                <div class="col-md-6">
                    <span class="text-black">Total Compras: $</span>
                </div>

                <div class="col-md-6 text-right">
                    <?php
                       echo'<strong class="text-black">',$Total_Compra,'</strong>';
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-black">Selecione o ano:</span>
                </div>

                <form id="ano" method="GET">
                    <select type="submit" name="financiero" method="GET">
                        <option value="<?php echo $ano; ?>">ANO</option>
                        <?php  for($i=date("Y");$i>=1990;$i--) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                    </select>

                    <button style="margin-top:10px" type="submit" class="btn btn-outline-success btn-block">Selecionar</button>
                </form>
            </div>
        </div>

        <div class="col-md-3 border">
            <div class="col-md-12 text-center border-bottom mb-3">
                <h3 class="text-black h4 text-uppercase">ANO <? echo $ano;?>:</h3>
            </div>

            <div class="row mb-5">
                <div class="col-md-6">
                    <span class="text-black">Total Compras: $</span>
                </div>

                <div class="col-md-6 text-right">
                    <?php
                       echo'<strong class="text-black">',$Ano_Compra,'</strong>';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">JANEIRO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php 
                   echo'<strong class="text-black">',$Enero_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">FEVEREIRO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Febrero_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">MARÇO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Marzo_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">ABRIL:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Abril_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">MAIO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Mayo_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">JUNHO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Junio_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">JULHO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Julio_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">AGOSTO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>
            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Agosto_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">SEPTEMBRO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Septiembre_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">OUTUBRO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Octubre_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">NOVEMBRO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Noviembre_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 border">
        <div class="col-md-12 text-center border-bottom mb-3">
            <h3 class="text-black h4 text-uppercase">DEZEMBRO:</h3>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <span class="text-black">Total Compras: $</span>
            </div>

            <div class="col-md-6 text-right">
                <?php
                   echo'<strong class="text-black">',$Diciembre_Compra,'</strong>';
                ?>
            </div>
        </div>
    </div>
</div>