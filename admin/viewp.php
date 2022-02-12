<div id="padding">
<div class="section-title">
    <h3>course list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Program Deleted.</h6>';
        }
               

                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "SELECT * from Program";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>Course ID</th><th>Course Name</th><th>Department ID</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["Program_id"]).'</td>';
					print '<td>'.htmlentities($row["Program_Name"]).'</td>';
					print '<td>'.htmlentities($row["Department_Department_id"]).'</td>';
					
					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["Program_id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['Program_id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
	
				print '</table>';


    function delete()
        {
            global $cn;
            $sql = "DELETE from Program where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
     
</div>
