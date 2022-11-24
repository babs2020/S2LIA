<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($prenom) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon
                            $objet = new PDO('mysql:host=localhost;dbname=ipm', 'root','');
                            $pdoStart= $objet->prepare('INSERT INTO etudiants VALUES(NULL,:nom,:prenom,:email,:numero,:password,:password_retype,:formation,:niveau)');  /* pdo: connecter a la base */
                            $pdoStart->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);        /* bind: recupere ce que l'user a tapé et l'aporte dans la table */
                            $pdoStart->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
                            $pdoStart->bindvalue(':email',$_POST['email'],PDO::PARAM_STR);
                            $pdoStart->bindvalue(':numero',$_POST['numero'],PDO::PARAM_STR);
                            $pdoStart->bindvalue(':password',$_POST['password'],PDO::PARAM_STR);
                            $pdoStart->bindvalue(':password_retype',$_POST['password_retype'],PDO::PARAM_STR);
                            $pdoStart->bindvalue(':formation',$_POST['formation'],PDO::PARAM_STR);
                            $pdoStart->bindvalue(':niveau',$_POST['niveau'],PDO::PARAM_STR); 
                            $insertisok=$pdoStart->execute();
                            header('Location:inscription_traitement.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription_traitement.php?reg_err=password'); die();}
                    }else{ header('Location: inscription_traitement.php?reg_err=email'); die();}
                }else{ header('Location: inscription_traitement.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription_traitement.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription_traitement.php?reg_err=already'); die();}
    }
