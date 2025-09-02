<?php include 'includes/header.php' ?>

<section class="banner-blue">
  <div class="head">
    <h2>Gallery</h2>
    <p>Home>> <span class="og">Gallery</span></p>
  </div>

</section>
<div class="div-container">
    
  <div class="tab-container-img">
    <button class="tab-btn-img active" onclick="showgallerySet('all')">All Photos</button>
    <button class="tab-btn-img" onclick="showgallerySet('tempo')"><img  class="100% tab-icon" src="bootstrap/images/tempo-icon.png" alt=""> Tempo Traveller</button>
    <button class="tab-btn-img" onclick="showgallerySet('luxury')"><img class="100% tab-icon" src="bootstrap/images/van-icon.png" alt=""> Luxury Bus</button>
  </div>

  <div id="all" class="gallery-set active">
    <img src="bootstrap/images/gallery-img1.jpg" alt="">
    <img src="bootstrap/images/gallery-img-2.jpg" alt="">
    <img src="bootstrap/images/gallery-img-3.jpg" alt="">
    <img src="bootstrap/images/gallery-img-4.jpg" alt="">
    <img src="bootstrap/images/gallery-img-5.jpg" alt="">






  </div>

  <div id="tempo" class="gallery-set">
    <img src="bootstrap/images/gallery-img-5.jpg" alt="">
    <img src="bootstrap/images/gallery-img-2.jpg" alt="">
    <img src="bootstrap/images/gallery-img1.jpg" alt="">

  </div>

  <div id="luxury" class="gallery-set">
    <img src="bootstrap/images/gallery-img-3.jpg" alt="">
    <img src="bootstrap/images/gallery-img-2.jpg" alt="">
    <img src="bootstrap/images/gallery-img1.jpg" alt="">
    <img src="bootstrap/images/gallery-img-4.jpg" alt="">


  </div>

  <div class="mt-4">
    <div class="sub-tab-container-img">
    
    <button class="sub-tab-btn-img" onclick="showSubgallery-set('exterior')"><img class="gal-img active" src="bootstrap/images/gallery-img1.jpg" alt="">Exterior</button>
      <button class="sub-tab-btn-img" onclick="showSubgallerySet('seats')"><img class="gal-img" src="bootstrap/images/gallery-img-4.jpg" alt="">Seats</button>
      <button class="sub-tab-btn-img" onclick="showSubgallerySet('lights')"><img class="gal-img" src="bootstrap/images/light-img.jpg" alt="">Lights & Sound</button>
      <button class="sub-tab-btn-img" onclick="showSubgallerySet('luggage')"><img class="gal-img" src="bootstrap/images/tab-img-new.jpg" alt="">Luggage Unit</button>
      <button class="sub-tab-btn-img" onclick="showSubgallerySet('interior')"><img class="gal-img" src="bootstrap/images/gallery-img-2.jpg" alt="">Interior</button>
    </div>

    <!-- Sub Galleries -->
    <div id="exterior" class="sub-gallery-set active">
        <img src="bootstrap/images/gallery-img-3.jpg" alt="">
        <img src="bootstrap/images/gallery-img-2.jpg" alt="">
        <img src="bootstrap/images/gallery-img1.jpg" alt="">


    </div>

    <div id="seats" class="sub-gallery-set">
        <img src="bootstrap/images/gallery-img-6.jpg" alt="">
        <img src="bootstrap/images/gallery-img-5.jpg" alt="">
        <img src="bootstrap/images/gallery-img-3.jpg" alt="">
    </div>

    <div id="lights" class="sub-gallery-set">
        <img src="bootstrap/images/gallery-img-6.jpg" alt="">
        <img src="bootstrap/images/gallery-img1.jpg" alt="">
    </div>

    <div id="luggage" class="sub-gallery-set">
        <img src="bootstrap/images/gallery-img-4.jpg" alt="">
        <img src="bootstrap/images/gallery-img1.jpg" alt="">
    </div>

    <div id="interior" class="sub-gallery-set">
        <img src="bootstrap/images/gallery-img-2.jpg" alt="">
        <img src="bootstrap/images/gallery-img-4.jpg" alt="">
    </div>
  </div>
</div>
<?php include 'includes/footer.php' ?>
