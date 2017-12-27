<html>
<head>
    <title>Edit Profile</title>
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
                                                <td>:<input name="name" value="<?php echo $_SESSION['userdetails']['name'];?>"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:<input name="email" value="<?php echo $_SESSION['useraccount']['email'];?>"></td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>:
                                                    <input type="radio" name="gender" value="Male" <?php echo ($_SESSION['userdetails']['gender'])==="Male" ? "checked":"";?> > Male
                                                    <input type="radio" name="gender" value="Female" <?php echo ($_SESSION['userdetails']['gender'])==="Female" ? "checked":"";?> > Female
                                                    <!-- <input type="radio" name="gender" value="Other" > Other -->
                                                </td>
                                            </tr>
                                            <tr><td colspan="2"><hr></td></tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    &nbsp;
                                                    Year
                                                    &nbsp;&nbsp;&nbsp;
                                                    Month
                                                    &nbsp;&nbsp;
                                                    Date
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>:
                                                    <input name="date"  size="4" value="<?php $date = new DateTime($_SESSION['userdetails']['birthday']); echo $date->format('Y'); ?>">/
                                                    <input name="month" size="4" value="<?php $date = new DateTime($_SESSION['userdetails']['birthday']); echo $date->format('m'); ?>">/
                                                    <input name="year"  size="4" value="<?php $date = new DateTime($_SESSION['userdetails']['birthday']); echo $date->format('d'); ?>">
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
