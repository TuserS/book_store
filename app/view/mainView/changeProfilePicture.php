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
                                        <font size="5" color="LightSalmon"><b> Change Profile Picture </b></font>
                                        <br><br><br>

                                        <table>
                                            <tr>
                                                <td><img src='<?php echo $_SESSION['userdetails']['image'];?>' height="200px"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="file" name="uploadedfile"></td>
                                            </tr>
                                            <tr><td><hr></td></tr>
                                            <tr>
                                                <td><input type="submit" value="Upload File">
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
