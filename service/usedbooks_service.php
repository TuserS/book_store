<?php require_once "../data/book_data_access.php"; ?>
<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    function getAllUsedBook() {
        return getAllUsedBookFromDb();
    }
    function getAuthorById($userId) {
        return getAuthorByIdFromDb($userId);
    }

    $books = getAllUsedBook();
    $_SESSION['usedbooks'] = $books;

    for ($i=0; $i < count($_SESSION['usedbooks']) ; $i++) {
        $author = getAuthorById($_SESSION['usedbooks'][$i]['authorid']);
        $_SESSION['usedbooks'][$i]['author'] = $author['name'];
            $_SESSION['usedbooks'][$i]['price'] -= ( ($_SESSION['usedbooks'][$i]['price'] * $_SESSION['usedbooks'][$i]['discount']) / 100 );
    }

    header('Location: ../app/view/mainView/usedbooks.php');

?>
