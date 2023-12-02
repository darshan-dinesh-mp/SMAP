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
                <h1 class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                    <span>
                        Profile
                    </span>
                </h1>
            </div>
        </nav>
        <img src="https://images.unsplash.com/photo-1634814516913-a0e237050d77?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Cover Photo" class="w-full rounded-none lg:rounded-xl h-64 object-cover">
        <div class="mx-3 lg:mx-8 -mt-20 relative z-10 flex items-end">
            <div class=" overflow-hidden ">
                <img src="https://www.delb.in/assets/DelbinGeorge-22bfff80.webp" alt="Profile Picture"
                    class="w-40 h-40 object-cover border-4 rounded-2xl">
            </div>
            <div class="mx-4 mt-4">
                <h1 class="text-xl lg:text-3xl font-semibold">Delbin George</h1>
                <p class="text-md lg:text-xl text-gray-600">nnm23mc036@nmamit.in</p>
            </div>
        </div>
        <div class="space-y-3 mt-4 lg:mt-8 px-4 lg:px-0">
            <div class="space-y-1">
                <h1 class="font-semibold tracking-widest text-black/70">ABOUT ME</h1>
                <p class="text-lg">Passionate MCA student, coding enthusiast. Thrives
                    on crafting elegant solutions. Constant learner
                    embracing tech's limitless possibilities. 😋</p>
            </div>
        </div>
</body>

</html>
