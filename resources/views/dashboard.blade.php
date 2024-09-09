<x-app-layout>
    <aside
        class="sticky top-0 flex flex-col px-4 py-8 bg-white border-r w-fit h-svh max-w-64 rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <img class="mx-auto size-6 sm:size-8" src="{{ asset('logo.png') }}" alt="logo">

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a class="flex items-center justify-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md sm:justify-start dark:bg-gray-800 dark:text-gray-200"
                    href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="hidden mx-4 font-medium sm:block">Dashboard</span>
                </a>

                <a class="flex items-center justify-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md sm:justify-start dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="hidden mx-4 font-medium sm:block">Accounts</span>
                </a>

                <hr class="my-6 border-gray-200 dark:border-gray-600" />

                <a class="flex items-center justify-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md sm:justify-start dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="{{ route('logout') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>

                    <span class="hidden mx-4 font-medium sm:block">Logout</span>
                </a>

                <button type="button"
                    class="flex items-center justify-center w-full px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md sm:justify-start dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    @click="isDark = !isDark">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5" x-show="isDark" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5" x-show="!isDark" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>

                    <span class="hidden mx-4 font-medium sm:block">Theme</span>
                </button>
            </nav>

            <a href="#" class="flex items-center px-4 -mx-2">
                <img class="object-cover mx-2 rounded-full h-9 w-9" src="{{ asset('avatar.png') }}" alt="avatar" />
                <span class="hidden mx-2 font-medium text-gray-800 dark:text-gray-200 sm:block">{{ auth()->user()->name
                    }}</span>
            </a>
        </div>
    </aside>
    <main class="flex flex-col flex-1 px-6 gap-x-8 lg:flex-row" x-data="{
        allTodos: {{ auth()->user()->todos }},
        get incompleteTodos() {
            return this.allTodos.filter(todo => !todo.is_completed)
        },
        get completedTodos() {
            return this.allTodos.filter(todo => todo.is_completed)
        },
        async deleteTodo(id) {
            const response = await fetch('/todo/' + id, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ @csrf_token() }}'
                }
            })
            if (response.ok) {
                Swal.fire({
                    title: 'Todo succesfully deleted',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
                this.allTodos = this.allTodos.filter(todo => todo.id !== id)
            } else {
                Swal.fire({
                    title: 'Todo not deleted',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            }
        },
        async addTodo(todoData) {
            const response = await fetch('/todo', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ @csrf_token() }}'
                },
                body: JSON.stringify(todoData)
            })
            if (response.ok) {
                Swal.fire({
                    title: 'Todo added',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
                const newTodo = await response.json()
                this.allTodos.push(newTodo)
            } else {
                const result = await response.json()
                Swal.fire({
                    title: 'Todo failed to add, ' + result.message,
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            }
        }
    }">
        <div class="flex-1 overflow-y-auto h-svh no-scrollbar">
            <h1 class="my-4">Todolist</h1>
            <template x-for="todo in incompleteTodos" :key="todo.id">
                <div class="flex flex-col items-start px-3 py-3 my-6 border rounded-sm dark:border-gray-700">
                    <label x-bind:for="'todo-' + todo.id"
                        class="flex cursor-pointer items-center gap-2 font-medium text-slate-700 dark:text-slate-300 [&:has(input:checked)]:text-black dark:[&:has(input:checked)]:text-white [&:has(input:disabled)]:opacity-75 [&:has(input:disabled)]:cursor-not-allowed">
                        <div class="relative flex items-center">
                            <input x-bind:id="'todo-' + todo.id" type="checkbox"
                                class="before:content[''] peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-slate-300 bg-slate-100 before:absolute before:inset-0 checked:border-blue-700 checked:before:bg-blue-700 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-blue-700 active:outline-offset-0 disabled:cursor-not-allowed dark:border-slate-700 dark:bg-slate-800 dark:checked:border-blue-600 dark:checked:before:bg-blue-600 dark:focus:outline-slate-300 dark:checked:focus:outline-blue-600"
                                aria-describedby="todoDescription" x-model="todo.is_completed"
                                x-bind:checked="todo.is_completed" />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                stroke="currentColor" fill="none" stroke-width="4"
                                class="absolute invisible -translate-x-1/2 -translate-y-1/2 pointer-events-none left-1/2 top-1/2 size-3 text-slate-100 peer-checked:visible dark:text-slate-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <h3 x-text="todo.title"></h3>
                    </label>
                    <span id="todoDescription" class="mt-2 ml-6 text-slate-700 dark:text-slate-300"
                        x-text="todo.description">
                    </span>
                    <div class="flex mt-3">
                        <button type="button" @click='deleteTodo(todo.id)'>Delete</button>
                    </div>
                </div>
            </template>
        </div>
        <div class="flex-1 overflow-y-auto h-svh no-scrollbar">
            <div class="flex flex-col items-center justify-center my-8" x-data="{
                    todoData: {
                        title: '',
                        description: '',
                        is_completed: false,
                        user_id: {{ auth()->user()->id }}
                    },
                    isShow: false
                }">
                <button type="button" @click="isShow = !isShow"
                    class="w-1/2 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Add Todo
                </button>
                <form @submit.prevent="addTodo(todoData); isShow=false" class="w-full my-4 space-y-4" x-show="isShow"
                    x-cloak>
                    <div>
                        <label for="title" class="block text-gray-500 dark:text-gray-300">Title</label>
                        <input required type="text" placeholder="Title" x-model="todoData.title"
                            class="block  mt-2 w-full placeholder-gray-400/70 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />
                    </div>
                    <div>
                        <label for="description" class="block text-gray-500 dark:text-gray-300">Description</label>
                        <textarea required x-model="todoData.description" placeholder="Description" rows="auto"
                            class="block  mt-2 w-full placeholder-gray-400/70 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"></textarea>
                    </div>
                    <div class="flex justify-between gap-x-6">
                        <button type="button" @click="isShow = false"
                            class="w-1/2 px-6 py-2 font-medium tracking-wide capitalize transition-colors duration-300 transform rounded-lg text-slate-700 bg-slate-100 hover:bg-slate-200 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Cancel
                        </button>
                        <button
                            class="w-1/2 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Add Todo
                        </button>
                    </div>
                </form>
            </div>
            <h1 class="my-4">Complete Todolist</h1>
            <template x-for="todo in completedTodos" :key="todo.id">
                <div class="flex flex-col items-start px-3 py-3 my-6 border rounded-sm dark:border-gray-700">
                    <label x-bind:for="'todo-' + todo.id"
                        class="flex cursor-pointer items-center gap-2 font-medium text-slate-700 dark:text-slate-300 [&:has(input:checked)]:text-black dark:[&:has(input:checked)]:text-white [&:has(input:disabled)]:opacity-75 [&:has(input:disabled)]:cursor-not-allowed">
                        <div class="relative flex items-center">
                            <input x-bind:id="'todo-' + todo.id" type="checkbox"
                                class="before:content[''] peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-slate-300 bg-slate-100 before:absolute before:inset-0 checked:border-blue-700 checked:before:bg-blue-700 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-blue-700 active:outline-offset-0 disabled:cursor-not-allowed dark:border-slate-700 dark:bg-slate-800 dark:checked:border-blue-600 dark:checked:before:bg-blue-600 dark:focus:outline-slate-300 dark:checked:focus:outline-blue-600"
                                aria-describedby="todoDescription" x-model="todo.is_completed"
                                x-bind:checked="todo.is_completed" />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                stroke="currentColor" fill="none" stroke-width="4"
                                class="absolute invisible -translate-x-1/2 -translate-y-1/2 pointer-events-none left-1/2 top-1/2 size-3 text-slate-100 peer-checked:visible dark:text-slate-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <h3 class="line-through" x-text="todo.title"></h3>
                    </label>
                    <div class="flex mt-3">
                        <button type="button" @click='deleteTodo(todo.id)'>Delete</button>
                    </div>
                </div>
            </template>
        </div>
    </main>
</x-app-layout>