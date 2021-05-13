<!DOCTYPE html>
<html>
	<body>
		<?php 
			session_start();
		?>
		<p>		
			<label>
				Хобі:
			</label>
			<?php echo $_SESSION['hobby']; ?>
		</p>
	</body>
</html>
