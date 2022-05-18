<nav class="navbar navbar-vertical fixed-left navbar-expand-xl     navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        {{-- <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg"> --}}
                        <i class="ni ni-user-run"></i>
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            {{-- <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form> --}}
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>


            </ul>


        @if (Auth::user()->position == 'admin' || Auth::user()->position ==  "professor"  || Auth::user()->position_orther ==  "admin" )


            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">จัดการข้อมูลผู้ใช้งาน</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <i class="ni ni-single-02" style="color: #5e72e4"></i> จัดการข้อมูลผู้ใช้งาน
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('districts')}}">
                        <i class="ni ni-building" style="color: #5e72e4"></i> จัดการข้อมูลตำบล
                    </a>

                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('villages')}}">
                            <i class="ni ni-building" style="color: #5e72e4"></i> จัดการข้อมูลหมู่บ้าน
                        </a>
                    </li>
                </li>

            </ul>

            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">จัดการข้อมูลกลุ่มเป้าหมาย</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('manage_targetgroups') }}">
                        <i class="ni ni-single-02" style="color: #5e72e4"></i> จัดการข้อมูลกลุ่มเป้าหมาย
                    </a>
                </li>

            </ul>

            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">จัดการข้อมูลแบบสำรวจ </h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('manage_survey')}}">
                        <i class="ni ni-single-copy-04" style="color: #5e72e4"></i> แบบสำรวจเพื่อเฝ้าระวังการแพร่ระบาดของโรคติดต่ออุบัติใหม่
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('manage_goal')}}">
                        <i class="ni ni-single-copy-04" style="color: #5e72e4"></i> แบบสอบถามรายงานการจัดทำตำบลโปรไฟล์

                    </a>
                </li>
            </ul>



            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">จัดการข้อมูลไดอารี่</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('blog_subjects') }}">
                        <i class="ni ni-book-bookmark" style="color: #5e72e4"></i> จัดการข้อมูลไดอารี่
                    </a>
                </li>

            </ul>


            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">รายงานแบบฟอร์มกรอกข้อมูลตามภาระงานประจำ</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('/forms-admin') }}">
                        <i class="ni ni-book-bookmark" style="color: #5e72e4"></i> รายงานแบบฟอร์มกรอกข้อมูลตามภาระงานประจำ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('/repostform') }}">
                        <i class="ni ni-book-bookmark" style="color: #5e72e4"></i> รายงานสรุปกรอกข้อมูลตามภาระงานประจำ
                    </a>
                </li>

            </ul>



        @endif
        @if(Auth::user()->position == 'admin' || Auth::user()->position ==  "professor" || Auth::user()->position ==  "operator"  )

        {{-- <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">ข้อมูลบุคคล</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="{{URL('people')}}">
                    <i class="ni ni-single-02" style="color: #fb6340"></i> ข้อมูลบุคคล
                </a>
            </li>


        </ul> --}}

        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">กลุ่มเป้าหมาย</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="{{URL('targetgroups')}}">
                    <i class="ni ni-single-02" style="color: #fb6340"></i> กลุ่มเป้าหมาย
                </a>
            </li>


        </ul>

        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">แบบสำรวจ </h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="{{URL('survey')}}">
                    <i class="ni ni-single-copy-04" style="color: #fb6340"></i> แบบสำรวจเพื่อเฝ้าระวังการแพร่ระบาดของโรคติดต่ออุบัติใหม่
                </a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{URL('goal/1')}}">
                        <i class="ni ni-single-copy-04" style="color: #fb6340"></i> แบบสอบถามรายงานการจัดทำตำบลโปรไฟล์
                    </a>
                </li>
            </ul>


        </ul>


        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">ไดอารี่</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ URL('blog_details') }}">
                    <i class="ni ni-book-bookmark" style="color: #fb6340"></i> ไดอารี่
                </a>
            </li>

        </ul>

        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">แบบฟอร์มกรอกข้อมูลตามภาระงานประจำ</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ URL('forms') }}">
                    <i class="ni ni-book-bookmark" style="color: #fb6340"></i> แบบฟอร์มกรอกข้อมูลตามภาระงานประจำ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL('/repostform') }}">
                    <i class="ni ni-book-bookmark" style="color: #fb6340"></i> รายงานสรุปกรอกข้อมูลตามภาระงานประจำ
                </a>
            </li>

        </ul>



        @endif

        @if(Auth::user()->position == 'admin' || Auth::user()->position ==  "professor" || Auth::user()->position_orther ==  "operator"   || Auth::user()->position_orther ==  "admin"  )
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Todo Lists</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ URL('todolist') }}">
                    <i class="ni ni-book-bookmark" style="color: #5e72e4"></i> Todo Lists
                </a>
            </li>
        </ul>
        @endif

        @if (Auth::user()->position == 'admin'  )
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                        <i class="ni ni-spaceship"></i> Getting started
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                        <i class="ni ni-palette"></i> Foundation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                        <i class="ni ni-ui-04"></i> Components
                    </a>
                </li>
            </ul>

            @endif
        </div>
    </div>
</nav>
