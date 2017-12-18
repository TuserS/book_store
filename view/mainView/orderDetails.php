<html>
<head>
    <title>Order Details</title>
</head>
<body>
<font size="2" face="Consolas" color="SlateGrey">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>
        <tr>
            <td>
                <table>

                    <tr valign="top" height="500px">
                        <?php include("../partialView/nav.php"); ?>
                        <td bgcolor="WhiteSmoke" width="80%" valign="top">
                            <table align="center"  width="70%" id="cartTable">
                                <tr bgcolor="#bbb" height="40px" align="center" >
                                    <br><br><br>
                                    <td colspan="7"> <b>My Cart - 2 Item
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Total: 306 Tk </b>
                                    </td>
                                </tr>
                                <tr bgcolor="#bbb" height="30px" align="center" >
                                    <td><b>#</b></td>
                                    <td><b>Cover</b></td>
                                    <td><b>Name</b></td>
                                    <td><b>Price</b></td>
                                    <td><b>Quantity</b></td>
                                    <td><b>Total</b></td>
                                </tr>
                                <tr bgcolor="#ddd" align="center" height="50px">
                                    <td>1</td>
                                    <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                    <td>Book Name</td>
                                    <td>100 Tk</td>
                                    <td>2</td>
                                    <td>200 Tk</td>
                                </tr>
                                <tr bgcolor="#ddd" align="center" height="50px">
                                    <td>2</td>
                                    <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                    <td>Book Name</td>
                                    <td>106 Tk</td>
                                    <td>1</td>
                                    <td>106 Tk</td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
