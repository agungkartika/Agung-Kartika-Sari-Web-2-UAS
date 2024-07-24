<x-app-layout>
    <div class="p-4 mt-14 sm:ml-64">
        <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-md">
            <div class="flex justify-between">
                <h1 class="text-2xl text-black self-center dark:text-white">Tambah Stock</h1>
            </div>
        </div>
        <div class="p-4 mt-5 bg-gray-200 dark:bg-gray-800 rounded-md">
            <form action="{{ route('stocks.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <input type="text" name="product_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="quantity"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                    <input type="number" name="quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                    Stock</button>
            </form>
        </div>
    </div>
</x-app-layout>
