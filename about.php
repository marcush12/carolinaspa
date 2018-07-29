<?php
  $title = 'Quem Somos';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/about_us.jpg" class='img-fluid' alt="">
      <h2 class="text-uppercase d-none d-md-block">Quem Somos</h2>
    </div>
  </div>
</div>
<div class="container py-4">
  <div class="row">
    <main class="col-lg-8 main-content">
      <h2 class="d-block d-md-none text-uppercase text-center">Quem Somos</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ut quasi voluptate inventore totam eos quos incidunt quisquam harum magnam unde rerum voluptas sed quae aut dignissimos mollitia asperiores, maxime dolorem dolorum accusamus autem qui? Fugiat, praesentium a. Vero corporis asperiores minima unde explicabo, tenetur sed quam. Facere soluta repudiandae temporibus suscipit? Veritatis sapiente provident ullam assumenda vel quos. Sunt.</p>
      <p>Inventore incidunt vel, doloremque aperiam rerum rem expedita quas molestiae assumenda esse a?</p>
      <div class="facilities-gallery">
        <h3 class="text-center text-uppercase p-4"><span class=" text-lowercase">veja nossas</span>facilidades</h3>
        <a href="#" data-target='#image_1' data-toggle="modal">
          <img src="img/gallery_thumb_01.jpg" class='rounded' alt="">
        </a>
        <a href="#" data-target='#image_2' data-toggle="modal">
          <img src="img/gallery_thumb_02.jpg" class='rounded' alt="">
        </a>
        <a href="#" data-target='#image_3' data-toggle="modal">
          <img src="img/gallery_thumb_03.jpg" class='rounded' alt="">
        </a>
        <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelleddby="image_1" aria-hidden='true'>
          <div class="modal-dialog modal-lg" role='document'>
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_01.jpg" class='img-fluid' alt="">
              </div>
            </div><!--.modal-content-->
          </div><!--.modal-dialog-->
        </div><!--.modal-->
        <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelleddby="image_2" aria-hidden='true'>
          <div class="modal-dialog modal-lg" role='document'>
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_02.jpg" class='img-fluid' alt="">
              </div>
            </div><!--.modal-content-->
          </div><!--.modal-dialog-->
        </div><!--.modal-->
        <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelleddby="image_3" aria-hidden='true'>
          <div class="modal-dialog modal-lg" role='document'>
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_03.jpg" class='img-fluid' alt="">
              </div>
            </div><!--.modal-content-->
          </div><!--.modal-dialog-->
        </div><!--.modal-->
      </div><!--.facilities-gallery-->
    </main>
    <aside class="col-lg-4">
      <div class="sidebar hours p-3">
        <?php include 'templates/business_hours.php'; ?>
      </div>
    </aside>
  </div>
</div>
<?php include 'templates/footer.php'; ?>