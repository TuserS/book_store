<?php require_once "../../../data/category_data_access.php"; ?>

<?php 

if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name=trim($_POST['name']);
        if(InsertCategorytoDb($name)==true){
        echo "<script>
                alert('Record Added');
                document.location='createCategory.php';
            </script>";
        die();
        }   
    }
    else{
   
    }

?>


<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<font size="2" face="Consolas" color="SlateGrey">
    <table action="#"  width="95%" align="center">
        <?php include("../partialView/top.php"); ?>
        <tr>
            <td>
                <table>

                    <tr valign="top" height="500px">
                        <?php include("../partialView/nav.php"); ?>
                        <td bgcolor="WhiteSmoke" width="80%" valign="top">


                            <table align="center" width="70%">
                                <td align="center">
                                    <br><br>
                                    <font size="5" color="LightSalmon"><b> Create Category </b></font>

                                    <br><br>
                                    <br><br>
                                   
                                    <form class="" action="#" method="post" onSubmit="return validCategory()">
                                        Category Name: <input name="name" id="name" > <span id="err"></span>
                                        <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="submit" value="Add Category">
                                    </form>


                                    <br><br>

                                </td>
                            </table>
                            <br><br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <?php include("../partialView/bottom.php"); ?>
    </table>
</font>
<script src="../../js/category.js"></script>
</body>
</html>
