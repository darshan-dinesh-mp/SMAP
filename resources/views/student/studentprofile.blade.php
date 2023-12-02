<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <div class="px-4 lg:px-12">
            <nav class="w-full flex items-center justify-between py-4">
                <div class="-space-y-3">
                    <h1 class="flex items-center justify-center space-x-2 text-2xl font-medium">
                        <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                        <span>
                            Profile
                        </span>
                    </h1>
                </div>
            </nav>
            <div class="min-h-[48vh]">
                <div
                    class="rounded-xl relative bg-[url(https://images.unsplash.com/photo-1634814516913-a0e237050d77?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover py-32 h-2/4">
                    <div class="absolute left-12 -bottom-20 z-10 flex items-end space-x-4">
                        <img class="w-40 h-40 object-cover rounded-3xl border-4"
                            src="https://images.unsplash.com/photo-1517849845537-4d257902454a?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                        <div class="-space-y-1">
                            <h1 class="text-3xl font-semibold">Delbin George</h1>
                            <h2 class="text-xl text-black/40 font-semibold">nu23mca28@nmamit.in</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-3">
                <div class="space-y-1">
                    <h1 class="font-semibold tracking-widest text-black/70">ABOUT ME</h1>
                    <p class="text-lg">Passionate MCA student, coding enthusiast. Thrives
                        on crafting elegant solutions. Constant learner
                        embracing tech's limitless possibilities. 😋</p>
                </div>
                <div class="space-y-4">
                    <h1 class="font-semibold tracking-widest text-black/70">INTERESTS & HOBBIES</h1>
                    <div class="space-x-2">
                        <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Programming</span>
                        <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Dancing</span>
                        <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Reading</span>
                        <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Traveling</span>
                        <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Photography</span>
                        <span class="text-md bg-black/10 py-2 px-4 rounded-lg text-center">Gaming</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
