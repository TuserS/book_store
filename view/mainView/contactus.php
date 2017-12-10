<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<font size="2" face="Consolas" >
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke">
            <td valign="top" align='center'>
                <br> <br>
                <font size="6" face="Consolas" color="SLATEBLUE"><b>Contact Us</b></font>
                <br> <br>
                <font size="4" face="Consolas" color="SLATEBLUE"><b>Share your query and ideas with us!</b></font>
                <hr width="30%">
                <br> <br>
                <form action="#" method="post"> &nbsp;&nbsp;
                    <font color="LightSlateGray">Name:</font>
                    <input name="name" size="28"> <br> <br> &nbsp;
                    <font color="LightSlateGray">Email:</font>
                    <input name="email" size="28"> <br> <br> &nbsp;
                    <font color="LightSlateGray">Phone:</font>
                    <input name="phone" size="28"> <br> <br>
                    <font color="LightSlateGray">Subject:</font>
                    <input name="subject" size="28"> <br> <br>
                    <font color="LightSlateGray">Message:</font>
                    <textarea rows="4" cols="30"></textarea> <br> <br>
                    <input type="submit" value="  Share  ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </form>
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
