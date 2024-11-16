<dialog class="dialog" id="deleteDialog">
    <div class="dialog__container">
        <div class="form__wrapper">
            <form class="form" action="/lab2-contacts-manager/controllers/delete_contact.php" method="POST" id="deleteForm">
                <h3>Supprimer <span id="contactName"></span>?</h3>
                <input type="hidden" name="deleteId" id="deleteId">
                <div class="form__btns">
                    <div class="btn__wrapper">
                        <button class="btn" type="button" id="cancelDelete" >Annuler</button>
                    </div>
                    <div class="btn__wrapper">
                        <button class="btn" type="submit" id="confirmDelete" name="deleteContact">Confirmer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</dialog>