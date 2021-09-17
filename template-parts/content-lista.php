<?php 

    $args = array(
        "post_type" => array("producto"),
        "posts_per_page" => -1
    );

    $productos = new WP_Query($args);
?>

<div class="productos__container">
    <?php if($productos->have_posts()){ ?>
        <?php while($productos->have_posts()){ $productos->the_post();?>
        <div class="productos__card">
            <?php the_post_thumbnail("post-thumbnail") ?>
            <div class="producto__caption">
                <div class="productos__desc">
                    <a class="producto__link" href="<?php the_permalink();?>">
                        <h4 class="productos__titulo"><?php the_title(); ?></h4>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } ?>
</div>