<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    {{-- https://play.tailwindcss.com/OALEGZbSEE --}}
    <form class="absolute bottom-8 right-8 flex flex-col rounded-lg border bg-white dark:bg-zinc-800">
        <textarea placeholder="Feedback?" rows="3" minlength="3"
            class="peer h-12 w-64 resize-none border-0 bg-transparent p-2 text-sm transition-all duration-100 placeholder-shown:h-9 placeholder-shown:w-24 focus:h-12 focus:w-64 focus:outline-none dark:text-white"></textarea>
        <div
            class="flex justify-between overflow-hidden p-2 text-sm font-medium opacity-100 transition-all duration-100 peer-placeholder-shown:h-0 peer-placeholder-shown:w-0 peer-placeholder-shown:p-0 peer-placeholder-shown:opacity-100 peer-focus:flex peer-focus:h-auto peer-focus:w-auto peer-focus:p-2 peer-focus:opacity-100">
            <a href="#" class="rounded-md bg-gray-100 py-1 px-2 dark:bg-zinc-900 dark:text-white">Cancel</a>
            <input type="submit" value="Send feedback"
                class="cursor-pointer rounded-md bg-blue-500 py-1 px-2 text-white hover:bg-blue-400 dark:hover:bg-blue-600" />
        </div>
    </form>
</body>

</html>
