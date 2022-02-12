<div id="padding">
<div class="section-title">
    <h3>Department list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Student Deleted.</h6>';
        }
               

                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "SELECT * from Department";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>Department ID</th><th>Department Name</th><th>Faculty ID</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["Department_id"]).'</td>';
					print '<td>'.htmlentities($row["Department_Name"]).'</td>';
					print '<td>'.htmlentities($row["Faculty_Faculty_id"]).'</td>';
					
					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["Department_id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['Department_id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
	
				print '</table>';


    function delete()
        {
            global $cn;
            $sql = "DELETE from Department where Department_id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
     
</div>