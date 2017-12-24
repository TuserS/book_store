<html>
<head>
    <title>Sign In</title>
</head>
<body>
<script>
		function deletecart(r) {
			var i = r.parentNode.parentNode.rowIndex;
			document.getElementById("cartTable").deleteRow(i);
		}
</script>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke" valign="top">
            <td align="center">
                <table align="center"  width="70%" id="cartTable">
                    <tr bgcolor="#bbb" height="40px" align="center" >
                        <br><br><br>
                        <td colspan="7"> <b>My Cart - 2 Item
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Total: 306 Tk </b>
                        </td>
                    </tr>
                    <tr bgcolor="#ddd" align="center" height="50px">
                        <td>1</td>
                        <td><img src="../../img/book/book1.jpg" width="30px"></td>
                        <td>Book name</td>
                        <td>206 Tk</td>
                        <td>

                            <select>
                              <option value="volvo">1</option>
                              <option value="volvo">2</option>
                              <option value="volvo">3</option>
                              <option value="volvo">4</option>
                              <option value="volvo">5</option>
                              <option value="volvo">6</option>
                              <option value="volvo">7</option>
                              <option value="volvo">8</option>
                              <option value="volvo">9</option>
                              <option value="volvo">10</option>
                            </select>

                        </td>
                        <td>206 Tk</td>
                        <td><input type="button" value="Remove" onclick="deletecart(this)"> </td>
                    </tr>
                    <tr bgcolor="#ddd" align="center" height="50px">
                        <td>2</td>
                        <td><img src="../../img/book/book1.jpg" width="30px"></td>
                        <td>Book name</td>
                        <td>100 Tk</td>
                        <td>

                            <select>
                              <option value="volvo">1</option>
                              <option value="volvo">2</option>
                              <option value="volvo">3</option>
                              <option value="volvo">4</option>
                              <option value="volvo">5</option>
                              <option value="volvo">6</option>
                              <option value="volvo">7</option>
                              <option value="volvo">8</option>
                              <option value="volvo">9</option>
                              <option value="volvo">10</option>
                            </select>

                        </td>
                        <td>100 Tk</td>
                        <td><input type="button" value="Remove" onclick="deletecart(this)"> </td>
                    </tr>


                </table>
                <br><br><br>
                <input type="submit" value=" Buy Cart Item ">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value=" Donate Cart Item ">
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
