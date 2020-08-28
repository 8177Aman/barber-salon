<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">The BarberAdmin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <li><a href="../index.php">Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>              
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="../profile.php"><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['ADMIN_USER']; ?></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
            <a href="./POST.PHP">View All Blog</a>
            </li>
            <li>
                 <a href="poST.PHP?source=add_post"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Add Blog</a>
             </li>
            <li>
                <a href="users.php"><i class="fa fa-book"></i> Booking</a>
            </li>
            <li>
                <a href="career.php"><i class="fa fa-id-card" aria-hidden="true"></i> Career</a>
            </li>
            <li>
                <a href="gallery.php"><i class="fa fa-picture-o"></i> Gallery</a>
            </li>
            <li>
                <a href="offer.php"><i class="fa fa-spinner"></i> Offer</a>
            </li>
            <li>
                <a href="slider.php"><i class="fa fa-sliders"></i> Slider</a>
            </li>
            <li>
                <a href="contact.php"><i class="fa fa-question"></i> All Query</a>
            </li>


            



           
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
