function isNull() {
    var x = document.forms["myForm"]["name"].value;

    var y = document.forms["myForm"]["age"].value;
    var z = document.forms["myForm"]["email"].value;
    if ( (x === null || x === "")||(y === null || y === "")||(x === null)|| z === "" ){
        alert("内容不能为空！");
        return false;
    }
}