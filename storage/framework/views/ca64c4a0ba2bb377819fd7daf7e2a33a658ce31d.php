<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arvipi Access Control</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <script src="<?php echo e(asset('js/jquery-3.2.0.min.js')); ?>" charset="utf-8"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Arvipi Access Control
                </div>

                <div class="links">
                    <a href="#about" data-toggle="tab" aria-expanded="true">About</a>
                    <a href="#press">Press</a>
                    <a href="https://github.com/rakhaviantoni/ArvipiACL-Laravel-5.4" target="_blank">GitHub</a>
                    <a href="#contact">Contact</a>
                  </div>
                    <div id="myTabContent" class="col-md-12 tab-content">
                      <div class="tab-pane fade active in" id="about">
                        <p>PT. Arvipi Limited is an IT company that's formed in 2017 where their first application (Adoreo) launched with more than 100,000 registered users in a month. With their focus on creating solution for the country, they are able to grow up fast with providing some Web Service that able to helps other’s production efficiency.</p>
                      </div>
                      <div class="tab-pane fade" id="press">
                        <p>Press Release Coming Soon on ArvipiACL.</p>
                      </div>
                      <div class="tab-pane fade" id="contact">
                        <p>rakhaviantoni.my.id</p>
                      </div>
                    </div>
            </div>
        </div>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    </body>
</html>
