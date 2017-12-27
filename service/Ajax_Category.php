<?php require_once "../data/data_access.php"; ?>
<?php

    $qurey = $_GET["qurey"];
	
	
	$sql="select * from category where name LIKE '%$qurey%'";
	$result = executeSQL($sql);
	$list=array();
	
	$x =0;
	                    while($row = mysqli_fetch_array($result)) {
							
						     
						 	
							$id =  $row['categoryid']; 
							$name = $row['name']; 
						 
							
							if($x==0){
								
								echo'<tr height="150px">'; 
							}
							$x++;
							
							echo "<td  align='center' bgcolor='#ddd'>";
							echo "<a href='../../../service/authorDetails_service.php?id=".$id."'>";
							echo "<font color='#555' size='4'><b>".$name."</b></font></a></td></div>"; 
							
							if($x==4){
								$x=0; 
								echo'</tr>';
							}	 							
						}
							
?>