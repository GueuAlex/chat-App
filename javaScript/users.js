const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("activeSearc");
    searchBar.focus();
    searchBtn.classList.toggle("activeSearchIcon");
    searchBar.value ="";
}

searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    if(searchTerm != ""){
        searchBar.classList.add("activeSearc")
    }else{
        searchBar.classList.remove("activeSearc")
    }
    let xhr = new XMLHttpRequest(); // creation d'un objet XML
    xhr.open("POST", "./php/search.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval( ()=>{
    //Reccuperation en AJAX......................
    let xhr = new XMLHttpRequest(); // creation d'un objet XML
    xhr.open("GET", "./php/users.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!searchBar.classList.contains("activeSearc")){
                    usersList.innerHTML =data;
                }
            }
        }
    }
    xhr.send();
}, 500)//this function run every 500ms
