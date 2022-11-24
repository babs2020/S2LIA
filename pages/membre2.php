<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

   <link rel="stylesheet" href="caroussels.css">
   <link href="http://fonts.cdnfonts.com/css/Camellio " rel="stylesheet">
   <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="style.css">
   <link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
     <script src="https://kit.fontawesome.com/7b4b0f92fb.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
     <title>IPM</title>
</head>
<body style="overflow-x:hidden">
<header> 
      <nav class="navbar navbar-expand-md " >
          <a class="navbar-brand" href=""> <img src="logo.jpeg" alt="" style="width:60px;border-radius:20%"></a>
        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
          </button>
      <div class="collapse navbar-collapse justify-content-between" id="nav">
        <ul class="navbar-nav">
         <li class="navbar-item"> <a class="nav-link px-3" href="index.php" style=" font-family:Camellio ;font-size:20px;">Accueil</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="index.php#for" style=" font-family:Camellio ;font-size:20px;">Formations</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="actu.php" style="color:white;font-family:Camellio ;font-size:20px;" style=" font-family:Camellio ;font-size:20px;">Actualité</a></li>

         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown" style=" font-family:Camellio ;font-size:20px;">Presentation</a>
          <div class="dropdown-menu">
             <a class="dropdown-item" href="index.php#mdd">Mots du Directeur</a>
             <a class="dropdown-item" href="index.php#orga">Organigramme</a>
             <a class="dropdown-item" href="index.php#mem">Membres</a>
          </div>
         </li>
         <li class="navbar-item"> <a class="nav-link px-3" href="#fm" style=" font-family:Camellio ;font-size:20px;">Conditions d'admissions</a></li>
         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown" style=" font-family:Camellio ;font-size:20px;">Recherche Scientifique</a>
         <div class="dropdown-menu">
             <a class="dropdown-item" href="">Mémoires Licence3</a>
             <a class="dropdown-item" href="">Mémoire Master</a>
             <a class="dropdown-item" href=""></a>
         </div>
         </li>
         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown" style=" font-family:Camellio ;font-size:20px;">Production Scientifique</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="">Projets terminés</a>
            <a class="dropdown-item" href="projetst.php">Projets en cours</a>
            

          </div>
         </li>
         <li class="navbar-item" id="con"> <a class="nav-link px-3" href="index.php#connex" style="color:#fff;font-family:Camellio ;font-size:20px;">Espace Admin</a></li>

        </ul>
      </div>
      </nav>
    </header>
      <section>

  <h3 style="text-align:center;font-family:Camellio;margin:50px;">Equipe des étudiants</h3>
  <section style="height:500px;display: flex;align-items: center;justify-content:center;background: #f2f2f2;margin:0;
  padding: 0;margin-bottom:300px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;">
    
      <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">
<?php 
  include 'treatment/config.php';
  $query="SELECT * FROM membre   ORDER BY id_mem DESC";
  $statement=$db->prepare($query);
  $statement->execute();
  $result=$statement->fetchAll();
  $total_row=$statement->rowCount();
if ($total_row>0){
   foreach($result as $row){
?>
        <div class="swiper-slide card1" >
          <div class="card-content">
            <div class="image">
            <img src="../DAdmin/img/<?php echo $row['photo']; ?>" alt=""  />
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name"><?php echo $row['prenom']." ".$row['nom']; ?></span>
              <span class="profession"><?php echo $row['fonction']; ?></span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <?php
        }
        }else{
        echo' <tr>
        <td colspan="7" align="center"> Aucune donnée enregistré</td>
        </tr>';
        }
     ?>
       
        
      </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>
    <footer id="footer"  style="background-color:#0f1a33;width:100%">

<div class="row row-cols-1 row-cols-md-3 g-4" id="for">
  <div class="col" style="margin:10px;height:300px">
    <div class="card h-100" style="width:250px">
      <div class="card-body">
        <h5 class="card-title">Menu</h5>
        <ul>
          <li><a class="active" href="index.php">Accueil</a></li>
          <li><a href="#for">Formations</a></li>
          <li><a href="actu.php">Actualités</a></li>
          <li><a href="#mdd">Présentation</a></li>
          <li><a href="#about">Conditions d'admissions</a></li>
          <li><a href="#about">Recherche Scientifique</a></li>
          <li><a href="projetst.php">Production Scientique</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;height:150px">
    <div class="card h-100" style="width:250px">
      <div class="card-body" style="display:inline-block">
        <h5 class="card-title">Contacts</h5>
        <a href="tel:+221772303092" target="_blank" class="btn btn-primary">Orange</a>
        <a href="tel:+22176 332 05 02" target="_blank" class="btn btn-primary">Tigo</a>
      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;height:150px">
    <div class="card h-100" style="width:250px">
      <div class="card-body" style="display:inline-block">
        <h5 class="card-title">Réseaux Sociaux</h5>
        <a href="#" class="fa fa-facebook" style="margin: 8px;"></a>
        <a href="#" class="fa fa-whatsapp" style="margin: 8px;"></a>
        <a href="#" class="fa fa-instagram" style="margin: 8px;"></a>
        <a href="#" class="fa fa-twitter" style="margin: 8px;"></a>
      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;height:150px">
    <div class="card h-100" style="width:250px">
      <div class="card-body">
        <h5 class="card-title">Actualités Récentes</h5>
        <a href="actu.php" target="_blank" class="btn btn-primary">Voir Page</a>
      </div>
    </div>
  </div>

</div>
<div class="foot" style="background-color:#0f1a33;width:100%">
  <h3>2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie</h3>
  <p style="padding-bottom:10px;">GALAXY EDU S. A. R. L</p>
</div> 
</footer> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
</body>
</html>