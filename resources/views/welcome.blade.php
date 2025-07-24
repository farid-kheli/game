<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white">
    <div class="max-w-3xl mx-auto mt-12 bg-gray-800 p-6 rounded-lg shadow-lg"
    x-data="{
    users : []
    }"
    x-init="
        Echo.join('onlineusers.1')
            .here((e) => {
               users = e
            console.log(users);
            }).joining((e) => {
               users.push(e)
            })
            .leaving((e) => {
               users = users.filter(u => u.id !== e.id)
            })
    ">
        <h2 class="text-center text-2xl font-bold mb-6">Online Users</h2>
        <ul class="space-y-4" >
            <template x-for="user in users"
                x-data="{ url: '/game/?user1=auth()->id()&user2='. user.id }"
            >
            <li  class="flex justify-between items-center bg-gray-700 p-4 rounded-md">
                <div class="flex items-center" x-text="user.name">
                    <span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Message</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Invite as Friend</button>
                    <a  x-bind:href="'/game/{{auth()->id()}}/'+user.id"> <button class="bg-yellow-500 text-black px-3 py-1 rounded-md hover:bg-yellow-600">Play Game</button>
                </a> </div>
            </li>
            </template>
        </ul>
    </div>
</body>
</html>