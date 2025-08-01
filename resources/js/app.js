import './bootstrap';

import Alpine from 'alpinejs';

import { posision,showError } from './game.js';
window.posision = posision;
window.showError = showError;

window.Alpine = Alpine;

Alpine.start();
