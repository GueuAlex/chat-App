const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("activeSearc")
    searchBar.focus();
    searchBtn.classList.toggle("activeSearchIcon")
}