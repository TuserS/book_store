<html>
<head>
    <title>Sign Up</title>
</head>
<body>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke">
            <td align="center">
                <table align="center">
                    <td align="center">
                    <font size="6" face="Consolas" color="SLATEBLUE"><b>Sign Up</b></font>
                    <hr width="60%">
                    <br> <br>
                    <form action="../../handler/signupHandler.php" method="POST" name='signup' onSubmit="return signupValidation()">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Name:</font>
                        <input id="name" name="name" size="28"> <font color="SLATEBLUE">(Only Letter)</font>
                        <br> <br>

                        <font color="LightSlateGray">Email:</font>
                        <input id="email" name="email" size="28">
                        <br> <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Phone:</font>
                        <input name="phone" size="28"> <font color="SLATEBLUE">(Only Number)</font>
                        <br> <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Password:</font>
                        <input name="password" size="28"> </font><font color="SLATEBLUE">(Minimum Length 6)</font>
                        <br><br>&nbsp;
                        <input type="radio" name="gender"> <font color="LightSlateGray">Male</font>
                        <input type="radio" name="gender"> <font color="LightSlateGray">Female</font>
                        <br> <br>
                        <input type="submit" value="  Save  ">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </form>
                    </td>
                </table>
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>

<script src="../../js/signup.js"></script>

</body>
</html>
