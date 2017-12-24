
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr>
            <td>
                <table>
                    <tr valign="top" height="500px">
                        <?php include("../partialView/nav.php"); ?>
                        <td bgcolor="WhiteSmoke" width="80%" valign="top">
                            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <font size="6" color="LightSalmon   "><b> <?php echo $_SESSION['userdetails']['name'];?> </b></font>
                            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <font size="4" color="SlateGrey" > Welcome to <b> Bookstore </b></font>
                            <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <font size="3" color="SlateGrey" > User Since : <b> <?php echo $_SESSION['usersince'];?> </b></font>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- <font size="3" color="SlateGrey" > Last Login : <b> 5 days ago </b></font> -->

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
