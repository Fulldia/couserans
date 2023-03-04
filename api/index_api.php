<?php
require_once('api.php');
if(isset($_GET['actu'])){
$quelleactu=$_GET['actu'];
if($quelleactu=="tout"){
    cherche_actu_dans_bdd($quelleactu);
    }
 if($quelleactu=="1"){
    recup_actus_par_id($quelleactu); /*marche, permet de récupérer les infos quand quelleactu = 1 ou 2*/
}
}

?>