<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Sathyabama Dental College</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>

                    <li>
                        <a href = "#">
                            <span class = "glyphicon glyphicon-user"></span>
                            <?php echo $_SESSION['sess_username'];?>
                        </a>
                    </li>
                    
                    <li>
                        <a href = "#">
                            <span class = "glyphicon glyphicon-log-in"></span>
                            Logout
                        </a>
                    </li>
                    
                <?php
                } else {
                    ?>
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
                            Login
                        </a>
                    </li>
                    <?php
                    }
                    ?>
            </ul>
         </div>
    </div>
</div>  