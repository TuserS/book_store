<html>
<head>
    <title>Contact Us</title>
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
                                    <font size="5" color="LightSalmon"><b> Create Book </b></font>

                                    <br><br>
                                    <br><br>

                                    <form class="" action="#" method="post">
                                        Book Name: <input name="name" >
                                        <br><br>
                                        Category:
                                        <select>
                                          <option value="volvo"></option>
                                          <option value="volvo">Category</option>
                                        </select>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br><br>
                                        Author:
                                        <select>
                                          <option value="volvo"></option>
                                          <option value="volvo">Author</option>
                                        </select>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br><br>
                                        Publication:
                                        <select>
                                          <option value="volvo"></option>
                                          <option value="volvo">Publication</option>
                                        </select>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br><br>
                                        &nbsp;&nbsp;&nbsp;
                                        Price: <input name="price" >
                                        <br><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Cover Image: <input name="img" type="file">


                                        <hr width="50%"> <br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="submit" value="Add Book">

                                        &nbsp;&nbsp;&nbsp;
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
