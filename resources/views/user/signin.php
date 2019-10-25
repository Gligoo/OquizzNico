<?= view('layout.header'); ?>

<form action="<?= route('signin_post'); ?>" method="post">
	<p>
		<label for="email">E-mail</label>
		<input type="email" name="email" id="email" required>
	</p>
	<p>
		<label for="password">Mot de passe</label>
		<input type="password" name="password" id="password" required>
	</p>
	<p>
		<button type="submit">Se connecter</button>
	</p>
</form>

<?= view('layout.footer'); ?>
