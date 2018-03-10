<table>
	<?php 
		$this->assign("title","Bidule");
		foreach($toto as $u)
		{
			echo "<tr>";
			echo "<td>".$u->login."</td>";
			echo "<td>".$u->passwd."</td>";
			echo "</tr>";
		}
	 ?>
 </table>