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

                    <form method="POST" action="{{ route('user.evaluations.store') }}">
                        @csrf
                        @method('POST')

                        <input type="hidden" name="user_id" value="{{ $user_id }}" />

                        <!-- Position -->
                        <div class="">
                            <x-input-label for="officersDropdown" :value="__('Position')" />

                            <select id="officersDropdown" name="evaluated_officer_id" required
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
                        
                            <div class="text-sm text-justify">
                            This criterion evaluates the individual's understanding and proficiency in their role or field. It assesses how well the individual applies their knowledge to tasks and stays updated on relevant information. Factors to consider include problem-solving skills, technical competence, and practical application of knowledge.
                            </div>

                            <div class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                                <label for="ke_excellent" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_excellent" name="knowledge_expertise" value="5" required />
                                    Excellent
                                </label>
                                <label for="ke_good" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_good" name="knowledge_expertise" value="4" required />
                                    Good
                                </label>
                                <label for="ke_OK" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_OK" name="knowledge_expertise" value="3" required />
                                    OK
                                </label>
                                <label for="ke_fair" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_fair" name="knowledge_expertise" value="2" required />
                                    Fair
                                </label>
                                <label for="ke_poor" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="ke_poor" name="knowledge_expertise" value="1" required />
                                    Poor
                                </label>
                            </div>
                        </div>

                        <!-- Leadership Abilities -->
                        <div class="mt-4">
                            <x-input-label for="leadership_abilities" :value="__('Leadership Abilities')" />
                        
                            <div class="text-sm text-justify">
                             Leadership abilities focus on an individual's capacity to guide, motivate, and influence others towards common goals. It involves assessing communication skills, decision-making capabilities, and the ability to inspire and empower team members. Factors to consider may include strategic thinking, conflict resolution skills, and leading by example.
                            </div>

                            <div class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                                <label for="la_excellent" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="la_excellent" name="leadership_abilities" value="5" required />
                                    Excellent
                                </label>
                                <label for="la_good" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="la_good" name="leadership_abilities" value="4" required />
                                    Good
                                </label>
                                <label for="la_OK" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="la_OK" name="leadership_abilities" value="3" required />
                                    OK
                                </label>
                                <label for="la_fair" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="la_fair" name="leadership_abilities" value="2" required />
                                    Fair
                                </label>
                                <label for="la_poor" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="la_poor" name="leadership_abilities" value="1" required />
                                    Poor
                                </label>
                            </div>
                        </div>

                        <!-- Teamwork and Collaboration -->
                        <div class="mt-4">
                            <x-input-label for="teamwork_collaboration" :value="__('Teamwork and Collaboration')" />
                        
                            <div class="text-sm text-justify">
                             This criterion evaluates how well an individual works with others towards shared objectives. It includes assessing communication within the team, willingness to support colleagues, and positive contributions to group dynamics. Factors to consider may include cooperation, adaptability, and fostering a collaborative work environment.
                            </div>

                            <div class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                                <label for="tc_excellent" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="tc_excellent" name="teamwork_collaboration" value="5" required />
                                    Excellent
                                </label>
                                <label for="tc_good" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="tc_good" name="teamwork_collaboration" value="4" required />
                                    Good
                                </label>
                                <label for="tc_OK" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="tc_OK" name="teamwork_collaboration" value="3" required />
                                    OK
                                </label>
                                <label for="tc_fair" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="tc_fair" name="teamwork_collaboration" value="2" required />
                                    Fair
                                </label>
                                <label for="tc_poor" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="tc_poor" name="teamwork_collaboration" value="1" required />
                                    Poor
                                </label>
                            </div>
                        </div>

                        <!-- Work Ethic and Dedication -->
                        <div class="mt-4">
                            <x-input-label for="work_ethic_dedication" :value="__('Work Ethic and Dedication')" />
                        
                            <div class="text-sm text-justify">
                             Work ethic and dedication assess an individual's commitment, reliability, and diligence in fulfilling responsibilities. It involves evaluating punctuality, quality of work produced, and going beyond expectations when necessary. Factors to consider may include time management skills, attention to detail, and consistency in meeting deadlines.
                            </div>

                            <div class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                                <label for="wed_excellent" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="wed_excellent" name="work_ethic_dedication" value="5" required />
                                    Excellent
                                </label>
                                <label for="wed_good" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="wed_good" name="work_ethic_dedication" value="4" required />
                                    Good
                                </label>
                                <label for="wed_OK" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="wed_OK" name="work_ethic_dedication" value="3" required />
                                    OK
                                </label>
                                <label for="wed_fair" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="wed_fair" name="work_ethic_dedication" value="2" required />
                                    Fair
                                </label>
                                <label for="wed_poor" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="wed_poor" name="work_ethic_dedication" value="1" required />
                                    Poor
                                </label>
                            </div>
                        </div>

                        <!-- Overall Contribution to the Team -->
                        <div class="mt-4">
                            <x-input-label for="overall_contribution_to_team" :value="__('Overall Contribution to the Team')" />
                        
                            <div class="text-sm text-justify">
                             The overall contribution assesses the holistic impact of an individual's efforts on team success. It considers how effectively the individual's work aligns with team goals, enhances productivity, and contributes positively to the work environment. Factors may include initiative-taking, problem-solving contributions, and supporting team objectives effectively.
                            </div>

                            <div class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                                <label for="octt_excellent" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="octt_excellent" name="overall_contribution_to_team" value="5" required />
                                    Excellent
                                </label>
                                <label for="octt_good" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="octt_good" name="overall_contribution_to_team" value="4" required />
                                    Good
                                </label>
                                <label for="octt_OK" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="octt_OK" name="overall_contribution_to_team" value="3" required />
                                    OK
                                </label>
                                <label for="octt_fair" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="octt_fair" name="overall_contribution_to_team" value="2" required />
                                    Fair
                                </label>
                                <label for="octt_poor" class="flex justify-center items-center gap-2">
                                    <input type="radio" id="octt_poor" name="overall_contribution_to_team" value="1" required />
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
