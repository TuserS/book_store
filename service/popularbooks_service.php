<?php require_once "../data/book_data_access.php"; ?>
<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    function getAllBook() {
        return getAllBookFromDb();
    }
    function getAuthorById($userId) {
        return getAuthorByIdFromDb($userId);
    }

    $books = getAllBook();
    $_SESSION['popularbooks'] = $books;

    for ($i=0; $i < count($_SESSION['popularbooks']) ; $i++) {
        $author = getAuthorById($_SESSION['popularbooks'][$i]['authorid']);
        $_SESSION['popularbooks'][$i]['author'] = $author['name'];
            $_SESSION['popularbooks'][$i]['price'] -= ( ($_SESSION['popularbooks'][$i]['price'] * $_SESSION['popularbooks'][$i]['discount']) / 100 );
    }

    header('Location: ../app/view/mainView/popularbooks.php');

?>
