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
                                    <form action="#">
                                        <br><br>
                                        <font size="5" color="LightSalmon"><b> Profile </b></font>
                                        <br><br><br>
                                        <table>

                                            <tr>
                                                <td>Name</td>
                                                <td>: <b> <?php echo $_SESSION['userdetails']['name'];?> </b></td>
                                                <td rowspan="7" align="center">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <img src='<?php echo $_SESSION['userdetails']['image'];?>' height="200px">
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="changeProfilePicture.php"><font color="SlateGrey">Change</font></a>
                                                </td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: <b> <?php echo $_SESSION['useraccount']['email'];?> </b></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>: <b> <?php echo $_SESSION['userdetails']['gender'];?> </b></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>:
                                                    <b> <?php echo $_SESSION['userdetails']['birthday'];?> </b>
                                                </td>
                                            </tr>
                                            <tr><td colspan="3"><hr></td></tr>
                                            <tr>
                                                <td><a href="#"><font color="SlateGrey">Edit Profile</font></a></td>

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
