<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$report_unsolved = query("SELECT  COUNT(status) as status FROM reports WHERE status = 0");
$report_solved = query("SELECT COUNT(status) as status FROM reports WHERE status = 1");

?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <!-- Laporan Masuk -->
    <div class="p-6 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-lg shadow-lg hover:shadow-xl transition">
        <a href="#" class="flex flex-col items-center justify-center text-center w-full h-full text-white">
            <h5 class="mb-2 text-3xl font-bold">
                <?= $report_unsolved[0]['status'] ?>
            </h5>
            <p class="text-lg font-medium">Laporan Masuk</p>
        </a>
    </div>
    <!-- Laporan Selesai -->
    <div class="p-6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg shadow-lg hover:shadow-xl transition">
        <a href="#" class="flex flex-col items-center justify-center text-center w-full h-full text-white">
            <h5 class="mb-2 text-3xl font-bold">
                <?= $report_solved[0]['status'] ?>
            </h5>
            <p class="text-lg font-medium">Laporan Selesai</p>
        </a>
    </div>
    <!-- Placeholder Card 1 -->
    <div class="p-6 bg-gray-100 rounded-lg shadow-inner flex items-center justify-center">
        <p class="text-gray-400 font-medium">Data Kosong</p>
    </div>
    <!-- Placeholder Card 2 -->
    <div class="p-6 bg-gray-100 rounded-lg shadow-inner flex items-center justify-center">
        <p class="text-gray-400 font-medium">Data Kosong</p>
    </div>
</div>

<!-- Grafik atau Bagian Lain -->
<div class="bg-white shadow-lg rounded-lg p-6 h-96 mb-6">
    <p class="text-gray-400 text-center font-medium">Grafik atau Konten Lainnya</p>
</div>

<div class="grid grid-cols-2 gap-6 mb-6">
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 1</p>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 2</p>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 3</p>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 4</p>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg p-6 h-96 mb-6">
    <p class="text-gray-400 text-center font-medium">Grafik atau Konten Lainnya</p>
</div>

<div class="grid grid-cols-2 gap-6">
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 5</p>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 6</p>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 7</p>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 h-64 flex items-center justify-center">
        <p class="text-gray-400 font-medium">Konten 8</p>
    </div>
</div>