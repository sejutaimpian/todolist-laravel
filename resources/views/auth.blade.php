<x-app-layout title="Login/Register Todolist Laravel">
    <section class="bg-white dark:bg-gray-900" x-data="{
        page: '{{ request()->query('page') === 'sign-up' ? 'sign-up' : 'sign-in' }}',
        setPage(page) {
            if ('URLSearchParams' in window) {
                const url = new URL(window.location)
                url.searchParams.set('page', page)
                history.pushState(null, '' , url);
            }
            
            this.page=page 
        } 
    }">
        <div class="container flex flex-col items-center justify-center min-h-screen px-6 mx-auto">
            <div class="w-full max-w-md">
                <div class="flex justify-center mx-auto">
                    <img class="w-auto h-7 sm:h-8" src="{{ asset('logo.png') }}" alt="Logo Todolist Laravel">
                </div>
                <div class="flex items-center justify-center mt-6">
                    <button type="button"
                        x-bind:class="page === 'sign-in' ? 'text-gray-800 border-b-2 border-blue-500 dark:border-blue-400 dark:text-white' : 'dark:border-gray-400 dark:text-gray-300 border-b text-gray-500'"
                        class="w-1/3 pb-4 font-medium text-center  capitalize" @click="setPage('sign-in')">
                        sign in
                    </button>

                    <button type="button" class="w-1/3 pb-4 font-medium text-center  capitalize"
                        x-bind:class="page === 'sign-up' ? 'text-gray-800 border-b-2 border-blue-500 dark:border-blue-400 dark:text-white' : 'dark:border-gray-400 dark:text-gray-300 border-b text-gray-500'"
                        @click="setPage('sign-up')">
                        sign up
                    </button>
                </div>
                @if (session('success'))
                <div class="w-full text-slate-800 bg-blue-200 flex items-center justify-between px-4 py-2 rounded mt-2"
                    x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                    <div class="flex">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                            <path
                                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z">
                            </path>
                        </svg>

                        <p class="mx-3">Your account has been created.</p>
                    </div>

                    <button @click="show = false"
                        class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                @endif
            </div>
            {{-- Sign Up --}}
            <form class="w-full max-w-md" x-cloak x-show="page === 'sign-up'" action="{{ route('signup') }}"
                method="POST">
                @csrf
                <div class="relative flex items-center mt-8">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>

                    <input type="text" name="name" required value="{{ old('name') }}"
                        class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        placeholder="Name">
                </div>
                @error('name')
                <div class="text-red-500 text-xs italic mt-1">{{ $message }}</div>
                @enderror
                <div class="relative flex items-center mt-4">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>

                    <input type="email" name="email" required value="{{ old('email') }}"
                        class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        placeholder="Email address">
                </div>
                @error('email')
                <div class="text-red-500 text-xs italic mt-1">{{ $message }}</div>
                @enderror
                <div class="relative flex items-center mt-4">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>

                    <input type="password" name="password" required
                        class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        placeholder="Password">
                </div>
                @error('password')
                <div class="text-red-500 text-xs italic mt-1">{{ $message }}</div>
                @enderror
                <div class="relative flex items-center mt-4">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>

                    <input type="password" name="password_confirmation" required
                        class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        placeholder="Confirm Password">
                </div>

                <div class="mt-6">
                    <button
                        class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Sign Up
                    </button>

                    <div class="mt-6 text-center">
                        <button type="button" class="text-sm text-blue-500 hover:underline dark:text-blue-400"
                            @click="setPage('sign-in')">
                            Already have an account? Sign In
                        </button>
                    </div>
                </div>
            </form>
            {{-- Sign In --}}
            <form class="w-full max-w-md" x-cloak x-show="page === 'sign-in'" action="{{ route('signin') }}"
                method="POST">
                @csrf
                <div class="relative flex items-center mt-6">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>

                    <input type="email" required name="email"
                        class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        placeholder="Email address" value="{{ old('email') }}">
                </div>
                @error('email')
                <div class="text-red-500 text-xs italic mt-1">{{ $message }}</div>
                @enderror

                <div class="relative flex items-center mt-4">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>

                    <input type="password" required name="password"
                        class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        placeholder="Password">
                </div>
                @error('password')
                <div class="text-red-500 text-xs italic mt-1">{{ $message }}</div>
                @enderror

                <div class="mt-6">
                    <button
                        class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Sign In
                    </button>

                    <div class="mt-6 text-center ">
                        <button type="button" class="text-sm text-blue-500 hover:underline dark:text-blue-400"
                            @click="setPage('sign-up')">
                            Don't have an account yet? Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>