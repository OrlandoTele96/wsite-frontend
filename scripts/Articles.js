function SeeMore(Articles) {
    for (let article of Articles) {
        console.log("Checking article\n" + article.innerHTML);
        var content = article.innerHTML;
        console.log("Article size" + content.length);
        if (content.length >= 500) {
            console.log("This article is too long!");
            var content_cutted = content.substr(1, 800);
            article.innerHTML = content_cutted + "..." + "</p>" + "<a href='#'>More</a>";
            console.log(article.innerHTML);
        }

    }
}

var Articles = document.getElementsByClassName("article_content");
console.log(Articles)
SeeMore(Articles);