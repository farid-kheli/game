<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .notification {
            position: fixed;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            display: block;
            animation: slideIn 0.5s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            min-width: 300px;
            max-width: 400px;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .notification-button {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }

        .notification-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .button:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-900 text-white"
x-data="{
    users : [],
    GameInvites: [] 
    }"
    x-init="
        Echo.join('onlineusers.1')
            .here((e) => {
            users = e.map(u => u.id);
            }).joining((e) => {
               users.push(e.id);
            })
            .leaving((e) => {
               users = users.filter(u => u !== e.id);
            })


               Echo.private('notification.' + {{ auth()->id() }})
            .listen('invite', (e) => {
                GameInvites.push(e)
                console.log(GameInvites)
            });
    "
>
    <template x-for="invite in GameInvites">
    <div class="notification" id="notification">
        <div class="flex items-start space-x-3"
        >
            <div class="notification-icon">
                🎮
            </div>
            <div class="flex-1">
                <h4 class="font-semibold text-lg mb-1" x-text="invite.user1?.name"></h4>
                <p class="text-sm opacity-90 mb-3">Inivited you to a game</p>
                <div class="flex space-x-2">
                    <a x-bind:href="'/game/'+invite.gameId"><button class="notification-button bg-white text-purple-700 hover:bg-gray-100">Join</button></a>
                    <button class="notification-button bg-transparent border border-white text-white hover:bg-red-700 hover:text-white" onclick="document.getElementById('notification').style.display = 'none';">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
    </template>
    <div class="max-w-3xl mx-auto mt-12 bg-gray-800 p-6 rounded-lg shadow-lg"
    >
        <h2 class="text-center text-2xl font-bold mb-6">Online Users</h2>
        <ul class="space-y-4">
            @foreach ($users as $user)
        <li class="flex justify-between items-center bg-gray-700 p-4 rounded-md hover:bg-gray-600 transition-colors">
            
            <div class="flex items-center">
                <template x-if="!users.includes({{ $user->id }})">
                    <span class="w-3 h-3 rounded-full bg-red-500 mr-2"></span>
                </template>
                <template x-if="users.includes({{ $user->id }})">
                    <span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span>
                </template>
                {{ $user->name }}
            </div>
            <div class="flex space-x-2">
                <button class="button bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Message</button>
                <button class="button bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Invite as Friend</button>
                <a href="{{ route('game.create',[auth()->id(),$user->id]) }}">
                    <button class="button bg-yellow-500 text-black px-3 py-1 rounded-md hover:bg-yellow-600">Play Game</button>
                </a>
            </div>
        </li>
            @endforeach
        </ul>
    </div>
</body>
</html>