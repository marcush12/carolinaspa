<?php
  $title = 'Home';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

    <div class="container">
      <div id="main-slider" class="carousel slide mt-4" data-ride='carousel'>
        <ol class="carousel-indicators">
          <li data-target='#main-slider' data-slide-to='0' class='active'></li>
          <li data-target='#main-slider' data-slide-to='1'></li>
          <li data-target='#main-slider' data-slide-to='2'></li>
        </ol><!--.carousel-indicator-->
        <div class="carousel-inner" role='listbox'>
          <div class="carousel-item active">
            <img src="img/slide_01.jpg" alt="facilidades" class='d-block img-fluid'>
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Novas facilidades</h3>
            </div>
          </div><!--.carousel-item-->
          <div class="carousel-item">
            <img src="img/slide_02.jpg" alt="facilidades" class='d-block img-fluid'>
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Conheça nossos serviços</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide_03.jpg" alt="facilidades" class='d-block img-fluid'>
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Novo WebSite 2 em 1 para todos serviços</h3>
            </div>
          </div>
        </div><!--.carousel-inner-->
        <a href="#main-slider" class="carousel-control-prev" data-slide='prev'>
          <span class="carousel-control-prev-icon" aria-hidden='true'></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a href="#main-slider" class="carousel-control-next" data-slide='next'>
          <span class="carousel-control-next-icon" aria-hidden='true'></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <section class="new-website py-5">
      <h2 class="text-center text-uppercase"><span class="text-lowercase">Bem-vindo ao nosso novo</span> WebSite</h2>
      <p class="text-center mt-4">Sinta-se nova com nossas massagens e terapeutas <br> profissionais</p>
    </section>

    <div class="container pb-5">
      <div class="row">
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/service_01.jpg" alt="" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-8 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">mais sobre</span> nós</h3>
                <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">leia mais</a>
              </div>
            </div>
          </div>
        </div><!--.col-md-4-->
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/service_02.jpg" alt="" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-8 col-md-10  image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">nossos</span> serviços</h3>
                <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">leia mais</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/service_03.jpg" alt="" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-8 col-md-10 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">visite nossa</span> loja</h3>
                <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">leia mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="business-hours">
      <div class="container">
        <div class="row">
          <div class="col-md-6 py-5">
            <?php include 'templates/business_hours.php'; ?>
          </div>
          <div class="col-md-6 bg-hours">

          </div>
        </div>
      </div>
    </div>

    <div class="container products py-5">
      <h2 class="text-center text-uppercase"><span class="text-lowercase">conheça nossos</span> produtos</h2>
      <div class="row py-4">
        <?php 
          try {
            require_once 'inc/db.php';
            $sql = 'SELECT `id`, `name`, `image_thumb`, `price`, `short_description` FROM `products` LIMIT 4';
            $result = $db->query($sql);
          } catch(Exception $e) {
            $error = $e->getMessage();
          }
          $row = $result->num_rows;
          if(!$row) {
            echo "Nada foi encontrado";
          } else {
            while($products = $result->fetch_assoc()) { ?>
              <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                  <a href="product.php?<?php echo $products['id']; ?>">
                    <img src="img/<?php echo $products['image_thumb']; ?>" alt="" class="card-img-top img-fluid">
                    <span class="card-block">
                      <h3 class="card-title text-center text-uppercase mb-0"><?php echo $products['name']; ?></h3>
                      <p class="card-text text-uppercase"><?php echo $products['short_description']; ?></p>
                      <p class="price text-center mb-0"><?php echo $products['price']; ?></p>
                    </span>
                  </a>
                </div><!--card-->
              </div><!--col-6 col-md-3-->
        <?php      
            }
          }
         
        ?>
        <?php $db->close(); ?>
      </div><!--row-->
    </div><!--container-->

<?php
  include 'templates/appointment.php';
  include 'templates/footer.php';
?>