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
                <h2 class="text-lg font-medium">Hello(THIS IS ADMIN),</h2>
                <h1 class="text-[2rem] font-semibold">ADMIN</h1>
            </div>
            <div
                class="text-primary bg-black/10 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full p-3">
                <x-heroicon-o-user class="w-6 h-6" />
                {{-- <span class="text-lg">NNM23MC111</span> --}}
            </div>
        </nav>
        <div class="px-12 py-8">
            <h1 class="text-2xl font-medium mb-6">Latest Updates</h1>
            <div class="grid grid-cols-3 gap-6 w-full">
                <div
                    class="flex items-center justify-start cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-heroicon-s-star class="w-7 h-7 group-hover:rotate-[30deg] group-hover:text-[#ffd000] duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Update first MSE Marks!</h1>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
