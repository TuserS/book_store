<?php require_once "../data/book_data_access.php"; ?>
<?php
    session_start();


    if (isset($_SESSION['cartnumber']) && !empty($_SESSION['cartnumber'])) {
        $_SESSION['cartnumber'] += 1;
    } else {
        $_SESSION['cartnumber'] = 1;
    }

    $id = $_GET["id"];
    // $id = 1;
    function getBookById($id) {
        return getBookByIdFromDb($id);
    }
    $book = getBookById($id);

    $_SESSION['cart'][$_SESSION['cartnumber']] = $book;


    // echo $_SESSION['cartnumber'];
    //
    // foreach ($_SESSION['cart'] as $book) {
    //     echo $book['name'];
    // }




    echo $_SESSION['cartnumber'];





?>
