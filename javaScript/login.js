const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit =(e)=>{
    e.preventDefault(); //annul l'action par defaut de la soumission
}

continueBtn.onclick = ()=>{
    //Reccuperation en AJAX......................
    let xhr = new XMLHttpRequest(); // creation d'un objet XML
    xhr.open("POST", "./php/loginConfig.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                   location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    // envoi des donneés a PHP par ajax.......
    let formData = new FormData(form); // nouvel objet formDate
    xhr.send(formData);//envoi des données a php
}