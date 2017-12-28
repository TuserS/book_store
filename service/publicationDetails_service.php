<?php require_once "../data/publication_data_access.php"; ?>
<?php require_once "../data/book_data_access.php"; ?>
<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    $id = $_GET["id"];
    function getPublication($id) {
        return getPublicationByIdFromDb($id);
    }

    $publication = getPublication($id);
    $_SESSION['publication'] = $publication;


    // echo $_SESSION['publication']['publicationid'].'<br>';
    // echo $_SESSION['publication']['name'].'<br>';
    // echo $_SESSION['publication']['image'].'<br>';

    function getAllBookByPublicationid($publicationId) {
        return getAllBookByPublicationidFromDb($publicationId);
    }
    function getAuthorById($userId) {
        return getAuthorByIdFromDb($userId);
    }

    $books = getAllBookByPublicationid($id);
    $_SESSION['publicationbooks'] = $books;

    for ($i=0; $i < count($_SESSION['publicationbooks']) ; $i++) {
            $author = getAuthorById($_SESSION['publicationbooks'][$i]['authorid']);
            $_SESSION['publicationbooks'][$i]['author'] = $author['name'];
            $_SESSION['publicationbooks'][$i]['price'] -= ( ($_SESSION['publicationbooks'][$i]['price'] * $_SESSION['publicationbooks'][$i]['discount']) / 100 );
    }


    header('Location: ../app/view/mainView/publicationDetails.php');

?>
