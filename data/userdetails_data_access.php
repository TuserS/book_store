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

    function removeUserdetailsFromDb($personId){
        $sql = "DELETE FROM person WHERE id=$personId";
        $result = executeSQL($sql);
        return $result;
    }

    function getAllUserdetailsFromDb(){
        $sql = "SELECT * FROM person";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

    function getUserdetailsByIdFromDb($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";
        $result = executeSQL($sql);

        $person = mysqli_fetch_assoc($result);

        return $person;
    }

    function getUserdetailsByNameFromDb($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

    function getUserdetailsByEmailFromDb($personEmail){
        $sql = "SELECT * FROM person WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

    function getUserdetailsByNameOrEmailFromDb($key){
        $sql = "SELECT * FROM person WHERE name LIKE '%$key%' OR email LIKE '%$key%'";
        $result = executeSQL($sql);

        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }

        return $persons;
    }

?>
