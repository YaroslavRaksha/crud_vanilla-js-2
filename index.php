<?php 
    require_once 'config/connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Main</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="row navigation">
        <div class="col">
          <div class="text-start">
            <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="img/dropdown.png"></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="text-center">
            <div class="nav__logo">
              multibrand
            </div>
          </div>
        </div>
        <div class="col">
          <div class="text-right">
            <img class="img-fluid search__img" src="img/search.png">
            <img data-toggle="modal" data-target=".bd-example-modal-lg" class="img-fluid cart" src="img/cart.png">
          </div>
        </div>
      </div>
    </div>
    <div class="index__slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php                           
            $slider = mysqli_query($connect, "SELECT * FROM `slider`");
            $slider = mysqli_fetch_all($slider);
            foreach($slider as $slide) { ?>
          <div class="swiper-slide">
            <a href="item.php?id=<?= $slide[1] ?>"><img class="img-fluid" src="img/<?= $slide[2]?>">
              <div class="brand"><?= $slide[3] ?></div>
              <div class="price"><?= $slide[4] ?></div>
            </a>
          </div>
          <?php } ?> 

          <!--<div class="swiper-slide">
            <a href="item.html"><img class="img-fluid" src="img/img1.png">
              <div class="brand">EKHOLM</div>
              <div class="price">1499 uah</div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item.html"><img class="img-fluid" src="img/img1.png">
              <div class="brand">EKHOLM</div>
              <div class="price">1499 uah</div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item.html"><img class="img-fluid" src="img/img1.png">
              <div class="brand">EKHOLM</div>
              <div class="price">1499 uah</div>
            </a>
          </div> -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

    <div class="catalog-container">
      <div class="catalog-header">
        <div class="row justify-content-between">
          <div class="col-auto align-self-center">
            <div class="btn-group">
              <a class="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Сортировка <i class="arrow__down"></i></a>
              <div class="dropdown-menu dropdown-menu">
                <button class="dropdown-item" id="sort__default" type="button">По пополуряности</button>
                <button class="dropdown-item" id="sort__plus" type="button">По возрастанию</button>
                <button class="dropdown-item" id="sort__minus" type="button">По убыванию</button>
              </div>
            </div>
          </div>
          <div class="col-auto align-self-center">
            <div class="btn-group">
              <a class="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Фильтр</a>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="catalog">
        <div class="row no-gutters" id="catalog">
            <?php                           
              $items = mysqli_query($connect, "SELECT * FROM `items`");
              $items = mysqli_fetch_all($items);
              foreach($items as $item) { ?>
            <div class="col-12 col-md-6 col-lg-4 catalog__item">
              <div class="row justify-content-md-center no-gutters" onclick="location.href = 'item.php?id=<?= $item[0]?>'">
                <div class="col-4 col-md-10 item__img">
                  <img class="img-fluid" src="img/<?= $item[5]?>">
                </div>
                <div class="col-6 align-self-center item__title">
                  <div class="item__brand">
                      <?= $item[1] ?> <!-- NAME -->
                    <div class="item__color">
                      <?= $item[3] ?> <!-- INFO --> 
                    </div>
                  </div>
                </div>
                <div class="col-auto align-self-center item__price text-center">
                  <?= $item[2] ?>
                </div>
              </div>
                <?php $iteminfo = $item[1].','.$item[2].','.$item[5].','.$item[3]?>
                  <div class="row justify-content-center">
                    <div id="add" class="col-auto add__cart text-center" onclick="addToCart('<?=$iteminfo?>');">
                      В корзину
                    </div>
                  </div>
            </div>
            <?php } ?> 

            <!-- MODAL CART-->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Корзина</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="clientOrder">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //MODAL CART -->
              
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</body>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
  </script>

</html>