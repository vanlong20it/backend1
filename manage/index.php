<?php
require_once '../config/database.php';
require_once '../config/config.php';
spl_autoload_register(function ($className) {
    require '../app/models/' . $className . '.php';
});
$foodModel = new FoodModel();
$foodList = $foodModel->getFoodList();
$notification = '';
if (isset($_POST['delete'])) {
    if ($foodModel->deleteFood($_POST['delete'])) {
        $notification = "Deleted successfully!";
    } else {
        $notification = "Delete failed";
    }
}
$foodModel = new FoodModel();
$foodList = $foodModel->getFoodList();
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
    <script>
    function confirmDelete() {
        return confirm("Do you want to delete this food?");
    }
    </script>
</head>

<body>
    <h1 class="text-center">
        Food Manager
    </h1>
    <section class="main-content">
        <div class="container">
            <div class="nav-control">
                <input class="form-control" type="search" name="name" id="name" placeholder="Search...">
                <div class="edit-control">
                    <a href="addfood.php" class="btn btn-primary">Add</a>
                </div>
            </div>
            <div class="food-list">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($foodList as $item) {
                            ?>
                        <tr>
                            <td scope="row"><?php echo $item["food_id"]; ?></td>
                            <td><a
                                    href="updatefood.php?id=<?php echo $item['food_id']; ?>"><?php echo $item["food_name"]; ?></a>
                            </td>
                            <td><?php echo $foodModel->truncate($item["food_description"], 40) . '...'; ?></td>
                            <td><?php echo $item["food_category"]; ?></td>
                            <td><?php echo $item["food_price"]; ?></td>
                            <td><?php echo $item["food_image"]; ?></td>
                            <td>
                                <a class="btn btn-primary"
                                    href="updatefood.php?id=<?php echo $item['food_id']; ?>">Edit</a>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="delete" value="<?php echo $item['food_id'] ?>" />
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirmDelete();">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>

</html>