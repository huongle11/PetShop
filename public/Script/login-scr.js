const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link');
const reglink = document.querySelector('.reg-link');

reglink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});

loginlink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});
