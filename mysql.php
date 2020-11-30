<?php
$var = array();
function addRow($conn, $data)
{
    $data = str_replace('\\', '/', $data);

    //print_r("insert into file (name) values(" . $data . ")");
    $conn->query('insert into file(name) values("' . $data . '");');
}
function showRow($conn)
{
    $result = $conn->query("select * from file");
}
if (isset($_POST["file"])) {

    print_r($_POST["file"]);

    $conn = mysqli_connect("localhost", "root", "");
    $result = mysqli_select_db($conn, "filestore");
    if ($result != true) {
        $conn->query("create database filestore");
        $conn->query("create table file(id int not null auto_increment,name varchar(200),primary key(id));");
    }
    //print("insert into file (name) values(" + '\fakepath\studio-3t-robo-3t-windows-double-pack (1).zip' + ")");
    addRow($conn, $_POST["file"]);
    //print_r($conn);
}
print_r("outside running");
print_r($_POST);
