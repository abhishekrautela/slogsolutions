<?php
	include "header.php";
$technology = $_GET['technology'];
include "connect.php";
$query = "SELECT * FROM training WHERE technology = '$technology'";
$data = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($data);
?>
<div id="banner-area">
    <img class="img-fluid" width="100%" height="100%" src="images/banner/banner.jpg" alt="" >
    <div class="parallax-overlay"></div>
    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <h2><?php echo $_GET['technology'];?></h2>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->
</div>
<div class="gap-20"></div>
<div class="gap-20"></div>
<div class="gap-20"></div>
<main>
    <section id="main-container">
            <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 class="title-border"><?php echo "About ".$result['technology']." Training ";?></h3>
                    <p><?php echo $result['about'];?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 class="title-border"><?php echo "Career Options ";?></h3>
                    <p><?php echo $result['career'];?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 class="title-border"><?php echo "What’s in it for you? ";?></h3>
                    <p><?php echo "Training on new technology<br>"?></p>
                    <p><?php echo"Most importantly a friendly work environment with opportunity to learn
                                                from a number of highly skilled mentors.";?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 class="title-border"><?php echo "Why From Us? ";?></h3>
                    <p><?php echo $result['wfu']; ?></p>
                </div>
        <div class="gap-20"></div>
        </div>
        <div class="title-border"><h3>DOWNLOADS</h3></div>
        <form method="POST">
                <br><br>
            <div class="row">
                <?php 
                            $query = "SELECT * FROM training WHERE technology = '$technology'";
                            $data = mysqli_query($connect,$query);
                            while($result=mysqli_fetch_assoc($data))
                            {?>
                <input type="hidden" name="technology" value="<?php echo $result['technology'] ?>">
                <a href="down.php?duration=<?php echo $result['duration']?>&technology=<?php echo $result['technology']?>"
                    class="btn btn-primary solid"><?php echo $result['duration'] ; ?> Content<i class="fa fa-download" aria-hidden="true"></i></a></p>
                <?php
                            } 
                            ?>
            </div>
        </form>
        </div>
        <div class="gap-40"></div>
        <div class="gap-20"></div>
        </div>
        </div>
        </div>
    </section>
</main>
<br><br>
<?php
	include "footer.php";
?>