<?php require_once "data_access.php"; ?>
<?php

    function getAllBookFromDb(){
        $sql = "SELECT * FROM book";
        $result = executeSQL($sql);

        $books = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $books[$i] = $row;
        }

        return $books;
    }

    function getBookByIdFromDb($bookId){
        $sql = "SELECT * FROM book WHERE bookid=$bookId";
        $result = executeSQL($sql);

        $book = mysqli_fetch_assoc($result);

        return $book;
    }

    function getAllBookByCategoryidFromDb($categoryId){
        $sql = "SELECT * FROM book WHERE categoryid=$categoryId";
        $result = executeSQL($sql);

        $books = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $books[$i] = $row;
        }

        return $books;
    }

    function getAllBookByPublicationidFromDb($publicationId){
        $sql = "SELECT * FROM book WHERE publicationid=$publicationId";
        $result = executeSQL($sql);

        $books = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $books[$i] = $row;
        }

        return $books;
    }

    function getAllBookByAuthoridFromDb($authorId){
        $sql = "SELECT * FROM book WHERE authorid=$authorId";
        $result = executeSQL($sql);

        $books = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $books[$i] = $row;
        }

        return $books;
    }


?>
