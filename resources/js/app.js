import Echo from 'laravel-echo';
import './bootstrap';
import axios from 'axios';

const form = document.getElementById('form');
const inputMessage = document.getElementById('message');
const inputUser = document.getElementById('user');
const messagesChat = document.getElementById('messages-chat');



form.addEventListener('submit', function (params) {
    event.preventDefault();
    const userInput = inputMessage.value;
    const user = inputUser.value;


    axios.post('/chat-message', {
        message: userInput,
        user: user
        
    })
})
const channel = window.Echo.channel('public.chat.1');

channel.subscribed(() => {
    console.log('subscribed')
}).listen('.chat.message', (event) =>{
    console.log(event);
    const newChatDiv = document.createElement('div');
    const newChatMessage = document.createElement('div');

    // newChatMessage.classList.add('bg-blue-200', 'p-2', 'rounded-lg', 'mt-2');
    //bg-blue-200 p-2 rounded-lg mt-2 max-w-md
   
    if (user.value == event.data.user) {
     
        newChatDiv.classList.add('flex','justify-start');

        newChatMessage.classList.add('bg-blue-200', 'p-2', 'rounded-lg', 'mt-2','max-w-max');

        newChatDiv.appendChild(newChatMessage);
    }else{
       

        newChatDiv.classList.add('flex','justify-end');

        newChatMessage.classList.add('bg-green-200', 'p-2', 'rounded-lg', 'mt-2','max-w-max');

        newChatDiv.appendChild(newChatMessage);

    }

            newChatMessage.innerText =event.data.message;

            // Append the new chat message to the messages-chat element
            messagesChat.appendChild(newChatDiv);

            // Clear the input field after submitting the form
            document.getElementById('message').value = '';
    
})