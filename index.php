<!doctype html>
<html lang=fr-FR>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lab2-contacts-manager/assets/styles/gardevoir.css">
    <link rel="stylesheet" href="/lab2-contacts-manager/assets/styles/styles.css">
    <script src="https://kit.fontawesome.com/bae0f6a2ae.js" crossorigin="anonymous"></script>
    <title>Gestion de contacts</title>
</head>
<body>
    <?php require_once  __DIR__ . '/components/header.php'; ?>
    <main>
        <div class="container">
            <h1>Gestion de contacts</h1>
        </div>
        <?php require_once __DIR__ . '/views/forms/add_contact_form.php' ?>
        <?php require_once __DIR__ . '/views/list_contacts.php' ?>
        <?php require_once __DIR__ . '/views/forms/delete_contact_modal.php' ?>
    </main>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <script src="scripts/script.js"></script>
</body>
</html>