<?php require_once "data_access.php"; ?>
<?php

    function getAllPublicationFromDb(){
        $sql = "SELECT * FROM publication";
        $result = executeSQL($sql);

        $publications = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $publications[$i] = $row;
        }

        return $publications;
    }

    function getPublicationByIdFromDb($pId){
        $sql = "SELECT * FROM publication WHERE publicationid=$pId";
        $result = executeSQL($sql);

        $publication = mysqli_fetch_assoc($result);

        return $publication;
    }




?>
