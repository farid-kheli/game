import './bootstrap';
import './echo';
import Alpine from 'alpinejs';

import { posision,showError,showGameWinner } from './game.js';
window.posision = posision;
window.showError = showError;
window.showGameWinner = showGameWinner;

window.Alpine = Alpine;

Alpine.start();
