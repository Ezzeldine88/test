<?php 
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = trim($_GET["id"]);
    include_once '../Model/UserClass.php';
    $r = new User();
    if ($row = $r->ReadOneRecord($id)) {
        $name = $row["name"];
        $height = $row["height"];
        $weight = $row["weight"];
        $bloodGroup = $row["bloodGroup"];
        $DOB = $row["DOB"];
        $gender = $row["gender"];
    } else {
        echo "Record not found. Please try again.";
    }
}
 

?>
