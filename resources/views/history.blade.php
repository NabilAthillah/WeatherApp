<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="@/resources/css/app.css">
    @vite('resources/css/app.css')
    <title>Weather App - History</title>
</head>

<body class="bg-blue-100">
    <div class="min-h-screen max-w-screen flex relative">
        <div class="w-80 h-screen bg-blue-400 shadow-sidebar sticky">
            <div class="py-6 px-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg class="w-16 h-16 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 3V1m0 18v-2M5.05 5.05 3.636 3.636m12.728 12.728L14.95 14.95M3 10H1m18 0h-2M5.05 14.95l-1.414 1.414M16.364 3.636 14.95 5.05M14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />
                    </svg>
                    <p class="font-bold text-white text-2xl cursor-default">Weather App</p>
                </div>
            </div>
            <div class="py-6 px-2 flex flex-col gap-5">
                <a href="/dashboard"
                    class="group flex gap-4 items-center px-4 py-4 rounded-xl hover:shadow-xl hover:bg-white transition-all duration-200">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white group-hover:text-blue-400 transition-all duration-200"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    <span
                        class="font-medium text-white text-lg group-hover:text-blue-400 transition-all duration-200">Dashboard</span>
                </a>
                <a href="/history"
                    class="group flex gap-4 items-center px-4 py-4 rounded-xl hover:shadow-xl hover:bg-white transition-all duration-200">
                    <svg class="w-8 h-8 text-gray-800 dark:text-white group-hover:text-blue-400 transition-all duration-200"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM5 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0-3a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0-3a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm10 6H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2Zm0-3H9a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Zm0-3H9a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                    </svg>
                    <span
                        class="font-medium text-white text-lg group-hover:text-blue-400 transition-all duration-200">History</span>
                </a>
            </div>
        </div>

        <div class="w-[calc(100vw-20rem)] p-10">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Suhu</th>
                    <th>Kelembapan</th>
                    <th>Lux</th>
                </tr>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->suhu}}</td>
                    <td>{{$d->kelembapan}}</td>
                    <td>{{$d->lux}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
