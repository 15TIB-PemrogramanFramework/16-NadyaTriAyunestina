                        <!-- Nav Starts -->

            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
              	 <li > <p>Selamat Datang <b><?php echo $this->session->userdata('username'); ?></b></p></li>
                 <li ><a href="<?php echo site_url('home/homeUser');?>">Home</a></li>
                 <li ><a href="<?php echo site_url('home/contactUser');?>">Contact</a></li>
                        <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
              </ul>
            </div>
            <!-- #Nav Ends -->