

# 🕹️ Super XO Game

**Super XO** is a real-time multiplayer web game built using **Laravel**, **Laravel Reverb**, **Laravel Echo**, **Broadcasting**, and **Alpine.js**. It's a creative twist on the classic Tic-Tac-Toe (X/O) game — players compete on a grid of **9 classic XO boards**, arranged in a 3x3 matrix, making the game much more strategic and exciting.

---

## 🚀 Features

- 🎮 **Multiboard XO Gameplay**  
  A total of 27 mini 3x3 boards forming a 9x9 super grid, structured like:

  ```js
  ['','',''],['','',''],['','',''],
  ['','',''],['','',''],['','',''],
  ['','',''],['','',''],['','',''],

  ['','',''],['','',''],['','',''],
  ['','',''],['','',''],['','',''],
  ['','',''],['','',''],['','',''],

  ['','',''],['','',''],['','',''],
  ['','',''],['','',''],['','',''],
  ['','',''],['','',''],['','','']


* 📡 **WebSocket-based Real-Time Communication**
  Powered by **Laravel Reverb**, the app includes:

  * Real-time game updates
  * Player chat
  * Notifications
  * Online user presence tracking

* 🔐 **Secure by Design**
  Uses Laravel’s built-in authentication system with CSRF protection.

* 💡 **Frontend Simplicity with Alpine.js**
  No bloated frontend frameworks — everything reactive and real-time is handled by Alpine.js and Echo.

---

## 🧱 Tech Stack

| Layer           | Technology                |
| --------------- | ------------------------- |
| Backend         | Laravel 11                |
| Realtime Engine | Laravel Reverb + Echo     |
| Frontend        | Alpine.js + Laravel Echo  |
| Broadcasting    | WebSocket (Reverb driver) |
| Auth & Security | Laravel Breeze/Auth       |

---

## 📦 Installation

```bash
# Clone the repository
git clone https://github.com/yourusername/super-xo-game.git
cd super-xo-game

# Install PHP & JS dependencies
composer install
npm install && npm run dev

# Set up the environment
cp .env.example .env
php artisan key:generate

# Set up the database
php artisan migrate

# Start the Laravel server
php artisan serve

# Start the WebSocket server
php artisan reverb:start
```

---

## 🔄 WebSocket Channels

| Channel             | Purpose                                        |
| ------------------- | --------------------------------               |
| `onlineusers`       | Tracks all online users                        |
| `game.{id}`         | Real-time board update events                  |
| `notification.{id}` | Real-time notification on events from users    |

---

---

## ⚙️ Echo Configuration

In `resources/js/bootstrap.js`:

```js
import Echo from 'laravel-echo';

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY ?? 'local',
    host: '127.0.0.1',
    port: 8080,
    wsPath: '/app/local',
});
```

---

## 📸 Screenshots

> *Coming soon — gameplay, chat, and UI screenshots!*

---

## ✅ Additional Features

* [ ] Matchmaking queue system
* [ ] Spectator mode
* [ ] Leaderboards
* [ ] Game history log
* [ ] Mobile optimization

---

## 🤝 Contributing

Contributions are welcome!

1. Fork the repo
2. Create a feature branch
3. Commit your changes
4. Open a pull request

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---

```

---

✅ Just copy this block and paste it into `README.md` in your GitHub repo — it’s complete, clean, and GitHub-ready.

Let me know if you also want a `.devcontainer.json` or `docker-compose.yml` for easier setup!
```
