<?php require_once "data_access.php"; ?>
<?php

    function getAllCategoryFromDb(){
        $sql = "SELECT * FROM category";
        $result = executeSQL($sql);

        $categories = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $categories[$i] = $row;
        }

        return $categories;
    }

    function getCategoryByIdFromDb($categoryId){
        $sql = "SELECT * FROM category WHERE categoryid=$categoryId";
        $result = executeSQL($sql);

        $category = mysqli_fetch_assoc($result);

        return $category;
    }

    function InsertCategorytoDb($name){ 
        $sql = "INSERT INTO `category` (`categoryid`, `name`) VALUES (NULL, '$name')"; 
        $result = executeSQL($sql);
        return $result;
    }



?>
