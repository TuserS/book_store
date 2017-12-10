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
                    <tr>
                        <?php include("../partialView/nav.php"); ?>
                        <td bgcolor="WhiteSmoke" width="80%" valign="top">


                            <table align="center" width="70%">
                                <td align="center">
                                    <form action="#" method="POST">
                                        <br><br>
                                        <font size="5" color="LightSalmon"><b> Change Password </b></font>
                                        <br><br><br>

                                        <table>
                                            <tr>
                                                <td><font color="SlateGrey">Current Password</font></td>
                                                <td>:<input name="old" type="password"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td><font color="Green">New Password</font></td>
                                                <td>:<input name="new" type="password"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td><font color="Red">Retype New Password</font></td>
                                                <td>:<input name="rnew" type="password"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td><input type="submit">
                                            </tr>
                                        </table>


                                    </form>
                                </td>
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
