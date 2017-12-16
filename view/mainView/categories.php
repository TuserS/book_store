<html>
<head>
    <title>Categories</title>
</head>
<body>

  <script>
			
			  
			  function searchCategory() {
				  td[i].style.display = "table-cell";
				 <!-- var input, filter, table, tr, td, i;
				  input = document.getElementById("categorySearch");
				  filter = input.value.toUpperCase();
				  table = document.getElementById("categoryTable");
				  tr = document.getElementsByTagName("tr");
				  td = document.getElementsByTagName("td");
				 // b=table.getElementsByTagName("b");
				  for (i = 0; i < td.length; i++) {
					//td = tr[i].getElementsByTagName("td")[0];
					b=td[i].getElementByTagName("b")[0];
					if (b) {
					  if (b.innerHTML.toUpperCase().indexOf(filter) > -1) {
						td[i].style.display = "table-cell";
					  } else {
						td[i].style.display = "table-cell";
					  }
					}       
				  }
				}
	 </script

<font size="2" face="Consolas" >
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>



        <tr height="500" bgcolor="WhiteSmoke">

            <td align="center">

                <br><br>
                
                <input type="text" id="categorySearch"  onkeyup="searchCategory()" placeholder="Search category.." size="60">
				
                <br><br>


                <table id="categoryTable" align="center" width="80%" cellspacing="20px" cellpadding="10px">
                    <tr height="60px">
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Literature & Fiction</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Romance</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Crime</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Thriller</b> </font>
                            </a>
                        </td>

                    </tr>
                    <tr height="60px">
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Children & Young Adult</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Sci-FI</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Fantasy</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Buisness $ Economics</b> </font>
                            </a>
                        </td>

                    </tr>
                    <tr height="60px">
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Biographies</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>TextBook</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>ART</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="20%"> <br>
                                <font color="#555" size="4"> <b>Translate Book</b> </font>
                            </a>
                        </td>

                  <!--  </tr>
                    <tr height="60px">
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Science Fiction</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Science Fiction</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Science Fiction</b> </font>
                            </a>
                        </td>
                        <td align="center" bgcolor="#ddd">
                            <a href="#">
                                <img src="../../img/book/booklogo.png" width="55px"> <br>
                                <font color="#555" size="4"> <b>Science Fiction</b> </font>
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
