<?php require_once "data_access.php"; ?>
<?php
    function addUserdetailsToDb($ud){
        $sql = "INSERT INTO userdetails(name, gender, birthday, image) VALUES('$ud[name]', '$ud[gender]', '$ud[birthday]', '$ud[image]')";
        $result = executeSQL($sql);
        return $result;
    }

    function editUserdetailsToDb($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }


    function getUserdetailsByIdFromDb($userId){
        $sql = "SELECT * FROM userdetails WHERE userdetailsid=$userId";
        $result = executeSQL($sql);

        $user = mysqli_fetch_assoc($result);

        return $user;
    }


?>
