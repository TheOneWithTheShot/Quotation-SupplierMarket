<?php include('./assets/header.php'); 

$name = $_SESSION['userName'];
$role = $_SESSION['role'];
if(isset($_SESSION['userId']))
{
    if (!($role == "Supplier"))
    {
        header("Location: ./index.php");
        alert("You do not have permission to go on this page.");
        exit();
    }
}
else
{
    header("Location: ./index.php");
    alert("You do not have permission to go on this page.");
    exit();
}
?>

<div class="">
<a style="color:white;">Supplier's Portal</a>
</div>


</div>


<!---- Footer --->
<div id="footer" style="display:none;"></div>
<!--End Of Footer-->
</body>

</html>