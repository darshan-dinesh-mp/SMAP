<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="relative px-0 lg:px-12">
        <nav class=" w-full flex items-center justify-between px-4 lg:px-0 py-4">
            <div class="-space-y-3">
                <a href="{{ route('student-profile') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                    <span>
                        Edit Profile
                    </span>
                </a>
            </div>
        </nav>
        <img src="images/background.png" alt="Cover Photo" class="w-full rounded-none lg:rounded-xl h-64 object-cover">
        <div class="mx-3 lg:mx-8 -mt-12 lg:-mt-20 relative z-10 flex items-end">
            <div class="relative">
                <img src="https://i.pinimg.com/originals/dd/2c/d9/dd2cd97e17455c5612de4ef815734ea8.jpg"
                    {{-- src="https://images.unsplash.com/photo-1554780336-390462301acf?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" --}} alt="Profile Picture"
                    class="w-28 lg:w-40 h-28 lg:h-40 object-cover border-4 rounded-2xl">
                <div class="relative">
                    <input type="file" id="fileInput" class="hidden" />
                    <label for="fileInput"
                        class="p-2 lg:p-3 bottom-3 right-3 bg-light cursor-pointer text-primary hover:bg-secondary absolute z-10 rounded-full">
                        <x-heroicon-s-camera class="w-5 lg:w-6 h-5 lg:h-6" />
                    </label>
                </div>

            </div>
            <div class="flex items-end justify-between w-[60%] md:w-[90%]">
                <div class="mx-3 -space-y-2 lg:space-y-0 lg:mx-4 mt-4">
                    <h1 class="text-2xl lg:text-3xl font-semibold">Bruce Wayne(Teacher)</h1>
                    <p class="text-lg lg:text-xl text-gray-600">nnm23mc000@nmamit.in</p>
                </div>
            </div>
        </div>
        <form class="space-y-3 mt-4 lg:mt-8 px-4 lg:px-0 pb-8">
            <div class="space-y-1">
                <h1 class="font-semibold tracking-widest text-black/70">ABOUT ME</h1>
                <input type="text" class="py-3 px-2 w-full rounded-lg bg-dark/10"
                    placeholder="Passionate MCA student, coding enthusiast. Thrives on crafting elegant solutions. Constant learner embracing tech's limitless possibilities. 😋">
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">INTERESTS & SKILLS</h1>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Programming
                        </span>
                        <x-heroicon-m-x-mark class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Dancing
                        </span>
                        <x-heroicon-m-x-mark class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Reading
                        </span>
                        <x-heroicon-m-x-mark class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Traveling
                        </span>
                        <x-heroicon-m-x-mark class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Photography </span>
                        <x-heroicon-m-x-mark class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Gaming </span>
                        <x-heroicon-m-x-mark class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                </div>
                <h1 class="font-semibold tracking-widest text-black/70">ADD NEW</h1>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Programming
                        </span>
                        <x-heroicon-m-plus class="w-5 h-5 hover:text-red-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Dancing
                        </span>
                        <x-heroicon-m-plus class="w-5 h-5 hover:text-green-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Reading
                        </span>
                        <x-heroicon-m-plus class="w-5 h-5 hover:text-green-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Traveling
                        </span>
                        <x-heroicon-m-plus class="w-5 h-5 hover:text-green-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Photography </span>
                        <x-heroicon-m-plus class="w-5 h-5 hover:text-green-600 cursor-pointer" />
                    </span>
                    <span
                        class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>
                            Gaming </span>
                        <x-heroicon-m-plus class="w-5 h-5 hover:text-green-600 cursor-pointer" />
                    </span>
                </div>
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">PROJECTS</h1>
                <ul class="list-inside list-disc space-y-2">
                    <li class="py-3 px-2 w-full rounded-lg bg-dark/10">Fitness App using Flutter</li>
                    <input type="text" class="py-3 px-2 w-full rounded-lg bg-dark/10"
                        placeholder="Add new project here!">
                </ul>
            </div>
            <div class="space-x-4 w-full flex items-end justify-end">
                <input type="button" value="Discard"
                    class="text-md bg-secondary w-[85%] lg:w-56 py-3 rounded-lg border-[2px] text-primary border-primary cursor-pointer duration-300 font-medium">
                <input type="button" value="Save"
                    class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
            </div>
        </form>
</body>

</html>