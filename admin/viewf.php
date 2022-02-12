<div id="padding">
<div class="section-title">
    <h3>Faculties list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Faculty Deleted.</h6>';
        }
               

                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "SELECT * from Faculty";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>Faculty ID</th><th>Faculty Name</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["Faculty_id"]).'</td>';
					print '<td>'.htmlentities($row["Faculty_Name"]).'</td>';
					
					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["Faculty_id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['Faculty_id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
	
				print '</table>';


    function delete()
        {
            global $cn;
            $sql = "DELETE from Faculty where Faculty_id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
     
</div>
