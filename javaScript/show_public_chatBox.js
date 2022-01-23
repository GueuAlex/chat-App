const public = document.querySelector(".publicSection"),
usersArea  = document.querySelector(".wrap"),
publicBtn =  document.querySelector(".publicLink");
publicBtn.onclick = ()=>{
    public.classList.remove('cacher')
    usersArea.classList.add('cacher')
}