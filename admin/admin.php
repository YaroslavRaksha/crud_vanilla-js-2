<?php 
    require_once '../config/connect.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
   </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-2">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <h5><a href="../admin/admin.php">Каталог</a></h5>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <h5><a href="../admin/admin-slider.php">Слайдер</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form action="../vendor/create.php" method="post">
                <div class="row">
                    <div class="col-12">
                        <h5>Каталог</h5>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото 1</label>
                            <input name="img1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото 2</label>
                            <input name="img2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Информация</label>
                            <input name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание</label>
                            <textarea name="descr" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
                <div class="col-12 items">
                    <div class="row">
                        <div class="col-2">
                            Имя/Ф-1/Ф-2/Ф-3
                        </div>
                        <div class="col-2">
                            Цена
                        </div>
                        <div class="col-2">
                            Инфо/ID
                        </div>
                        <div class="col-4">
                            Описание
                        </div>
                    </div>
            <?php
            $items = mysqli_query($connect, "SELECT * FROM `items`");
            $items = mysqli_fetch_all($items);
            foreach($items as $item) { ?>
            <hr>
                    <div class="row admin__catalog">
                        <div class="col-2">
                            <?= $item[1] ?> <br><?= $item[5] ?> <br> <?= $item[6] ?> <br> <?= $item[7] ?>
                        </div>
                        <div class="col-2">
                            <?= $item[2] ?>
                        </div>
                        <div class="col-2">
                            <?= $item[3] ?> <br> <?= $item[0] ?>
                        </div>
                        <div class="col-4">
                            <?= $item[4] ?>
                        </div>
                        <div class="col-2">
                            <a href="update.php?id=<?= $item[0]?>">изм.</a><a href="../vendor/delete.php?id=<?= $item[0]?>" style="padding-left: 20px">удал.</a>
                        </div>
                    </div>
            <?php } ?>      
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>