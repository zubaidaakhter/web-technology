<?php

session_start();

require_once ('../model/sqlconnection.php');

$output='';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect,$_POST["query"])
	$query="
   SELECT * FROM med_data 
   WHERE id LIKE '%". $search . "%'
   OR Medicine Like '%".$search ."%'
   OR description Like '%".$search ."%'
   OR price Like '%".$search ."%'
   OR stock '%".$search ."%' ";
	
}
else
{
	$query="

	SELECT * FROM med_data ORDER BY Medicine";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						<th>id</th>
							<th>Medicine </th>
							<th>description</th>
							<th>price</th>
							<th>stock</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["Medicine"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["price"].'</td>
				<td>'.$row["stock"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>


?>