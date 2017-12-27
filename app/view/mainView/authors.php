<html>
<head>
    <title>Author</title>
</head>
<script>
function ajaxSearch(){
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","../../../service/Ajax_author.php?qurey="+document.getElementById("ajaxInput").value,false);
	xmlhttp.send(null);
	document.getElementById("ajaxSearchTable").innerHTML=xmlhttp.responseText;
	document.getElementById("ajaxSearchTable").style.visibility='visible';
	
}

</script>
<body>
<font size="2" face="Consolas" >
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr  bgcolor="WhiteSmoke">
            <td align="center">

                <br><br>
                 <input id="ajaxInput" type="text"  onkeyup="ajaxSearch()" placeholder="Search Author" size="60">
                <br><br>

                <table id="ajaxSearchTable" align="center" width="80%" cellspacing="20px" cellpadding="10px">
                   
                   <?php $x=0?>
                    <?php foreach($_SESSION['authors'] as $name): ?>
                        <?php if($x==0){$x=0; echo'<tr height="150px">'; } ?>
						
                        <td  align="center" bgcolor="#ddd">
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
