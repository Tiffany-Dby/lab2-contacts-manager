<section>
    <div class="container">
        <div class="form__wrapper form__contact">
            <h2>Nouveau contact</h2>
            <form class="form" action="/lab2-contacts-manager/controllers/add_contact.php" method="POST">
                <div class="form__inputs">
                    <div class="input__wrapper">
                        <label for="name" class="input__label">Nom</label>
                        <input class="input" type="text" name="name" id="name">
                    </div>
                    <div class="input__wrapper">
                        <label for="email" class="input__label">Email</label>
                        <input class="input" type="email" name="email" id="email">
                    </div>
                    <div class="input__wrapper">
                        <label for="phone" class="input__label">Téléphone</label>
                        <input class="input" type="tel" name="phone" id="phone">
                    </div>
                </div>
                <div class="btn__wrapper">
                    <button class="btn" name="addContact" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</section>