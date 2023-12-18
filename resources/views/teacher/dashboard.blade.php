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
                <h1 class="text-2xl font-semibold">Mentor Dashboard</h1>
            </div>
            <a href="{{ route('teacher-profile') }}">
                <div
                    class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                    <x-heroicon-o-user class="w-6 h-6" />
                    <span class="font-medium hidden lg:block">Alfred Pennyworth</span>
                </div>
            </a>
        </nav>
        <div class="px-12 py-8">
            <h1 class="text-2xl font-medium mb-6">Latest Updates</h1>
        </div>
    </div>
</body>

</html>
