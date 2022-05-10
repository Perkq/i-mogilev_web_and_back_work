<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>admin_panel</title>
		<link rel="stylesheet" href="\css\admin_page.css">
	</head>
	<body>
		<p id="admin">Панель админа</p>
			<p class="moder">Устройства на модерации</p>
			<table>
				<tr>
					<td>id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Date</td>
					<td>State</td>
					<td>Comment</td>
					<td>Serie</td>
					<td>Check number</td>
					<td>Photo</td> 
				</tr>
			<?php
					include 'connection_devices.php';
					$sql = "SELECT * FROM moderation ORDER BY Date";
					$result = $conn->query($sql);

					foreach($result as $row) {
					echo "<tr><td class='idT'>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td>
						<form action='dev_mod.php' method='post'>
						<div><input type='radio' name = 'moder' value='progress' id='progr'><label for='progr'>In progress</label></div>
						<div><input type='radio' name = 'moder' value='done' id='wdone'><label for='wdone'>Done</label></div>
						<div><input type='radio' name = 'moder' value='Denied' id='den'><label for='den'>Denied</label></div>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
						<input type='hidden' name='state' value='" . $row['State'] . "' />
                        <input type='submit' value='Сохранить'>
                </form></td><td>" . $row["Comment"] . "</td><td>" . $row["check series"] . "</td><td>" . $row["check number"]  . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px  height = 150px /></td></tr>";
					}
			?>

				</table>

				<p class="progress">Устройства в процессе выполнения</p>
			<table>
				<tr>
					<td>id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Date</td>
					<td>State</td>
					<td>Comment</td>
					<td>Serie</td>
					<td>Check number</td>
					<td>Photo</td> 
				</tr>
			<?php
					$sql2 = "SELECT * FROM inprogress ORDER BY Date";
					$result2 = $conn->query($sql2);

					foreach($result2 as $row) {
					echo "<tr><td class='idT'>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td>
						<form action='dev_progress.php' method='post'>
						<div><input type='radio' name = 'moder' value='done' id='wdone'><label for='wdone'>Done</label></div>
						<div><input type='radio' name = 'moder' value='Denied' id='den'><label for='den'>Denied</label></div>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Сохранить'>
                		</form></td><td>" . $row["Comment"] . "</td><td>" . $row['check series'] . "</td><td>" . $row['check number']  .  "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px height = 150px/></td></tr>";
					}

			?>
				</table>

				<p class="done">Завершённые заказы</p>

				<table>
				<tr>
					<td>id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Date</td>
					<td>State</td>
					<td>Comment</td>
					<td>Serie</td>
					<td>Check number</td>
					<td>Photo</td> 
				</tr>

			<?php

					$sql3 = "SELECT * FROM done ORDER BY Date";
					$result3 = $conn->query($sql3);

					foreach($result3 as $row) {
					echo "<tr><td class='idT'>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td>
						<form action='dev_done.php' method='post'>
						<div><input type='radio' name = 'moder' value='progress' id='progr'><label for='progr'>In progress</label></div>
						<div><input type='radio' name = 'moder' value='Denied' id='den'><label for='den'>Denied</label></div>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
						<input type='hidden' name='state' value='" . $row['State'] . "' />
                        <input type='submit' value='Сохранить'>
                </form></td><td>" . $row["Comment"] .  "</td><td>" . $row['check series'] . "</td><td>" . $row['check number'] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px  height = 150px /></td></tr>";
					}

				
				?>
				
				</table>

				<p class="denied">Отказано</p>
				<table>
				<tr>
					<td>id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Date</td>
					<td>State</td>
					<td>Comment</td>
					<td>Serie</td>
					<td>Check number</td>
					<td>Photo</td> 
				</tr>
				<?php
					

					$sql4 = "SELECT * FROM denied ORDER BY Date";
					$result4 = $conn->query($sql4);

					foreach($result4 as $row) {
					echo "</tr><tr><td class='idT'>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td>
						<form action='dev_denied.php' method='post'>
						<div><input type='radio' name = 'moder' value='progress' id='progr'><label for='progr'>In progress</label></div>
						<div><input type='radio' name = 'moder' value='done' id='wdone'><label for='wdone'>Done</label></div>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
						<input type='hidden' name='state' value='" . $row['State'] . "' />
                        <input type='submit' value='Сохранить'>
               			</form></td><td>" . $row["Comment"] .  "</td><td>" . $row['check series'] . "</td><td>" . $row['check number'] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px  height = 150px /></td></tr>";
					}

			?>
			</table>
		<script type="text/javascript" src="/js/admin.js"></script>
	</body>
</html>
