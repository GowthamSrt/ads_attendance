<?php
$con=new mysqli('localhost','root','','ads');

if($con->connect_errno)
{
    echo $con->connect_error;
    die();
}
else
{
    echo "Database connected <br><hr>";
}

?>
<html>
<link rel="stylesheet" href="table.css"/>
<center>
<?php
if(isset($_POST['submit']))
{
    $RegNo=$_POST['RegNo'];
    //$age=$_POST['dob'];
    //$age=strval($age);
    $sql="select * from ads where RegNo=$RegNo";
    if($result=$con->query($sql))   
    {
        if($row=$result->fetch_object())
        {
            ?>
            <table>
            <tr>
            <th>Name</th>
            <th>RegNo</th>
            <th>CIE-1</th>
            <th>CIE-2</th>
            <th>CIE-3</th>
            <th>M1</th>
            <th>M2</th>
            <th>M3</th>
            <th>Assignment</th>
            <th>Seminar</th>
            <th>Attendance</th>
            <th>Internal-mark</th>
            </tr>
            <tr>
            <td><?php echo $row->Name;  ?></td>
            <td><?php echo $row->RegNo; ?></td>
            <td><?php echo $row->CIE1; ?></td>
            <td><?php echo $row->CIE2; ?></td>
            <td><?php echo $row->CIE3; ?></td>
            <td><?php echo $row->M1; ?></td>
            <td><?php echo $row->M2; ?></td>
            <td><?php echo $row->M3; ?></td>
            <td><?php echo $row->Assignment; ?></td>
            <td><?php echo $row->Seminar; ?></td>
            <td><?php echo $row->Attendance; ?></td>
            <td><?php echo $row->InternalMark; ?></td>
            </tr>
            </table>
            <?php
            // echo "<h2>Name:</h2>","<h3>$row->name</h3><hr>";
            // echo "<h2>DOB:</h2><h3>$row->dob </h3><hr>";
            // echo "<h2>Rollnumber:</h2><h3>$row->rollnumber </h3><hr>";
            // echo "<h2>Department:</h2><h3>$row->dept </h3><hr>";
            // echo "<h2>Mobilenumber:</h2><h3>$row->mobile_number </h3><hr>";
        }
    }
    else
    {
        echo "data needed";
    }
}
else{
    echo "PLease Enter all the Data";
}
?>
</center>
</html>