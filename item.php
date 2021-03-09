<?php
    require_once 'config/connect.php'; 
    $item_id = $_GET['id'];
    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE `id` = '$item_id'");
    $item = mysqli_fetch_assoc($item);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Product</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/item.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-12 col-md-10 slider">
                <div class="button__back"><a onclick="javascript:history.back(); return false;"><i class="arrow"></i></a></div>
                <div class="button__cart"><img data-toggle="modal" data-target=".bd-example-modal-lg" class="img-fluid" src="img/cart.png"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img-fluid" src="img/<?= $item['img2'] ?>"></div>
                    <div class="swiper-slide"><img class="img-fluid" src="img/<?= $item['img1'] ?>"></div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="item__card">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <?php $iteminfo = $item['name'].','.$item['price'].','.$item['img1']?>
                        <div class="col-8 col-md-4 add__cart" onclick="addToCart('<?=$iteminfo?>');">
                            <div class="text-center">
                                В корзину
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-10">
                            <div class="item__brand">
                                <?= $item['name'] ?>
                                <div class="row no-gutters justify-content-between">
                                    <div class="col-auto align-self-end item__price"><?= $item['price'] ?><span class="item__uah">uah</span></div>
                                </div>
                                <div class="item__title">
                                    <?= $item['descr'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="js/itemScript.js"></script>

        <script>
            var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: true,
            },
            });
        </script>
    </div>
</body>

</html>