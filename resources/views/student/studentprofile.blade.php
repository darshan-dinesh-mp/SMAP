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
                <a href="{{ route('dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                    <span>
                        Profile
                    </span>
                </a>
            </div>
        </nav>
        <img src="images/background.png" alt="Cover Photo" class="w-full rounded-none lg:rounded-xl h-64 object-cover">
        <div class="mx-3 lg:mx-8 -mt-12 lg:-mt-20 relative z-10 flex items-end ">
            <div class=" overflow-hidden ">
                <img src="https://images.unsplash.com/photo-1554780336-390462301acf?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Profile Picture" class="w-28 lg:w-40 h-28 lg:h-40 object-cover border-4 rounded-2xl">
            </div>
            <div class="flex items-end justify-between w-[60%] md:w-[90%]">
                <div class="mx-4 mt-4">
                    <h1 class="text-xl lg:text-3xl font-semibold">Rakshitha M</h1>
                    <p class="text-md lg:text-xl text-gray-600">nnm23mc111@nmamit.in</p>
                </div>
                <a href="{{ route('edit-profile') }}"
                    class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                    <x-heroicon-m-pencil-square class="w-6 h-6" />
                    {{-- <span class="font-medium">Edit Profile</span> --}}
                </a>
            </div>
        </div>
        <div class="space-y-3 mt-4 lg:mt-8 px-4 lg:px-0 pb-8">
            <div class="space-y-1">
                <h1 class="font-semibold tracking-widest text-black/70">ABOUT ME</h1>
                <p class="text-lg">Passionate MCA student, coding enthusiast. Thrives
                    on crafting elegant solutions. Constant learner
                    embracing tech's limitless possibilities. 😋</p>
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">INTERESTS & SKILLS</h1>
                <div class="flex flex-wrap gap-2">
                    <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Programming</span>
                    <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Dancing</span>
                    <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Reading</span>
                    <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Traveling</span>
                    <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Photography</span>
                    <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Gaming</span>
                </div>
            </div>

            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">PROJECTS</h1>
                <ul class="list-inside list-disc">
                    <li>Fitness App using Flutter</li>
                    <li>Fitness App using Flutter</li>
                </ul>
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">OBJECTIVES</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full">
                    <div
                        class="flex items-center justify-start cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                        <x-heroicon-o-clock
                            class="w-7 h-7 group-hover:rotate-[30deg] group-hover:text-[#ffd000] duration-300" />
                        <h1 class="font-medium text-xl group-hover:text-dark/80">Complete your profile!</h1>
                    </div>
                    <div
                        class="flex items-center justify-start cursor-not-allowed group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                        <x-heroicon-s-lock-closed class="w-7 h-7 text-black/30" />
                        <h1 class="font-medium text-xl text-dark/30">Update first MSE Marks</h1>
                    </div>
                    <div
                        class="flex items-center justify-start cursor-not-allowed group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                        <x-heroicon-s-lock-closed class="w-7 h-7 text-black/30" />
                        <h1 class="font-medium text-xl text-dark/30">Update second MSE Marks</h1>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
