<?php require_once("connection.php");
?>
<?php require_once("functions.php");
?>
<?php include("header.php");
?>

<!--
	<div >	<h3> Select Store Type </h3></br> 	
<?php		echo "<form action="."\"store.php?lat=" . $x1 . "&lon=" . $y1."\"". "method=\"post \">";
	?>		<select name="type1" type="text" >
				<option value="ALL">ALL</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
			<input type="submit" value="Submit" name = "submit">
		</form>
		
		
					
	</div>-->
	
<?php
	$output = "<h3> Our Stores </h3> ";			
	$output .= show_store($type);
	echo $output;
	
?>
</body>
</html>
