<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Item Types') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Item Types</h1>
        <a href="{{ route('item-types.create') }}" class="btn btn-primary">Create New Type</a>

        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Item Conditions</h1>
        @if($itemConditionsRoute)
            <a href="{{ $itemConditionsRoute }}" class="btn btn-primary">View Item Conditions</a>
        @else
            <p>No route available for Item Conditions.</p>
        @endif

        <table class="table">
            <!-- Your item types table here -->
        </table>
    </div>
</x-app-layout>
