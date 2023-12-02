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
                        Complete your profile!
                    </span>
                </a>
            </div>
        </nav>
    </div>
</body>

</html>
