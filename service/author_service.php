<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    function getAllAuthor(){
        return getAllAuthorFromDb();
    }

    $authors = getAllAuthor();

    $_SESSION['authors'] = $authors;
    header('Location: ../app/view/mainView/authors.php');

?>
