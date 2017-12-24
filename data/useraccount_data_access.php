<?php require_once "data_access.php"; ?>
<?php
    function addUseraccountToDb($ud){
        $sql = "INSERT INTO userdetails(name, gender, birthday, image) VALUES('$ud[name]', '$ud[gender]', '$ud[birthday]', '$ud[image]')";
        $result = executeSQL($sql);
        return $result;
    }

    function editUseraccountToDb($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }

    function removeUseraccountFromDb($personId){
        $sql = "DELETE FROM person WHERE id=$personId";
        $result = executeSQL($sql);
        return $result;
    }

    function getAllUseraccountFromDb(){
        $sql = "SELECT * FROM useraccount";
        $result = executeSQL($sql);

        $users = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $users[$i] = $row;
        }

        return $users;
    }

    function getUseraccountByIdFromDb($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";
        $result = executeSQL($sql);

        $person = mysqli_fetch_assoc($result);

        return $person;
    }

    function getUseraccountByNameFromDb($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

    function getUseraccountByEmailFromDb($personEmail){
        $sql = "SELECT * FROM person WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

    function getUseraccountByNameOrEmailFromDb($key){
        $sql = "SELECT * FROM person WHERE name LIKE '%$key%' OR email LIKE '%$key%'";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

?>
