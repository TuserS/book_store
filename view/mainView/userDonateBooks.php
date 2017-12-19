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
                        <td bgcolor="WhiteSmoke" width="80%" valign="top" align="center">

                            <br><br>
                            <font size="5" color="LightSalmon"><b> Donated Books </b></font>
                            <br><br><br>

                            <table align="center"  width="70%" id="cartTable">
                                <tr bgcolor="#bbb" height="40px" align="center" >
                                    <td><b>#</b></td>
                                    <td><b>Cover</b></td>
                                    <td><b>Name</b></td>
                                    <td><b>Writer</b></td>
                                    <td><b>Price</b></td>
                                </tr>
                                <tr bgcolor="#ddd" align="center" height="50px">
                                    <td>1</td>
                                    <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                    <td><a href="bookDetails.php">Book Name 1</a> </td>
                                    <td><a href="authorDetails.php">Write Name 1</a></td>
                                    <td>200 Tk</td>
                                </tr>
                                <tr bgcolor="#ddd" align="center" height="50px">
                                    <td>2</td>
                                    <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                    <td><a href="bookDetails.php">Book Name 2</a> </td>
                                    <td><a href="authorDetails.php">Write Name 2</a></td>
                                    <td>200 Tk</td>
                                </tr>
                                <tr bgcolor="#ddd" align="center" height="50px">
                                    <td>3</td>
                                    <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                    <td><a href="bookDetails.php">Book Name 3</a> </td>
                                    <td><a href="authorDetails.php">Write Name 3</a></td>
                                    <td>200 Tk</td>
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
