<!DOCTYPE html>
<html>
	<head>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title> SEARCH MEDICINE</title>
<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
    padding-top: 150px
	margin: 0;
	padding: 0;
	background:url(img/img1.jpg);
	background-size: cover;
	font-family: sans-serif;  
}
table{
		position: absolute;
		left: 50%;
		top:50%;
		transform: translate(-50%,-50%);
		border-collapse: collapse;
		width: 1000px;
		height: 200px;
		border:1px solid #12b8cc;
		box-shadow: 2px 2px 12px #285454,-1px -1px 8px rgba(0,0,0,0);
		
		text-align: center;

	}
	th,td{
		padding: 12px
		text-align:left;
		border-bottom: 1px solid #a4f4fc;
		
	}
	tr{
		cursor: pointer;
		background-color: #f2f2f2;
	}
#searchbox{
	width:50%;
	margin: auto;
}
#searchbox input,button{
	width:75%;
	border:2px solid white;
	border-right: 0px;
	font-size: 18px;
	padding:12px;
	background:transparent;
	color:  #000000;


}
#searchbox button{
	width:25%;
	background: #eee;
	color: black;
	float: right;
	border-left: 0px;
}
#searchbox input:hover{
	opacity: .8;
}
#searchbox button:hover{
	opacity: .8;
}
h1{
	margin: 0 0 10px;
	padding: 0;
	color: #000000;
	font-size: 24px;

}



</style>

  </head>
<body>
	 <nav>
  <a class="logo" href="dashboard.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    
    <li class="nav-bar_item"><a href="">about</a></li>
    <li class="nav-bar_item"><a href="">service</a></li>
    <li class="nav-bar_item"><a href="">edit table</a></li>
    <li class="nav-bar_item"><a href="dashboard.php">Go Back</a></li>
</ul>
</nav>
<div id="searchbox" >
	<h1 align="center">SEARCH MEDICINE</h1>
	<form>
		<input class="search-txt" placeholder="type to Search.." id="search" type="text">
		<button>SEARCH</button>
	</form>
</div>
<table class ="table table-hover" >
			<thead>
			<tr >
				<th>SERIAL</th><th>MEDICINE NAME</th>
				<br><th>DESCRIPTION</th>
				<br><th>PRICE</th>
				<br><th>STOCK</th>	

			</tr>
	
			</thead>
			<tbody id="output"> 
				<!-- <tr>
					<td>1</td>
					<td>Napa</td>
					<td>2021-12-01</td>
					<td>10 taka</td>
					<td>200</td>
				</tr> -->
			</tbody>
		</table> 
</div>
	




<script type="text/javascript">
	$(document).ready(function(){
		$("#search").keypress(function(){
			$.ajax({

              type:'POST',
              url:'../controller/manage_search.php',
              data:{
              	name:$("#search").val(),
              },
              success:function(data){
              	$('#output').html(data)
              }
			});

		});

	});
</script>

 
  

</body>

</html>


	
		<!-- <input type="submit" name="" value="Search"> -->


		
		
		