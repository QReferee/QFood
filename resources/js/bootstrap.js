import axios from 'axios';
import {onMounted} from "vue";
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const followCursor = () => {
    const el = document.querySelector('.follow-cursor')

    window.addEventListener('mousemove', e => {
        const target = e.target
        if (!target) return

        if (target.closest('a')) {
            el.classList.add('follow-cursor_active')
        } else {
            el.classList.remove('follow-cursor_active')
        }

        el.style.left = e.pageX + 'px'
        el.style.top = e.pageY + 'px'
    })
}
followCursor()
