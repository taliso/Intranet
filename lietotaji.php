<?php
/**
 * Created by PhpStorm.
 * User: talivaldis.olekss
 * Date: 18.06.2017
 * Time: 12:06
 */
include "config\\config.php";
include "funkcijas.php";
include "qfunctions.php";
include "config\\konekcija.php";
include "\\phpmailer\\mailset.php";
if (!isset($_SESSION['USER']['STATUS'])){
    include 'sesion_list.php';
}
include 'lietotaji_tools.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="div.css" />
    <link rel="stylesheet" type="text/css" href="teksti.css" />
    <link rel="stylesheet" type="text/css" href="citi.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="jquery/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="jquery/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="jquery/jquery-ui.theme.min.css">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>

    <title>Intranet</title>
</head>

<body>
<form action="lietotaji.php" method="post" enctype="multipart/form-data">
<div id="Galva">
    <a href="index.php">Uz Intranetu</a><br>
    <span class="spGTitle" style="">Lietotāji</span>
    <div id="MenjuHor">
        <?php if ($_SESSION['REC']['STATUS']==0) { ?>
        <a id='HMenju' title='Jauns ieraksts' href="?mLiet_tool=mnJauns">Jauns</a>
        <?php }
        if ($_SESSION['REC']['STATUS']==0) { ?>
        <a id='HMenju' title='Labot ieraksts' href="?mLiet_tool=mnLabot">Labot</a>
        <?php }
        if ($_SESSION['REC']['STATUS']==0) { ?>
        <a id='HMenju' title='Dzēst ierakstu' href="?mLiet_tool=mnDzest">Dzēst</a>
        <?php  }
        ?>

    </div>
</div>
<?php if (strlen($_SESSION['SYS']['ALERT'])>0) { ?>
<div id="Alert">
    <?php echo $_SESSION['SYS']['ALERT']; ?>
    <input style="float:left;" type="submit" name="izlasiju" value=" Sapratu ">
</div>
<?php  }?>

<?php if (strlen($_SESSION['SYS']['INFO'])>0) { ?>
<div id="Info">
    <?php echo $_SESSION['SYS']['INFO']; ?>
    <input type="submit" name="izlasiju" value=" Sapratu ">
</div>
<?php  }?>

<div id="liet_kartina">
    <?php include 'liet_kartina.php' ; ?>
</div>

<div id="liet_saraksts">
    <div id="Title">
        <span id="spTitle"> Lietotāju saraksts</span>
    </div>
     <table id="" style="width:100%">
        <tr style="border: solid 1px greenyellow">
            <td id="" style="border-bottom: solid 2px greenyellow;"></td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Vārds</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">E-pasts</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Loma</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Tiesibas</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Amats</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Iekš.Nr.</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Telefons</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Mobilais</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Struktūra</td>
            <td id="" style="border-bottom: solid 2px greenyellow;">Piezīmes </td>

        </tr>
         <?php $s_liet=q_to_array('lietotaji', $db) ;
         foreach ( $s_liet as $s_l) {?>
             <td id="" style=""></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><a href=?liet_id='<?php echo $s_l['ID'] ; ?>'><span id="spSaraksts"><?php echo $s_l['vards']; ?> </span></a></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['e_pasts']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['loma']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['tiesibas']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['amats']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['iek_tel']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['telefons']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['mobilais']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['struktura']; ?> </span></td>
             <td id="" style="border-bottom: solid 1px #2e4703;"><span id="spSaraksts"><?php echo $s_l['piezimes']; ?> </span> </td>
         <?php  }   ?>
    </table>
</div>



</form>
</body>
</html>
