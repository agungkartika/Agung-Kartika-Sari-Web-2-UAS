<x-app-layout>
    <div class="p-4 mt-14 sm:ml-64">
        <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md">
            <div class="flex justify-between">
                <h1 class="text-2xl text-black self-center dark:text-white">Dashboard</h1>
            </div>
        </div>
        <div class="py-4 mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
                <h2 class="text-xl text-black dark:text-white">Total Stock</h2>
                <p class="text-3xl text-black dark:text-white">{{ $totalStocks }}</p>
            </div>
            <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
                <h2 class="text-xl text-black dark:text-white">Total Laporan</h2>
                <p class="text-3xl text-black dark:text-white">{{ $totalReports }}</p>
            </div>
        </div>
        <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
            <h2 class="text-xl text-black dark:text-white">Notifikasi terbaru</h2>
            @if ($latestNotifications->isEmpty())
                <p class="text-gray-400 dark:text-gray-500">Tidak ada notifikasi.</p>
            @else
                <ul class="space-y-2 flex flex-col">
                    @foreach ($latestNotifications->take(2) as $notification)
                        <li class="p-2 bg-white dark:bg-gray-700 rounded-md shadow-sm">
                            <p class="text-sm text-dark dark:text-white">{{ $notification->message }}</p>
                            <span class="text-xs text-gray-400">{{ $notification->created_at->diffForHumans() }}</span>
                        </li>
                    @endforeach
                    <a class=" w-1/4 text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        href="{{ route('notifications.index') }}">Lihat notifikasi lain</a>
                </ul>
            @endif
        </div>
    </div>
</x-app-layout>
