<?php

include_once(URL . "/Model/Employees.php");

function fetchEmployee(){
    $arrayEmployee = array();
    $conn = Database();
    $sql = "SELECT * FROM employees";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);

    foreach($result as $data){
        $employee = new Employee();
        $employee->setData($data[0],$data[1],$data[2]);
        array_push($arrayEmployee, $employee);
    }

    return $arrayEmployee;
    
}


$conn = Database();
if(isset($_POST['addEmployee'])){
    $username = $_POST['username'];
    $firstName = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = md5($_POST['password']);
    
    $sqlUsers = "INSERT INTO users (username,password,role) VALUES ('$username','$password','karyawan')";
    $queryUsers = mysqli_query($conn,$sqlUsers);
    $sql = "INSERT INTO employees (username, nama_depan, nama_belakang) VALUES ('$username','$firstName','$lastname')";
    $query = mysqli_query($conn,$sql);
    header("location:Employee.php");
}


if(isset($_POST['button'])){
    $username = $_POST['username'];
    if($_POST['button'] == 'delete'){
        $sql = "DELETE FROM employees WHERE username = '$username'";
        $query = mysqli_query($conn,$sql);

        $sqlUsers = "DELETE FROM users WHERE username = '$username'";
        $queryUsers = mysqli_query($conn,$sqlUsers);
    }
}

if(isset($_POST['editEmployee'])){
    $username = $_POST['username'];
    $firstName = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "UPDATE employees SET nama_depan = '$firstName' , nama_belakang = '$lastname'";
    $query = mysqli_query($conn,$sql);
    header("location:Employee.php");
}

function fetchEditEmployee(){
    $username = $_POST['username'];
    $conn = Database();
    $sql = "SELECT * FROM employees WHERE username = '$username'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);

    $employee = new Employee();
    $employee->setData($result[0], $result[1], $result[2]);

    return $employee;
}