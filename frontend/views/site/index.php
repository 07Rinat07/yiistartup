<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3">
            <!-- Column -->
            <div class="card">
                <img class="card-img-top" src="assetstemplate/assets/images/background/profile-bg.jpg"
                     alt="Card image cap">
                <div class="card-body little-profile text-center">

                </div>
            </div>
            <!-- Column -->
            <div class="card">
                <div class="card-body bg-info">
                    <h4 class="text-white card-title">My Contacts</h4>
                    <h6 class="card-subtitle text-white mb-0 op-5">Checkout my contacts here</h6>
                </div>
                <div class="card-body">
                    <div class="message-box contact-box">
                        <h2 class="add-ct-btn"><button type="button"
                                                       class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button>
                        </h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                             role="tab">Activity</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                             role="tab">Profile</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                             role="tab">Settings</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline border-start-0">
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <!--<img src="" alt="user"
                                            class="img-circle">--> </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">Здесь предоставлены данные</a> <span class="sl-date">
                                                            об </span>
                                            <p>этой<a href="#"> категории</a></p>
                                            <div class="row">


                                            </div>
                                            <div class="like-comm"> <a href="javascript:void(0)"
                                                                       class="link me-2">2
                                                    comment</a> <a href="javascript:void(0)"
                                                                   class="link me-2"><i
                                                            class="fa fa-heart text-danger"></i> 5 Love</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline border-start-0">
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <!--<img src="" alt="user"
                                            class="img-circle">--> </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">Здесь предоставлены данные</a> <span class="sl-date">
                                                            об </span>
                                            <p>этой<a href="#"> категории</a></p>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img1.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img2.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img3.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img4.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>

                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img1.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img2.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>

                                            </div>
                                            <div class="like-comm"> <a href="javascript:void(0)"
                                                                       class="link me-2">2
                                                    comment</a> <a href="javascript:void(0)"
                                                                   class="link me-2"><i
                                                            class="fa fa-heart text-danger"></i> 5 Love</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline border-start-0">
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <!--<img src="" alt="user"
                                            class="img-circle">--> </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">Здесь предоставлены данные</a> <span class="sl-date">
                                                            об </span>
                                            <p>этой<a href="#"> категории</a></p>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img1.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img2.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img3.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img4.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>

                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img1.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img2.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img3.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                                <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="assetstemplate/assets/images/big/img4.jpg" alt="user"
                                                            class="img-responsive radius w-100"></div>
                                            </div>
                                            <div class="like-comm"> <a href="javascript:void(0)"
                                                                       class="link me-2">2
                                                    comment</a> <a href="javascript:void(0)"
                                                                   class="link me-2"><i
                                                            class="fa fa-heart text-danger"></i> 5 Love</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->


</div>
