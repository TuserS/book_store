<html>
<head>
    <title>Sign In</title>
	<style>
         .button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			}
			.button1 {
			background-color:#8f9495 ;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			}
</style>
</head>
<body>
<font size="2" face="Consolas">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>

        <tr height="500" bgcolor="WhiteSmoke">
            <td align="center">
                <table align="center">
                    <td align="center">
                    <font size="6" face="Consolas" color="SLATEBLUE"><b>Doner Registration</b></font>
                    <hr width="100%">
                    <br> 
					<input type="submit" value="Registration as a User" class="button" onclick="window.open('doner.php')">
					
					<br>
					<br>
					<font size="5" face="Consolas" color="SLATEBLUE"><b>Publiser Doner</b></font>
					<br>
					<br>
					<form action="../../handler/signinHandler.php" method="post"> &nbsp;
                        <font color="LightSlateGray">Doner Name:</font>
                        <input name="name" size="28"> <br> <br> &nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">Password:</font>
						<font color="LightSlateGray"></font>
                        <input name="name" size="28"> <br> <br> &nbsp;&nbsp;&nbsp;
                        <font color="LightSlateGray">User ID:</font>
                        <input name="password" size="28"> <br><br>
                        <input type="checkbox" name="remember">
                        <font color="LightSlateGray">Remeber Me</font><br> <br> &nbsp;&nbsp;&nbsp;
                        <input type="submit" value=" Enter  ">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </form>
                    </td>
                </table>
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
