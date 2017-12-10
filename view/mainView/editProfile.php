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
                                        <font size="5" color="LightSalmon"><b> Edit Profile </b></font>
                                        <br><br><br>

                                        <table>
                                            <tr>
                                                <td><font color="SlateGrey">Name</font></td>
                                                <td>:<input name="name" value="Md Tuser Sheikh"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td><font color="SlateGrey">Email</font></td>
                                                <td>:<input name="email" value="tuser@gmail.com"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td><font color="SlateGrey">Gender</font></td>
                                                <td>:
                                                    <input type="radio" name="gender" value="Male" checked> <font color="SlateGrey">Male</font>
                                                    <input type="radio" name="gender" value="Female" > <font color="SlateGrey">Female</font>
                                                    <input type="radio" name="gender" value="Other" >  <font color="SlateGrey">Other</font>
                                                </td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    &nbsp;
                                                    <font color="SlateGrey">Date</font>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <font color="SlateGrey">Month</font>
                                                    &nbsp;&nbsp;
                                                    <font color="SlateGrey">Year</font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><font color="SlateGrey">Date of Birth</font></td>
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
