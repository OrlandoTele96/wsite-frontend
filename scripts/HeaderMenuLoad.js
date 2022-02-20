var menuOptions = [
    "Main",
    "About me"
];
var Links = ["index.php", "aboutme.php"];

function MakeMenuUL(options, links) {
    var list = document.createElement("ul");
    list.className = "nav navbar-nav";
    for (i = 0; i < options.length; i++) {
        var item = document.createElement('li');
        var a = document.createElement('a');
        var linkText = document.createTextNode(options[i]);
        a.appendChild(linkText);
        a.title = options[i];
        a.href = links[i];
        item.appendChild(a);
        list.appendChild(item);
    }
    return list;
}
var Menu = document.getElementById("menu").appendChild(MakeMenuUL(menuOptions, Links));