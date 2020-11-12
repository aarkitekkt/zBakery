<?php 
get_header();

while(have_posts()) {
    the_post();?>
    <div id="pageBanner" class="container-fluid">
        <div id="pageTitle">
            <h1 class="text-center text-white p-4 mt-4"><?php the_title(); ?></h1>
            <h5 class="text-center text-white px-5"><?php the_content(); ?></h5>
        </div>
        
        <img id="pageBannerImage" src="<?php 
        $imgSource = get_the_post_thumbnail_url();
        echo $imgSource;
        ?>" alt="bannerImage">
    </div>

<h3 class="text-center my-5">Browse our flavors</h3>  

<div class="container mb-5">
    <div class="d-flex justify-content-center flex-wrap">
        <?php 
            $flavorList = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'flavor'
            ));

        while($flavorList->have_posts()) {
            $flavorList->the_post(); ?>         
        <div class="flavor d-flex flex-column align-items-center m-3 p-4">
            <img class="flavorImage mb-3" src="<?php 
            $imgSource = get_the_post_thumbnail_url();
            echo $imgSource;
            ?>" alt="cupcakeImage">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>  
        <?php }

    ?>
    </div>
</div> 

<?php }
get_footer();
?>