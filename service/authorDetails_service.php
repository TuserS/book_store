<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    $id = $_GET["id"];
    function getAuthor($id) {
        return getAuthorByIdFromDb($id);
    }

    $author = getAuthor($id);
    $_SESSION['author'] = $author;
    header('Location: ../app/view/mainView/authorDetails.php');

?>
