<?php 
    require_once '../config/connect.php';
    $slide_id = $_GET['id'];
    $slide = mysqli_query($connect, "SELECT * FROM `slider` WHERE `id` = '$slide_id'");
    $slide = mysqli_fetch_assoc($slide);
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
        <div class="row justify-content-center" style="padding-top: 150px;">
            <div class="col-12 col-md-6">
                <form action="../vendor/update-slider.php" method="post">
                <div class="row">
                    <div class="col-12">
                        <h5>Слайдер</h5>
                    </div>
                    <input name="id" type="hidden" class="form-control" value="<?= $slide['id']?>">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID товара</label>
                            <input name="slideID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $slide['item_id']?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input name="slideNAME" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $slide['name']?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input name="slidePRICE" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $slide['price']?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото</label>
                            <input name="slideIMG" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $slide['img']?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>