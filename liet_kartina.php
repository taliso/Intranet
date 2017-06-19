<?php
/**
 * Created by PhpStorm.
 * User: talivaldis.olekss
 * Date: 19.06.2017
 * Time: 11:08
 */
?>

<div id="dvLietotajs">
    <div id="Title">
        <span id="spTitle" style="">Lietotājs: <?php echo $_SESSION['PERS']['VARDS']; ?>
    </div>
    <div id="dvLietKartina">
        <table id="saraksti" >
            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Vārds</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="vards" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>
            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">E-pasts</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="pasts" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Amats</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="amats" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Iekš.tel.</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="iek_tel" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Telefons</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="telefons" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Mobilais</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="mobilais" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Struktūra</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="struktura" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Loma</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="loma" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Tiesības</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="tiesibas" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>


            <tr style="">
                <td id="td_atstarpe" style=""></td>
                <td id="td_komenti" style="">Piezīmes</td>
                <td id="td_atstarpe" style=""></td>
                <td id="td_iavads" style=""><input type="text" id="" style="" name="piezimes" value="" title="" placeholder="" ></td>
                <td id="td_atstarpe" style=""></td>

            </tr>

        </table>
        <?php if ($_SESSION['REC']['STATUS']==-6) {
            echo '<input type="submit" name="liet_kart_jauns" value="Pievienot">';
         } ?>
        <?php if ($_SESSION['REC']['STATUS']==-1) {
            echo '<input type="submit" name="liet_kart_saglabat" value="Saglabāt">';
        } ?>
        <?php if ($_SESSION['REC']['STATUS']==-6 or $_SESSION['REC']['STATUS']==-1) {
            echo '<input type="submit" name="liet_kart_atcelt" value="Atcelt">';
        } ?>

    </div>

</div>
