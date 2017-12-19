<html>
<head>
    <title>Create Book</title>
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


                            <table align="center" width="70%">
                                <td align="center">
                                    <br><br>
                                    <font size="5" color="LightSalmon"><b> Request fot Sell to Bookstore </b></font> <br>
                                    <font size="3" color="SlateGrey"><b> ( Only good condition book can be sold ) </b></font>

                                    <br><br>
                                    <br><br>

                                    <form class="" action="#" method="post">
                                        Book Name: <input name="name" size="30">
                                        <br><br>
                                        &nbsp;&nbsp;
                                        Author:  <input name="author" size="30">

                                        <br><br>
                                        QTY
                                            <select>
                                              <option value="#">1</option>
                                              <option value="#">2</option>
                                              <option value="#">3</option>
                                              <option value="#">4</option>
                                              <option value="#">5</option>
                                              <option value="#">6</option>
                                              <option value="#">7</option>
                                              <option value="#">8</option>
                                              <option value="#">9</option>
                                              <option value="#">10</option>
                                            </select>
                                        <br><br>
                                        <font color="LightSlateGray"> (Price Depend on Books Condition)</font>
                                        <br><br>

                                        <hr width="50%"> <br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="submit" value=" Request to Bookstore">
                                    </form>


                                    <br><br>

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
