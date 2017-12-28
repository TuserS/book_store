<?php require_once "../data/publication_data_access.php"; ?>
<?php
    session_start();


    function AddPublication($publication){ 
        return insertPublication($publication)
    }

    function getAllPublication(){
        return getAllPublicationFromDb();
    }

    $publications = getAllPublication();

    $_SESSION['publications'] = $publications;

    // foreach($_SESSION['publications'] as $publication) {
    //     echo $publication['publicationid'].'<br>';
    //     echo $publication['name'].'<br>';
    //     echo $publication['image'].'<br>';
    // }

    header('Location: ../app/view/mainView/publications.php');

?>
