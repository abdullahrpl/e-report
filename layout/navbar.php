<div class="antialiased">
    <!-- Navbar -->
    <nav class="bg-white shadow-md px-6 py-4 fixed left-0 right-0 top-0 z-50">
        <div class="flex justify-between items-center">
            <!-- Logo dan Sidebar Toggle -->
            <div class="flex items-center">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-3 text-gray-700 rounded-md lg:hidden hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M3 5h14M3 10h14M3 15h14"></path>
                    </svg>
                </button>
                <a href="/" class="flex items-center">
                    <span class="text-xl font-bold text-gray-800">Lapor <span class="text-blue-600">Heker</span></span>
                </a>
                <h4 class="hidden lg:block ml-6 text-lg font-medium text-blue-500 capitalize"><?= $_GET['page'] ?></h4>
            </div>

            <!-- Aksi dan Profil -->
            <div class="flex items-center space-x-4">
                <!-- Tombol Create Report -->
                <?php if ($_SESSION['role_name'] === 'masyarakat') : ?>
                <a href="index.php?page=create" class="flex items-center px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4"></path>
                    </svg>
                    Create Report
                </a>
                <?php endif ?>

                <!-- Ikon Notifikasi -->
                <button data-dropdown-toggle="notification-dropdown" class="relative w-10 h-10 rounded-full bg-gray-100 hover:bg-blue-100 text-blue-600 transition">
                    <span class="absolute top-0 right-0 flex h-5 w-5 items-center justify-center text-xs text-white bg-blue-600 rounded-full">2</span>
                    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 4v1m0 12v1m8-6H4"></path>
                    </svg>
                </button>
                <div id="notification-dropdown" class="hidden absolute right-0 mt-2 w-64 bg-white border border-gray-200 rounded-md shadow-lg">
                    <div class="p-4 text-sm text-gray-800">
                        <strong>Notifications</strong>
                        <div class="mt-2 space-y-2">
                            <a href="#" class="flex items-start space-x-3 p-2 hover:bg-gray-100">
                                <img src="./assets/images/smitty.jpg" alt="User" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-sm">New message from <span class="font-semibold">Rubel Islam</span></p>
                                    <span class="text-xs text-gray-500">A few moments ago</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Profil Pengguna -->
                <button data-dropdown-toggle="dropdown" class="w-10 h-10 rounded-full focus:ring-2 focus:ring-blue-500">
                    <img class="w-full h-full rounded-full" src="https://cdn.pixabay.com/photo/2015/04/13/12/07/business-720429_1280.jpg" alt="User photo">
                </button>
                <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                    <div class="p-4 text-gray-700">
                        <p class="text-sm font-medium"><?= $_SESSION['name'] ?></p>
                        <p class="text-xs"><?= $_SESSION['username'] ?></p>
                    </div>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">My Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Settings</a>
                        <a href="index.php?page=logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
