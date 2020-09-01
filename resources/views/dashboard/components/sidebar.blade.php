<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> دف جرافكس</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel col-md-12 text-center">
            <div class="image" text-center>
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>

        </div>
        <br>
        <div class="info">
            <a href="#" class="d-block">اسم المستخدم</a>

        </div>
        <br>
        <div class="info">
            <a href="#" class="d-block">ادارة الموقع </a>

        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item ">
                    <a href="index.html" class="nav-link ">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>
                            الرئسية

                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        <p>
                            الصفحات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.about') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p> عن الترف </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="" class="nav-link ">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p>
                            طلبات الاستقدام
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        <li class="nav-item">
                            <a href="{{ route('dashboard.jobs.order') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض طلبات الاستقدام   </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">

                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            السيرة الذاتية
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('cv.create') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة السير الذاتية </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cv.show') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض السير الذاتية </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fa fa-calendar">  </i>
                        <p>
                            الاخبار
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('news.create') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة خبر </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('news.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض  الاخبار </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="fa fa-calendar">

                        </i>
                        <p>
                            الاسلايدر الصور
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة صورة </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض  الصورة </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">

                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            الدولة والمهنة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('country.create') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة  الدولة والمهنة </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('country.show') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض  الدولة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('carrer.show') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض المهنة</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
