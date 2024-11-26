           <div class="col-md-4 col-sm-4 col-xs-12">			
                            <div class="profile-nav">
                                <div class="panel">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="<?php if($active === "dashboard"): echo "active"; endif; ?>">
                                            <a href="dashboard.php"> <i class="fa fa-user"></i> <?= $profile['page_title']?></a>
                                        </li>
                                        <li class="<?php if($active === "edit"): echo "active"; endif; ?>">
                                            <a href="edit_profile.php"> <i class="fa fa-edit"></i> <?= $edit['page_title']?></a>
                                        </li>
                                        <li class="<?php if($active === "inbox"): echo "active"; endif; ?>">
                                            <a href="inbox.php"> <i class="fa fa-envelope"></i> <?= $inbox['page_title']?></a>
                                        </li>
                                        <li class="<?php if($active === "my_career"): echo "active"; endif; ?>">
                                            <a href="my_career.php"> <i class="fa  fa-institution"></i> <?= $my_career['page_title']?></a>
                                        </li>
										<li class="<?php if($active === "article"): echo "active"; endif; ?>">
                                            <a href="articles.php"> <i class="fa  fa-list-ul"></i> <?= $article['page_title']?></a>
                                        </li>
										<li class="<?php if($active === "password"): echo "active"; endif; ?>">
                                            <a href="change_password.php"> <i class="fa  fa-lock"></i> <?= $password['page_title']?></a>
                                        </li>
										<li>
                                            <a href="logout.php"> <i class="fa  fa-power-off"></i> <?= $logout['page_title']?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
							
							
                        </div>