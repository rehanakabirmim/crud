<?php 
$con = new mysqli("localhost","root","","batch13");
$call = $_POST['call'];
$call();
function insert(){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $status = $_POST['status'];
if( $name === ""){
    echo '<div class="alert alert-danger"><strong>Name is Required</strong>This is Message</div>'; 
}
if( $phone === ""){
    echo '<div class="alert alert-danger"><strong>Phone is Required</strong>This is Message</div>'; 
}
if($email === ""){
    echo '<div class="alert alert-danger"><strong>Email is Required</strong>This is Message</div>'; 
}
if( $status === ""){
    echo '<div class="alert alert-danger"><strong>Status is Required</strong>This is Message</div>'; 
}



else{
    global $con;
    $result=$con->query("INSERT INTO tbl_student(name,phone,email,status) VALUES('$name','$phone','$email','$status')");
    if($result){
        echo '<div class="alert alert-success"><strong>Data saved success</strong></div>';
    }
    else{
       '<div class="alert alert-danger"><strong>Data not saved</strong></div>' ;
    }
}
}


function show(){
    global $con;
    $result = $con->query("SELECT *FROM tbl_student");
    if( $result->num_rows > 0){
while($data = $result->fetch_assoc()){
    if($data["status"] == 1){
        $status = '<button value ="'.$data["student_id"].'" class=" inactive btn btn-sm btn-info">Inactive</button>';
    }
    else{
        $status ='<button value ="'.$data["student_id"].'" class=" active btn btn-sm btn-warning">Active</button>';
       
    }
    echo '<tr>
    <td>'.$data["student_id"].'</td>
    <td>'.$data["name"].'</td>
    <td>'.$data["phone"].'</td>
    <td>'.$data["email"].'</td>
    <td>'.$status.'</td>
    <td><button value="'.$data["student_id"].'" class="delete btn btn-danger btn-sm" data-bs-toggle="modal" 
    data-bs-target="#deleteModal">
    <i class="fa fa-trash"></i></button>

    <button value="'.$data["student_id"].'" class="update btn btn-info btn-sm">
    <i class="fa fa-edit"></i></button>
    <button value="'.$data["student_id"].'" class="updatem btn btn-success btn-sm">
    <i class="fa fa-edit"></i></button>
    </td>

    </tr>';
}
}
         
    else{
        '<tr>
        <td colspan="6" class="text-center bg-warning">not found</td>
    </tr>';
    }

}

function active(){
    global $con;
    $id = $_POST['id'];
    $con->query("UPDATE tbl_student SET status = '2' WHERE student_id = '$id'");

}

function inactive(){
    global $con;
    $id = $_POST['id'];
    $con->query("UPDATE tbl_student SET status = '1' WHERE student_id = '$id'");

}

function delete(){
    global $con;
    $id = $_POST['id'];
    $con->query("DELETE FROM tbl_student WHERE student_id = '$id'");


}

function find(){
    global $con;
    $id = $_POST['id'];
    $result = $con->query("SELECT * FROM tbl_student WHERE student_id = '$id'");
$result = $result->fetch_assoc();
echo json_encode($result);

}
function update(){
    global $con;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $status= $_POST['status'];
    $con->query("UPDATE tbl_student SET name='$name',phone='$phone',email='$email',status='$status' WHERE student_id = '$id'");
    echo '<div class="alert alert-success"><strong>Data update success</strong></div>'; 
}


?>