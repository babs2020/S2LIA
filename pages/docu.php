<!DOCTYPE html>
<html>
<title>L2sectioninf</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style2.css">
<body>

  <nav class="nav2">

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">

        <button class="w3-bar-item w3-button w3-large"
        onclick="w3_close()"> &times;</button>
      <p id="niveau">Licence 2</p>
    <p class="titre" >Semestre 1</p>
        <ul >
        <li><a href="#crypto">Cryptographie 1 </a></li>
        <li><a href="#réseaux">Réseaux Informatiques</a></li>
        <li><a href="#mo">Systemes d'exploitation</a></li>
        <li><a href="#ao">Architectures des ordinateurs</a></li>
        <li><a href="#sd">Structures des données</a></li>
        <li><a href="#li">Linux</a></li>
        <li><a href="#bd">Bases de données</a></li>
        <li><a href="#ro">Recherche opérationelle</a></li>
    </ul>
    <p class="titre">Semestre 2</p>
    <ul   class="menuderoulant">
        <li><a href="#rm">Réseaux Mobiles</a></li>
        <li><a href="#jv">Java</a></li>
        <li><a href="#dw">Dev Web</a></li>
        <li><a href="#ats">Analyse et traitement du signal</a></li>
        <li><a href="#bd2">Bases de données</a></li>
        <li><a href="#wd">Windev</a></li>
        <li><a href="#sc">Sécurité cryptographique</a></li>
    </ul>


    <p>Applications nécessaires</p>
</div>
    </nav> 
 



<div id="main">
<div class="w3-teal">
    <nav class="retour"><a href="index.php" title="revenir à l'ecran d'accueil">Accueil</a></nav>
  <button id="openNav" style="border: none;" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
        <nav class="acro"> IPSA : Institut Polytechniques des Sciences Appliquées </br>
            IPM : Institut Polytechniques des Métiers </br>
            2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie
            </nav> 
  </div>
</div>


