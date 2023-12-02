<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="flex lg:flex-row flex-col">
        <div class="w-full lg:w-2/4 min-h-screen relative flex items-end justify-start px-8 lg:px-16">
            <img src="images/background.png" class="h-full object-cover absolute top-0 left-0 -z-30" alt="">
            <div
                class="h-full w-full left-0 top-0 bg-gradient-to-r from-black/30 via-black/10 to-transparent -z-30 absolute">
            </div>
            <div class="pb-12 text-light">
                <div class="-space-y-1 mb-3">
                    <h2 class="font-medium text-xl">Welcome to</h2>
                    <h1 class="font-medium text-4xl">Student Mentorship App</h1>
                </div>
                <p class=" mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="">
                    <a href="#login-screen" class="font-mono lg:hidden flex items-center space-x-2">Login to your
                        <span>
                            account
                        </span>
                        <x-heroicon-m-chevron-right class="h-5 w-5" />
                        {{-- <x-heroicon-o-arrow-right  /> --}}
                    </a>
                </div>
            </div>
        </div>
        <form id="login-screen"
            class="flex items-center justify-center min-h-screen flex-col w-full lg:w-2/4 space-y-6">
            <div class="flex flex-col items-center -space-y-3 justify-center">
                <h2 class="text-[1.3rem]">Student/Staff Login</h2>
                <h1 class="text-[3rem] font-medium"> Get Started! </h1>
            </div>
            <div class="flex flex-col w-[85%] lg:w-3/4">
                <label for="email" class="label">Email Address</label>
                <input type="mail" class="input-fields" placeholder="nnm2xmcxxx@nmamit.in">
            </div>
            <div class="flex flex-col w-[85%] lg:w-3/4">
                <label for="password" class="label">Password</label>
                <input type="password" class="input-fields" placeholder="*****************">
            </div>
            <input type="button"
                class="text-[1.35rem] bg-primary w-[85%] lg:w-3/4 text-light py-3 px-24 rounded-lg hover:bg-primary/90 cursor-pointer duration-300 font-medium"
                value="Login">

        </form>
    </div>

</body>

</html>
