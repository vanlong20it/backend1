<?php
require_once '../config/database.php';
require_once '../config/config.php';
spl_autoload_register(function ($className) {
    require '../app/models/' . $className . '.php';
});

$notification = '';
$fId = '';
$fName = '';
$fPrice = 0;
$fDescription = '';
$fCategory = '';
$fImage = '';

$id = "";
$urlID = "";
if (isset($_GET['id'])) {
    $fId = $_GET["id"];
    $urlID = "?id=$fId";
    $foodModel = new FoodModel();
    $item = $foodModel->getFoodById($fId);
    $fName = $item['food_name'];
    $fPrice = $item['food_price'];
    $fDescription = $item['food_description'];
    $fCategory = $item['food_category'];
    $fImage = $item['food_image'];
}

if (!empty($_POST['food_name']) && !empty($_POST['food_category']) && !empty($_POST['food_price']) && !empty($_POST['food_description'])) {
    $path = '../public/images/' . basename($_FILES['food_image']['name']);
    $fName = $_POST['food_name'];
    $fPrice = $_POST['food_price'];
    $fDescription = $_POST['food_description'];
    $fCategory = $_POST['food_category'];
    $fImage = $_FILES['food_image']['name'];

    $foodModel = new FoodModel();
    if (is_uploaded_file($_FILES['food_image']['tmp_name']) && move_uploaded_file($_FILES['food_image']['tmp_name'], $path)) {
        if (isset($_GET['id'])) {
            if ($foodModel->updateFood($fId, $fName, $fDescription, $fCategory, $fPrice, $fImage)) {
                $notification = "Updated successfully!";
            } else {
                $notification = "Updated failed";
            }
        }
    }else{
        if (isset($_GET['id'])) {
            $fImage = $_POST['old_image'];
            if ($foodModel->updateFood($fId, $fName, $fDescription, $fCategory, $fPrice, $fImage)) {
                $notification = "Updated successfully!";
            } else {
                $notification = "Updated failed";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Manager</title>
    <link rel="icon" href="./public/images/icon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/manage.css">
    <script src="<?php echo BASE_URL; ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1 class="text-center">Update Food</h1>
        <div class="container">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="main-content">
        <div class="container">
            <p><?php echo $notification; ?></p>
            <form action="updatefood.php<?php echo $urlID; ?>" method="POST" class="information" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="food_name">Food Name</label>
                            <input class="form-control" type="text" name="food_name" id="food_name" autocomplete="off" value="<?php echo $fName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="food_category">Food Category</label>
                            <select name="food_category" id="food_category" class="form-control">
                                <option value="drink">Drink</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="food_price">Food Price</label>
                            <div class="input-group">
                                <input class="form-control" type="number" name="food_price" id="food_price" autocomplete="off"
                                    min="0" value="<?php echo $fPrice; ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text">VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="food_image">Food Image</label>
                            <input class="form-control" type="file" name="food_image" id="food_image">
                            <input type="hidden" name="old_image" id="old_image" value="<?php echo $fImage; ?>">
                            <img src="<?php echo BASE_URL; ?>/public/images/<?php echo $fImage; ?>" alt="" class="img-fluid mt-3">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="food_description">Food Description</label>
                            <textarea class="form-control" name="food_description" id="food_description" cols="30" rows="9"
                                autocomplete="off"><?php echo $fDescription; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-nav mt-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary mr-5">Submit</button>
                                <button type="submit" class="btn btn-danger">Clear</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
</body>

</html>