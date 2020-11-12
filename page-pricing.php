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

  <div id="pricingGuide" class="container-fluid py-4">
        <div class="container">
            <h2 class="my-5 text-center">Pricing Guides</h2>
            <div class="d-flex justify-content-center flex-wrap my-5">
                <table class="table bg-light">
                    <thead>
                        <th class="text-center border-0 text-light" colspan="2">Mini Cupcake Boxes</th>
                    </thead>
                    <tbody>
                        <?php 
                            $priceList = new WP_Query(array(
                                'post_type' => 'price'
                            ));

                            while($priceList->have_posts()) {
                                $priceList->the_post(); ?> 
                                
                                <tr><?php 
                                    $postId = get_the_ID();
                                    $costType = get_post_custom_values('Type', $postId); 
                                    if ($costType[0] === 'mini') { 
                                        $item = get_the_title();
                                        $cost = get_the_content();
                                        echo '<td>' . $item . '</td>';
                                        echo '<td>' . $cost . '</td>';
                                };?></tr>  
                            <?php }
                        ?>                
                    </tbody>
                </table>
                <table class="table bg-light">
                    <thead>
                        <th class="text-center border-0 text-light" colspan="2">Single Tier Cakes</th>
                    </thead>
                    <tbody>
                        <?php 
                            $priceList = new WP_Query(array(
                                'post_type' => 'price'
                            ));

                            while($priceList->have_posts()) {
                                $priceList->the_post(); ?> 
                                
                                <tr><?php 
                                    $postId = get_the_ID();
                                    $costType = get_post_custom_values('Type', $postId); 
                                    if ($costType[0] === 'single') { 
                                        $item = get_the_title();
                                        $cost = get_the_content();
                                        echo '<td>' . $item . '</td>';
                                        echo '<td>' . $cost . '</td>';
                                };?></tr>  
                            <?php }
                        ?>                
                    </tbody>
                </table>
                <table class="table bg-light">
                    <thead>
                        <th class="text-center border-0 text-light" colspan="2">Multi Tier Cakes</th>
                    </thead>
                    <tbody>
                        <?php 
                            $priceList = new WP_Query(array(
                                'post_type' => 'price'
                            ));

                            while($priceList->have_posts()) {
                                $priceList->the_post(); ?>
                                <tr><?php 
                                    $postId = get_the_ID();
                                    $costType = get_post_custom_values('Type', $postId); 
                                    if ($costType[0] === 'multi') { 
                                        $item = get_the_title();
                                        $cost = get_the_content();
                                        echo '<td>' . $item . '</td>';
                                        echo '<td>' . $cost . '</td>';
                                };?></tr>  
                            <?php }
                        ?>                
                    </tbody>
                </table>

            </div>
        </div>
    </div> 

<?php }
get_footer();
?>