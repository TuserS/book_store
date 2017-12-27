<html>
<head>
    <title>Want Donation</title>
</head>
<body>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke">
            <td align="center">
                <table align="center">
                    <td align="center">
                    <font size="6" face="Consolas" color="SLATEBLUE"><b>Want Donation</b></font>
                    <hr width="60%">
                    <br> <br>
                    <form action="../../handler/signupHandler.php" method="POST" name='signup' onSubmit="#">

                        <font color="LightSlateGray">Organization Name:</font>
                        <input id="name" name="name" size="40">
                        <br> <br>

                        <font color="LightSlateGray">Organization Address:</font>
                        <input id="#" name="#" size="40">
                        &nbsp;&nbsp;
                        <br> <br>

                        <font color="LightSlateGray">Why Need Donation:</font>
                        <textarea rows="8" cols="42">
                        </textarea>
                        <br> <br>
                        <input type="submit" value="  Send  ">

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
