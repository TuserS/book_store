<html>
<head>
    <title>Accept Used Book</title>
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


                            <table align="center" width="80%">
                                <td align="center">
                                    <br><br>
                                    <font size="5" color="LightSalmon"><b> Accept Used Books </b></font>

                                    <br><br>
                                    <input name="searchBook" >
                                    <input type="submit" value=" Search Used Books ">
                                    <br><br>

                                    <!-- Informaton table -->
                                    <table align="center"  width="90%" id="cartTable">
                                        <tr bgcolor="#bbb" height="40px" align="center" >
                                            <td width="5%"><b>#</b></td>
                                            <td width="5%"><b>Cover</b></td>
                                            <td width="25%"><b>Name</b></td>
                                            <td width="25%"><b>Writer</b></td>
                                            <td width="10%"><b>Price</b></td>
                                            <td width="10%"><b>New Price</b></td>
                                            <td width="20%"><b>Request</b></td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center" height="50px">
                                            <td>1</td>
                                            <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                            <td><a href="bookDetails.php">Book Name 1</a> </td>
                                            <td><a href="authorDetails.php">Write Name 1</a></td>
                                            <td>200 Tk</td>
                                            <td>80 Tk</td>
                                            <td>
                                                <input type="submit" value="  Accept  ">
                                                <input type="submit" value=" Remove ">
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center" height="50px">
                                            <td>2</td>
                                            <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                            <td><a href="bookDetails.php">Book Name 2</a> </td>
                                            <td><a href="authorDetails.php">Write Name 2</a></td>
                                            <td>250 Tk</td>
                                            <td>110 Tk</td>
                                            <td>
                                                <input type="submit" value="  Accept  ">
                                                <input type="submit" value=" Remove ">
                                            </td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center" height="50px">
                                            <td>3</td>
                                            <td><img src="../../img/book/book1.jpg" width="30px"></td>
                                            <td><a href="bookDetails.php">Book Name 3</a> </td>
                                            <td><a href="authorDetails.php">Write Name 3</a></td>
                                            <td>460 Tk</td>
                                            <td>200 Tk</td>
                                            <td>
                                                <input type="submit" value="  Accept  ">
                                                <input type="submit" value=" Remove ">
                                            </td>
                                        </tr>

                                    </table>
                                    <!-- Information table close -->

                                </td>
                            </table>
                            <br><br>
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
