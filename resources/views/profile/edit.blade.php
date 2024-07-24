<x-app-layout>
    <div class="p-4 mt-14 sm:ml-64">
        <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md">
            <div class="flex justify-between">
                <h1 class="text-2xl text-black self-center dark:text-white">Tambah Laporan</h1>
            </div>
        </div>
        <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
            @include('profile.partials.update-profile-information-form')

        </div>
        <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
            @include('profile.partials.update-password-form')

        </div>
        <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
            @include('profile.partials.delete-user-form')

        </div>
    </div>
</x-app-layout>
