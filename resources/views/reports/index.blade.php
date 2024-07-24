<x-app-layout>
    <div class="p-4 mt-14 sm:ml-64">
        <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md">
            <div class="flex justify-between">
                <h1 class="text-2xl text-black self-center dark:text-white">Data Laporan</h1>
                <div>
                    <a href="{{ route('reports.download') }}"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                        Download Laporan
                    </a>
                    <a href="{{ route('reports.create') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
            <table id="tableStock" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-4 py-2 text-gray-900 dark:text-gray-300">ID</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-gray-300">Nama Bahan</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-gray-300">Stock</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-gray-300">Report Date</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-4 py-2 text-gray-900 dark:text-gray-300">{{ $item->id }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-gray-300">{{ $item->stock->product_name }}
                            </td>
                            <td class="px-4 py-2 text-gray-900 dark:text-gray-300">{{ $item->stock->quantity }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-gray-300">{{ $item->report_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
