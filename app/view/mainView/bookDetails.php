<html>
<head>
    <title>Book Details</title>
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
                        <td align="center" colspan="3"><img src="<?php echo $_SESSION['book']['image'];?>" width="150px">
                    </td>
                    <tr>
                        <td align="center" colspan="3">
                            <!-- &nbsp;QTY
                            <select>
                              <option value="#">1</option>
                              <option value="#">2</option>
                              <option value="#">3</option>
                              <option value="#">4</option>../../../service/cart_service.php
                              <option value="#">5</option>
                              <option value="#">6</option>
                              <option value="#">7</option>
                              <option value="#">8</option>
                              <option value="#">9</option>
                              <option value="#">10</option>
                            </select> -->
                            <a href="#" onclick="addCart('<?php echo $_SESSION['book']['bookid'];?>')" >
                                <img src="../../img/logo/cart.png" align="center" height="30">
                                <font size="4" color="SlateGrey"><b>CART</b></font>
                            </a>
                            <br><br><br>
                        </td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Name</td>
                        <td width="30px"></td>
                        <td><b><?php echo $_SESSION['book']['name'];?></b></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Author</td>
                        <td></td>
                        <td><b><a href="../../../service/authorDetails_service.php?id=<?php echo $_SESSION['book']['authorid'];?>"><?php echo $_SESSION['book']['author'];?></a></b></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Price</td>
                        <td></td>
                        <td>
                            <b><?php echo $_SESSION['book']['price'];?> Tk</b>
                            <?php if($_SESSION['book']['discount']) : ?>
                                <font color="tomato" >(<?php echo $_SESSION['book']['discount'];?>% OFF)</font>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Category</td>
                        <td></td>
                        <td><b><a href="../../../service/categoryDetails_service.php?id=<?php echo $_SESSION['book']['categoryid'];?>"><?php echo $_SESSION['book']['category'];?></a></b></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Publication</td>
                        <td></td>
                        <td><b><a href="../../../service/publicationDetails_service.php?id=<?php echo $_SESSION['book']['publicationid'];?>"><?php echo $_SESSION['book']['publication'];?></a></b></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Language</td>
                        <td></td>
                        <td><b><?php echo $_SESSION['book']['language'];?></b></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <!-- <tr>
                        <td>Description</td>
                        <td></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr> -->
                </table>
                <br><br>
            </td>
        </tr>
        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
<script src="../../js/cart.js"></script>
</body>
</html>
