<?php
$name = $_POST['name'];
$systemid = $_POST['systemid'];
$section = $_POST['section'];
$group = $_POST['group'];
$companyname = $_POST['companyname'];
$role = $_POST['role'];
$duration = $_POST['duration'];

$conn = new mysqli('localhost', 'root', '', 'EasyFill');
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}else{

    $stmt = $conn->prepare("insert into internshipform(name, systemid, section, group, companyname, role, duration) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sissssi", $name, $systemid, $section, $group, $companyname, $role, $duration);
    $stmt->execute();
    echo "Form Filled";
    $stmt->close();
    $conn->close();

}
?>