<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");

$user_id = $_SESSION['user_id'];
$role_name = $_SESSION['role_name'];

if ($role_name !== 'masyarakat') {
    $reports = query("SELECT reports.*, users.name FROM reports JOIN users ON users.id = reports.user_id");
} else {
    $reports = query(
        "SELECT reports.*, users.name FROM reports JOIN users ON users.id = reports.user_id WHERE user_id = '$user_id'"
    );
}
?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
    <table class="w-full text-sm text-left text-gray-500 bg-white">
        <thead class="text-xs text-white uppercase bg-gradient-to-r from-blue-500 to-blue-700">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Sender
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Created at
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <?php if ($role_name !== 'masyarakat') : ?>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($reports)) : ?>
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-700">
                        <span class="bg-red-100 text-red-600 py-1 px-4 rounded-lg">Data kosong</span>
                    </td>
                </tr>
            <?php else :
                $no = 1;
            ?>
                <?php foreach ($reports as $report) : ?>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-700">
                            <?= $no++ ?>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            <?= htmlspecialchars($report['name']) ?>
                        </td>
                        <th scope="row" class="px-6 py-4 font-semibold text-gray-800 whitespace-nowrap">
                            <?= htmlspecialchars($report['title']) ?>
                        </th>
                        <td class="px-6 py-4 text-gray-500">
                            <?= date('d M Y, H:i', strtotime($report['created_at'])) ?>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs font-semibold <?= $report['status'] == 0 ? 'bg-red-200 text-red-600' : 'bg-green-200 text-green-600' ?> rounded-lg">
                                <?= $report['status'] == 0 ? "Not Solved" : "Solved" ?>
                            </span>
                        </td>
                        <?php if ($role_name !== 'masyarakat') : ?>
                            <td class="px-6 py-4 flex items-center space-x-4">
                                <?php if ($report['status'] == 0) : ?>
                                    <a href="#" onclick="confirmApprove('reports_approve', 'id', <?= $report['id'] ?>)" class="text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-check-circle"></i>
                                    </a>
                                <?php endif; ?>
                                <a href="index.php?page=detail&id=<?= $report['id'] ?>" class="text-yellow-500 hover:text-yellow-700">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" onclick="confirmDelete('reports_delete', 'id', <?= $report['id'] ?>)" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>
