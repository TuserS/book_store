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
                                    <form action="#" method="POST">
                                        <br><br>
                                        <font size="5" color="LightSalmon"><b> Edit Profile </b></font>
                                        <br><br><br>

                                        <table>
                                            <tr>
                                                <td>Name</td>
                                                <td>:<input name="name" value="Md Tuser Sheikh"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:<input name="email" value="tuser@gmail.com"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>:
                                                    <input type="radio" name="gender" value="Male" checked> Male
                                                    <input type="radio" name="gender" value="Female" > Female
                                                    <input type="radio" name="gender" value="Other" > Other
                                                </td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    &nbsp;
                                                    Date
                                                    &nbsp;&nbsp;&nbsp;
                                                    Month
                                                    &nbsp;&nbsp;
                                                    Year
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>:
                                                    <input name="date"  size="4" value="12">/
                                                    <input name="month" size="4" value="09">/
                                                    <input name="year"  size="4" value="1994">
                                                </td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td><input type="submit" value=" Change "></td>
                                            </tr>
                                        </table>
                                    </form>
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
