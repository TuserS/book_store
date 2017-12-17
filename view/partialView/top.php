<?php session_start();  ?>


<tr bgcolor="WhiteSmoke">
    <td align="center">
        <font size="2" face="Consolas" >
            <table action="#"  width="100%" align="center">
                <tr>
                    <td align="center">

                        <!-- First Top -->
                        <!--
                        &nbsp;&nbsp;&nbsp;
                        <img src="../../img/logo/phone.png" height="15">
                        <font size="4" color="SlateGrey" face="Consolas"><b>12345</b></font> &nbsp;
                        <font face="Arial Narrow" color="SlateGrey">9:00 am - 11:00 pm, 7 days a week</font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <a href="../mainView/home.php"><font color="SlateGrey">Home</font></a> |
                        <a href="../mainView/aboutus.php"><font color="SlateGrey">About Us</font></a> |
                        <a href="../mainView/support.php"><font color="SlateGrey">Support</font></a> |
                        <a href="../mainView/contactus.php"><font color="SlateGrey">Contact Us</font></a> |
                        <a href="../mainView/signin.php"><font color="SlateGrey"><b>Sign In</b></font></a> |
                        <a href="../mainView/signup.php"><font color="SlateGrey"><b>Sign Up</b></font></a> &nbsp;&nbsp;&nbsp;

                        <hr width="90%">
                        -->
                        <!-- End first Top -->

                        <!--  =============  First Top After Login -->
                        <!--
                        &nbsp;&nbsp;&nbsp;
                        <img src="../../img/logo/phone.png" height="15">
                        <font size="4" color="SlateGrey" face="Consolas"><b>12345</b></font> &nbsp;
                        <font face="Arial Narrow" color="SlateGrey">9:00 am - 11:00 pm, 7 days a week</font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;

                        <a href="../mainView/home.php"><font color="SlateGrey">Home</font></a> |
                        <a href="../mainView/aboutus.php"><font color="SlateGrey">About Us</font></a> |
                        <a href="#"><font color="SlateGrey">Support</font></a> |
                        <a href="../mainView/contactus.php"><font color="SlateGrey">Contact Us</font></a> |
                        <a href="#"><font color="SlateGrey"><b>My Account</b></font></a> |
                        <a href="#"><font color="SlateGrey"><b>Sign Out</b></font></a> &nbsp;&nbsp;&nbsp;

                        <hr width="90%">
                        -->
                        <!-- =============  First Top After Login -->


                        <!-- Prototype -->
                        <?php if (isset($_SESSION['log']) && !empty($_SESSION['log'])): ?>
                            &nbsp;&nbsp;&nbsp;
                            <img src="../../img/logo/phone.png" height="15">
                            <font size="4" color="SlateGrey" face="Consolas"><b>12345</b></font> &nbsp;
                            <font face="Arial Narrow" color="SlateGrey">9:00 am - 11:00 pm, 7 days a week</font>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;

                            <a href="../mainView/home.php"><font color="SlateGrey">Home</font></a> |
                            <a href="../mainView/aboutus.php"><font color="SlateGrey">About Us</font></a> |
                            <a href="../mainView/support.php"><font color="SlateGrey">Support</font></a> |
                            <a href="../mainView/contactus.php"><font color="SlateGrey">Contact Us</font></a> |
                            <a href="../mainView/dashboard.php"><font color="SlateGrey"><b>My Account</b></font></a> |
                            <a href="#" onclick="signout()"><font color="SlateGrey"><b>Sign Out</b></font></a> &nbsp;&nbsp;&nbsp;
                            <script>
                              function signout(){
                                window.open("../../handler/signoutHandler.php", "_self");
                              };
                            </script>

                            <hr width="90%">

                        <?php else: ?>
                            &nbsp;&nbsp;&nbsp;
                            <img src="../../img/logo/phone.png" height="15">
                            <font size="4" color="SlateGrey" face="Consolas"><b>12345</b></font> &nbsp;
                            <font face="Arial Narrow" color="SlateGrey">9:00 am - 11:00 pm, 7 days a week</font>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <a href="../mainView/home.php"><font color="SlateGrey">Home</font></a> |
                            <a href="../mainView/aboutus.php"><font color="SlateGrey">About Us</font></a> |
                            <a href="../mainView/support.php"><font color="SlateGrey">Support</font></a> |
                            <a href="../mainView/contactus.php"><font color="SlateGrey">Contact Us</font></a> |
                            <a href="../mainView/signin.php"><font color="SlateGrey"><b>Sign In</b></font></a> |
                            <a href="../mainView/signup.php"><font color="SlateGrey"><b>Sign Up</b></font></a> |
							<a href="../mainView/doner.php"><font color="SlateGrey"><b>Doner</b></font></a> &nbsp;&nbsp;&nbsp;


                            <hr width="90%">

                        <?php endif; ?>

                        <!-- End Prototype -->



                        <!-- Second Top -->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../mainView/popularBooks.php"><img src="../../img/logo/logo.jpg" height="50" align="center"></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="search" size="50"> <input type="submit" value="Search" >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" onclick="cart()"><img src="../../img/logo/cart.png" align="center" height="30"><font size="4" color="SlateGrey"><b>CART</b></font></a>
                        <script>
                          function cart(){
                            window.open("../mainView/cart.php", "_self");
                          };
                        </script>
                        <span><font size="4" color="SlateGrey">2</font></span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <hr width="90%">
                        <!-- End Second Top -->


                        <!-- Last Top -->

                        <a href="../mainView/categories.php"><font color="SlateGrey">CATEGORIES</font></a> |
                        <a href="../mainView/authors.php"><font color="SlateGrey">AUTHORS</font></a> |
                        <a href="../mainView/publications.php"><font color="SlateGrey">PUBLISHERS</font></a> |
                        <a href="../mainView/popularBooks.php"><font color="SlateGrey">POPULAR BOOKS</font></a> |
                        <a href="../mainView/boimela.php"><font color="SlateGrey">BOIMELA 2017</font></a> |
                        <a href="../mainView/foreginBooks.php"><font color="SlateGrey">FOREGIN BOOKS</font></a> |
						<a href="../mainView/donerBook.php"><font color="SlateGrey">DONATION BOOKS</font></a>
                        <br>
                        <img src="../../img/logo/space.png" height="5">
                        <!-- End Last Top -->

                    </td>
                </tr>
            </table>
        </font>
    </td>
</tr>
