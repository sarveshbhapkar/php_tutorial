
<form action="" method="post">
    <input type="text" placeholder="enter name" name="name">
    <br/>
    <br/>
    <input type="text" placeholder="enter course name" name="course">
    <br/>
    <br/>
    <input type="text" placeholder="enter fees" name="fee">
    <br/>
    <br/>
    
    <button>add new student</button>
</form>

<?php
if(isset($_POST['name'])){

    $name=$_POST['name'];
    $course=$_POST['course'];
    $fee=$_POST['fee'];


    include("./config.php");
echo "<br>";


$student = $conn->prepare("insert into `students` 
    (`id`, `name`, `course`, `fee`) VALUES
    (null,'$name','$course','$fee');
");

$result=$student->execute();

if($result){
    echo "data inserted";

}else{
    echo "operation failed";
}

}



?>