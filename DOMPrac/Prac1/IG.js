
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
//把一个节点插入到另一个节点之后
function insertAfter(newElement, targetElement) {
    var parent = targetElement.parentNode;
    if (parent.lastChild = targetElement){
        parent.appendChild(newElement);
    }else {
        parent.insertBefore(newElement,targetElement.nextSibling);
    }
}

function preparePlaceholder() {
    //测试浏览器是否支持DOM方法
    if (!document.createElement) return false;
    if (!document.createTextNode) return false;
    if (!document.getElementById) return false;
    if (!document.getElementById("imagegallery")) return false;

    var placeholder = document.createElement("img");
    placeholder.setAttribute("id", "placeholder");
    placeholder.setAttribute("src", "乖巧.jpg");
    placeholder.setAttribute("alt", " ");
    placeholder.setAttribute("width", "500");
    placeholder.setAttribute("height", "520")
    var description = document.createElement("p");
    description.setAttribute("id", "description");
    var desctext = document.createTextNode("Choose an image");
    description.appendChild(desctext);
    var gallery = document.getElementById("imagegallery");
    insertAfter(placeholder,gallery);
    insertAfter(description,placeholder);
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

addLoadEvent(preparePlaceholder);
addLoadEvent(prepareGallery);