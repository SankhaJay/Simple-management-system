<?php require_once("includes\connection.php")?>
<?php //require_once("includes\functions.php")?>
<?php include("includes\header.php")?>
    	<table id="structure">
            <tr>
                <td id="navigation">
                	<ul class="subject">
                <?php
                $result=mysql_query("SELECT * FROM subjects",$db);
				if(!result){
					die("Database query failed: ".mysql_error());	
				}
				 while($row = mysql_fetch_array($result)){
					echo "<li>{$row["menu_name"]}</li>";		 
				}	
				?>
                </ul>
                </td>
                <td id="page">
                	<h2 class="q">Content Area</h2>
            	   <p>Welcome to the content area.</p>
        		   <ul>
                       <li><a href = "content.php">Manage Website Content</a></li>
                       <li><a href = "new_user.php">Add staff user</a></li>
                       <li><a href = "logout.php">Logout</a></li>
        		   </ul>
         
                </td>
            </tr>
        	
    	
        </table>
    
<?php require("includes\footer.php")?>