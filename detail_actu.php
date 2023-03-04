<?php require('inc/header.html'); ?>
<link rel="stylesheet" href="css/detail_actu.css">
<link rel="stylesheet" href="css/page_eau.css">
<link rel="stylesheet" href="css/responsive.css">
<script type="text/javascript" src="js/code.js"></script>
<link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">

<?php require_once('connect/connexion.php'); ?>
<!-- connexion à la base de donnée-->
<?php

$id = $_GET['id']; /*on va chercher le id dans le lien sur la page index.php*/

$req_actus = $connexion->prepare('SELECT * FROM actus WHERE id_actu=?') or die(print_r($connexion->errorInfo())); /*fait ta requete sinon tue la connexion avec un message d'erreur*/
$req_actus->execute(array($id)); /*place dans un tableau les données récupérées */
?>

<?php $actus = $req_actus->fetch(); ?>
<!-- pas de while donc on le place ou on veut-->



<title><?php echo $actus['titre_actu']; ?></title>

</head>

<body>
    <?php require('inc/navbar.html'); ?>
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://frhb10946ds.ikexpress.com/~lafourcade/couserans/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualités</li>
            </ol>
    <h1 class="h1_actu">ACTUALITÉS</h1>
    <article class="article_detail">
        <div class="card" style="width: 50rem;margin-bottom: 5vh;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $actus['titre_actu']; ?></h5>
                <p class="card-text"><?php echo $actus['texte_actu']; ?></p>
                <small class="card-link"><?php echo $actus['date_actu']; ?></small>
                
                
            </div>
            <img src="img/<?php echo $actus['img_actu']; ?>" alt="<?php echo $actus['titre_actu']; ?>">
        </div>
        <?php require('inc/aside.php') ?>
    </article>
    
    <?php include('inc/footer.html'); ?>


</body>

</html>