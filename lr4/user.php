<!DOCTYPE html>
<html>
	<body>
		<?php 
			session_start();
		?>
		<p>		
			<label>
				ПІБ:
			</label>
			<?php echo $_SESSION['full_name']; ?>
		</p>
		<p>
			<label>
				Телефон: 
			</label>
			<?php echo $_SESSION['phone']; ?>
		</p>
		<p>
			<label>
				Email:
			</label>
			<?php echo $_SESSION['email']; ?>
		</p>
	</body>
</html>
