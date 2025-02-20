<section class="flex flex-col items-center pt-6">
    <div
        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">{{$title}}
            </h1>
            <form class="space-y-4 md:space-y-6" @if($editMode) wire:submit="updateUser"
                  @else wire:submit="createUser" @endif>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your full
                        name</label>
                    <input type="text" wire:model.live="name" id="name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Emelia Erickson">
                    <div>
                        @error('name')
                           <p class="text-rose-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                    <input type="text" wire:model.live="email" id="email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="email">
                    <div>
                        @error('email')
                        <p class="text-rose-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" wire:model.live="password" id="password" placeholder="••••••••"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <div>
                        @error('password')
                        <p class="text-rose-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                @if($editMode)
                    <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        update
                    </button>
                @else
                    <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Create an account
                    </button>
                @endif

                <p class="text-sm font-light text-gray-500 dark:text-gray-400">Already have an account? <a
                        class="font-medium text-blue-600 hover:underline dark:text-blue-500" href="/signin">Sign in
                        here</a>
                </p>
            </form>
        </div>
    </div>
</section>
