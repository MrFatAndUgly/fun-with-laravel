<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body>
       <div class="text-gray-900 text-sm">
            <nav class="bg-gray-900 text-white px-4 py-3 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <a class="text-white hover:text-gray-400">
                        <svg aria-hidden="true" viewBox="0 0 24 24"  data-view-component="true" class="w-8 fill-current">
                            <path d="M12 1C5.923 1 1 5.923 1 12c0 4.867 3.149 8.979 7.521 10.436.55.096.756-.233.756-.522 0-.262-.013-1.128-.013-2.049-2.764.509-3.479-.674-3.699-1.292-.124-.317-.66-1.293-1.127-1.554-.385-.207-.936-.715-.014-.729.866-.014 1.485.797 1.691 1.128.99 1.663 2.571 1.196 3.204.907.096-.715.385-1.196.701-1.471-2.448-.275-5.005-1.224-5.005-5.432 0-1.196.426-2.186 1.128-2.956-.111-.275-.496-1.402.11-2.915 0 0 .921-.288 3.024 1.128a10.193 10.193 0 0 1 2.75-.371c.936 0 1.871.123 2.75.371 2.104-1.43 3.025-1.128 3.025-1.128.605 1.513.221 2.64.111 2.915.701.77 1.127 1.747 1.127 2.956 0 4.222-2.571 5.157-5.019 5.432.399.344.743 1.004.743 2.035 0 1.471-.014 2.654-.014 3.025 0 .289.206.632.756.522C19.851 20.979 23 16.854 23 12c0-6.077-4.922-11-11-11Z"></path>
                        </svg>
                    </a>
                    <div class="relative">
                        <input type="text" class="rounded bg-gray-700 placeholder:text-white! w-72 px-3 py-1" placeholder="Search or jump to..."/-?getLocalerounded bg-gray-700 placeholder-white w-72 px-3 py-1>
                        <div class="absolute top-0 right-0 flex items-center h-full">
                            <div class="border border-gray-600 rounded text-xs text-gray-400 px-2 mr-2">/</div>
                        </div>
                    </div>
                    <div></div>
                </div>
                <div>right</div>
            </nav>
       </div>
    </body>
</html>
