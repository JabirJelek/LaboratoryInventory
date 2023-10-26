<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Shared View') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Item Conditions</h1>
        @if ($itemConditions->count() > 0)
            <ul class="mt-4 space-y-4">
                @foreach ($itemConditions as $itemCondition)
                    <li class="rounded-full p-3 bg-blue-400 text-white inline-block mb-2">{{ $itemCondition->name }}</li>
                @endforeach
            </ul>
        @else
            <p class="p-6 text-gray-600 dark:text-gray-400">No item conditions found.</p>
        @endif

        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mt-8">Item Types</h1>
        @if ($itemTypes->count() > 0)
            <ul class="mt-4 space-y-4">
                @foreach ($itemTypes as $itemType)
                    <li class="rounded-full p-3 bg-green-400 text-white inline-block mb-2">{{ $itemType->name }}</li>
                @endforeach
            </ul>
        @else
            <p class="p-6 text-gray-600 dark:text-gray-400">No item types found.</p>
        @endif
    </div>
</x-app-layout>
