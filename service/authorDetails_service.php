<?php require_once "../data/author_data_access.php"; ?>
<?php require_once "../data/book_data_access.php"; ?>
<?php
    session_start();

    $id = $_GET["id"];
    function getAuthor($id) {
        return getAuthorByIdFromDb($id);
    }

    $author = getAuthor($id);
    $_SESSION['author'] = $author;

    function getAllBookByAuthorid($authorId) {
        return getAllBookByAuthoridFromDb($authorId);
    }

    $books = getAllBookByAuthorid($id);
    $_SESSION['authorbooks'] = $books;

    for ($i=0; $i < count($_SESSION['authorbooks']) ; $i++) {
            $_SESSION['authorbooks'][$i]['price'] -= ( ($_SESSION['authorbooks'][$i]['price'] * $_SESSION['authorbooks'][$i]['discount']) / 100 );
    }

    header('Location: ../app/view/mainView/authorDetails.php');

?>
