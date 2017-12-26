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

    function getAuthorByIdFromDb($categoryId){
        $sql = "SELECT * FROM category WHERE categoryid=$categoryId";
        $result = executeSQL($sql);

        $category = mysqli_fetch_assoc($result);

        return $category;
    }




?>
