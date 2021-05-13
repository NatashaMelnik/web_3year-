<!DOCTYPE html>
<html>
	<body>
		<?php 
			session_start();
		?>
		<p>		
			<label>
				ВУЗ:
			</label>
			<?php echo $_SESSION['university']; ?>
		</p>
		<p>
			<label>
				Факультет: 
			</label>
			<?php echo $_SESSION['faculty']; ?>
		</p>
		<p>
			<label>
				Курс: 
			</label>
			<?php echo $_SESSION['course']; ?>
		</p>
	</body>
</html>
