function showPic(whichpic) {
    var srouce = whichpic.getAttribute("href");
    var placeholder = document.getElementById("placeholder");
    placeholder.setAttribute("src",srouce);

    var text = whichpic.getAttribute("title");
    var description = document.getElementById("description");
    description.firstChild.nodeValue = text;
}

function prepareGallery() {
    if (!document.getElementById || !document.getElementsByTagName) return false;
    var gallery = document.getElementById("imageGallery");
    if (!gallery) return false;
    var links = gallery.getElementsByTagName("a");
    for (var i=0; i<links.length; i++){
        links[i].onclick = function () {
            showPic(this);
            return false;
        }
    }
}
//页面加载完毕时执行函数
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function'){
        window.onload = func;
    } else {
        window.onload = function () {
            oldonload();
            func();
        }
    }
}