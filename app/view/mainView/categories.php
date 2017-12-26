<html>
<head>
    <title>Categories</title>
</head>
<body>

<font size="2" face="Consolas" >
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr bgcolor="WhiteSmoke">

            <td align="center">

                <br><br>
                <input type="text" id="#"  onkeyup="#" placeholder=" Search Category" size="60">
                <br><br>


                <table id="#" align="center" width="80%" cellspacing="20px" cellpadding="10px">


                    <?php $x=0?>
                    <?php foreach($_SESSION['categories'] as $name): ?>
                        <?php if($x==0){$x=0; echo'<tr height="150px">'; } ?>
                        <td align="center" bgcolor="#ddd">
                            <a href="../../../service/categoryDetails_service.php?id=<?php echo $name['categoryid'];?>" >
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"><b><?php echo $name['name']; $x++; ?></b></font>
                            </a>
                        </td>
                    <?php if($x==4){$x=0; echo'</tr>'; } ?>
                    <?php endforeach; ?>
                    <!-- <tr height="60px" >
                        <td align="center" bgcolor="#ddd" width="20%">
                            <a href="categoryDetails.php">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Fiction</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="20%">
                            <a href="categoryDetails.php">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Romance</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="20%">
                            <a href="categoryDetails.php">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Crime</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="20%">
                            <a href="categoryDetails.php">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Thriller</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd" width="20%">
                            <a href="categoryDetails.php">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Thriller</b> </font>
                            </a>
                        </td>
                    </tr> -->

                </table>
                <br><br>
            </td>
        </tr>


        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>

</body>
</html>
