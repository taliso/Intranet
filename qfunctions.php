<?php
/**
 * Created by PhpStorm.
 * User: talivaldis.olekss
 * Date: 17.06.2017
 * Time: 11:42
 */
function liet_insert ($db){
    $sql = "INSERT INTO lietotaji SET ";
    $sql=$sql."
        vards =:id_master ,
        uzvards =:id_master ,
        e_pasts =:id_master ,
        user =:id_master ,
        parole =:id_master ,
        loma =:id_master ,
        tiesibas =:id_master ,
        amats =:id_master ,
        iek_tel =:id_master ,
        telefons =:id_master ,
        mobilais =:id_master ,
        struktura =:id_master , 
        aktivs =:id_master ,
        piezimes =:id_master ,
        pazimes =:id_master , 
        npk =:id_master ";

    $q = $db->prepare($sql);

    $data = array(
        ':vards'=> $_SESSION['PERS']['VARDS'],
        ':uzvards'=>$_SESSION['PERS']['UZVARDS'],
        ':e_pasts'=> $_SESSION['PERS']['PASTS'],
        ':user'=>$_SESSION['PERS']['USER'],
        ':parole'=>$_SESSION['PERS']['PAROLE'],
        ':loma'=> $_SESSION['PERS']['LOMA'],
        ':tiesibas'=> $_SESSION['PERS']['TIESIBAS'],
        ':amats'=> $_SESSION['PERS']['AMATS'],
        ':iek_tel'=>$_SESSION['PERS']['IEK_TEL'],
        ':telefons'=>$_SESSION['PERS']['TELEFONS'],
        ':mobilais'=>$_SESSION['PERS']['MOBILAIS'],
        ':struktura'=>$_SESSION['PERS']['STRUKTURA'],
        ':aktivs'=> $_SESSION['PERS']['AKTIVS'],
        ':piezimes'=>$_SESSION['PERS']['PIEZIMES'],
        ':pazimes'=>$_SESSION['PERS']['PAZIMES'],
        ':npk'=> $_SESSION['PERS']['NPK']);

    $q->execute($data);

}
function liet_update ($f_id, $f_fields, $db){

}
function liet_delete ($f_id, $db){

}