<?= view('layout.header'); ?>

            <form action="" method="post">
                <p>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname"
                    id="firstname"required>
                </p>
                <p>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname"
                    id="lastname"required>
                </p>
                <p>

                    <label for="email">E-mail</label>
                    <input type="text" name="email"
                    id="email"required>
                </p>

                    <label for="password">Mot de passe</label>
                    <input type="text" name="password"
                    id="password"required>
                </p>
                <p>
                    <button type="submit">Créer le compte</button>
                </p>
            </form>
            </div>

<?= view('layout.footer'); ?>
