<?php
require_once '../config/database.php';
require_once '../config/config.php';
spl_autoload_register(function ($className) {
    require '../app/models/' . $className . '.php';
});

$food_name = "";
$food_description = '';
$food_category = '';
$food_price = '';
$food_image = '';
$notification = '';

$foodModel = new FoodModel();
$foodList = $foodModel->getFoodList();

if (!empty($_POST['name']) && !empty($_POST['category']) && !empty($_POST['price']) && !empty($_FILES['image']['name']) && !empty($_POST['description'])) {
    $path = '../public/images/' . basename($_FILES['image']['name']);
    $food_name = $_POST['name'];
    $food_description = $_POST['description'];
    $food_category = $_POST['category'];
    $food_price = $_POST['price'];
    $food_image = $_FILES['image']['name'];
    $foodModel = new FoodModel();
    if (is_uploaded_file($_FILES['image']['tmp_name']) && move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        if ($foodModel->addFood($food_name, $food_description, $food_category, $food_price, $food_image)) {
            $notification = "Add successfully!";
        } else {
            $notification = "Add failed";
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
        <h1 class="text-center">Add Food</h1>
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
            <?php echo $notification; ?>
            <form action="addfood.php" method="post" class="information" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Food Name</label>
                            <input class="form-control" type="text" name="name" id="name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="category">Food Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="drink" selected>Drink</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Food Price</label>
                            <div class="input-group">
                                <input class="form-control" type="number" name="price" id="price" autocomplete="off"
                                    min="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Food Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="description">Food Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="9"
                                autocomplete="off"></textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-nav mt-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary mr-5">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer class="bg-dark">
        <p class="text-center py-4 text-primary">Copyright &copy; 2020 - vanlong20it</p>
    </footer>

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</body>

</html>