<?= view('layout.header'); ?>

<h1>Inscription</h1>

<form action="<?= route('signup_post'); ?>" method="post">
    <p>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" required>
    </p>
    <p>
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname" required>
    </p>
    <p>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
    </p>
    <p>
        <button type="submit">Créer le compte</button>
    </p>
</form>

<?= view('layout.footer'); ?>
