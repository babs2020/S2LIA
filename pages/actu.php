<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body style="overflow-x:hidden">
    <header> 
      <?php include '../includes/nav.php'; ?>
    </header>
    <h3 style="text-align:center;font-family:Camellio;margin:50px;">Actualités</h3>
    <section style="height:500px;display: flex;align-items: center;justify-content:center;background: #f2f2f2;margin:0;
  padding: 0;margin-bottom:300px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;">
    
      <div class="swiper mySwiper container" >
      <div class="swiper-wrapper content">

        <div class="swiper-slide card1" style="background-image:url(semi.jpeg);  background-size: cover; height:360px;border-radius:25px">
          <div class="card-content" >
          

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Séminaires</span>
            </div>
            <div class="button">
              <button class="aboutMe">About</button>
              <button class="hireMe">Date</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card1"  style="background-image:url(soutenance.jpeg);  background-size: cover;height:360px;border-radius:25px" >

          <div class="card-content">
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Soutenances </span>
            </div>

            <div class="button">
              <button class="aboutMe">About</button>
              <button class="hireMe">Date</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card1"  style="background-image:url(concours.jpg);  background-size: cover;height:360px;border-radius:25px;background-repeat:no-repeat">
          <div class="card-content">

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Concours</span>
            </div>
            <div class="button">
              <button class="aboutMe">About</button>
              <button class="hireMe">Date</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card1"  style="background-image:url(recru.jpeg);  background-size: contain;height:360px;border-radius:25px">
          <div class="card-content">
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Recrutements</span>
            </div>
            <div class="button">
              <button class="aboutMe">About</button>
              <button class="hireMe">Date</button>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>
    <section class="carousel" aria-label="Gallery">
 
<?php include '../includes/footer.php' ; ?>
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