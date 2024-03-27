@props(['evaluation'])

<!-- Main modal -->
<div id="edit-modal-{{ $evaluation->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-5xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ $evaluation->name }}
                    </h3>
                    <h4 class="text-sm font-semibold text-gray-500 dark:text-white">
                        {{ $evaluation->position }}
                    </h4>
                </div>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="edit-modal-{{ $evaluation->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                <!-- Knowledge and Expertise -->
                <div class="">
                    <x-input-label for="knowledge_expertise" :value="__('Knowledge and Expertise')" />

                    <div class="text-sm text-justify">
                        This criterion evaluates the individual's understanding and proficiency in their role or field.
                        It assesses how well the individual applies their knowledge to tasks and stays updated on
                        relevant information. Factors to consider include problem-solving skills, technical competence,
                        and practical application of knowledge.
                    </div>

                    <div
                        class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                        <label for="ke_excellent" class="flex justify-center items-center gap-2">
                            <input type="radio" id="ke_excellent" name="knowledge_expertise" value="5"
                                required />
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
                        Leadership abilities focus on an individual's capacity to guide, motivate, and influence others
                        towards common goals. It involves assessing communication skills, decision-making capabilities,
                        and the ability to inspire and empower team members. Factors to consider may include strategic
                        thinking, conflict resolution skills, and leading by example.
                    </div>

                    <div
                        class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                        <label for="la_excellent" class="flex justify-center items-center gap-2">
                            <input type="radio" id="la_excellent" name="leadership_abilities" value="5"
                                required />
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
                        This criterion evaluates how well an individual works with others towards shared objectives. It
                        includes assessing communication within the team, willingness to support colleagues, and
                        positive contributions to group dynamics. Factors to consider may include cooperation,
                        adaptability, and fostering a collaborative work environment.
                    </div>

                    <div
                        class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                        <label for="tc_excellent" class="flex justify-center items-center gap-2">
                            <input type="radio" id="tc_excellent" name="teamwork_collaboration" value="5"
                                required />
                            Excellent
                        </label>
                        <label for="tc_good" class="flex justify-center items-center gap-2">
                            <input type="radio" id="tc_good" name="teamwork_collaboration" value="4"
                                required />
                            Good
                        </label>
                        <label for="tc_OK" class="flex justify-center items-center gap-2">
                            <input type="radio" id="tc_OK" name="teamwork_collaboration" value="3"
                                required />
                            OK
                        </label>
                        <label for="tc_fair" class="flex justify-center items-center gap-2">
                            <input type="radio" id="tc_fair" name="teamwork_collaboration" value="2"
                                required />
                            Fair
                        </label>
                        <label for="tc_poor" class="flex justify-center items-center gap-2">
                            <input type="radio" id="tc_poor" name="teamwork_collaboration" value="1"
                                required />
                            Poor
                        </label>
                    </div>
                </div>

                <!-- Work Ethic and Dedication -->
                <div class="mt-4">
                    <x-input-label for="work_ethic_dedication" :value="__('Work Ethic and Dedication')" />

                    <div class="text-sm text-justify">
                        Work ethic and dedication assess an individual's commitment, reliability, and diligence in
                        fulfilling responsibilities. It involves evaluating punctuality, quality of work produced, and
                        going beyond expectations when necessary. Factors to consider may include time management
                        skills, attention to detail, and consistency in meeting deadlines.
                    </div>

                    <div
                        class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                        <label for="wed_excellent" class="flex justify-center items-center gap-2">
                            <input type="radio" id="wed_excellent" name="work_ethic_dedication" value="5"
                                required />
                            Excellent
                        </label>
                        <label for="wed_good" class="flex justify-center items-center gap-2">
                            <input type="radio" id="wed_good" name="work_ethic_dedication" value="4"
                                required />
                            Good
                        </label>
                        <label for="wed_OK" class="flex justify-center items-center gap-2">
                            <input type="radio" id="wed_OK" name="work_ethic_dedication" value="3"
                                required />
                            OK
                        </label>
                        <label for="wed_fair" class="flex justify-center items-center gap-2">
                            <input type="radio" id="wed_fair" name="work_ethic_dedication" value="2"
                                required />
                            Fair
                        </label>
                        <label for="wed_poor" class="flex justify-center items-center gap-2">
                            <input type="radio" id="wed_poor" name="work_ethic_dedication" value="1"
                                required />
                            Poor
                        </label>
                    </div>
                </div>

                <!-- Overall Contribution to the Team -->
                <div class="mt-4">
                    <x-input-label for="overall_contribution_to_team" :value="__('Overall Contribution to the Team')" />

                    <div class="text-sm text-justify">
                        The overall contribution assesses the holistic impact of an individual's efforts on team
                        success. It considers how effectively the individual's work aligns with team goals, enhances
                        productivity, and contributes positively to the work environment. Factors may include
                        initiative-taking, problem-solving contributions, and supporting team objectives effectively.
                    </div>

                    <div
                        class="mt-2 flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center md:gap-28 text-md">
                        <label for="octt_excellent" class="flex justify-center items-center gap-2">
                            <input type="radio" id="octt_excellent" name="overall_contribution_to_team"
                                value="5" required />
                            Excellent
                        </label>
                        <label for="octt_good" class="flex justify-center items-center gap-2">
                            <input type="radio" id="octt_good" name="overall_contribution_to_team" value="4"
                                required />
                            Good
                        </label>
                        <label for="octt_OK" class="flex justify-center items-center gap-2">
                            <input type="radio" id="octt_OK" name="overall_contribution_to_team" value="3"
                                required />
                            OK
                        </label>
                        <label for="octt_fair" class="flex justify-center items-center gap-2">
                            <input type="radio" id="octt_fair" name="overall_contribution_to_team" value="2"
                                required />
                            Fair
                        </label>
                        <label for="octt_poor" class="flex justify-center items-center gap-2">
                            <input type="radio" id="octt_poor" name="overall_contribution_to_team" value="1"
                                required />
                            Poor
                        </label>
                    </div>
                </div>

                <!-- Comments -->
                <div class="mt-4">
                    <x-input-label for="comments" :value="__('Comments')" />
                    <x-text-area id="comments" class="block mt-1 w-full" name="comments" :value="$evaluation->comments"
                        required />
                    <x-input-error :messages="$errors->get('comments')" class="mt-2" />
                </div>

                <!-- Recommendations -->
                <div class="mt-4">
                    <x-input-label for="recommendations" :value="__('Recommendations')" />
                    <x-text-area id="recommendations" class="block mt-1 w-full" name="recommendations"
                        :value="$evaluation->recommendations" required />
                    <x-input-error :messages="$errors->get('recommendations')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">

                    <button href="{{ route('user.evaluations.index') }}"
                        class="ms-4 inline-flex items-center px-4 py-2 bg-gray-500 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-500 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-500 transition ease-in-out duration-150 cursor-pointer"
                        data-modal-hide="edit-modal-{{ $evaluation->id }}">
                        Cancel
                    </button>

                    <x-edit-button class="ms-4">
                        {{ __('Edit') }}
                    </x-edit-button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
