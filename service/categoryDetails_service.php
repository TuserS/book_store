<?php require_once "../data/category_data_access.php"; ?>
<?php require_once "../data/book_data_access.php"; ?>
<?php
    session_start();

    // category picture and category name
    $id = $_GET["id"];
    function getCategory($id) {
        return getCategoryByIdFromDb($id);
    }
    $category = getCategory($id);
    $_SESSION['category'] = $category;


    // show books of this category
    function getAllBookByCategory($categoryId) {
        return getAllBookByCategoryidFromDb($categoryId);
    }

    $books = getAllBookByCategory($id);
    $_SESSION['categorybooks'] = $books;


    // foreach($_SESSION['categorybooks'] as $book) {
    //     echo $book['name'].'<br>';
    // }

    header('Location: ../app/view/mainView/categoryDetails.php');

?>
