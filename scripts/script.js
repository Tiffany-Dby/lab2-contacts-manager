document.addEventListener('DOMContentLoaded', () => {
    const deleteLinks = document.querySelectorAll('.delete-link');
    const deleteDialog = document.getElementById('deleteDialog');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');
    const deleteIdInput = document.getElementById('deleteId');
    const contactName = document.getElementById('contactName');

    deleteLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            deleteIdInput.value = link.getAttribute("data-id");
            contactName.textContent = link.getAttribute("data-name");
            deleteDialog.showModal();
        });
    });

    confirmDelete.addEventListener('click', () => window.location.href = `delete_contact.php?deleteId=${deleteIdInput.value}`);
    cancelDelete.addEventListener('click', () => {
        deleteDialog.close()
    });
});