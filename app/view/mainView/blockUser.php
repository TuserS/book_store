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
                                    <br><br>
                                    <font size="5" color="LightSalmon"><b> Block User </b></font>

                                    <br><br>
                                    <input name="searchBook" >
                                    <input type="submit" value=" Search User ">
                                    <br><br>

                                    <!-- Informaton table -->
                                    <table width="90%" height="200px" >
                                        <tr bgcolor="#bbb" align="center">
                                            <td><b> User Name</b></td>
                                            <td><b> email </b></td>
                                            <td><b> phone </b></td>
                                            <td><b> # </b></td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center">
                                            <td> Name One</td>
                                            <td> example@email.com</td>
                                            <td> 017123456 </td>
                                            <td> <input type="submit" value="Block User"> </td>
                                        </tr >
                                        <tr bgcolor="#ddd" align="center">
                                            <td> Name Two</td>
                                            <td> mail@live.com</td>
                                            <td> 017896541 </td>
                                            <td> <input type="submit" value="Block User"> </td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center">
                                            <td> Name Three</td>
                                            <td> name@gmail.com</td>
                                            <td> 017147258 </td>
                                            <td> <input type="submit" value="Block User"> </td>
                                        </tr>
                                    </table>
                                    <!-- Information table close -->

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
