<?php
require_once __DIR__ . '/../functions/contact.php';

$contacts = getContacts();
?>
<section>
    <div class="container">
        <div class="contact-list__wrapper">
            <h2>Liste de contacts<?php echo !!sizeof($contacts) ? " (".sizeof($contacts).")" : "" ?></h2>
            <?php if($contacts): ?>
            <table class="contact-list">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?php echo $contact['name'] ?></td>
                            <td><?php echo $contact['email'] ?></td>
                            <td><?php echo $contact['phone'] ?></td>
                            <td>
                                <a class="btn" href="./controllers/edit_contact.php?editId=<?php echo $contact['id'] ?>"><i class="fa-solid fa-user-pen"></i> Editer</a> 
                                <a class="delete-link btn" href="#" data-id="<?php echo $contact['id'] ?>" data-name="<?php echo htmlspecialchars($contact['name']) ?>"><i class="fa-solid fa-trash-can"></i> Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p>Aucun contact.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
