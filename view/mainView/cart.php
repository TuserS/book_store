<html>
<head>
    <title>Sign In</title>
</head>
<body>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke" valign="top">
            <td align="center">
                <table align="center"  width="70%">
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
                        <td><input type="submit" value="Remove"> </td>
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
                        <td><input type="submit" value="Remove"> </td>
                    </tr>



                    <!-- <td align="center">
                    <font size="6" face="Consolas" color="SLATEBLUE"><b>Sign In</b></font>
                    <hr width="60%">
                    <br> <br>
                    <form action="../../handler/signinHandler.php" method="post"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Email:</font>
                        <input name="name" size="28"> <br> <br> &nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Password:</font>
                        <input name="password" size="28"> <br><br>
                        <input type="checkbox" name="remember">
                        <font color="LightSlateGray">Remeber Me</font><br> <br> &nbsp;&nbsp;&nbsp;
                        <input type="submit" value="  Enter  ">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </form>
                    </td> -->
                </table>
                <br><br><br>
                <input type="submit" value=" Buy Cart Item ">
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
