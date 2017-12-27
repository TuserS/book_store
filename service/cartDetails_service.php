<?php
    session_start();

    for ($i=0; $i < count($_SESSION['cart']) ; $i++) {
        $_SESSION['cart'][$i]['price'] = $_SESSION['cart'][$i]['price'] - ( ($_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['discount']) / 100 );
        // echo $_SESSION['cart'][$i]['price'].'<br>' ;
        // echo $_SESSION['cart'][$i]['name'].'<br>' ;
        // echo $_SESSION['cart'][$i]['image'].'<br><br>' ;

    }

    // for ($i=0; $i < count($_SESSION['cart']) ; $i++) {
    //     echo $_SESSION['cart'][$i]['price'].'<br>' ;
    //     echo $_SESSION['cart'][$i]['name'].'<br>' ;
    //     echo $_SESSION['cart'][$i]['image'].'<br><br>' ;
    //
    // }

    // header('Location: ../app/view/mainView/cart.php');


    $myJSON = json_encode($_SESSION['cart']);

    echo $myJSON;




?>
