<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Item') }}
        </h2>
    </x-slot>

    <div class="container">
        <form action="{{ route('item-conditions.store') }}" method="post">
            @csrf

            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Item Condition</h1>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 dark:text-gray-300">Name:</label>
                <input type="text" id="name" name="name" class="form-input">
            </div>

            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Item Type</h1>
            <div class="mb-4">
                <label for="item_type" class="block text-gray-700 dark:text-gray-300">Item Type:</label>
                <select id="item_type" name="item_type" class="form-select">
                    <option value="type1">Books</option>
                    <option value="type2">non-books</option>
                    <!-- Add options dynamically based on your item types data -->
                </select>
            </div>

            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Description</h1>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 dark:text-gray-300">Description:</label>
                <textarea id="description" name="description" class="form-textarea" rows="4"></textarea>
            </div>

            <!-- Add more fields for other item properties here -->

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Create Item Condition</button>
            </div>
        </form>
    </div>
</x-app-layout>
