<html>
<head>
    <title>Order Details</title>
</head>
<body>
<font size="2" face="Consolas" color="SlateGrey">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>
        <tr bgcolor="WhiteSmoke">
            <td width="80%" valign="top" align="center">
                <table   width="50%">
                    <br><br>
                    <tr>
                        <td align="center" colspan="3"><img src="<?php echo $_SESSION['publication']['image'];?>" width="150px">
                    </td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Name</td>
                        <td width="30px"></td>
                        <td><b><?php echo $_SESSION['publication']['name'];?></b></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr> -->
                </table>

                <br><br>
                 <input type="text" id="authorSearch"  onkeyup="" placeholder="Search Book of This Publication" size="60">
                <br><br>



                <table align="center" width="80%" cellspacing="20px" cellpadding="10px">
                    <tr height="60px">
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" >(15% OFF)</font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" ></font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" >(15% OFF)</font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" ></font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                    </tr>
                    <tr height="60px">
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" >(15% OFF)</font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" ></font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" >(15% OFF)</font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <a href="bookDetails.php"><img src="../../img/book/book1.jpg" width="100px"></a> <br> <br>
                            <font color="#555" size="4"><b>Theory of Relativity</b></font><br><br>
                            <font color="#555" size="3"><a href="authorDetails.php">(Muhammed Zafar Iqbal)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b>145 Tk</b></font>
                            <font color="tomato" ></font>

                            <hr width="80%">
                            <a href="#">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                    </tr>
                </table>
                <br><br>


            </td>
        </tr>
        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
