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
                                    <font size="5" color="LightSalmon"><b> Create Publication </b></font>

                                    <br><br>
                                    <br><br>

                                    <form class="" action="#" method="post">
                                        Publication Name: <input name="name" >
                                        <br><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        Publication Picture: <input name="img" type="file">
                                        <hr width="50%"> <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="submit" value="Add Publication">
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
