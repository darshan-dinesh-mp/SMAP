<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    {{-- <div class="px-0 lg:px-12">
        <div class="">
            <nav class="px-4 lg:px-0 w-full flex items-center justify-between py-4">
                <div class="-space-y-3">
                    <h1 class="flex items-center justify-center space-x-2 text-2xl font-medium">
                        <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                        <span>
                            Profile
                        </span>
                    </h1>
                </div>
            </nav>
            <div
                class="rounded-none lg:rounded-xl bg-cover bg-[url(https://images.unsplash.com/photo-1634814516913-a0e237050d77?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]">
                <div class="h-48 lg:h-64 relative">
                    <div class="absolute left-3 lg:left-12 -bottom-16 lg:-bottom-24 flex items-end space-x-3">
                        <img class="w-28 lg:w-40 h-28 lg:h-40 object-cover rounded-xl lg:rounded-3xl border-2 lg:border-4"
                            src="https://images.unsplash.com/photo-1517849845537-4d257902454a?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                        <div class="-space-y-1">
                            <h1 class="font-semibold text-2xl lg:text-3xl ">Delbin George</h1>
                            <h2 class="font-medium text-sm lg:text-lg text-black/50">nuasdlkfasljdajaslk</h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div> --}}
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1634814516913-a0e237050d77?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Cover Photo" class="w-full h-56 object-cover">
        <div class="mx-4 -mt-16 relative z-10 flex items-end">
            <div class=" overflow-hidden ">
                <img src="https://images.unsplash.com/photo-1634814516913-a0e237050d77?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Profile Picture" class="w-40 h-40 object-cover rounded-2xl">
            </div>
            <div class="mx-4 mt-4">
                <h1 class="text-2xl font-semibold text-gray-800">John Doe</h1>
                <p class="text-gray-600">Web Developer</p>
            </div>
        </div>
</body>

</html>
