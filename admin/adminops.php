

<?php
if (isset($_POST['training'])) {
    $branch = $_POST['branch'];

    include "../connect.php";
    $query = "SELECT * FROM training WHERE branch = '$branch'";
    $data = mysqli_query($connect, $query);
    while ($result = mysqli_fetch_assoc($data)) {
        if ($result['branch'] == $branch) {
            header("location:technology.php?branch=$branch");
        }
    }
}
?>


<?php
if (isset($_POST['technology'])) {
    $technology = $_POST['technology'];
    $duration = $_POST['duration'];
    $branch = $_POST['branch'];
    include "../connect.php";
    $query = "SELECT * FROM training WHERE technology = '$technology'";
    $data = mysqli_query($connect, $query);
    while ($result = mysqli_fetch_assoc($data)) {
        if ($result['branch'] == $branch) {
            header("location:technology.php?branch=$branch");
        }
    }
}
?>
