<div class="flex justify-center items-center ">


    <div class="flex flex-col">
        <div class=" overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="relative  text-gray-500 focus-within:text-gray-900 mb-4">
                    <div class="absolute inset-y-0 left-1 flex items-center pl-3 pointer-events-none ">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5 17.5L15.4167 15.4167M15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333C11.0005 15.8333 12.6614 15.0929 13.8667 13.8947C15.0814 12.6872 15.8333 11.0147 15.8333 9.16667Z"
                                stroke="#9CA3AF" stroke-width="1.6" stroke-linecap="round"/>
                            <path
                                d="M17.5 17.5L15.4167 15.4167M15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333C11.0005 15.8333 12.6614 15.0929 13.8667 13.8947C15.0814 12.6872 15.8333 11.0147 15.8333 9.16667Z"
                                stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round"/>
                            <path
                                d="M17.5 17.5L15.4167 15.4167M15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333C11.0005 15.8333 12.6614 15.0929 13.8667 13.8947C15.0814 12.6872 15.8333 11.0147 15.8333 9.16667Z"
                                stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <input type="text" id="default-search"
                           class="block w-80 h-11 pr-5 pl-12 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                           placeholder="Search for company">
                </div>

                <livewire:users.create-user @user-created="$refresh" />


                <div class="overflow-hidden ">
                    <table class=" min-w-full rounded-xl">
                        <thead>
                        <tr class="bg-gray-50">
                            <th scope="col"
                                class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">
                                name
                            </th>
                            <th scope="col"
                                class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> email
                            </th>

                            <th scope="col"
                                class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300 ">
                        @foreach($users as $user)
                            <livewire:users.user-item wire:key="user-{{$user->id}}" :user="$user" @user-deleted="$refresh" />
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
