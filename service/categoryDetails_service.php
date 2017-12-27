<?php require_once "../data/category_data_access.php"; ?>
<?php require_once "../data/book_data_access.php"; ?>
<?php require_once "../data/author_data_access.php"; ?>
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
    function getAuthorById($userId) {
        return getAuthorByIdFromDb($userId);
    }

    $books = getAllBookByCategory($id);
    $_SESSION['categorybooks'] = $books;


    for ($i=0; $i < count($_SESSION['categorybooks']) ; $i++) {
            $author = getAuthorById($_SESSION['categorybooks'][$i]['authorid']);
            $_SESSION['categorybooks'][$i]['author'] = $author['name'];
            $_SESSION['categorybooks'][$i]['price'] = $_SESSION['categorybooks'][$i]['price'] - ( ($_SESSION['categorybooks'][$i]['price'] * $_SESSION['categorybooks'][$i]['discount']) / 100 );
    }

    // foreach($_SESSION['categorybooks'] as $book) {
    //     echo $book['name'].'<br>';
    //     echo $book['author'].'<br>';
    //     echo $book['price'].'<br>';
    //     echo $book['discount'].'<br>';
    //     echo '<br>';
    // }

    header('Location: ../app/view/mainView/categoryDetails.php');

?>
