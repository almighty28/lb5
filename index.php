<?php include_once 'ImportDB.php'; ?>
<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>LR5</title>
		<meta charset = "utf-8">
	</head>
	<body>
		<form method = 'post'>	
			<select name = "clients">
				<option value = ''>Выберите клиента</option>
				<?php 
					$sql = "SELECT ID_Client , name FROM client ";
					foreach ($dbh->query($sql) as $row) 
					{
						echo "<option value = '$row[ID_Client]'> $row[name] </option>";
					}
				?>
			</select>
		
			<input type = 'submit' name = 'check_by_client' id = 'check_by_client' value = 'Вывести статистику'>
		</form>
		<form method = 'post'>	
			<input id = "date_in" name = "date_in" type="datetime-local">
			<input id = "date_out" name = "date_out" type="datetime-local">
			<input type = 'submit' name = 'check_by_date' id = 'check_by_date' value = 'Вывести статистику'>
		</form>
		<form method = 'post'>	
			<input type = 'submit' name = 'list_of_client' id = 'list_of_client' value = 'Вывести клиетнов с отрицательным балансом'>
		</form>
		<?php
				if(isset($_POST['check_by_client']))
				{
					if(!empty($_POST['clients']))
					{
						$selected = $_POST['clients'];
						include 'Check_By_Client.php';
					}
					else{echo "Выберите клиента";}
				}
		?>

		<?php
				if(isset($_POST['check_by_date'])){
					if(!empty($_POST['date_in']) && !empty($_POST['date_out']))
					{
						$date_in = $_POST['date_in'];
						$date_out = $_POST['date_out'];
						include 'Check_By_Time.php';
					}	
					else{echo "Выберите промежуток времени";}
				}
		?>

		<?php
				if(isset($_POST['list_of_client']))
				{
					include 'List_of_client.php';
				}
				
		?>
	</body>
</html>