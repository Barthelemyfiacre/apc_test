<?php 
      session_start();
      require_once ('base_corri.php');
?>
<!doctype html>
<html lang="en">
<title>apc_e_learning</title>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .header{
        background-color: rgb(2, 1,61);
        color: white;
      }
      .bar{
        background-color: rgb(53, 54, 54);
      }
      .justifier{
  text-align: justify;
  text-justify: inter-word;
}
    </style>
  </head>
  <body>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <nav class="mc-navbar navbar navbar-expand-l position-fixed navbar-dark pe-3 w-100">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">apc_e_learning</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="bar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
    
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
          <li class="nav-item pe-2"> 
              <form class="d-flex" method="post">
                 <input type="search" class="form-control me-2" placeholder="Recherche" aria-label="recherche" name="search">
                  <button class="btn btn-outline-success" type="submit">Recherche</button>
              </form>
            </li>  
            <li class="nav-item pe-2"><a href="index.php" class="nav-link active " aria-current="page"> Accueil</a>
            </li>
            

            <li class="nav-item pe-2 fs-10 dropdown drop-down0"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion du Centre </a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement de la Mefou-et-Akono</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeNgoumo.php" class="dropdown-item text-white">Lyc??e de Ngoumo</a></li>
                    <li><a href="LyceeBikok.php" class="dropdown-item text-white">Lyc??e de Bikok</a> </li>
                    <li><a href="LyceeBilingueAkono.php" class="dropdown-item text-white">Lyc??e bilingue d'Akono</a> </li>
                    <li><a href="CollegeObanaOveng.php" class="dropdown-item text-white">Coll??ge Obana d'Oveng</a> </li>
                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Mfoudi</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="CollegeVogt.php" class="dropdown-item text-white">College Vogt</a></li>
                    <li><a href="CollegeJeanTabi.php" class="dropdown-item text-white">Coll??ge Jean Tabi</a> </li>
                    <li><a href="CollegeRetraite.php" class="dropdown-item text-white">Coll??ge la Retraite</a> </li>
                    <li><a href="LyceeGeneralLeclerc.php" class="dropdown-item text-white">Lyc??e G??n??ral Leclerc</a> </li>
                    <li><a href="LyceeBilingueYaounde.php" class="dropdown-item text-white">Lyc??e Bilingue de Yaound??</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Nyong-et-Kelle</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="CollegeMarieAlbert.php" class="dropdown-item text-white">Coll??ge Marie Albert</a></li>
                    <li><a href="LyceeClassiqueEseka.php" class="dropdown-item text-white">Lyc??e Classique d'Es??ka</a> </li>
                    <li><a href="LyceeBilingueEseka.php" class="dropdown-item text-white">Lyc??e Bilingue d'Es??ka</a> </li>
                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Nyong-et-Mfoumou</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueAkonolinga.php" class="dropdown-item text-white">Lyc??e bilingue d'Akonolinga</a></li>
                    <li><a href="LyceeClassiqueModerneAkonolinga.php" class="dropdown-item text-white">Lyc??e classique et Moderne d'Akonolinga</a> </li>
                    <li><a href="CollegeDupond.php" class="dropdown-item text-white">Coll??ge Dupond</a> </li>
                </ul>
              </li>
            </ul>
            </li>
            <li class="nav-item dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion du Littoral</a>
                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Wouri</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueNylonBrazzaville.php" class="dropdown-item text-white">Lyc??e Bilingue de Nylon Brazzaville </a></li>
                    <li><a href="CollegeLibermann.php" class="dropdown-item text-white">Coll??ge Libermann </a> </li>
                    <li><a href="LyceeJoss.php" class="dropdown-item text-white">Lyc??e Joss</a> </li>
                    <li><a href="LyceeBilingueBonaberi.php" class="dropdown-item text-white">Lyc??e Bilingue de Bonab??ri</a> </li>
                    <li><a href="CollegeChevreuil.php" class="dropdown-item text-white">Coll??ge Chevreuil</a> </li>
                    <li><a href="LyceeOyack.php" class="dropdown-item text-white">Lyc??e d'Oyack</a> </li>
                    <li><a href="LyceeBilingueBepanda.php" class="dropdown-item text-white">Lyc??e Bilingue de B??panda</a> </li>
                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement de la Sanaga Maritime</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeClassiqueEdea.php" class="dropdown-item text-white">Lyc??e classique d'Ed??a</a></li>
                    <li><a href="LyceeBilingueEdea.php" class="dropdown-item text-white">Lyc??e Bilingue d'Ed??a</a> </li>
                    <li><a href="CollegeBabaSimonMissole.php" class="dropdown-item text-white">Coll??ge Baba Simon de Missol??</a> </li>
                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Nkam</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueYabassi.php" class="dropdown-item text-white">Lyc??e Bilingue de Yabassi</a></li>
                    <li><a href="LyceeBonepoupa.php" class="dropdown-item text-white">Lyc??e de Bonepoupa </a> </li>
                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Moungo</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeManengoumba.php" class="dropdown-item text-white">Lyc??e de Manengoumba</a></li>
                    <li><a href="CollegeLele.php" class="dropdown-item text-white">Coll??ge L??l??</a> </li>
                    <li><a href="LyceeBilingueNkonsamba.php" class="dropdown-item text-white">Lyc??e Bilingue de Nkonsamba</a> </li>

                </ul>
              </li>
                </ul>
            </li>
            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion de l'Ouest</a>
                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement de la Menoua</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueDschang.php" class="dropdown-item text-white">Lyc??e bilingue de Dschang</a></li>
                    <li><a href="LyceeClassiqueDschang.php" class="dropdown-item text-white">Lyc??e classique de Dschang</a> </li>
                    <li><a href="CollegeNotreDame.PHP" class="dropdown-item text-white">Coll??ge Notre Dame</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement de la Mifi</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeClassiqueBafoussam.php" class="dropdown-item text-white">Lyc??e Classique de Bafoussam</a></li>
                    <li><a href="LyceeBilingueBafoussam.php" class="dropdown-item text-white">Lyc??e Bilingue de Bafoussam </a> </li>
                    <li><a href="CollegeSaintThomasAcquin.php" class="dropdown-item text-white">Coll??ge Saint Thomas d'Acquin</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Nde</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueBagante.php" class="dropdown-item text-white">Lyc??e Bilingue de Bagant??</a></li>
                    <li><a href="LyceeClassiqueBagante.php" class="dropdown-item text-white">Lyc??e Classique de Bagant??</a> </li>
                    <li><a href="CollegeEvangeliqueThomasNoutong.php" class="dropdown-item text-white">Coll??ge Evangelique Thomas Noutong</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement des Bamboutos</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueMboudaRural.php" class="dropdown-item text-white">Lyc??e Bilingue de Mbouda rural</a></li>
                    <li><a href="CollegeAloysTapiemene.php" class="dropdown-item text-white">Coll??ge Aloys Tapiemene</a> </li>
                    <li><a href="CollegePolyvalentUnite.php" class="dropdown-item text-white">Coll??ge Polyvalent de l'unit??</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Haut Nkam</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeClassiqueBafang.php" class="dropdown-item text-white">Lyc??e Classique de Bafang</a></li>
                    <li><a href="LyceeKekem.php" class="dropdown-item text-white">Lyc??e de Kekem</a> </li>
                    <li><a href="CollegeSaintPaulBafang.php" class="dropdown-item text-white">Coll??ge Saint Paul de Bafang</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement de koung-khi</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBandjoun.php" class="dropdown-item text-white">Lyc??e de Bandjoun</a></li>
                    <li><a href="LyceeBilingueYom.php" class="dropdown-item text-white">Lyc??e Bilingue de Yom</a> </li>
                    <li><a href="CollegeSaintJoseph.php" class="dropdown-item text-white">Coll??ge Saint Joseph</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement des Hauts Plateaux</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueBaham.php" class="dropdown-item text-white">Lyc??e Bilingue de Baham</a></li>
                    <li><a href="LyceeBilingueBangou.php" class="dropdown-item text-white">Lyc??e Bilingue de Bangou</a> </li>
                    <li><a href="CollegeNathan.php" class="dropdown-item text-white">Coll??ge Nathan</a> </li>

                </ul>
              </li>
              <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="dropdown-toggle active nav-link text-black" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">D??partement du Noun</a>
                <ul class="dropdown-menu bg-dark " aria-labelledby="navbardropdown">
                    <li><a href="LyceeKoutaba.php" class="dropdown-item text-white">Lyc??e de Koutaba</a></li>
                    <li><a href="LyceeClassiqueFoumban.php" class="dropdown-item text-white">Lyc??e classique de Foumban</a> </li>
                    <li><a href="LyceeBilingueSultanIbrahimNjoya.php" class="dropdown-item text-white">Lyc??e Bilingue Sultan Ibrahim Njoya</a> </li>

                </ul>
              </li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion de l'Est</a>
                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="LyceeScientifiqueBertoua.php" class="dropdown-item">Lyc??e scientifique de Bertoua</a></li>
                    <li><a href="LyceeBilingueBertoua.php" class="dropdown-item">Lyc??e Bilingue de Bertoua</a></li>
                    <li><a href="CollegeTeerenstraBertoua.php" class="dropdown-item">Coll??ge Teerenstra de Bertoua</a></li>
                </ul>
            </li>

            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion du Sud</a>
                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueEbolowa.php" class="dropdown-item">Lyc??e Bilingue d'Ebolowa</a></li>
                    <li><a href="LyceeBilingueKribi.php" class="dropdown-item">Lyc??e Bilingue de Kribi</a></li>
                    <li><a href="Lyc??eSanm??lima.php" class="dropdown-item">Lyc??e de Sangm??lima</a></li>
                </ul>
            </li>
           
            <li class="nav- pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion du Sud-Ouest</a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="CollegeSonaraLimbe.php" class="dropdown-item">Coll??ge Sonara de Limb??</a></li>
                    <li><a href="LyceeBilingueMolyko.php" class="dropdown-item">Lyc??e Bilingue de Molyko</a></li>
                </ul>
            </li>
           
            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion l'Extr??me Nord</a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueMaroua.php" class="dropdown-item">Lyc??e Bilingue de Maroua</a></li>
                    <li><a href="CollgeJacquesBernon.php" class="dropdown-item">Coll??ge bilingue Jacques de Bernon</a></li>
                </ul>
            </li>
           
           
            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion du Nord</a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="LyceeClassiqueModerneGaroua.php" class="dropdown-item">Lyc??e Classique et Moderne de Garoua</a></li>
                    <li><a href="CollegeSainteThereseGaroua.php" class="dropdown-item">Coll??ge Sainte Th??r??se de Garoua</a></li>
                </ul>
            </li>
            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion du Nord-Ouest</a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="LyceeBilingueDownTownBamenda.php" class="dropdown-item">Lyc??e Bilingue de Down Town Bamenda</a></li>
                    <li><a href="LyceeBilingueBayelle-Nken.php" class="dropdown-item">Lyc??e Bilingue de Bayelle-Nken</a></li>
                </ul>
            </li>
            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link active dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">R??gion de L'Adamaoua</a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="LyceeClassiqueModerneNgaoundere.php" class="dropdown-item">Lyc??e Classique et Moderne de Ngaound??r??</a></li>
                    <li><a href="CollegeVictoire.php" class="dropdown-item">Coll??ge la Victoire</a></li>
                    <li><a href="CollegeProtestant.php" class="dropdown-item">Coll??ge Protestant</a></li>
                </ul>

            </li>
            <li class="nav-item pe-2 fs-10 dropdown"><a href="#" class="nav-link  dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Autres ressources</a>
            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                    <li><a href="TD.php" class="dropdown-item">TD et Corrig??s</a></li>
                    <li><a href="boords.php" class="dropdown-item">Fascicules</a></li>
                    <li><a href="tuto.php" class="dropdown-item">Tutoriels</a></li>
                </ul>
            </li>
        </ul>
          <ul class="navbar-nav ms-auto">
          <li class="nav-item me-2">
            <a href="espace_admi.php" class="nav-link text-uppercase"> espace administrateur
              
            </a>
          </li>
          </ul>
          <ul class="navbar-nav ms-auto">                
          <?php 
              if(isset($_POST['d??connexion']))
              {	// D??truire la session
                  
                  session_destroy();
                // Redirection vers la page de connexion

              }
                if(isset($_SESSION['username'])){
                  echo '
                  <form method="POST">
                   <input type="submit" value="D??connexion" name="d??connexion" class="btn btn-success">
              </form>';
                }else{
            echo "<li class='nav-item me-2'>
              <a href='login.php' class='nav-link'>Se Connecter</a>
            </li>
            <li class='nav-item'>
              <a href='registration.php' class='btn btn-success'>S'inscrire</a>
            
            </li>";
          }
          ?>
          </ul>

        </div>
      </div>
      
    </nav>
    <section >
      
     
         
            <article id="doc" class="mx-auto">
            
            <?php

