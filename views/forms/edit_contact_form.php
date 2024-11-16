<!doctype html>
<html lang=fr-FR>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lab2-contacts-manager/assets/styles/gardevoir.css">
    <link rel="stylesheet" href="/lab2-contacts-manager/assets/styles/styles.css">
    <title>Gestion de contacts</title>
</head>
<body>
<?php require_once  __DIR__ . '/../../components/header.php'; ?>
<main>
    <div class="container">
        <h1>Gestion de contacts</h1>
    </div>
    <nav class="container">
        <a href="/lab2-contacts-manager/index.php">Retour à l'accueil</a>
    </nav>
    <section>
        <div class="container">
            <div class="form__wrapper form__contact">
                <h2>Mise à jour d'un contact</h2>
                <form class="form" action="/lab2-contacts-manager/controllers/edit_contact.php" method="POST">
                    <input type="hidden" name="editId" value="<?php echo htmlspecialchars($contact['id']) ?>">

                    <div class="form__inputs">
                        <div class="input__wrapper">
                            <label for="editName" class="input__label">Nom</label>
                            <input class="input" type="text" name="editName" id="editName" value="<?php echo htmlspecialchars($contact['name']) ?>">
                        </div>
                        <div class="input__wrapper">
                            <label for="editEmail" class="input__label">Email</label>
                            <input class="input" type="email" name="editEmail" id="editEmail" value="<?php echo htmlspecialchars($contact['email']) ?>">
                        </div>
                        <div class="input__wrapper">
                            <label for="editPhone" class="input__label">Téléphone</label>
                            <input class="input" type="tel" name="editPhone" id="editPhone" value="<?php echo htmlspecialchars($contact['phone']) ?>">
                        </div>
                    </div>
                    <div class="btn__wrapper">
                        <button class="btn" name="editContact" type="submit">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php require_once __DIR__ . '/../../components/footer.php'; ?>
</body>
</html>