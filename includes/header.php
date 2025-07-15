<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="index.html"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
            BPMS
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                     
                     <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.html">Admin</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="signup.html">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li><?php }?>
                    <?php if (strlen($_SESSION['bpmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="book-appointment.html">Book Salon</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="booking-history.html">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice-history.html">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="profile.html">Profile</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="change-password.html">Setting</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.html">Logout</a>
                    </li>
                  <?php }?>
                </ul>
                
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>