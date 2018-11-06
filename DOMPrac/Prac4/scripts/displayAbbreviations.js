function displayAbbreviations() {
       if (!document.getElementsByTagName || !document.createElement
       || !document.createTextNode) return false;
       //取得所有缩略词
       var abbreviations = document.getElementsByTagName("abbr");
       if (abbreviations.length <1 ) return false;
       var defs = new Array();
       for (var i=0; i<abbreviations.length; i++) {
           if (abbreviations[i].childNodes.length < 1) continue;//IE6以前平稳退化
           var definition = abbreviations[i].getAttribute("title");
           var key = abbreviations[i].lastChild.nodeValue;
           defs[key] = definition;
       }
       //建立定义列表
       var dlist = document.createElement("dl");
       for (key in defs){
           var definition = defs[key];
           var dtitle = document.createElement("dt");
           var dtitle_text = document.createTextNode(key);
           dtitle.appendChild(dtitle_text);
           var ddesc = document.createElement("dd");
           var ddesc_text = document.createTextNode(definition);
           ddesc.appendChild(ddesc_text);
           dlist.appendChild(dtitle);
           dlist.appendChild(ddesc);
       }
       if(dlist.childNodes.length < 1) return false;
       //创建标题
       var header = document.createElement("h2");
       var header_text = document.createTextNode("Abbreviations");
       header.appendChild(header_text);
       //添加到页面主体
       document.body.appendChild(header);
       document.body.appendChild(dlist);
}
addLoadEvent(displayAbbreviations);