<?php require_once "../data/category_data_access.php"; ?>
<?php
    session_start();

    function getAllCategory(){
        return getAllCategoryFromDb();
    }

    $categories = getAllCategory();

    $_SESSION['categories'] = $categories;

    // foreach($_SESSION['categories'] as $author) {
    //     echo $author['name'].'<br>';
    // }

    header('Location: ../app/view/mainView/categories.php');


    
    function addCategory($name){
        return InsertCategorytoDb($name);
    }

?>
