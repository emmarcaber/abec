<x-app-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Evaluation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Position -->
                        <div class="">
                            <x-input-label for="position" :value="__('Position')" />

                            <select id="position" name="position_id" required
                                class="block w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option placeholder selected>Select Position</option>
                                @foreach ($officers_to_evaluate as $officer)
                                    <option value="{{ $officer->user_id }}">
                                        {{ $officer->position }} - {{ $officer->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Comments -->
                        <div class="mt-4">
                            <x-input-label for="comments" :value="__('Comments')" />
                            <x-text-area id="comments" class="block mt-1 w-full" name="comments" :value="old('comments')"
                                required />
                            <x-input-error :messages="$errors->get('comments')" class="mt-2" />
                        </div>

                        <!-- Recommendations -->
                        <div class="mt-4">
                            <x-input-label for="recommendations" :value="__('Recommendations')" />
                            <x-text-area id="recommendations" class="block mt-1 w-full" name="recommendations"
                                :value="old('recommendations')" required />
                            <x-input-error :messages="$errors->get('recommendations')" class="mt-2" />
                        </div>

                        <!-- Rating -->
                        <div class="mt-4">
                            <x-input-label for="rating" :value="__('Rating')" />
                            <div class="flex mt-1">
                                <div class="text-center">
                                    <span class="flex flex-row-reverse">
                                        <svg class="peer cursor-pointer text-gray-600 duration-100 hover:text-yellow-400 peer-hover:text-yellow-400"
                                            width="23" height="23" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                            </path>
                                        </svg>

                                        <svg class="peer cursor-pointer text-gray-600 duration-100 hover:text-yellow-400 peer-hover:text-yellow-400"
                                            width="23" height="23" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                            </path>
                                        </svg>

                                        <svg class="peer cursor-pointer text-gray-600 duration-100 hover:text-yellow-400 peer-hover:text-yellow-400"
                                            width="23" height="23" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                            </path>
                                        </svg>

                                        <svg class="peer cursor-pointer text-gray-600 duration-100 hover:text-yellow-400 peer-hover:text-yellow-400"
                                            width="23" height="23" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                            </path>
                                        </svg>

                                        <svg class="peer cursor-pointer text-gray-600 duration-100 hover:text-yellow-400 peer-hover:text-yellow-400"
                                            width="23" height="23" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-cancel-button href="{{ route('user.evaluations.index') }}" class="ms-4">
                                {{ __('Cancel') }}
                            </x-cancel-button>

                            <x-create-button class="ms-4">
                                {{ __('Create') }}
                            </x-create-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
