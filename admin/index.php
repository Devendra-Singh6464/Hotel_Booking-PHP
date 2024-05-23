<?php 
require('inc/db_config.php');
require('inc/essentials.php');

session_start();
if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)
    redirect('dashboard.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel</title>
    <?php require('inc/links.php');?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="" method="POST">
            <h4 class="bg-dark text-white py-4">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name"  required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button name="login" type="submit" class="btn btn-success shadow alien-item-center mt-4 ">LOGIN</button>
            </div>
        </form>
    </div>

<?php
if(isset($_POST['login']));
{
    $frm_data = filtration($_POST);

    $query = "SELECT * FROM `admin_db` WHERE `admin_name`=? AND `admin_pass`=?";

    $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

    $ress = select($query, $values, "ss");
    if($ress ->num_rows ==1){
        // session_start();
        $row = mysqli_fetch_assoc($ress);
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        redirect('dashboard.php');
    }
    else{
        alert('error','Login Failed - Invalid Credentials!');
    }
}
?>
<?php require('inc/scripts.php');?>

</body>
</html>