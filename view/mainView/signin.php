<html>
<head>
    <title>Sign In</title>
</head>
<body>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke">
            <td align="center">
                <table align="center">
                    <td align="center">
                    <font size="6" face="Consolas" color="SLATEBLUE"><b>Sign In</b></font>
                    <hr width="60%">
                    <br> <br>
                    <form action="../../handler/signinHandler.php" method="post"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Email:</font>
                        <input name="name" size="28"> <br> <br> &nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Password:</font>
                        <input name="password" size="28"> <br><br>
                        <input type="checkbox" name="remember">
                        <font color="LightSlateGray">Remeber Me</font><br> <br> &nbsp;&nbsp;&nbsp;
                        <input type="submit" value="  Enter  ">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </form>
                    </td>
                </table>
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
