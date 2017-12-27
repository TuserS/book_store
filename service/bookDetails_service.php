<?php require_once "../data/category_data_access.php"; ?>
<?php require_once "../data/book_data_access.php"; ?>
<?php require_once "../data/author_data_access.php"; ?>
<?php require_once "../data/publication_data_access.php"; ?>
<?php
    session_start();

    // category picture and category name
    $id = $_GET["id"];

    function getBookById($id) {
        return getBookByIdFromDb($id);
    }
    $book = getBookById($id);
    $_SESSION['book'] = $book;

    // echo $_SESSION['book']['name'];


    function getAuthorById($userId) {
        return getAuthorByIdFromDb($userId);
    }
    function getPublicationById($pId) {
        return getPublicationByIdFromDb($pId);
    }
    function getCategoryById($categoryId) {
        return getCategoryByIdFromDb($categoryId);
    }

    $author = getAuthorById($_SESSION['book']['authorid']);
    $publication = getPublicationById($_SESSION['book']['publicationid']);
    $category = getCategoryById($_SESSION['book']['categoryid']);

    // echo $author['name'];
    // echo $publication['name'];
    // echo $category['name'];

    $_SESSION['book']['author'] = $author['name'];
    $_SESSION['book']['publication'] = $publication['name'];
    $_SESSION['book']['category'] = $category['name'];
    $_SESSION['book']['price'] = $_SESSION['book']['price'] - (($_SESSION['book']['price'] * $_SESSION['book']['discount']) / 100);

    // echo $_SESSION['book']['name'].'<br>';
    // echo $_SESSION['book']['price'].'<br>';
    // echo $_SESSION['book']['publication'].'<br>';
    // echo $_SESSION['book']['category'].'<br>';
    // echo $_SESSION['book']['discount'].'<br>';
    // echo $_SESSION['book']['author'].'<br>';

    header('Location: ../app/view/mainView/bookDetails.php');

?>
