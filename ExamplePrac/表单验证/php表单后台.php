<?php
if (isset($_POST["submit"])){
    echo $_POST["name"]."<br>";
    echo $_POST["age"]."<br>";
    echo $_POST["email"]."<br>";
    $majors = $_POST["majors"];
    foreach ($majors as $variable){
             echo $variable."<br>";
    }
}
 ?>