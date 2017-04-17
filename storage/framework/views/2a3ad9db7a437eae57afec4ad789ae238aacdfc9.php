<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery-3.2.0.min.js')); ?>" charset="utf-8"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <?php if(Auth::check()): ?>
                          <li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
                          <?php if((Auth::user()->position->positionname) == 'Member'): ?>
                            &nbsp
                          <?php else: ?>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <?php echo e(Auth::user()->position->positionname); ?>'s Menu <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                              <?php echo Auth::user()->position->press ? '<li><a href="'.$press= url('/home/press').'">Press Release Management</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->users ? '<li><a href="'.$users= url('/home/users').'">Users Management</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->role ? '<li><a href="'.$role= url('/home/role').'">Role Permission</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->news ? '<li><a href="'.$news= url('/home/news').'">News Management</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->payroll ? '<li><a href="'.$payroll= url('/home/payroll').'">Payroll</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->employees ? '<li><a href="'.$employees= url('/home/employees').'">Employees Database</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->recruitment ? '<li><a href="'.$recruitment= url('/home/recuitment').'">Recruitment Tracking</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->marketing ? '<li><a href="'.$marketing= url('/home/marketing').'">Marketing Report</a></li>' : ''; ?>

                              <?php echo Auth::user()->position->sales ? '<li><a href="'.$sales= url('/home/sales').'">Sales Report</a></li>' : ''; ?>

                              </ul>
                          </li>
                        <?php endif; ?>
                      <?php endif; ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> - <?php echo e(Auth::user()->position->positionname); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js//dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js//jquery.dataTables.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
