<?php 
    require_once '../config/connect.php';
    $item_id = $_GET['id'];
    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE `id` = '$item_id'");
    $item = mysqli_fetch_assoc($item);
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
                <form action="../vendor/update.php" method="post">
                    <input name="id" type="hidden" class="form-control" value="<?= $item['id']?>">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input name="name" class="form-control" value="<?= $item['name']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input name="price" class="form-control" value="<?= $item['price']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото 1</label>
                            <input name="img1" class="form-control" value="<?= $item['img1']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото 1</label>
                            <input name="img2" class="form-control" value="<?= $item['img2']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото 1</label>
                            <input name="img3" class="form-control" value="<?= $item['img3']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Информация</label>
                            <input name="title" class="form-control" value="<?= $item['title']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание</label>
                            <textarea name="descr" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $item['descr']?></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>