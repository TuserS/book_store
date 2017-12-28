<?php require_once "../data/book_data_access.php"; ?>
<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    function getAllForeginBook() {
        return getAllForeginBookFromDb();
    }
    function getAuthorById($userId) {
        return getAuthorByIdFromDb($userId);
    }

    $books = getAllForeginBook();
    $_SESSION['foreginbooks'] = $books;

    for ($i=0; $i < count($_SESSION['foreginbooks']) ; $i++) {
        $author = getAuthorById($_SESSION['foreginbooks'][$i]['authorid']);
        $_SESSION['foreginbooks'][$i]['author'] = $author['name'];
            $_SESSION['foreginbooks'][$i]['price'] -= ( ($_SESSION['foreginbooks'][$i]['price'] * $_SESSION['foreginbooks'][$i]['discount']) / 100 );
    }

    header('Location: ../app/view/mainView/foreginbooks.php');

?>
