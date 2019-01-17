

window.onload = function () {
    var testdiv = document.getElementById("testdiv");
    var para = document.createElement("p");
    testdiv.appendChild(para);
    var txt = document.createTextNode("This is");
    para.appendChild(txt);
    var emnode = document.createElement("em");
    var txt2 = document.createTextNode(" my");
    emnode.appendChild(txt2);
    para.appendChild(emnode);
    var txt3  = document.createTextNode(" content.")
    para.appendChild(txt3);
}