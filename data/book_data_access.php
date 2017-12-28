<?php require_once "data_access.php"; ?>
<?php


function insertBook($book) {
    $sql = "INSERT INTO Book(id, name, price, discount,image, type, status,language, categoryid, authorid, publicationid) VALUES(NULL, '$book[name]','$book[price]', '$book[discount]', '$book[image]','$book[type]','$book[status]','$book[language]','$book[categoryid]','$book[authorid]','$book[publicationid]')";
    $result = executeSQL($sql);
    return $result;
}


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

    function getAllForeginBookFromDb(){
        $sql = "SELECT * FROM book WHERE language='English'";
        $result = executeSQL($sql);

        $books = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $books[$i] = $row;
        }

        return $books;
    }

    function getAllUsedBookFromDb(){
        $sql = "SELECT * FROM book WHERE status='Used'";
        $result = executeSQL($sql);

        $books = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $books[$i] = $row;
        }

        return $books;
    }


?>
