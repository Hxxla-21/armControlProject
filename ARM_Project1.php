<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title> PHP and MYSQL </title>
</head>
<body>
<?php
$conn = new mysqli ("localhost","root","", "test");
$stmt= $conn->prepare("SELECT * FROM `arm_project`");
$stmt->execute();
$result = $stmt->get_result();
echo"<table border='1'>";
while ($row = $result ->fetch_assoc()){
    echo "<r><td>".$row['Engine1']."<r><td>".$row['Engine2']."<r><td>".$row['Engine3'].
    "<r><td>".$row['Engine4']."<r><td>".$row['Engine5']."<r><td>".$row['Engine6']
}
echo "</table>"
?>
</body>
</html>