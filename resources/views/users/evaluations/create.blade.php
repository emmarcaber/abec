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

                        <!-- Knowledge and Expertise -->
                        <div class="mt-4">
                            <x-input-label for="knowledge_expertise" :value="__('Knowledge and Expertise')" />
                        
                            <div class="text-md text-justify">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This criterion evaluates the individual's understanding and proficiency in their role or field. It assesses how well the individual applies their knowledge to tasks and stays updated on relevant information. Factors to consider include problem-solving skills, technical competence, and practical application of knowledge.
                            </div>

                            <div class="mt-2 flex justify-center items-center gap-24 text-md">
                                <label for="ke_excellent" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_excellent" name="knowledge_expertise" value="5" />
                                    Excellent
                                </label>
                                <label for="ke_good" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_good" name="knowledge_expertise" value="4" />
                                    Good
                                </label>
                                <label for="ke_OK" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_OK" name="knowledge_expertise" value="3" />
                                    OK
                                </label>
                                <label for="ke_fair" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_fair" name="knowledge_expertise" value="2" />
                                    Fair
                                </label>
                                <label for="ke_poor" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_poor" name="knowledge_expertise" value="1" />
                                    Poor
                                </label>
                            </div>
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
