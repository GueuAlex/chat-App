const form = document.querySelector('.typing-area'),
      inputField = document.querySelector('.input-field'),
      sendBtn = document.querySelector('button');
      chatBox = document.querySelector('.chat-box');


      form.onsubmit =(e)=>{
        e.preventDefault(); //annul l'action par defaut de la soumission
    }
 sendBtn.onclick = ()=>{
      //Reccuperation en AJAX......................
    let xhr = new XMLHttpRequest(); // creation d'un objet XML
    xhr.open("POST", "./php/insert-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
               inputField.value = "";
               scrollToBotton();
            }
        }
    }

    // envoi des donneés a PHP par ajax.......
    let formData = new FormData(form); // nouvel objet formDate
    xhr.send(formData);//envoi des données a php
 } 

 chatBox.onmouseenter = ()=>{
     chatBox.classList.add("activeSearc")
 }

 chatBox.onmouseleaave = ()=>{
    chatBox.classList.remov("activeSearc")
}

 setInterval( ()=>{
    //Reccuperation en AJAX......................
    let xhr = new XMLHttpRequest(); // creation d'un objet XML
    xhr.open("POST", "./php/get-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
               if(!chatBox.classList.contains("activeSearc")){
                  scrollToBotton();
               }
            }
        }
    }

    // envoi des donneés a PHP par ajax.......
    let formData = new FormData(form); // nouvel objet formDate
    xhr.send(formData);//envoi des données a php
}, 500)//this function run every 500ms


function scrollToBotton(){
    chatBox.scrollTop = chatBox.scrollHeight;
}