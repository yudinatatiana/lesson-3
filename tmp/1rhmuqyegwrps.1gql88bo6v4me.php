<form action="/auth" method="POST">
	<center>
	Login: <br>
	<input type="text" name="name"> <br>
	Password: <br>
	<input type="password" name="password"> <br>
	Random number: <?= $result ?>. Enter it below. <br>
	<input type="hidden" name="a" value="<?= $result ?>">
	<input type="text" name="kapcha"> <br>
	<button type="submit">OK</button> <br>
	</center>
</form> 