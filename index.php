
<?php get_header(); ?>


        <div id="mainBanner" class="container-fluid">
            <div id="bannerTitle" class="d-flex flex-column align-items-center">
            <img id="bannerLogo" src="<?php echo get_theme_file_uri('/images/logo-07.png') ?>" alt="mainLogo"/>
                <h4 id="mainTagline" class="text-white mt-4"><?php 
                $mainTagline = get_bloginfo('description');
                echo $mainTagline;
                ?></h4>
            </div>
            <img id="mainBannerImage" src="<?php echo get_theme_file_uri('/images/landing.png') ?>" alt="bannerImage"/>
        </div>

        <div class="container">

            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

            <div class="row mb-5">
                <div class="col-12 col-md-4 my-5">
                <a href="<?php echo site_url('/about');?>">
                    <div class="border border-secondary rounded-circle mainDescription m-auto d-flex justify-content-center align-items-center">
                        <h3>about</h3>
                    </div>
                </a>                   
                </div>
                <div class="col-12 col-md-4 my-5">
                <a href="<?php echo site_url('/flavors');?>">
                    <div class="border border-secondary rounded-circle mainDescription m-auto d-flex justify-content-center align-items-center">
                        <h3>flavors</h3>
                    </div>
                </a>                   
                </div>
                <div class="col-12 col-md-4 my-5">
                <a href="<?php echo site_url('/pricing');?>">
                    <div class="border border-secondary rounded-circle mainDescription m-auto d-flex justify-content-center align-items-center">
                        <h3>pricing</h3>
                    </div>
                </a>                   
                </div>
                
            </div>
        </div>


    <?php get_footer(); ?>