function UserSearch() {
    const xhttp = new XMLHttpRequest();
	var searchString = document.getElementById("search").value;
	xhttp.addEventListener("load", displayResults);

    var githubSearch = "https://api.github.com/search/users?q=" + searchString;

	xhttp.open("get", githubSearch);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
}

function displayResults() {
    const results = JSON.parse(this.responseText);

    var displayString = "";

    for (var i = 0; i < results["items"].length; i++) {
        var user = results["items"][i];

        var node = createUserCard(user["login"], user["avatar_url"], user["html_url"], user["score"]);
        document.getElementById("search-result").append(node);
    }

}

function createUserCard(username, image, link, rate) {

    // CREATE div ELEMENT OF THE CARD
    var card = document.createElement("div");
    card.classList.add("card");
    card.style.width = "18rem";

    var cardBody = document.createElement("div");
    cardBody.classList.add("card-body");

    // IMAGE TAG
    var img = document.createElement("img");
    img.classList.add("card-img-top");
    img.setAttribute("src", image);
    img.setAttribute("Atl", "user profile image");

    // TITLE (H5) TAG
    var title = document.createElement("h5");
    title.classList.add("card-title");
    title.innerHTML = "Github User Profile";

    // P TAGS
    var text = document.createElement("p");
    text.classList.add("card-text");
    text.innerHTML = "Username: " + username;

    var score = document.createElement("p");
    score.classList.add("card-text");
    score.innerHTML = "Score: " + rate;

    var btn = document.createElement("a");
    btn.classList.add("btn");
    btn.classList.add("btn-primary");
    btn.setAttribute("href", link);
    btn.setAttribute("target", "_blank");
    btn.innerHTML = "GitHub Link";

    // APPEND NODES
    card.append(img);
    cardBody.append(title);
    cardBody.append(text);
    cardBody.append(score);
    cardBody.append(btn);

    card.append(cardBody);

    return card;

}