//Initialisation de la variable $resultats
$resultats = "";

//traitement de la requ??te
if (isset($_POST['search']) && !empty ($_POST['search'])) {
//on v??rifie si l'utilisateur a entr?? des termes ?? rechercher, et on traite sa requ??te

//connexion ?? la base de donn??es


// $query = preg_replace("#[^a-zA-Z ? 0-9]#i", "", $_POST['search']);
$query= stripslashes($_POST['search']);
$query = $_POST["search"];
 $query = trim($query); 
 $query = strip_tags($query);


//Requ??te de s??lection MySQL
$req = $db->prepare('SELECT * FROM documentations WHERE etablissement LIKE ? OR classe LIKE ? OR matiere LIKE ? OR descriptions LIKE ?  ORDER BY classe DESC ');
$req->execute(array("%".$query."%","%".$query."%","%".$query."%","%".$query."%"));
//On compte les r??sultats
$count = $req->rowCount();
?>
<?php 
if ($count >= 1) {
  
  echo"<div class='text-success py-5'>  </div><div class='text-white '><i class='text-success '> $count</i>
  r??sultats trouv??s pour:  <strong class='text-dark'> $query </strong> \n </div>";
  while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
    ?>

<div id="download" class="bg-white my-2">
                 

                 <div id="image_epreuve">
                     <img src="images/icon pdf.png" class="d-block img-fluid " alt="epreuve" >
                
                 </div>
                 <div  class="serif mx-2 py-0 my-0">
                 <b><p><?php echo $reponse->matiere;?></p></b>
                 <b><p><?php echo $reponse->classe;?></p></b>
                <i><p><?php echo $reponse->descriptions;?></p></i>
                <b><u><p class="vert"><?php echo $reponse->etablissement;?></p></u></b>
                     
                 </div>
                 <div id="download_epreuve">
                             <a href="download.php?document=<?php echo $reponse->nom; ?>">
                                
                                <button class="mx-1 btn-success my-1">telecharger</button>
                        
                                </a> <br> 
             <a href="download_corri.php?id=<?php echo $reponse->id;?>"> <button class=" btn-primary">corrig?? de l'??preuve</button> </a>  
            
             </div>
            </div>
 <?php }   
} else {
  echo "\n <hr /> <div class='text-white py-5'> Aucun r??sultat trouv?? pour:    <strong class='text-danger'> $query </strong> <div>\n";
}

}else{

 ?>  

   
    <section class="mc-form d-flex justify-content-center align-items-center pt-5">
      <div class="container-fluid justifier my-5 py-5">
        <div class="row">
          <div class="col-md-6 text-white ">
            <div class="container">
            
              <b>
                  <i>
                       <h1 class=" title-niv-1">apc_e_learning <br> Faire d'internet un outil de d??veloppement des comp??tences</h1>
                  </i>
              </b>	 
         </div>
          <div classe=" container">
          
              <p >
              apc_e_learning est une plate forme
               ??ducative qui met ?? la disposition des ??l??ves des ressources n??cessaires au d??veloppement 
               des comp??tences qui vont assurer non seulement leur succ??s aux examens officiels mais aussi 
               et surtout leur insertion socio-professionelle. Il s'agit entre autres des sujets d'??valuations sommatives
                des ??tablissements de renom et leurs corrig??s detaill??s, des cours, des travaux dirig??s, des fascicules
               et tutoriels ??ducatifs.                      
               </p>
          </div>
          </div>
          <div class="col-md-6">
         
            <aside>
            <article class="my-3" id="carousel">

<div>
  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="images/f (5).jpg" class="d-block w-100" alt="">        
      </div>
      <div class="carousel-item">
      <img src="images/imp (3).jpeg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
      <img src="images/f (4).jpg " class="d-block w-100 " alt="">      
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
</div>
</article>
          </aside>
          </div>
        </div>
      </div>
    </section>
    
    <section class=" serif bg-white d-flex justify-content-center align-items-center py-3 my-1">
      <div class="container">
        <div class="row">
          <div class="card mb-3 border-0 rounded-0">
            <div class="row">
              <div class="col-md-4">
                <img src="images/imp (3).jpeg" class="img-fluid size-img" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title vert">Education</h5>
                  <p class="card-text"></p>
                  <p class="card-text">"L'??ducation consiste ?? nous donner des id??es, et la bonne ??ducation ?? les mettre en proportion"<a href="#" class="text-muted btn"><u>Montesquieu</u></a></p>
                  <p class="card-text">"L'??ducation modifie, elle corrige. L'??ducation am??liore les bons elle fortifie les faibles."<a href="#" class="text-muted btn"><u> Alexandre Dumas,fils</u></a></p>
                  <p class="card-text"> chacun est le fruit d'une ??ducation; mais le plus grand ??ducateur, c'est la personne elle-meme.<a href="#" class="text-muted btn"><u></u></a></p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="card md-3 border-0 rounded-0">
            <div class="row">
              <div class="col-md-4">
                <img src="images/imp (4).jpeg" class="img-fluid size-img" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title vert">Sant?? pour toujours</h5>

                  <p class="card-text"></p>
                  <p class="card-text">"Que ton alimentation soit ta premi??re m??decine"<a href="#" class="text-muted btn"><u>Hippocrate</u></a></p>
                  <p class="card-text">"Ceux qui ne trouvent pas un peu de temps chaque jour pour leur sant?? devront sacrifier beaucoup de temps un jour pour leur maladie."<a href="#" class="text-muted btn"><u>Sebastien Kneipp</u></a></p>
                  <p class="card-text">"Certains hommes perdent la sant?? pour amasser de l'argent. Puis un jour, il d??pense cet argent pour tenter d??sesp??r??ment de r??cup??rer leur sant??"</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php }?>  

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl){
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
      <script>
        (function($bs) {
		const CLASS_NAME = 'has-child-dropdown-show';
			$bs.Dropdown.prototype.toggle = function(_orginal) {
				return function() {
					document.querySelectorAll('.' + CLASS_NAME).forEach(function(e) {
						e.classList.remove(CLASS_NAME);
					});
					let dd = this._element.closest('.dropdown').parentNode.closest('.dropdown');
					for (; dd && dd !== document; dd = dd.parentNode.closest('.dropdown')) {
						dd.classList.add(CLASS_NAME);
					}
					return _orginal.call(this);
				}
			}($bs.Dropdown.prototype.toggle);

			document.querySelectorAll('.dropdown').forEach(function(dd) {
				dd.addEventListener('hide.bs.dropdown', function(e) {
					if (this.classList.contains(CLASS_NAME)) {
						this.classList.remove(CLASS_NAME);
						e.preventDefault();
					}
					if(e.clickEvent && e.clickEvent.composedPath().some(el=>el.classList && el.classList.contains('dropdown-toggle'))){
						e.preventDefault();
					}
					e.stopPropagation(); // do not need pop in multi level mode
				});
			});

			// for hover
			function getDropdown(element) {
				return $bs.Dropdown.getInstance(element) || new $bs.Dropdown(element);
			}

			document.querySelectorAll('.dropdown-hover, .dropdown-hover-all .dropdown').forEach(function(dd) {
				dd.addEventListener('mouseenter', function(e) {
					let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
					if (!toggle.classList.contains('show')) {
						getDropdown(toggle).toggle();
					}
				});
				dd.addEventListener('mouseleave', function(e) {
					let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
					if (toggle.classList.contains('show')) {
						getDropdown(toggle).toggle();
					}
				});
			});
		})(bootstrap);
      </script>

  </body>
  <?php require_once ('footer.php'); ?>
</html>
