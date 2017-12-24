<?php require_once "data_access.php"; ?>
<?php

    function getAllUseraccountFromDb(){
        $sql = "SELECT * FROM useraccount";
        $result = executeSQL($sql);

        $users = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $users[$i] = $row;
        }

        return $users;
    }



?>
