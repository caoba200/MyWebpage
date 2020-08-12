function testing_display(text) {
    alert("The string " + text.innerHTML + " has been clicked");
    console.log(text);
    var header = document.getElementByTagName("h1");
    console.log("After the error");
}