?>
<!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" href="styles.css">
         <script src="https://kit.fontawesome.com/7b4b0f92fb.js" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
         <title>IPM</title>
      </head>
      <body>
        <div class="entet">
            <header> 
          <nav class="navbar navbar-expand-md " >
              <a class="navbar-brand" href=""><i class="fa-solid fa-2x fa-user-graduate"></i></a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="nav">
              <ul class="navbar-nav">
             <li class="navbar-item"> <a class="nav-link px-3" href="index.php">Accueil</a></li>
             <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="#For">Formations</a></li>
             <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Informations</a>
             <div class="dropdown-menu">
                 <a class="dropdown-item" href="#RE">Recrutements</a>
                 <a class="dropdown-item" href="#Dé">Débouchés</a>
                 <a class="dropdown-item" href="#PF">Pieces à fournir</a>
                 <a class="dropdown-item" href="#loc">Localisation</a>
             </div>
            </li>
            <li class="navbar-item"> <a class="nav-link px-3" href="#fm">Préinscription</a></li>
             <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Contacts</a>
             <div class="dropdown-menu">
                 <a class="dropdown-item" href="tel:77 230 30 92">Tel1</a>
                 <a class="dropdown-item" href="tel:76 332 05 02">Tel2</a>
                 <a class="dropdown-item" href="mailto:polymetiers@gmail.com">Email</a>
             </div>
            </li>
             <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Espace étudiant</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#connex">Connexion</a>
                <a class="dropdown-item" href="#am">Inscription</a>
                <a class="dropdown-item" href="#">Forum</a>
    
            </div>
        </li>
            </ul>
                </div>
          </nav>
        
          <section>
              <div class="container-fluid">
                  <div class="row" style="height:100vh">
                      <div col-sm-10>
                        <div class="header-content">
                        <h1 class="bn">Institut Polytechnique des Métiers </br>
                            <a href="https://codepen.io/grohit/"></a></h1>
                        <p>IPSA : Institut Polytechnique des Sciences Appliquées </br>
                        2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie </p> </div>
                      </div>
                  </div>
              </div>
          </section>
          </header>
          </div>
        </div>
        <h3 class="bien">Bienvenue sur notre site</h3> 
          <p class="gras">L’Institut Polytechniques des Métiers (IPM) a pour vocation </br>
             de former des Techniciens supérieurs et Ingénieurs de Conception.</p>
             <p class="note">IPM est dirigée par des professeurs titulaires des universités(CAMES) en Mathématiques, Physique,Informatique et Sécurité. </br>
             Les enseignements sont dispensés par des professeurs titulaires des universités,
                des maitres de conférences, des docteurs,
                doctorants et ingénieurs venant des universités et des entreprises publiques ou privées.</p>
                <span class="tit" id="For">Formations</span>
             
            <div class="forma">
              
            <button class="btn">Génie Informatique et sécurité</button>  
            <button class="btn">Génie Electromécanique</button>  
            <button class="btn">Génie Civil</button>
            <button class="btn">Génie des procédés</button></div>
            <div class="note">Des formations pour préparer les élèves et étudiants aux concours d'entrée  
              dans les grandes écoles et les écoles d'ingénieurs.</div> 
            <div><span class="tit" id="RE">Recrutements</span></div>
          <div class="recru">
          <span class="sstit">Option Recherche</span>
          <ul class="if"> 
            <li> ❖ En licence,ouvertes à tous les Bacheliers des séries Scientifiques, 
              les étudiants en L1, L2 MPI-PCSM-MAI-MASS-SN ou tout autre diplôme admis en équivalence.</br>
               Sur dossier et test (non-payant).</li>
            <li>❖ En master,ouverte à tous les étudiants en L3 MPI-PCSM-MAI-MASS-SN ou 
               tout autre diplôme admis en équivalence. </br> Sur dossier et test (non-payant).</li>
          </ul>
        </div>
          <div class="recru">
          <span class="sstit"> Option Professionnelle</span> 
          <ul class="if"> 
            <li>❖ En Licence ,ouverte à tous les Bacheliers (Littéraires, Arabe, ou Scientifiques),
              les étudiants en L1, L2 ayant un diplôme admis en équivalence .</br>
               Sur dossier payant avec la possibilité d’avoir une Bourse Entière.</li>
            <li>❖ En master , ouvert à tous les étudiants en L3 MPI-PCSM-MAI-MASS-SN ou 
              tout autre diplôme admis en équivalence.  </br> Sur dossier payant avec la possibilité d’avoir une Bourse Entière</li>
          </ul></div>
        
    
           <div><span class="tit" id="Dé">Débouchés</span></div> 
          <div >
          <ol  class="rec"> 
            <li>
              <span>Partie Recherche :</span> 
              <ul  class="if">
                <li>➵ Admission en Master professionnel ou Recherche, Possibilité de faire la thèse.</li>
                <li>➵ Dans le monde du travail : insertion professionnelle dans le milieu de l’entreprise à partir de la Licence 3.</li>
              </ul>
            </li>
            
            <li> 
              <span>Partie Professionnelle :</span>
              <ul class="if">
                <li>➵ Admission en Master pro.</li>
                <li>➵ Dans le monde du travail : insertion professionnelle dans le milieu de l’entreprise à partir de la Licence 3.</li>
              </ul>
            </li>
          </ol>
        </div>
         <div><span class="tit" id="PF">Pieces à fournir </span></div> 
          <div class="recru">
          <ul class="if" >
            <li>❖ Copies certifiées conforme des attestations.</li>
            <li>❖ Photocopie de la carte d’identité.</li>
           
          </ul></div>
            <div class="no">NB:Pas de frais de dossier</div> 
            <div><span class="tit" id="loc">Localisation</span></div> 
            <iframe src="https://www.google.com/maps/embed?pb=!4v1653662550348!6m8!1m7!1sz0JrlaO20Wwil7W1gVqkOA!2m2!1d14.74019679849031!2d-17.46871776720172!3f41.15347379030593!4f-7.584699883343745!5f0.7820865974627469" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div id="fm" class="modal">
              <div class="modal_content">
              <div class="login-form"> 
                <form action="preinscription.php" method="post">
                <a href="#" class="modal_close">&times;</a>
            <div class="wrapper">
              <div class="title">
                  Préinscription
              </div>
              <div class="form">
                  <div class="input_field">
                      <label for="">Nom</label>
                      <input type="text" class="input" name="nom" class="form-control" Required  autocomplete="off">
                  </div>
                  <div class="input_field">
                      <label for="">Prenom(s)</label>
                      <input type="text" class="input" name="prenom" class="form-control" Required  autocomplete="off">
                  </div>
                  <div class="input_field">
                      <label for="">Email</label>
                      <input type="email" class="input" name="email" class="form-control" Required  autocomplete="off">
                  </div>
                  <div class="input_field">
                      <label for="">Numéro de téléphone</label>
                      <input type="tel" class="input" name="numero" class="form-control" Required  autocomplete="off">
                  </div>
                  <div class="input_field">
                      <label for="">Genre</label>
                      <div class="custom_select">
                          <select  name="genre" class="form-control" Required  autocomplete="off">
                              <option value="select">Select</option>
                              <option value="femme">Femme</option>
                              <option value="homme">Homme</option>
                          </select>
                      </div>
                  </div>
                  <div class="input_field">
                      <label for="">Formations</label>
                      <div class="custom_select">
                          <select id="" name="formation" class="form-control" Required  autocomplete="off">
                              <option value="">Select</option>
                              <option value="Génie Informatique" >Génie Informatique</option>
                              <option value="Génie Electrique">Génie Electrique</option>
                              <option value="Génie Civil">Génie Civil</option>
                              <option value="Génie des procédés">Génie des procédés</option>
                          </select>
                      </div>
                  </div>
                  <div class="input_field">
                      <label for="">Niveau</label>
                      <div class="custom_select">
                          <select id="" name="niveau"  class="form-control" Required  autocomplete="off">
                              <option value="">Select</option>
                              <option value="Licence1">Licence1</option>
                              <option value="Licence2">Licence2</option>
                              <option value="Licence3">Licence3</option>
                              <option value="Master1">Master1</option>
                              <option value="Master2">Master2</option>
                          </select>
                      </div>
                  </div>
                  <div class="input_field">
                      <label for="">Motivation</label>
                      <textarea class="textarea" name="motivation" class="form-control" Required  autocomplete="off"></textarea>
                  </div>
                  <div class="input_field">
                  <input type="submit" value="Envoyer" class="btn-">
                  </div>
              </div>
          </div>
          </form>
        </div>
      </div>
      </div>
     
      <div id="connex" class="modal1">
        <div class="modal_content1">
            <div class="login-form">
          <form action="connexion.php" method="post">
            <a href="#" class="modal_close1">&times;</a>
            <h3>Connexion</h3>
            <div class="inputBox1">
                <span>Email</span>
                <div class="box">
                    <div class="icon"><ion-icon name="people"></ion-icon>
                        </div>
                    <input type="text" name="email" class="form-control" Required  autocomplete="off">
                </div>
            </div>
            <div class="inputBox1">
                <span>Mot de passe</span>
                <div class="box">
                    <div class="icon"><ion-icon name="lock"></ion-icon>
                        </div>
                    <input type="password" name="password" class="form-control" Required  autocomplete="off">
                </div>
                <label> <input type="checkbox">Se souvenir de moi</label>
                <div class="inputBox1">
                    <div class="box">
                       <input type="submit" value="Se connecter">
                    </div>
                </div>
                <a href="#" class="Forgot">Mot de passe oublié ?</a>
            </div>
            <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
        </form>
        </div>
        </div>
      </div>
      <nav>
    
      <div id="am" class="modal2">  
        <div class="modal_content2">  
        <div class="login-form">
        <form action="inscription_traitement.php" method="post">
        <a href="#" class="modal_close2">&times;</a>
        <div class="wrapper">
          <div class="title">
             Inscription
          </div>
          <div class="form">
              <div class="input_field">
                  <label for="">Nom</label>
                  <input type="text" class="input" name="nom" class="form-control" Required autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Prenom(s)</label>
                  <input type="text" class="input" name="prenom" class="form-control" Required autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Email</label>
                  <input type="email" class="input" name="email" class="form-control" Required autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Numéro de téléphone</label>
                  <input type="tel" class="input" name="numero" class="form-control" Required autocomplete="off">
              </div>
              <div class="input_field">
                <label for="">Mot de pass</label>
                <input type="password" class="input" name="password" class="form-control" Required autocomplete="off">
            </div>
            <div class="input_field">
              <label for="">Retapez le mot de pass</label>
              <input type="password" class="input" name="password_retype" class="form-control" Required autocomplete="off">
          </div>
              <div class="input_field">
                  <label for="">Formations</label>
                  <div class="custom_select">
                      <select name="formation" id="" class="form-control" Required  autocomplete="off">
                          <option value="">Select</option>
                          <option value="Génie Informatique">Génie Informatique</option>
                          <option value="Génie Electrique">Génie Electrique</option>
                          <option value="Génie Civil">Génie Civil</option>
                          <option value="Génie des procédés">Génie des procédés</option>
                      </select>
                  </div>
              </div>
              <div class="input_field">
                  <label for="">Niveau</label>
                  <div class="custom_select">
                      <select name="niveau" id="" class="form-control" Required autocomplete="off">
                          <option value="">Select</option>
                          <option value="Licence1">Licence1</option>
                          <option value="Licence2">Licence2</option>
                          <option value="Licence3">Licence3</option>
                          <option value="Master1">Master1</option>
                          <option value="Master2">Master2</option>
                      </select>
                  </div>
              </div>
              <div class="input_field">
                  <input type="submit" value="S'inscrire" class="btn-">
              </div>
          </div>
          </div>
      </form>
        </div>
        </div>
        </div>
        <style>
        .login-form {
            width: 100%;
            margin: 50px auto;
        }
        </style>
      <footer id="footer">
         <div class="foot">
        <h2>INSTITUT POLYTECHNIQUE DES METIERS (I. P. M.)</h2>
                        <p>GALAXY EDU S. A. R. L</br>
                        Tél: 77 230 30 92 / 76 332 05 02 </p>
      </div>
        </footer>  
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>
     

                                              
                       
   