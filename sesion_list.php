<?php
session_regenerate_id();

$_SESSION['SYS']['INFO'] = '';
$_SESSION['SYS']['ALERT'] = '';
$_SESSION['SYS']['SESSION'] = 0;
$_SESSION['LIETOTAJI']['FORMA']='';

$_SESSION['USER']['ID'] = 0;
$_SESSION['USER']['VARDS'] = '';
$_SESSION['USER']['TIESIBAS'] = '';
$_SESSION['USER']['LOMA'] = '';
$_SESSION['USER']['STRUKT'] = '';
$_SESSION['USER']['STATUS']=0;
$_SESSION['USER']['START']='0000-00-00 00:00';

$_SESSION['TASK']['ID']="";
$_SESSION['TASK']['KODS']="";
$_SESSION['TASK']['NR']=0;
$_SESSION['TASK']['PERS_ID']="";
$_SESSION['TASK']['PERS_VARDS']="";
$_SESSION['TASK']['PERS_PASTS']="";
$_SESSION['TASK']['STATUS']="";

$_SESSION['ADMIN']['ID']=0;
$_SESSION['ADMIN']['STATUS']="LIST";
$_SESSION['ADMIN']['PSW']='';
$_SESSION['ADMIN']['SUBFORM']='';

$_SESSION['REC']['STATUS']=0; //-1-nav saglabāts, 0-neitrāls, 1- saglabāts,bet nav ierakstīts, 2-ierakstīts uz saglabāšanu

$_SESSION['PERS']['ID']='';
$_SESSION['PERS']['VARDS']='';
$_SESSION['PERS']['UZVARDS']='';
$_SESSION['PERS']['PASTS']='';
$_SESSION['PERS']['USER']='';
$_SESSION['PERS']['PAROLE']='';
$_SESSION['PERS']['LOMA']='';
$_SESSION['PERS']['TIESIBAS']='';
$_SESSION['PERS']['AMATS']='';
$_SESSION['PERS']['IEK_TEL']='';
$_SESSION['PERS']['TELEFONS']='';
$_SESSION['PERS']['MOBILAIS']='';
$_SESSION['PERS']['STRUKTURA']='';
$_SESSION['PERS']['AKTIVS']=1;
$_SESSION['PERS']['PIEZIMES']='';
$_SESSION['PERS']['PAZIMES']='';
$_SESSION['PERS']['NPK']='';




// Attiecīgi Pretenzijās rec_status -
session_write_close();
