<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>admin_panel</title>
		<link rel="stylesheet" href="admin_page.css">
	</head>
	<body>
		<p>Панелька админа</p>
		<?php
				include 'connection_devices.php';
				    

				$sql = "SELECT * FROM moderation ORDER BY Date";
				$result = $conn->query($sql);

				echo "<form><table rules = 'all' style = 'border: 1px solid black;'>";
				foreach($result as $row) {
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td><input type='text' name='moder' value='" . $row['State'] . "'></td><td>" . $row["Comment"] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px /></td></tr>";
				}
				echo "</table></form>
				<?php 
				foreach($result as $row) {
					
				}

				
				?>
				";

		?>
		<script type="text/javascript" src="/js/admin.js"></script>
	</body>
</html>
