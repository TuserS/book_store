<?php require_once "../data/publication_data_access.php"; ?>
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


    header('Location: ../app/view/mainView/publicationDetails.php');

?>
