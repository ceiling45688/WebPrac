function showPic(whichpic) {
    if (!document.getElementById("placeholder")) return false;//存在性检查
    var srouce = whichpic.getAttribute("href");
    var placeholder = document.getElementById("placeholder");
    placeholder.setAttribute("src",srouce);
    if (document.getElementById("description")){
        if (whichpic.getAttribute("title")){
            var text = whichpic.getAttribute("title");
        } else {
            var text = " ";
        }
        var description = document.getElementById("description");
        description.firstChild.nodeValue = text;
    }
    return true;
}

function prepareGallery() {
    if (!document.getElementById || !document.getElementsByTagName) return false;
    var gallery = document.getElementById("imageGallery");
    if (!gallery) return false;
    var links = gallery.getElementsByTagName("a");
    for (var i=0; i<links.length; i++){
        links[i].onclick = function () {
            return !showPic(this);
            //平稳退化，如果图片切换成功，不执行onclick的默认行为
            //也可以用： return showPic(this) ? false : true;
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