<?php
/**
 * Created by PhpStorm.
 * User: talivaldis.olekss
 * Date: 19.06.2017
 * Time: 21:14
 */

if (isset($_POST['liet_kart_jauns'])) {
    $_SESSION['PERS']['VARDS']=$_POST['vards'];
    $_SESSION['PERS']['PASTS']=$_POST['pasts'];
    $_SESSION['PERS']['USER']='';
    $_SESSION['PERS']['PAROLE']='';
    $_SESSION['PERS']['LOMA']=$_POST['loma'];
    $_SESSION['PERS']['TIESIBAS']=$_POST['tiesibas'];
    $_SESSION['PERS']['AMATS']=$_POST['amats'];
    $_SESSION['PERS']['IEK_TEL']=$_POST['iek_tel'];
    $_SESSION['PERS']['TELEFONS']=$_POST['telefons'];
    $_SESSION['PERS']['MOBILAIS']=$_POST['mobilais'];
    $_SESSION['PERS']['STRUKTURA']=$_POST['struktura'];
    $_SESSION['PERS']['PIEZIMES']=$_POST['piezimes'];
    $_SESSION['PERS']['NPK']=100;
    liet_insert ($db);
}

if (isset($_POST['liet_kart_saglabat'])) {

}

if (isset($_POST['liet_kart_atcelt'])) {
    $_SESSION['REC']['STATUS']=0;
}
if (isset($_GET['mLiet_tool'])) {
    $mLiet_tool=$_GET['mLiet_tool'];
    if ($mLiet_tool=='mnJauns') {
        $_SESSION['PERS']['VARDS']=' Jauna persona';
        $_SESSION['REC']['STATUS']=-6;
        $_SESSION['PERS']['ID']=0;
    }
    if ($mLiet_tool=='mnLabot') {
        if ($_SESSION['PERS']['ID']==0) {
            $_SESSION['SYS']['ALERT'] = ' Nav izvēlēts ieraksts, ko labot!';
            $_SESSION['REC']['STATUS']=0;
        } else {
            $_SESSION['REC']['STATUS']=-1;
        }

    }
    if ($mLiet_tool=='mnDzest') {

    }
}
if (isset($_POST['izlasiju'])) {
    $_SESSION['SYS']['ALERT']='';
    $_SESSION['SYS']['INFO']='';

}
