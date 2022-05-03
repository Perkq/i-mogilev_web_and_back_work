<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>admin_panel</title>
		<link rel="stylesheet" href="/css/admin_page.css">
	</head>
	<body>
		<p>Панелька админа</p>
		<div class = "main_table">
			<?php
					include 'connection_devices.php';


					echo "<p>Устройства на модерации</p>";

					$sql = "SELECT * FROM moderation ORDER BY Date";
					$result = $conn->query($sql);

					echo "<table rules = 'all' style = 'border: 1px solid black;'>";
					foreach($result as $row) {
					echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td><form action='dev_mod.php' method='post'><input type='radio' name = 'moder' value='progress' id='progr'><label for='progr'>In progress</label><input type='radio' name = 'moder' value='done' id='wdone'><label for='wdone'>Done</label><input type='radio' name = 'moder' value='Denied' id='den'><label for='den'>Denied</label>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
						<input type='hidden' name='state' value='" . $row['State'] . "' />
                        <input type='submit' value='Сохранить'>
                </form></td><td>" . $row["Comment"] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px /></td></tr>";
					}
					echo "</table>";

					echo "<br><br><br><p>Устройства в процессе выполнения</p>";

					$sql2 = "SELECT * FROM inprogress ORDER BY Date";
					$result2 = $conn->query($sql2);

					echo "<table rules = 'all' style = 'border: 1px solid black;'>";
					foreach($result2 as $row) {
					echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td><form action='dev_progress.php' method='post'><input type='radio' name = 'moder' value='done' id='wdone'><label for='wdone'>Done</label><input type='radio' name = 'moder' value='Denied' id='den'><label for='den'>Denied</label>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Сохранить'>
                </form></td><td>" . $row["Comment"] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px /></td></tr>";
					}
					echo "</table>";

					echo "<br><br><br><p>Завершённые заказы</p>";

					$sql3 = "SELECT * FROM done ORDER BY Date";
					$result3 = $conn->query($sql3);

					echo "<table rules = 'all' style = 'border: 1px solid black;'>";
					foreach($result3 as $row) {
					echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td><form action='dev_done.php' method='post'><input type='radio' name = 'moder' value='progress' id='progr'><label for='progr'>In progress</label><input type='radio' name = 'moder' value='Denied' id='den'><label for='den'>Denied</label>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
						<input type='hidden' name='state' value='" . $row['State'] . "' />
                        <input type='submit' value='Сохранить'>
                </form></td><td>" . $row["Comment"] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px /></td></tr>";
					}
					echo "</table>";

					echo "<br><br><br><p>Отказано</p>";

					$sql4 = "SELECT * FROM denied ORDER BY Date";
					$result4 = $conn->query($sql4);

					echo "<table rules = 'all' style = 'border: 1px solid black;'>";
					foreach($result4 as $row) {
					echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["EMail"] . "</td><td>" . $row["Date"] . "</td><td><form action='dev_denied.php' method='post'><input type='radio' name = 'moder' value='progress' id='progr'><label for='progr'>In progress</label><input type='radio' name = 'moder' value='done' id='wdone'><label for='wdone'>Done</label>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
						<input type='hidden' name='state' value='" . $row['State'] . "' />
                        <input type='submit' value='Сохранить'>
                </form></td><td>" . $row["Comment"] . "</td><td><img src='/user_img/" . $row['Photo'] . "' width = 300px /></td></tr>";
					}
					echo "</table>";

			?>
		</div>
		<script type="text/javascript" src="/js/admin.js"></script>
	</body>
</html>
