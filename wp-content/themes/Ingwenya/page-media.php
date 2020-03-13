<?php get_header()?>
<main>
    <section id="news1" class="design">
        <h1>MEDIA</h1>
        <div class="expand">
            <h2>GALLERY</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="gallery">
            <div id="wrap">
                <div class="photo">
                    <img
                        src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/King-Zwelithini-and-Vuslat-Bayoglu-cutting-ribbon-at-the-opening-of-ZAC-discard-plantN-ZAC.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/Ingwenya-management-in-China.jpg">
                </div>
                <div class="photo">
                    <img
                        src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/Ingwenya-directors-in-China-2-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/Capture.png">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/20180814_131807-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/20180814_131540-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/20180814_131507-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/20180814_131505-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/03/Phalanndwa-plant.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-2.jpg">
                </div>
            </div>
        </section>
        <div class="expand">
            <h2>NEWS</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="news">
            <?php
            $args = array(
            'post_type'      => 'post',
            'posts_per_page'    => '2'
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ):?>

            <div class="circle"></div>

            <?php while ($query->have_posts()) : $query->the_post();?>

            <article class="news">
                <div class="circle"></div>
                <div class="left">
                    <div class="day"><?php the_time("d")?></div>
                    <div class="month"><?php the_time("F")?></div>
                </div>
                <div class="right">
                    <h2><?php the_title()?></h2>
                    <p><?php the_content()?></p>
                </div>
            </article>
            <?php endwhile;
            echo paginate_links(
                array(
                    'format'             => '/page/%#%',
                    'end_size'           => 1,
                    'mid_size'           => 3,
                    'prev_next'          => true,
                    'prev_text'          => __('«'),
                    'next_text'          => __('»'),
                )
            );
        else:?>
            <p>There are currently no blog posts, please check back later.</p>
            <?php endif; wp_reset_query()?>
        </section>
        <div class="expand">
            <h2>PRESS RELEASES</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="press">
            <?php
            $args = array(
            'post_type'         => 'page',
            'post_category'     => 'press',
            'post_parent'       => $post->ID,
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ): while ($query->have_posts()) : $query->the_post();?>
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
            <?php endwhile; else:?>
            <p>There are currently no press releases, please check back later.</p>
            <?php endif?>
        </section>
        <div class="expand">
            <h2>DOWNLOADS</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="downloads">
            <p>There are currently no downloads, please check back later.</p>
        </section>
    </section>
</main>
<?php get_footer()?>