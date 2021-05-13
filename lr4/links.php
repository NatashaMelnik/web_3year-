<!DOCTYPE html>
<html>
	<body>
		<?php
			session_start();
			$_SESSION['full_name'] = $_POST['full_name'];
			$_SESSION['phone'] = $_POST['phone'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['hobby']=$_POST['hobby'];
			$_SESSION['university'] = $_POST['university'];
			$_SESSION['faculty']=$_POST['faculty'];
			$_SESSION['course']=$_POST['course'];	
		?>
		<p>
			<a href=".\user.php">Контактна інформація</a>
		</p>		
		<p>
			<a href=".\university.php">Інформація про ваш учбовий заклад</a>
		</p>		
		<p>
			<a href=".\hobby.php">Захоплення</a>
		</p>
	</body>
</html>