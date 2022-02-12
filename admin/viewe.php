<div id="padding">
<div class="section-title">
    <h3>Students list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Student Deleted.</h6>';
        }
               

                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "SELECT * from student_edit";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>ID</th><th>SName before</th><th>SName after</th><th>GName before</th><th>GName after</th><th>contact before</th><th>contact after</th><th>email before</th><th>email after</th><th>old address</th><th>new address</th><th>old course</th>
				<th>new course</th><th>old shift</th><th>new shift</th><th>old gender</th><th>new gender</th><th>old old blgroup</th><th>new blgroup</th><th>old level</th><th>new level</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["id"]).'</td>';
					print '<td>'.htmlentities($row["old_sname"]).'</td>';
                    print '<td>'.htmlentities($row["new_sname"]).'</td>';
					print '<td>'.htmlentities($row["old_gname"]).'</td>';
					print '<td>'.htmlentities($row["new_gname"]).'</td>';
					print '<td>'.htmlentities($row["old_contact"]).'</td>';
					print '<td>'.htmlentities($row["new_contact"]).'</td>';
					print '<td>'.htmlentities($row["old_email"]).'</td>';
					print '<td>'.htmlentities($row["new_email"]).'</td>';
					print '<td>'.htmlentities($row["old_address"]).'</td>';
					print '<td>'.htmlentities($row["new_address"]).'</td>';
					print '<td>'.htmlentities($row["old_course"]).'</td>';
					print '<td>'.htmlentities($row["new_course"]).'</td>';
					print '<td>'.htmlentities($row["old_shift "]).'</td>';
					print '<td>'.htmlentities($row["new_shift"]).'</td>';
					print '<td>'.htmlentities($row["old_gender"]).'</td>';
					print '<td>'.htmlentities($row["new_gender"]).'</td>';
					print '<td>'.htmlentities($row["old_blgroup"]).'</td>';
					print '<td>'.htmlentities($row["new_blgroup"]).'</td>';
					print '<td>'.htmlentities($row["old_level"]).'</td>';
					print '<td>'.htmlentities($row["new_level"]).'</td>';
					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
	
				print '</table>';


    function delete()
        {
            global $cn;
            $sql = "DELETE from student where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
     
</div>
