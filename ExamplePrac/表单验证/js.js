function isValidata() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["age"].value;
    var z = document.forms["myForm"]["email"].value;
    if ( (x === null || x === "")||(y === null || y === "")||(x === null)|| z === "" ){
        alert("内容不能为空！");
        return false;
    }
    var regy = /^[0-9]{1,2}$/;
    if (!regy.test(y)){
        alert("年龄格式错误!");
        return false;
    }

    var regz = /^[a-zA-Z0-9]+@[a-zA-Z0-9]{2,10}\.([a-z]{2,4}){1,3}$/;
    if (!regz.test(z)){
        alert("邮箱格式错误!");
        return false;
    }

}