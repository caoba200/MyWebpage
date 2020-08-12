const search = document.getElementById('search');
search.addEventListener("keyup", () => {
    if (search.value.length >= 3) {
        document.getElementById('search-result').innerHTML = "";
        UserSearch();
    }
    else
        document.getElementById('search-result').innerHTML = "";

});
