import Echo from 'laravel-echo';
import './bootstrap';

const channel = window.Echo.channel('public.testground.1');

channel.subscribed(() => {
    console.log('subscribed')
}).listen('.testground', (event) =>{
    console.log(event);
})