<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: orange;}
</style>
    <?php include '../includes/head.php'; ?>
</head>
<body style="overflow-x:hidden">

<header > 
     <?php include '../includes/nav.php'; ?>
    </header>
    <body>
        <form action="" style="margin:50px;">
        <h2>Soutenances</h2>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Formations</option>
                <option value="1">Génie Informatique</option>
                <option value="2">Génie électromécanique</option>
                <option value="3">Génie civil</option>
                <option value="4">Génie des procédés</option>
            </select>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Niveau</option>
                <option value="1">Licence3</option>
                <option value="2">Master</option>
                <option value="3">Doctorat</option>
            </select>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Sujets</option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
            </select>

        </form>
        <div style="overflow-x: auto;margin:50px;">
  <table>
    <tr>
      <th>Auteur</th>
      <th>Sujet</th>
      <th>Directeur du mémoire</th>
      <th>Date de soutenance</th>
      <th>Fichier</th>
    </tr>
    <tr>
      <td>Mbery Sene</td>
      <td>Gestion de stock</td>
      <td>Mame Abdou Diaw</td>
      <td>20/11/22</td>
      <td> <a href="MEMOIRE.pdf" target="_blanck"> <img src="pdf.png" alt=""> </a> </td>
     
    </tr>
 
  </table>
</div>

    </body>
   <?php include '../includes/footer.php'; ?>
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