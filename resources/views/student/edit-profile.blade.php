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
        <div class="mx-3 lg:mx-8 -mt-20 relative z-10 flex items-end">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1554780336-390462301acf?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Profile Picture" class="w-40 h-40 object-cover border-4 rounded-2xl">
                <div class="p-3 bottom-3 right-3 bg-light cursor-pointer text-primary hover:bg-secondary absolute z-10 rounded-full">
                    <x-heroicon-s-camera class="w-6 h-6" />
                </div>
            </div>
            <div class="flex items-end justify-between w-[60%] md:w-[90%]">
                <div class="mx-4 mt-4">
                    <h1 class="text-xl lg:text-3xl font-semibold">Rakshitha M</h1>
                    <p class="text-md lg:text-xl text-gray-600">nnm23mc111@nmamit.in</p>
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
        </form>
</body>

</html>
