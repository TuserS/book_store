<html>
<head>
    <title>Author</title>
</head>
<body>
<font size="2" face="Consolas" >
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>



        <tr  bgcolor="WhiteSmoke">

            <td align="center">

                <br><br>
                 <input id="#"  onkeyup="#" placeholder=" Search Author" size="60">
                <br><br>



                <table align="center" width="80%" cellspacing="20px" cellpadding="10px">

                    <?php $x=0?>
                    <?php foreach($_SESSION['authors'] as $name): ?>
                        <?php if($x==0){$x=0; echo'<tr height="150px">'; } ?>
                        <td align="center" bgcolor="#ddd">
                            <a href="../../../service/authorDetails_service.php?id=<?php echo $name['authorid'];?>" >
                                <img src="<?php echo $name['image']; ?>" width="90px"> <br>
                                <font color="#555" size="4"><b><?php echo $name['name']; $x++; ?></b></font>
                            </a>
                        </td>
                    <?php if($x==4){$x=0; echo'</tr>'; } ?>
                    <?php endforeach; ?>
                    <!-- <tr height="150px">
                        <td align="center" bgcolor="#ddd">
                            <a href="authorDetails.php">
                                <img src="../../img/author/profilePicture.png" width="90px"> <br>
                                <font color="#555" size="4"><b>Humayun Ahmed</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="authorDetails.php">
                                <img src="../../img/author/profilePicture.png" width="90px"> <br>
                                <font color="#555" size="4"><b>Humayun Ahmed</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="authorDetails.php">
                                <img src="../../img/author/profilePicture.png" width="90px"> <br>
                                <font color="#555" size="4"><b>Humayun Ahmed</b></font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="authorDetails.php">
                                <img src="../../img/author/profilePicture.png" width="90px"> <br>
                                <font color="#555" size="4"><b>Humayun Ahmed</b></font>
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
