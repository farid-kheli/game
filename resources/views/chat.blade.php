<!DOCTYPE html>
@php
    use Carbon\Carbon;
@endphp
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen"
x-data="{ isMobile: false }"
>
    <div class="mx-auto max-w-7xl p-4 md:p-6">
        <div x-data="{ pageName: `Chat`}">
            <div class="flex flex-wrap items-center justify-between gap-3 pb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName">Chat</h2>
                <nav>
                    <ol class="flex items-center gap-1.5">
                        <li>
                            <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400" href="/">
                                Home
                                <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName">Chat</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="h-[calc(100vh-186px)] overflow-hidden sm:h-[calc(100vh-174px)]">
            <div class="flex h-full flex-col gap-6 xl:flex-row xl:gap-5">
                <!-- Chat Sidebar Start -->
                <div class="flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white xl:flex xl:w-1/4 dark:border-gray-800 dark:bg-white/[0.03]">
                    <!-- Chat List Start -->
                    <div class="sticky px-4 pt-4 pb-4 sm:px-5 sm:pt-5 xl:pb-0">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 sm:text-2xl dark:text-white/90">
                                    Chats
                                </h3>
                            </div>

                            <div x-data="{openDropDown: false}" class="relative">
                                <button @click="openDropDown = !openDropDown" :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-white'" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-white">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="9" r="2" fill="currentColor"></circle>
                                        <circle cx="9" cy="9" r="2" fill="currentColor"></circle>
                                        <circle cx="15.5" cy="9" r="2" fill="currentColor"></circle>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 flex items-center gap-3 pb-4 xl:pb-0">
                            <button @click="isMobile = !isMobile" class="flex h-11 w-full max-w-11 items-center justify-center rounded-lg border border-gray-300 text-gray-700 xl:hidden dark:border-gray-700 dark:text-gray-400">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 7.5H17.5M2.5 12.5H17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div class="relative my-2 w-full">
                                <form>
                                    <button class="absolute top-1/2 left-4 -translate-y-1/2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 14L11.1 11.1" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <input type="text" placeholder="Search..." class="h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-3.5 pl-[42px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="no-scrollbar flex-col overflow-auto" :class="isMobile ? 'flex fixed xl:static top-0 left-0 z-50 h-screen w-full bg-white dark:bg-gray-900 xl:relative xl:w-auto' : 'hidden xl:flex'" @click.outside="isMobile = false">
                        <!-- Mobile Header -->
                        <div class="flex items-center justify-between border-b border-gray-200 p-4 xl:hidden dark:border-gray-800">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Chats</h3>
                            <button @click="isMobile = false" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="flex max-h-full flex-col overflow-auto px-4 sm:px-5">
                            
                            <div class="custom-scrollbar max-h-full space-y-1 overflow-auto py-4">
                                @foreach ($friends as $friend)
                                <a href="{{ route('chat.page',$friend->friend_id==auth()->id()?$friend->user_id:$friend->friend_id) }}" class="flex cursor-pointer items-center gap-3 rounded-lg p-3 hover:bg-gray-100 dark:hover:bg-white/[0.03]">
                                    <div class="relative h-12 w-full max-w-[48px] rounded-full">
                                        <div class="h-full w-full overflow-hidden rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold">JD</div>
                                        <span class="absolute right-0 bottom-0 block h-3 w-3 rounded-full border-[1.5px] border-white bg-green-500 dark:border-gray-900"></span>
                                    </div>
                                    <div class="w-full">
                                        <div class="flex items-start justify-between">
                                            <div>
                                                <h5 class="text-sm font-medium text-gray-800 dark:text-white/90">{{ $friend->getfriendname() }}</h5>
                                                <p class="text-xs mt-0.5 text-gray-500 dark:text-gray-400">Game Player</p>
                                            </div>
                                            <span class="text-xs text-gray-400">15 mins</span>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chat Sidebar End -->

                <!-- Chat Box Start -->
                <div class="flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03] xl:w-3/4">
                    <!-- Chat Header -->
                    <div class="sticky flex items-center justify-between border-b border-gray-200 px-5 py-4 dark:border-gray-800 xl:px-6">
                        <div class="flex items-center gap-3">
                            <div class="relative h-12 w-full max-w-[48px] rounded-full">
                                <div class="h-full w-full overflow-hidden rounded-full bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center text-white font-bold">GC</div>
                                <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full border-[1.5px] border-white bg-green-500 dark:border-gray-900"></span>
                            </div>
                            <h5 class="text-sm font-medium text-gray-800 dark:text-white/90">{{$user['name']}} chat</h5>
                        </div>

                        <div class="flex items-center gap-3">
                            <a href="#">
                            <button class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.8333 7.5C15.8333 11.6421 12.6421 15 8.5 15C4.35786 15 1.16666 11.6421 1.16666 7.5C1.16666 3.35786 4.35786 0.166672 8.5 0.166672C12.6421 0.166672 15.8333 3.35786 15.8333 7.5Z" stroke="currentColor" stroke-width="1.5"></path>
                                </svg>
                            </button>
                            </a>
                        </div>
                    </div>

                    <!-- Messages Area -->
                    <div class="custom-scrollbar max-h-full flex-1 space-y-6 overflow-auto p-5 xl:space-y-8 xl:p-6
                    
                    "
                    x-data="{
                    messages:[],
                    }"
                    x-init="
                    @foreach ($messages as $message)
        messages.push({
            message: '{{ $message->message }}',
            sender: {{ $message->sender_id}},
            time: '{{ $message->created_at->diffForHumans() }}',
        });
        
    @endforeach
                    Echo.private('messages.{{$RommId}}')
                    .listen('Message', (e) => {
                     messages.push(e)
                        })
                    ">
                    <template x-for="message in messages">
