<?php
function cherche_actu_dans_bdd($quelleactu){
    $pdo=connexion_bdd();
$req="SELECT * FROM actus ORDER BY date_actu DESC LIMIT 4";
$execution_req=$pdo->prepare($req);
$execution_req->execute();
$lesactus=$execution_req->fetchAll(PDO::FETCH_ASSOC);
transforme_en_json($lesactus);

}

function recup_actus_par_id($quelleactu){
    $pdo=connexion_bdd();
    $req="SELECT * FROM actus WHERE id_actu=1";
    $execution_req=$pdo->prepare($req);
    $execution_req->bindValue("1",$quelleactu,PDO::PARAM_STR);
    $execution_req->execute();
    $lesactus=$execution_req->fetchAll(PDO::FETCH_ASSOC);
    transforme_en_json($lesactus); /*marche aussi = affiche en json dans le navigateur*/
}

function cherche_image_dans_bdd($quelleimage){
    $pdo=connexion_bdd();
$req="SELECT * FROM images DESC LIMIT 4";
$execution_req=$pdo->prepare($req);
$execution_req->execute();
$lesimages=$execution_req->fetchAll(PDO::FETCH_ASSOC);
transforme_en_json($lesimages);

}


function connexion_bdd(){
    return new PDO('mysql:host=localhost;dbname=lafourcade_db;charset=utf8', 'lafourcadb_user', 'O6t$t91x');
}

function transforme_en_json($valeur){
    header("Access-Control-Allow-Origin: *");//accès à tout le monde
    header("Content-Type: application/json");
    echo json_encode($valeur, JSON_UNESCAPED_UNICODE);
}
