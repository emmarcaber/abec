@props(['title', 'rating'])

<div>
    <div class="flex justify-between mb-1">
        <span class="text-sm font-medium text-gray-700 dark:text-white">{{ $title }}</span>
        <span class="text-xs font-medium text-gray-700 dark:text-white">{{ $rating }}/5</span>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
        <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ ($rating / 5) * 100 }}%">
        </div>
    </div>
</div>
