<html>
	<head>
		<title>AJAX DEMO</title>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.btn').click(function() {
				var name = $('#name').val();
				var surname = $('#surname').val();
				var phnnumber = $('#phnnumber').val();
				
				//if()
				
				$.ajax({
					url: 'updatedform.php',
					method: 'post',
					data: {
						name : name,
						surname : surname,
						phnnumber : phnnumber					
					},
					success:function(response) {
						// $('#server_response').html(response);
						if( response == true )
						{
							alert(response);
							//window.location.reload();
						}
						else
						{
							alert(response);
						}
					}
				});
			});
	
			$('.btn').click(function(){
				$('table').last('tr').append('<tr><td>$r[0]</td><td>"$name"</td><td>$r[2]</td><td>$r[3]</td></tr>');	
				
			});
		});
		</script>
	</head>
	<body>
		<form method="post">
			<table align="center" border='1'>
				<tr align="center">
					<td colspan=2>FORM</td>
				</tr>
				<tr>
					<td>NAME</td>   
					<td><input type="text" name="t1" id="name" ></td>   																																																																																																																																																													  
				</tr>

				<tr>
					<td>SURNAME</td>   
					<td><input type="text" name="t2" id="surname"></td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
				</tr>
				<tr>
					<td>PHONENUMBER</td>   
					<td><input type="text"  name="t3" id="phnnumber"></td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
				</tr>

				<tr align="center" width="100%">   
					<td colspan="2" ><input class="btn" type="button" name="submit" value="Submit"></td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
				</tr>
			</table>
		</form>
		
		<br><br>
			
		<?php
		
			$con = mysqli_connect('localhost', 'root', '', 'ajax');
			$q="select * from employee_form";
			$qry= $con->query($q);
			
				echo "<table border='1'>";
					echo "<tr>
						<th>S.NO</th>
						<th>NAME</th>
						<th>SURNAME</th>
						<th>PHONENUMBER</th>
						</tr>";
						while($r=$qry->fetch_array())
							{
								echo "<tr>";
								echo "<td>$r[0]</td>";
								echo "<td>$r[1]</td>";
								echo "<td>$r[2]</td>";
								echo "<td>$r[3]</td>";
								echo "</tr>";
								
							}
				echo "</table>";
			
		?>
	</body>
</html>