<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <nav class="w-full flex items-center justify-between py-4 shadow-md px-12">
            <div class="-space-y-3">
                <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
            </div>
            <div class="flex items-center justify-center space-x-5">
                {{-- <div
                    class="text-primary border-2 hover:bg-secondary duration-200 cursor-pointer flex items-center justify-center rounded-full p-3">
                    <x-heroicon-o-user class="w-6 h-6" />
                    <span class="text-lg">NNM23MC111</span>
                </div> --}}
                <a href="{{ route('logout') }}"
                    class="text-primary hover:bg-secondary border-2 group hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-3 space-x-1">
                    <x-feathericon-log-out class="w-6 h-6 group-hover:translate-x-1 duration-300" />
                    {{-- <span class="font-medium">Edit Profile</span> --}}
                </a>
            </div>
        </nav>
        <div class="px-12 py-8">
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Add Facutlies
                </h1>
                <div class="flex items-center justify-center text-white rounded-xl bg-green-400 py-2 px-4">
                    <x-feathericon-plus class="w-6 h-6" />
                    <span class="text-xl">Add</span>
                </div>
            </div>
            <div>
                <h1 class="text-2xl font-medium">All Facutlies</h1>
                <div class="odd:bg-secondary">
                    <div class="flex items-center justify-between bg-black/10 py-4 px-3">
                        <h1 class="text-lg">Name</h1>
                        <h1 class="text-lg">Actions</h1>
                    </div>
                    <div class="flex items-center justify-between py-4 px-3">
                        <h1 class="text-lg">Barry Allen</h1>
                        <div>
                            <x-feathericon-edit class="w-5 h-5" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-4 px-3">
                        <h1 class="text-lg">Barry Allen</h1>
                        <div>
                            <x-feathericon-edit class="w-5 h-5" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
