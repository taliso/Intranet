<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "config\\config.php";
include "funkcijas.php";
include "config\\konekcija.php";
include "\\phpmailer\\mailset.php";
if (!isset($_SESSION['USER']['STATUS'])){
    include 'sesion_list.php';
}
$target_dir = 'uploads';

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

	<?php 
  	//*********  IELĀDĒJAM AĢENTU SARAKSTU MASĪVĀ $agent_list ******************************
  	
  	//*********  IELĀDĒJAM SISTĒMAS DATUS ***************************************************
//  	$sql = "SELECT * FROM dati";
//  	$q = $db->query($sql);
//  	$r = $q->fetch(PDO::FETCH_ASSOC);
//    $_SESSION['VERSIJA']=$r['versija_koncep'].'-'.$r['versija_db'].'-'.$r['versija_kods'];

//***   IZVELE NO SARAKSTA  ********************************************************************   	 
if (isset($_GET[''])){

}

//###################  IEIET SISTĒMĀ  ################################################
 if (isset($_POST['btIeiet'])) {

	$user = $_POST['user'];
	$psw = $_POST['psw'];
	foreach($liet_list as $usr){
        $luser=$usr['username'];
		$lPsw=$usr['pasword'];
		if($luser==$user){
            $_SESSION['USER']['STATUS'] = 1;  					// Autorizācijas pirmais solis - username sakrita
			if($lPsw==$psw){

		//	    include 'sesion_list.php';

                $_SESSION['USER']['ID']=$usr['ID'];
                $_SESSION['USER']['VARDS']=$usr['agents'];
                $_SESSION['USER']['TIESIBAS']=$usr['tiesibas'];
                $_SESSION['USER']['LOMA']=$usr['loma'];
                $_SESSION['USER']['STRUKT']=$usr['struktura_kods'];
                $_SESSION['USER']['STATUS'] = 2;
				$MainInfo="Autorizācija ir veiksmīga";
			} else {
                $_SESSION['USER']['ID']=0;
                $_SESSION['USER']['VARDS']='';
                $_SESSION['USER']['TIESIBAS']='';
                $_SESSION['USER']['LOMA']='';
                $_SESSION['USER']['STRUKT']='';
                $_SESSION['USER']['STATUS'] = 0;
                $MainInfo="Autorizācija ir neveiksmīga !!!!";
            }
		}
	}
}	


//###################  IZIET  ############################################################
if (isset($_POST['btIziet'])) {
	$_SESSION['USER']['STATUS']=0;
    include 'sesion_list.php';
}

?>
<form action="index.php" method="post" enctype="multipart/form-data">
<div id="Master"><!--Master    -->
	<div id="Galva"><!--Galva    -->
		<div id="Title"><!--Title    -->
             <span class="spGTitle">Tenapora intranets</span>
		</div><!--Title    -->
        <div id="Pazinojumi">
            <div id="Alert">
                <span id="spAlert"><?php $_SESSION['SYS']['ALERT']  ?> </span>
            </div>
            <div id="Info">
                <span id="spInfo"><?php $_SESSION['SYS']['INFO']  ?> </span>
            </div>
        </div>
    </div>  <!--Galva    -->
    <div id="Menju">
        <div id="MenjuTitle">
            <span id="spTitle"> Izvēlne</span>
        </div>
        <div id="MenjuSaraksts">
            <?php include 'menju.php'; ?>

        </div>

    </div>
    <div id="Forma">
        <div id="FormaTitle">

        </div>
        <div id="FormaMenju">

        </div>
        <div id="FormaForma">

        </div>
        <div id="FormaSatusLine">

        </div>



    </div>
</div><!--Master    -->
</form>	
</body>
</html>
