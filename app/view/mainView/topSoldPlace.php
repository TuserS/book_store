<html>
<head>
    <title>Top Sold Place</title>
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
                                    <font size="5" color="LightSalmon"><b> Top Sold Place </b></font>
                                    <br><br><br>


                                    <!-- Informaton table -->
                                    <table width="70%" height="200px" >
                                        <tr bgcolor="#bbb" align="center">
                                            <td><b> Place Name</b></td>
                                            <td><b> Order </b></td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center">
                                            <td> Bonani</td>
                                            <td> 65 </td>
                                        </tr >
                                        <tr bgcolor="#ddd" align="center">
                                            <td> Kuril</td>
                                            <td> 57 </td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center">
                                            <td> Kuratoli</td>
                                            <td> 29</td>
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
