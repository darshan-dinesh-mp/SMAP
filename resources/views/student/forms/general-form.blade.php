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


        <div>
            <h1 class="font-semibold tracking-widest text-black/70">MENTOR INFO</h1>
            <div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">Name of Mentor:</span>
                    <span class="font-semibold">Harshitha</span>
                </div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">Designation:</span>
                    <span class="font-semibold">Assistant Professor</span>
                </div>
            </div>
        </div>

        <div>
            <h1 class="font-semibold tracking-widest text-black/70">STUDENT INFO</h1>
            <div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">Full Name:</span>
                    <span class="font-semibold">Rakshitha M</span>
                </div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">USN:</span>
                    <span class="font-semibold">NNM23MC111</span>
                </div>
            </div>
        </div>

        <div>
            <h1 class="font-semibold tracking-widest text-black/70">PERFORMANCE ENQUIRY</h1>

            <form class="flex flex-col text-xl">
                <div>
                    <div>
                        <p class="font-medium">Are you having any difficulty in understanding
                            the concepts? If so give details.</p>
                        <input type="text" class="input border-b-2 border-primary py-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <input type="text" class="input border-b-2 border-primary py-2"
                            placeholder="type your text here. ">
                    </div>
                    <p class="font-medium">State of the issue</p>
                    <div class="flex space-x-4">
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Solved" id="issue">
                            <label class="text-md font-medium" for="Solved">Solved</label>
                        </div>
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Not Solved" id="issue">
                            <label class="text-md font-medium" for="Not Solved">Not Solved</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
