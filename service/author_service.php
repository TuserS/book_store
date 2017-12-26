<?php require_once "../data/author_data_access.php"; ?>
<?php
    session_start();

    function getAllAuthor(){
        return getAllAuthorFromDb();
    }

    $authors = getAllAuthor();

    $_SESSION['authors'] = $authors;

    // foreach($_SESSION['authors'] as $author) {
    //     echo $author['authorid'].'<br>';
    //     echo $author['name'].'<br>';
    //     echo $author['image'].'<br>';
    // }

    header('Location: ../app/view/mainView/authors.php');

?>
