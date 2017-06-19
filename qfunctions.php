<?php
/**
 * Created by PhpStorm.
 * User: talivaldis.olekss
 * Date: 17.06.2017
 * Time: 11:42
 */
function liet_insert ($db){

    $ir=ir_tikai_viens ($_SESSION['PERS']['VARDS'], 'vards', 'lietotaji', $db);
    if ($ir==0) {
        $sql = "INSERT INTO lietotaji SET ";
        $sql=$sql."
        vards =:vards ,
        uzvards =:uzvards ,
        e_pasts =:e_pasts ,
        user =:user ,
        parole =:parole ,
        loma =:loma ,
        tiesibas =:tiesibas ,
        amats =:amats ,
        iek_tel =:iek_tel ,
        telefons =:telefons ,
        mobilais =:mobilais ,
        struktura =:struktura , 
        aktivs =:aktivs ,
        piezimes =:piezimes ,
        pazimes =:pazimes , 
        npk =:npk ";

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

    } else {
        $_SESSION['SYS']['ALERT'] = 'Šāda persona jau ir ievadīta. Labojiet esošo ierakstu.';
    }

}
function liet_update ($f_id, $f_fields, $db){

}
function liet_delete ($f_id, $db){

}
function ir_tikai_viens ($f_vertiba, $f_lauks, $f_tabula, $db) {
    $ir=0;
    $q_array=q_to_array($f_tabula,$db);
    foreach ( $q_array as $q_a ) {
        if ($f_vertiba==$q_a[$f_lauks]) {
            $ir=1;
        }
    }
    return $ir;
}

function q_to_array($f_tabula, $db) {
    $myarray = array ();
    $sql = "SELECT * FROM " . $f_tabula;
    $q = $db->query ( $sql );
    while ( $r = $q->fetch ( PDO::FETCH_ASSOC ) ) {
        $myarray [] = $r;
    }
    return $myarray;
}