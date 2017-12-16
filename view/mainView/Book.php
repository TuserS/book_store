<html>
<head>
    <title>Book Name</title>
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

        <tr  height="500"  bgcolor="WhiteSmoke">
            <td valign="top"  > <br><br>
                <table  align="center" >
                    <tr>
						<td colspan="3">
							<img src="book1.jpg" height="500" width="300">
						<td>
						<td valign="top" align="center"  colspan="3">
							</br> </br> </br> </br> </br>
								<font size="5" face="Consolas" color="SLATEBLUE"><b>The book</b></font>
							</br>
								by naimul hassan roni 
							</br> </br> </br> </br> 
								<div> 
									Our Price : TK. 160 </br>
									Regular Price : Tk.200 </br>
									Shipping Tk.30
								</div>
							</br> </br> </br> </br> </br> 
									<input type="button" class="button" value="ADD TO CART">
									<input type="button" class="button1"  value="SAVE TO LIST">
							</br> </br>
									Overall Download :2
						</td>
					</tr>
                    <tr>
						<td align="center"  colspan="3">Book Name: Hello Book</td>
					</tr>
				</table>
            </td>
        </tr>

        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
</body>
</html>