<div class="w3-container">
    <div class="w3"><h1> Documentations IPM</h1>
    <p id="text">Bienvenue dans le site de documentation de l'Institut Polytechnique des Métiers,section informatique,</br>
        vous trouverai ici des cours,des travaux pratiques des exercices corrigées ainsi que des supports de cours.</p>
    <p id="lien"> On vous suggère notament le site <a href="https://openclassrooms.com" target="_blank">Openclassrooms.</a></p></div>
    <section><div class="n1"><h2 id="crypto">Cryptographie</h2>
    <h3>Prof:Mr DIAW</h3>
    <a href="Cours IPM\cours_crypto_diaw_Licence.pdf" target="_blank"><button >cours crypto</button></br>
    <a href="Cours Mr DIAW\TD-TP_Cryptographie1.pdf" target="_blank"><button >TD-TP Cryptographie</button></br>
    <p>Supports de cours</p>
    <a href="Cours Mr DIAW\ch_crypto.pdf" target="_blank"><button >ch_crypto</button></br>
    <a href="Cours IPM\blanc-degeorges.pdf" target="_blank"><button >blanc-degeorges</button></br>
    <a href="Cours IPM\CHAP2.3_ El Gamal.pdf"><button>El Gamal</button></a> </div>
    <h2><button>Pratiques</button></h2>
    <p class="n3">Conseils:</p><p class="n2">Avant d'implémenter il faut d'abord <strong>comprendre</strong> le cours et le fonctionnement de l'algorithme à implémenter.</p>
    <ul class="n5"> 
        <li> Implémenter l'algorithme de chiffrement et de déchiffrement matriciel;</li>
        <li>Implémenter l'algorithme de chiffrement et de déchiffrement affine; </li>
        <li>Implémenter l'algorithme de chiffrement et de déchiffrement par Xorisation;</li>
        <li>Implémenter un lfsr;</li>
        <li> Implémenter l'algorithme de chiffrement et de déchiffrement de césar et son crack;</li>
        <li>Implémenter l'algorithme de génération des clés de chiffrement et de déchiffrement de RSA;</li>
        <li>Implémenter l'algorithme de chiffrement et de déchiffrement de ELGAMAL;</li>
        <li>Implémenter l'algorithme de chiffrement et de déchiffrement AES;</li>
        <li>Implémenter l'algorithme de génération des clés de DES et TDES;</li>
        <li>Implémenter l'algorithme de chiffrement et de déchiffrement de RC4 et RC5;</li>
    </ul>
        <p class="n3">NB:</p><p class="n2">ces algorithmes devront être traiter dans le cas général et non particuliers.</p>
        <p class="n6">🔑 [Cryptographie] Comment fonctionne AES (128 bit)</p>
        <video src="🔑 [Cryptographie] Comment fonctionne AES (128 bit) _.mp4" controls poster="AES.jpg" preload="none"  width="500px" height="300px" title="🔑 [Cryptographie] Comment fonctionne AES (128 bit)"></video>
    <div class="n1"><h2 id="réseaux">Réseaux Informatiques</h2>
    <h3>Prof:Mr kassé</h3>
    <a href="Cours IPM\Introduction_Reseaux_Informatique.pptx" target="_blank"><button> cours Réseaux Informatique</button></br>
    <a href="Cours IPM\TD_L2.pdf" target="_blank"><button>TD</button></br>
    <p>Supports de cours</p>
    <a href="Cours IPM\537e25039b176.pdf" target="_blank"><button>Exercices corrigées</button></br>
    <a href="Cours IPM\TD3 - exercices adressage IP.pdf" target="_blank"><button >exercices adressage IP</button></br>
    <a href="Cours IPM\L2-LIF4-P1-Intro.pdf" target="_blank"><button >Résumé</button></br>
    <a href="Cours IPM\TD1_sol.pdf" target="_blank"><button >TD1 avec correction</button></br>
    <a href="Cours IPM\adressage-ip-exercices-solutions.pdf" target="_blank"><button>adressage-ip-exercices-solutions</button></br>
    <a href="Cours IPM\2009-2010-L3-reseau-TD2-adressage-routageIP-corrige.pdf" target="_blank"><button>adressage 2009-2010-L3-reseau-TD2-adressage-routageIP-corrige</button></br></div>
    <h2><button>Pratiques</button></h2>
    <p class="n2">Reproduisez les réseaux suivantes: </p>
    <a href="TP réseaux informatiques\exo.pkt" target="_blank" class="n4">TP1</a></br>
    <a href= "TP réseaux informatiques\tp.pkt"target="_blank"class="n4">TP2</a></br>
    <a href="TP réseaux informatiques\TP1 initiation réseaux informatiques.pkt"target="_blank"class="n4">TP3</a></br>
    <a href="TP réseaux informatiques\TP2.pkt"target="_blank"class="n4">TP4</a></br>
    <p class="n3">NB:</p><p class="n2">une fois reproduite,vous devez vous assurer que les points de liaisons prennent la couleur verte.</p>
    <div class="n1"><h2 id="mo">Systemes d'exploitation</h2>
    <h3>Prof:Mr Diankha</h3>
    <a href="Cours IPM\cours de systemes-d-exploitation-os.pdf" target="_blank"><button>Cours</button></a>
    <p>Supports de cours</p>
    <a href="Cours IPM\QUIZZ OS_Total.pdf" target="_blank"><button>Quizz</button></a>
    <a href="Cours IPM\537e07ce544ab.pdf" target="_blank"><button>Exercices</button></a>
    </div>
    <div class="n1"><h2 id="ao">Architecture des ordinateurs</h2>
    <h3>Prof:Mr Diankha</h3>
    <a href="Cours IPM\Exercice 1.pdf" target="_blank"><button>TD1</button></a>
    <a href="Cours IPM\TD 2.docx" target="_blank"><button>TD2</button></a>
    <p>Supports de cours</p>
    <a href="Cours IPM\Architecture_des_ordinateurs.pdf" target="_blank"><button>Architecture_des_ordinateurs</button></a>
    <a href="Cours IPM\TD Architecture des ordinateurs.pdf" target="_blank"><button>TD Architecture_des_ordinateurs</button></a></div>
    <div class="n1"><h2 id="sd">Structures des données</h2>
    <h3>Prof:Mr Diaw</h3>
    <a href="C:\Users\ASSIETOU\OneDrive\Bureau\Cours Mr DIAW\cours_python_diaw_mise_a_niveau.pdf" target="_blank"><button>cours_python_diaw_mise_a_niveau</button></a>
     <a href="C:\Users\ASSIETOU\OneDrive\Bureau\Cours Mr DIAW\cours_python_diawl3.pdf" target="_blank"><button>cours_python_diawl3</button></a>
    <a href="C:\Users\ASSIETOU\OneDrive\Bureau\Cours Mr DIAW\examen python l2 informatique.pdf" target="_blank"><button>examen python l2 informatique</button></a>
     <p>Supports de cours</p>
     <a href="Cours Mr DIAW\exercices-python.pdf" target="_blank"><button>exercices-python</button></a>
     <a href="Cours Mr DIAW\apprendre_python3_5.pdf" target="_blank"><button>apprendre_python3_5</button></a>
     <a href="Cours Mr DIAW\Memo_Python.pdf" target="_blank"><button>Memo_Python</button></a>
     <a href="Cours Mr DIAW\missions_python_chapellier.pdf" target="_blank"><button>missions_python_chapellier</button></a>
    </div>
    <h2><button>Pratiques</button></h2>
    <ul class="n5">
        <li>Construction d'un anneau Z/nZ</li>
        <li>Implémenter l'algorithme de calcul du pgcd;</li>
        <li>Implémenter l'algorithme de calcul du pgcd avec Bezout;</li>
        <li>Implémenter l'algorithme de calcul de la puissance rapide; </li>
        <li>Implémenter l'algorithme de calcul des racines d'un polynôme quelconque ;</li>
        <li>Implémenter l'algorithme de détermination de la parité d'un nombre;</li>
        <li>Implémenter l'algorithme de vérification de l'authenticité d'un billet de banque;</li>

    </ul>
    <div class="n1"><h2 id="li">LINUX</h2>
        <h3>Prof:Mr Sankhé</h3>
        <a href="Cours IPM\cours_L3TDSI.doc" target="_blank"><button>Cours Linux</button></a>
        <a href="Cours IPM\td-tp1-Linux.pdf"target="_blank"><button>td-tp1-linux</button></a>
        <a href="Cours IPM\Chapitre 4 Gestion des utilisateurs et des groupes.docx"target="_blank"><button>Gestion des utilisateurs et des groupes</button></a>
        <p>Supports de cours</p>
        <a href="Cours IPM\Safari - 27 févr. 2022 à 11_40.pdf"target="_blank"><button>Quelques exercices</button></a>
         <a href="Cours IPM\02 - Commandes de base.pdf"target="_blank"><button>Commandes de base</button></a>
    </div>
    <div class="n1"><h2 id="bd">Base de données</h2>
        <h3>Prof:Mme Gueye</h3>
        <a href="Cours IPM\base_de donnee.pdf"target="_blank"><button>Cours base de données</button></a>
        <a href="Cours IPM\TD_L2I_2.pdf"target="_blank"><button>TD1</button></a>
        <a href="Cours IPM\modelisation.pdf"target="_blank"><button>Modelisation</button></a>
        <a href="Cours IPM\Modelisation_ULM.pdf"target="_blank"><button>Modelisation_ULM</button></a>
        <a href="Cours IPM\Modelisation_ULM_seance2.pdf"target="_blank"><button>Modelisation_ULM_seance2</button></a>
        <p>Supports de cours</p>
        <a href="Cours IPM\Bases de Données.pdf"target="_blank"><button>Bases de Données</button></a></div>
        <div class="n1"><h2 id="ro">Recherche opérationelle</h2>
            <h3>Prof:Dr Diop</h3>
            <a href="Cours IPM\CHAPITRE 1.pdf" target="_blank"><button>CHAPITRE 1</button></a>
            <a href="Cours IPM\TD RO PL.pdf"target="_blank"><button>TD RO PL</button></a>
</section>
</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>