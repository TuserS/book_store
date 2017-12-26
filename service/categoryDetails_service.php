<?php require_once "../data/category_data_access.php"; ?>
<?php
    session_start();

    $id = $_GET["id"];
    function getCategory($id) {
        return getCategoryByIdFromDb($id);
    }

    $category = getCategory($id);
    $_SESSION['category'] = $category;
    header('Location: ../app/view/mainView/categoryDetails.php');

?>
