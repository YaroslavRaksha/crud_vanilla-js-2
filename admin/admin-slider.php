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
                            <h5><a href="../admin/admin2.php">Слайдер</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form action="../vendor/create-slider.php" method="post">
                <div class="row">
                    <div class="col-12">
                        <h5>Слайдер</h5>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID товара</label>
                            <input name="slideID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input name="slideNAME" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input name="slidePRICE" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото</label>
                            <input name="slideIMG" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        </div>
        <div class="row">
            <div class="col-2">
                ID товара 
            </div>
            <div class="col-2">
                Имя
            </div>
            <div class="col-2">
                Цена
            </div>
            <div class="col-2">
                Фото 
            </div>
            </div>
        <?php
            $slider = mysqli_query($connect, "SELECT * FROM `slider`");
            $slider = mysqli_fetch_all($slider);
            foreach($slider as $slide) { ?>
            <hr>
                    <div class="row admin__slider">
                        <div class="col-2">
                            <?= $slide[1] ?>
                        </div>
                        <div class="col-2">
                            <?= $slide[3] ?>
                        </div>
                        <div class="col-2">
                            <?= $slide[4] ?>
                        </div>
                        <div class="col-2">
                            
                            <?= $slide[2] ?>
                        </div>
                        <div class="col-2">
                            <img class="img-fluid" src="../img/<?= $slide[2] ?>">
                        </div>
                        <div class="col-2">
                            <a href="update-slider.php?id=<?= $slide[0]?>">изм.</a><a href="../vendor/delete-slider.php?id=<?= $slide[0]?>" style="padding-left: 20px">удал.</a>
                        </div>
                    </div>
            <?php } ?>      
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>