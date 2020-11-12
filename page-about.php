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

    <div id="team" class="container-fluid py-4">
    <div class="container"> 
    <h2 class="my-5 text-center">Our Team</h2>
    
    <?php 
      $teamList = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'People'
      ));

      while($teamList->have_posts()) {
        $teamList->the_post(); ?>
      <div class="row my-5">
      <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
        <img class="teamPic mb-3" src="<?php 
        $imgSource = get_the_post_thumbnail_url();
        echo $imgSource;
        ?>" alt="profileImg">
        <!-- <h5 class="text-secondary"><?php  ?></h5> -->
      </div>
      <div class="col-12 col-md-9">
        <h4 class="text-center text-md-left">
        <?php
        the_title(); ?> - <span class="text-secondary">
        <?php 
        $postId = get_the_ID();
        $role = get_post_custom_values('Role', $postId); 
        echo $role[0];
        ?> </span>
        </h4>
        <p><?php the_content(); ?></p>
      </div>
      </div>
      
     <?php }
  ?>   
    
    </div>
    </div>

<?php }
get_footer();
?>