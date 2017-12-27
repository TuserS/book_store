
<html>
<head>
    <title>Cart</title>
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
                        <td colspan="7"> <b>My Cart - <?php echo $_SESSION['cartnumber'] ?>  Item
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Total: <span id="total"> <?php echo round($_SESSION['total'], 2);  ?></span> Tk </b>
                        </td>
                    </tr>

                    <?php $x=1?>
                    <?php foreach($_SESSION['cart'] as $cart): ?>
                    <?php echo'<tr bgcolor="#ddd" align="center" height="50px">'; ?>
                        <td><?php echo $x++; ?></td>
                        <td><img src="<?php echo $cart['image']; ?>" width="30px" height="45"></td>
                        <td><?php echo $cart['name']; ?></td>
                        <td><?php echo round($cart['price'], 2); ?></td>
                        <!-- <td>
                            <select id="selectBox" onchange="changeCart(<?php echo $x; ?>,<?php echo $cart['price']; ?>,<?php echo $_SESSION['total']; ?>);">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                            </select>
                        </td>
                        <td><span id="price"><?php echo round($cart['price'], 2); ?></span></td> -->

                    <?php echo'</tr>'; ?>
                    <?php endforeach; ?>

                    <!-- <tr bgcolor="#ddd" align="center" height="50px">
                        <td>1</td>
                        <td><img src="../../img/book/book1.jpg" width="30px"></td>
                        <td>Book name</td>
                        <td>206 Tk</td>
                        <td>

                            <select id="selectBox" onchange="changeFunc();">
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
                    </tr> -->


                    <!-- <tr bgcolor="#ddd" align="center" height="50px">
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
                    </tr> -->


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
<script type="text/javascript">

  function changeCart(i, price, total) {
   var selectBox = document.getElementById("selectBox");
   var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   var newPrice = (price * (+selectedValue) ).toFixed(2);
   var add = newPrice - price;
   var newTotal = (total + add).toFixed(2);

   document.getElementById("cartTable").rows[i].cells[6].innerHTML = Number(newPrice).toString();
   document.getElementById("total").innerHTML = Number(newTotal).toString();
  }

 </script>

</body>
</html>
