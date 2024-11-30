<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$reports = query("SELECT reports.*, users.name as user_name FROM reports 
                    JOIN users ON reports.user_id = users.id ORDER BY created_at ASC");
header('refresh:3;Content-Type: text/html; charset=UTF-8');
?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <!-- Main Content Cards (Left Side) -->
    <div class="col-span-3 grid grid-cols-1 gap-6">
        <?php if (empty($reports)) : ?>
            <div class="flex flex-col items-center justify-center h-full text-center">
                <h1 class="font-extrabold text-4xl text-gray-700">Data Kosong</h1>
                <p class="text-lg text-gray-500 mt-2">Belum ada laporan yang tersedia saat ini.</p>
            </div>
        <?php else : ?>
            <?php foreach ($reports as $report) :
                $report['content'] = html_entity_decode(html_entity_decode(strval($report['content'])));
            ?>
                <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-all overflow-hidden">
                    <a href="index.php?page=detail&id=<?= $report['id'] ?>" class="block">
                        <?php if ($report['thumbnail']) : ?>
                            <img class="w-full h-52 object-cover" src="<?= "../assets/upload/" . $report['thumbnail'] ?>" alt="<?= $report['thumbnail'] ?>" />
                        <?php endif; ?>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <div class="flex items-center mb-4">
                                <div class="flex-grow">
                                    <p class="text-sm font-medium text-gray-600"><?= $report['user_name'] ?></p>
                                    <p class="text-xs text-gray-400"><?= date("d M Y, H:i", strtotime($report['created_at'])) ?></p>
                                </div>
                            </div>
                            <h5 class="text-xl font-semibold text-gray-800 line-clamp-2"><?= $report['title'] ?></h5>
                            <p class="text-sm text-gray-600 mt-2 line-clamp-3"><?= strip_tags($report['content']) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Breaking News (Right Side) -->
    <div class="col-span-1 hidden md:block bg-white border border-gray-200 rounded-lg shadow-lg">
        <div class="p-5">
            <h5 class="text-lg font-semibold text-blue-600 uppercase">Breaking News</h5>
        </div>
        <img class="w-full h-48 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Breaking News Image" />
        <div class="p-5">
            <h5 class="text-xl font-bold text-gray-800">Checkout DEV++</h5>
            <p class="text-sm text-gray-600 mt-2">Invest in your developer career with our value-maximizing membership program.</p>
            <button class="mt-4 w-full bg-blue-500 text-white text-sm font-medium py-2 px-4 rounded hover:bg-blue-600 transition">
                Read more
            </button>
        </div>
    </div>
</div>
