<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Listings</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-white">
        <div class="container mx-auto mt-6">
            @include('includes.flash_messages')
            <form action="{{ route('jobs.search') }}" class="grid grid-cols-6 gap-2">
                <input type="text" id="small-input" class="col-span-3 block w-full p-2 text-gray-900 border border-gray-300 bg-gray-50 text-xs  focus:border-[#224ABE] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-[#224ABE]" placeholder="Enter job title" name="title">
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm   focus:border-[#224ABE] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-[#224ABE]" name="category">
                    <option selected disabled>Choose a category</option>
                    <option value="IT">IT</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Sales">Sales</option>
                    <option value="Data Science">Data Science</option>
                  </select>
                  <select id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:border-[#224ABE] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-[#224ABE]" name="location">
                    <option selected disabled>Choose location</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Port Harcourt">Port Harcourt</option>
                  </select>
                  <button type="submit" class="text-white bg-[#224ABE] hover:bg-blue-800 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-[#224ABE] dark:hover:bg-[#224ABE]">Submit</button>
            </form>
            @if (isset($jobs))
                <div class="mt-6">
                    <h1 class="mb-4 font-bold text-xl md:font-extrabold md:text-2xl text-[#224ABE]">Search Result</h1>
                        @if (count($jobs) > 0)
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                @foreach ($jobs as $job)
                                    <div>
                                        <div class="text-justify h-auto mb-1 rounded bg-gray-100 px-4 py-4">
                                            <h2 class="font-bold text-lg md:font-extrabold md:text-xl text-[#224ABE]">{{ $job->title }}</h2>
                                            <div class="flex-none mt-2 md:flex">
                                                <button class="bg-white py-1 px-8 mr-1">{{ $job->category }}</button>
                                                <button class="bg-white py-1 px-2">₦{{ number_format($job->salary)}}{{ $job->has_commission ? ' + commission' : ''}}</button>
                                            </div>
                                            <div class="flex-none mt-1 md:flex">
                                                <button class="bg-white py-1 px-8 mr-1">{{ $job->company }}</button>
                                                <button class="bg-white py-1 px-8">{{ $job->location }}</button>
                                            </div>
                                        </div>
                                        <div class="text-justify h-auto mb-4 rounded bg-gray-100 px-4 py-4">
                                            <p class="mb-4">{{ Str::limit($job->description, 100) }}</p>
                                            <a href="#" class="bg-white py-1 px-2 mt-2">See Details</a>
                    
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-2 flex">
                                @if ($links->prev)
                                    <a href="{{ $links->prev }}" class="bg-gray-100 py-1 px-2 mr-2">Previous</a>
                                @endif
                                @if ($links->next)
                                    <a href="{{ $links->next }}" class="bg-gray-100 py-1 px-2">Next</a>
                                @endif
                            </div>
                        @else
                            
                        @endif
                </div>
            @endif
        </div>
    </body>
</html>
