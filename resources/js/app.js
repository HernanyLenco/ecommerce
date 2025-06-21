import './bootstrap';
import { toggleMobileMenu } from './togglemenu';
import { swiper } from './swipper';
import.meta.glob(["../images/**"]);

window.toggleMobileMenu = toggleMobileMenu;
window.swiper = swiper;