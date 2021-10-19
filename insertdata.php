<?php include ('config.php'); ?>

<?php
if(isset($_POST['insert']))
{
    $name = $_POST['name'];

    $query = "INSERT INTO argonautes(`name`) VALUES ('$name')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>