<?php

if (isset($_POST['login'])) {
    function __autoload($classname)
    {
        include_once "$classname.php";
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $obj = new FETCH($email, $password);
    // print_r($obj->result);
    if ($obj->result['email'] == $email && $obj->result['password'] == $password) {
        session_start();
        $time = time();
        $_SESSION['uniqueidentity'] = $email . $time . $password;
        $_SESSION['uniquekey'] = $time;
        $_SESSION['email'] = $email;
        header("location:dashboard.php");
    } else {
        header("location:register.php");
    }
}

if (isset($_POST['next1'])) {
    session_start();
    $email = $_SESSION['email'];
    include "connect.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $image = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $choose = $_POST['cm'];
    $bio = $_POST['bio'];
    $folder = "uploads/$image";
    move_uploaded_file($tmpname, $folder);
    $query = "UPDATE speaker SET fname='$fname' , lname = '$lname' , gender = '$gender' , image = '$folder' , state = '$state' , city = '$city' , choose = '$choose' , bio = '$bio' WHERE email = '$email'";
    $data = mysqli_query($connect, $query);
    if ($data == true) {
        header("location:profile2.php");
    } else {
        echo "<script>alert('Please Try again')</script>";
    }
}
if (isset($_POST['next2'])) {
    session_start();
    $email = $_SESSION['email'];
    include "connect.php";

    $expertise = $_POST['expertise'];
    $graduation = $_POST['college'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $primary = $_POST['language1'];
    $secondary = $_POST['language2'];

    $query = "UPDATE speaker SET expertise='$expertise' , graduation = '$graduation' , company = '$company' , position = '$position' , primaryl = '$primary' , secondaryl = '$secondary'  WHERE email = '$email'";
    $data = mysqli_query($connect, $query);
    if ($data == true) {
        header("location:profile3.php");
    } else {
        echo "<script>alert('Please Try again')</script>";
    }
}
if (isset($_POST['finalsubmit'])) {
    session_start();
    $email = $_SESSION['email'];
    include "connect.php";

    $availability = implode(',', $_POST['availability']);
    $fees = $_POST['fees'];
    $query = "UPDATE speaker SET availability='$availability' , fees = '$fees' WHERE email = '$email'";
    $data = mysqli_query($connect, $query);
    if ($data == true) {
        header("location:dashboard.php");
    } else {
        echo "<script>alert('Please Try again')</script>";
    }
}
if (isset($_POST['update'])) {
    session_start();
    $email = $_SESSION['email'];
    include "connect.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $image = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $choose = $_POST['cm'];
    $bio = $_POST['bio'];
    $expertise = $_POST['expertise'];
    $graduation = $_POST['college'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $primary = $_POST['language1'];
    $secondary = $_POST['language2'];
    $availability = implode(',', $_POST['availability']);
    $fees = $_POST['fees'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    $folder = "uploads/$image";
    move_uploaded_file($tmpname, $folder);
    $query = "UPDATE speaker SET fname='$fname' , lname = '$lname' , gender = '$gender' , image = '$folder' , state = '$state' , city = '$city' , choose = '$choose' , bio = '$bio' , expertise='$expertise' , graduation = '$graduation' , company = '$company' , position = '$position' , primaryl = '$primary' , secondaryl = '$secondary' , availability='$availability' , fees = '$fees' , title='$title' , description = '$description' , facebook = '$facebook' , twitter = '$twitter' , linkedin = '$linkedin' , instagram = '$instagram' , youtube = '$youtube' WHERE email = '$email'";
    $data = mysqli_query($connect, $query);
    if ($data == true) {
        header("location:profile2.php");
    } else {
        echo "<script>alert('Please Try again')</script>";
    }
}

?>

<?php

class Register
{
    protected function register()
    {
        include "connect.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO speaker(email,password) VALUES('$email','$password')";
        $data = mysqli_query($connect, $query);
        if ($data == true) {
            session_start();
            $time = time();
            $_SESSION['uniqueidentity'] = $email . $time . $password;
            $_SESSION['uniquekey'] = $time;
            $_SESSION['email'] = $email;
            header("location:profile.php");
        }
    }

    public function __construct()
    {
        $this->register();
    }
}
if (isset($_POST['submit'])) {
    $obj = new Register;
}

?>


<?php
if (isset($_POST['training'])) {
    $branch = $_POST['branch'];

    include "connect.php";
    $query = "SELECT * FROM training WHERE branch = '$branch'";
    $data = mysqli_query($connect, $query);
    while ($result = mysqli_fetch_assoc($data)) {
        if ($result['branch'] == $branch) {
            header("location:coursedetails.php?branch=$branch");
        }
    }
    
        header("location:training.php");
        }

?>
