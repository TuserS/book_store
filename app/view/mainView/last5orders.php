<html>
<head>
    <title>Last 5 orders</title>
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
                                    <font size="5" color="LightSalmon"><b> Last 5 Orders </b></font>
                                    <br><br><br>


                                    <!-- Informaton table -->
                                    <table width="90%" height="200px" >
                                        <tr bgcolor="#bbb" align="center">
                                            <td><b> Order Id </b></td>
                                            <td><b> Date </b></td>
                                            <td><b> Total </b></td>
                                            <td><b> # </b></td>
                                        </tr>
                                        <tr bgcolor="#ddd" align="center">
                                            <td> 6 </td>
                                            <td> 5/11/2015 </td>
                                            <td> 2015 </td>
                                            <td> <a href="orderDetails.php">Details</a> </td>
                                        </tr >
                                        <tr bgcolor="#ddd" align="center">
                                            <td> 6 </td>
                                            <td> 5/11/2015 </td>
                                            <td> 2015 </td>
                                            <td> <a href="orderDetails.php">Details</a> </td>
                                        </tr >
                                        <tr bgcolor="#ddd" align="center">
                                            <td> 6 </td>
                                            <td> 5/11/2015 </td>
                                            <td> 2015 </td>
                                            <td> <a href="orderDetails.php">Details</a> </td>
                                        </tr >

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