<div>
                        <template x-if="message.sender !== {{ auth()->id() }}">
                            <div class="max-w-[350px]">
                                <div class="flex items-start gap-4">
                                    <div class="h-10 w-full max-w-10 rounded-full">
                                        <div class="h-full w-full overflow-hidden rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white text-xs font-bold">JD</div>
                                    </div>
                                    <div>
                                        <div class="rounded-lg rounded-tl-sm bg-gray-100 px-3 py-2 dark:bg-white/5">
                                            <p class="text-sm text-gray-800 dark:text-white/90" x-text="message.message"></p>
                                        </div>
                                        <p class="mt-2 text-xs text-gray-500 dark:text-gray-400 " x-text="message.time"></p>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <template x-if="message.sender === {{ auth()->id() }}">
                            <div class="ml-auto max-w-[350px] text-right">
                                <div class="ml-auto max-w-max rounded-lg rounded-tr-sm bg-blue-500 px-3 py-2">
                                    <p class="text-sm text-white" x-text="message.message"></p>
                                </div>
                                <p class="mt-2 text-xs text-gray-500 dark:text-gray-400" x-text="message.time" ></p>
                            </div>
                        </template>
                    </div>
                    </template>
                        

                        <!-- System Message -->
                        <div class="flex justify-center">
                            <div class="bg-gray-100 text-blue-600 px-4 py-2 rounded-full text-sm dark:bg-white/5 dark:text-blue-400">
                                🎮 Game lobby created
                            </div>
                        </div>
                    </div>

                    <div class="sticky bottom-0 border-t border-gray-200 p-3 dark:border-gray-800">
                        <form class="flex items-center justify-between" method="post" action="{{ route('chat.send') }}">
                            @csrf
                            <div class="relative w-full"> 
                                <button class="absolute left-1 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90 sm:left-3">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 12.375C10.8629 12.375 12.375 10.8629 12.375 9C12.375 7.13705 10.8629 5.625 9 5.625C7.13705 5.625 5.625 7.13705 5.625 9C5.625 10.8629 7.13705 12.375 9 12.375Z" stroke="currentColor" stroke-width="1.2"></path>
                                        <path d="M6.1875 6.1875C6.1875 6.1875 7.3125 4.5 9 4.5C10.6875 4.5 11.8125 6.1875 11.8125 6.1875" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M11.8125 11.8125C11.8125 11.8125 10.6875 13.5 9 13.5C7.3125 13.5 6.1875 11.8125 6.1875 11.8125" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <input type="text" name="message" id="message" placeholder="Type a message" class="h-9 w-full border-none bg-transparent pl-12 pr-5 text-sm text-gray-800 outline-hidden placeholder:text-gray-400 focus:border-0 focus:ring-0 dark:text-white/90">
                                <input type="text" name="userId"class="hidden" value="{{ $user['id'] }}">
                            </div>

                            <div class="flex items-center">
                                <button class="mr-2 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.25 2.25H3.75C3.35218 2.25 2.97064 2.40804 2.68934 2.68934C2.40804 2.97064 2.25 3.35218 2.25 3.75V14.25C2.25 14.6478 2.40804 15.0294 2.68934 15.3107C2.97064 15.5919 3.35218 15.75 3.75 15.75H14.25C14.6478 15.75 15.0294 15.5919 15.3107 15.3107C15.5919 15.0294 15.75 14.6478 15.75 14.25V9.75" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 1.5C9.82843 1.5 10.5 2.17157 10.5 3V9C10.5 9.82843 9.82843 10.5 9 10.5C8.17157 10.5 7.5 9.82843 7.5 9V3C7.5 2.17157 8.17157 1.5 9 1.5Z" stroke="currentColor" stroke-width="1.2"></path>
                                        <path d="M4.875 7.125C4.875 7.125 4.875 10.125 9 10.125C13.125 10.125 13.125 7.125 13.125 7.125" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M9 13.5V16.5M6 16.5H12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <button type="submit" class="ml-3 flex h-9 w-9 items-center justify-center rounded-lg bg-blue-500 text-white hover:bg-blue-600 xl:ml-5">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.98481 2.44399C3.11333 1.57147 1.15325 3.46979 1.96543 5.36824L3.82086 9.70527C3.90146 9.89367 3.90146 10.1069 3.82086 10.2953L1.96543 14.6323C1.15326 16.5307 3.11332 18.4291 4.98481 17.5565L16.8184 12.0395C18.5508 11.2319 18.5508 8.76865 16.8184 7.961L4.98481 2.44399ZM3.34453 4.77824C3.0738 4.14543 3.72716 3.51266 4.35099 3.80349L16.1846 9.32051C16.762 9.58973 16.762 10.4108 16.1846 10.68L4.35098 16.197C3.72716 16.4879 3.0738 15.8551 3.34453 15.2223L5.19996 10.8853C5.21944 10.8397 5.23735 10.7937 5.2537 10.7473L9.11784 10.7473C9.53206 10.7473 9.86784 10.4115 9.86784 9.99726C9.86784 9.58304 9.53206 9.24726 9.11784 9.24726L5.25157 9.24726C5.2358 9.20287 5.2186 9.15885 5.19996 9.11528L3.34453 4.77824Z" fill="white"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
