<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");

$users = query("SELECT users.id, users.username, users.nik, users.name, users.phone_number, users.role_id, roles.name as role_name
    FROM users 
    JOIN roles ON users.role_id = roles.id");

$roles = query("SELECT * FROM roles");

?>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <!-- Header Actions -->
    <div class="pb-4 flex justify-between items-center bg-gray-100 p-4 rounded-t-lg">
        <h2 class="text-lg font-bold text-gray-700">Manage Users</h2>
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" 
            class="text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Add User
        </button>
    </div>

    <!-- Table -->
    <table class="w-full text-sm text-left text-gray-600">
        <thead class="text-xs text-white uppercase bg-gradient-to-r from-blue-500 to-blue-600">
            <tr>
                <th scope="col" class="px-6 py-3">No.</th>
                <th scope="col" class="px-6 py-3">NIK</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Phone</th>
                <th scope="col" class="px-6 py-3">Role</th>
                <th scope="col" class="px-6 py-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-gray-50">
            <?php foreach ($users as $index => $user) : ?>
            <tr class="hover:bg-blue-100 transition duration-150 ease-in-out">
                <td class="px-6 py-4"><?= $index + 1 ?></td>
                <td class="px-6 py-4"><?= $user['nik'] ?></td>
                <td class="px-6 py-4"><?= $user['name'] ?></td>
                <td class="px-6 py-4"><?= $user['phone_number'] ?></td>
                <td class="px-6 py-4"><?= $user['role_name'] ?></td>
                <td class="px-6 py-4 flex justify-center space-x-3">
                    <button class="text-blue-500 hover:text-blue-600 transition">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-600 transition">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php
if (isset($_POST['submit'])) {
    handleFormSubmit($_POST, 'users', 'add');
}

if (isset($_POST['update'])) {
    handleFormSubmit($_POST, 'users', 'update');
}
?>