document.addEventListener('DOMContentLoaded', function () {
    var editBtns = document.querySelectorAll('.edit_btn');
    var ModalUpdateTable = document.getElementById('modal_update_table');
    var closeBtn = ModalUpdateTable.querySelector('.close');
    var idRolePlaceholder = document.getElementById('id_role_placeholder');
    var nameRoleInput = document.getElementById('name_role_input');

    // Перебираем все кнопки "Edit" и назначаем на каждую обработчик события клика
    editBtns.forEach(function (editBtn) {
        editBtn.addEventListener('click', function () {
            ModalUpdateTable.style.display = "block"; // Показываем модальное окно

            // Получаем id_role из атрибута data-id кнопки "Edit"
            var idRole = editBtn.getAttribute('data-id');

            // Заполняем плейсхолдер для id_role
            idRolePlaceholder.textContent = idRole;

            // Теперь можно загрузить данные для редактирования этой записи AJAX'ом
            // и заполнить input для name_role данными из базы данных

            // Например:
            // fetch('get_role_data.php?id_role=' + idRole)
            //     .then(response => response.json())
            //     .then(data => {
            //         nameRoleInput.value = data.name_role;
            //     })
            //     .catch(error => console.error('Error:', error));
        });
    });

    closeBtn.addEventListener('click', function () {
        ModalUpdateTable.style.display = "none"; // Закрываем модальное окно при клике на кнопку "Close"
    });

    window.addEventListener('click', function (event) {
        if (event.target === ModalUpdateTable) {
            ModalUpdateTable.style.display = "none"; // Закрываем модальное окно при клике за его пределами
        }
    });
});
