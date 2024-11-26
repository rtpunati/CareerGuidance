           <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="profile-nav">
                                <div class="panel">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="<?php if($active === "dashboard"): echo "active"; endif; ?>">
                                            <a href="counsellor_dashboard.php"> <i class="fa fa-user"></i> <?= $profile['page_title']?></a>
                                        </li>
                                        <li class="<?php if($active === "inbox"): echo "active"; endif; ?>">
                                            <a href="counsellor_inbox.php"> <i class="fa fa-envelope"></i> <?= $inbox['page_title']?></a>
                                        </li>
										 
										<li class="<?php if($active === "password"): echo "active"; endif; ?>">
                                            <a href="change_password2.php"> <i class="fa  fa-lock"></i> <?= $password['page_title']?></a>
                                        </li>
										<li>
                                            <a href="logout2.php"> <i class="fa  fa-power-off"></i> <?= $logout['page_title']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
							
							
                        </div>