<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<!-- navbar -->
<div class="navbar-fixed">
    <nav class="blue darken-2">
        <div class="container">

            <div class="nav-wrapper">
                <a href="#home" class="brand-logo">PM. Corps</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- slider -->
<div class="slider">
    <ul class="slides">
        <li>
            <img src="<?= base_url(); ?>/image/slider/1c.png">
            <div class="caption center-align">
                <h3>Politeknik Manufaktur Bandung</h3>
                <h5 class="light grey-text text-lighten-3">Production Monitoring System</h5>
            </div>
        </li>
        <li>
            <img src="<?= base_url(); ?>/image/slider/2c.png">
            <div class="caption left-align">
                <h3>Performance Monitoring</h3>
                <h5 class="light grey-text text-lighten-3">OEE calculation automatic</h5>
            </div>
        </li>
        <li>
            <img src="<?= base_url(); ?>/image/slider/3.png">
            <div class="caption right-align">
                <h3>Industry 4.0</h3>
                <h5 class="light grey-text text-lighten-3">Internet of Things!</h5>
            </div>
        </li>
    </ul>
</div>>

<!-- side nav -->
<ul class="sidenav" id="mobile-nav">
    <li><a href="">About Us</a></li>
    <li><a href="">Clients</a></li>
    <li><a href="">Services</a></li>
    <li><a href="">Portfolio</a></li>
    <li><a href="">Contact Us</a></li>
</ul>

<!-- about us -->

<section id="about" class="about scrollspy">
    <div class="container">
        <h3 class="center light grey-text text-darken-3">About Us</h3>
        <div class="row">
            <div class="col m5 light">
                <h5>Tugas Akhir</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi vero sit eveniet tenetur nisi? Pariatur vero sint quod debitis. Non deleniti delectus, quos sequi facilis ex porro illo harum pariatur?</p>
            </div>
            <div class="col m6 light">
                <p>Web Development</p>
                <div class="progress">
                    <div class="determinate blue" style="width: 90%"></div>
                </div>
                <p>Mobile App Development</p>
                <div class="progress">
                    <div class="determinate blue" style="width: 70%"></div>
                </div>
                <p>Game Development</p>
                <div class="progress">
                    <div class="determinate blue" style="width: 50%"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients -->
<div id="clients" class="parallax-container scrollspy">
    <div class="parallax"><img src="<?= base_url(); ?>/image/slider/4.png"></div>

    <div class="container clients">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
            <div class="col m4 s12 center">
                <!-- <img src="/image/clients/gojek.png"> -->
            </div>
            <div class="col m4 s12 center">
                <img src="<?= base_url(); ?>/image/clients/polman.png">
            </div>
            <div class="col m4 s12 center">
                <!-- <img src="/image/clients/traveloka.png"> -->
            </div>
        </div>
    </div>
</div>

<!-- services -->
<section id="services" class="services grey lighten-3 scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Our Services</h3>
        <div class="row">
            <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">desktop_windows</i>
                    <h5>Web Development</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae.</p>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">developer_mode</i>
                    <h5>Mobile App</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae.</p>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">games</i>
                    <h5>Game Development</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- portfolio -->
<section id="portfolio" class="portfolio scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Portfolio</h3>
        <div class="row">
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/1.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/2.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/3.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/4.png" class="responsive-img materialboxed">
            </div>
        </div>
        <div class="row">
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/5.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/6.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/1.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
                <img src="<?= base_url(); ?>/image/portfolio/2.png" class="responsive-img materialboxed">
            </div>
        </div>
    </div>
</section>

<!-- contact us -->
<section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
        <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
        <div class="row">
            <div class="col m5 s12">
                <div class="card-panel blue darken-2 center white-text">
                    <i class="material-icons">email</i>
                    <h5>Contact</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, sequi.</p>
                </div>
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4>Our Office</h4>
                    </li>
                    <li class="collection-item">Production Monitoring.Corps</li>
                    <li class="collection-item">Jl. Ciwaru (Filla Yodam) Bandung</li>
                    <li class="collection-item">West Java, Indonesia</li>
                </ul>
            </div>
            <div class="col m7 s12">
                <form action="">
                    <div class="card-panel">
                        <h5>Please Fill Out this Form</h5>
                        <div class="input-field">
                            <input type="text" name="name" id="name" required class="validate">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="phone" id="phone">
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="input-field">
                            <textarea name="message" id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <button type="submit" class="btn blue darken-2">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>



<div class="container scrollspy" id="login">

    <!-- Outer Row -->
    <div class="row">

        <div class="col">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h1>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= route_to('login') ?>" method="post" class="user">

                                    <?= csrf_field() ?>

                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>">

                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>

                                    </div>

                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-group">
                                            <label class="custom-control-label" for="customCheck">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" name="remember" class="custom-control-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                    <?= lang('Auth.rememberMe'); ?>
                                            </label>
                                        </div>
                            </div>
                        <?php endif; ?>

                        <button type="submit" class="btn btn-primary green">
                            <?= lang('Auth.loginAction') ?>
                        </button>
                        </form>
                        <hr>
                        <?php if ($config->activeResetter) : ?>
                            <div class="text-center">
                                <a class="small" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
                            </div>
                        <?php endif; ?>

                        <?php if ($config->allowRegistration) : ?>
                            <div class="text-center">
                                <a class="small" href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
                            </div>
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- footer -->

<footer class="blue darken-2 white-text center">
    <p class="flow-text">Production Monitoring System. Copyright 2021.</p>
</footer>


</div>
<?= $this->endSection(); ?>