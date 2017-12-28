<?php require_once "data_access.php"; ?>
<?php

    function getAllAuthorFromDb(){
        $sql = "SELECT * FROM author";
        $result = executeSQL($sql);

        $users = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $users[$i] = $row;
        }

        return $users;
    }

    function getAuthorByIdFromDb($userId){
        $sql = "SELECT * FROM author WHERE authorid=$userId";
        $result = executeSQL($sql);

        $user = mysqli_fetch_assoc($result);

        return $user;
    }


    function insertAuthor($author) { 
        $sql = "INSERT INTO Author(id, name, image) VALUES(NULL, '$author[name]', '$author[image]')";
        $result = executeSQL($sql);
        return $result;
    }





?>
