<html>
<head>
    <title>popular books</title>
</head>
<body>
<font size="2" face="Consolas" >
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>



        <tr height="500" bgcolor="WhiteSmoke">

            <td align="center">

                <?php include("../partialView/advanceSearch.php"); ?>

                <br><br>
                <font size="6" face="Consolas" color="SLATEBLUE"><b>Popular Books</b></font>
                <br>

                <table align="center" width="80%" cellspacing="20px" cellpadding="10px">

                    <?php $x=0?>
                    <?php foreach($_SESSION['popularbooks'] as $name): ?>
                        <?php if($x==0){$x=0; echo'<tr height="340px">'; } ?>
                        <td align="center" bgcolor="#ddd" width="25%">
                            <?php $x++;?>
                            <a href="../../../service/bookDetails_service.php?id=<?php echo $name['bookid'];?>">
                                <img src="<?php echo $name['image'];?>" width="100px" height="140px">
                            </a> <br> <br>
                            <font color="#555" size="4"><b><?php echo $name['name'];?></b></font><br><br>
                            <font color="#555" size="3"><a href="../../../service/authorDetails_service.php?id=<?php echo $name['authorid'];?>">(<?php echo $name['author'];?>)</a></font>
                            <hr width="80%">
                            <font color="DodgerBlue" ><b><?php echo $name['price'];?> Tk</b></font>
                            <?php if($name['discount']) : ?>
                            <font color="tomato" >(<?php echo $name['discount'];?>% OFF)</font>
                            <?php endif; ?>

                            <hr width="80%">
                            <a href="#" onclick="addCart('<?php echo $name['bookid'];?>')">
                                <abbr title="Add to Cart"><img src="../../img/logo/cart.png" align="center" height="30"></abbr>
                                <font color="#555" size="4"><b>CART</b></font>
                            </a>
                        </td>
                    <?php if($x==4){$x=0; echo'</tr>'; } ?>
                    <?php endforeach; ?>


                </table>



                <br><br>
            </td>
        </tr>


        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
<script src="../../js/cart.js"></script>
</body>
</html>
