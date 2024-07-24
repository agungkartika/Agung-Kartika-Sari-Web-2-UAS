<x-app-layout>
    <div class="p-4 mt-14 sm:ml-64">
        <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md">
            <div class="flex justify-between">
                <h1 class="text-2xl text-black self-center dark:text-white">Notifikasi</h1>
            </div>
        </div>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif
        @if ($notifications->isEmpty())
            <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
                <p class="text-gray-400 dark:text-white">No notifications available.</p>
            </div>
        @else
            @foreach ($notifications as $notification)
                <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
                    <p class="text-lg text-dark dark:text-white">{{ $notification->message }}</p>
                    <span class="text-sm text-dark dark:text-white">{{ $notification->created_at->diffForHumans() }}</span>
                </div>
            @endforeach
        @endif
    </div>
</x-app-layout>
