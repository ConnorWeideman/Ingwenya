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
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Kiepersol-8th-Nov-2011-026.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/ING0518-1-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Phalanndwa3-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9296-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9284-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9230-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/tiling-@Bomax-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/tiling-@-Bomax-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BOMAX-welding-photo-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Ingwenya-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Umlalazi.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture2.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/N-C-C-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant4.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Three-Product-Cyclone.png">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant2.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0623.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0529-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0646-1.jpg">
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
            <div class="circle"></div>
            <?php
            $args = array(
            'post_type'      => 'post',
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post();?>

            <a href="<?php the_permalink()?>" class="news">
                <div class="circle"></div>
                <div class="left">
                    <div class="day"><?php the_time("d")?></div>
                    <div class="month"><?php the_time("F")?></div>
                </div>
                <div class="right">
                    <h2><?php the_title()?></h2>
                    <p><?php the_excerpt()?></p>
                </div>
            </a>
            <?php endwhile; endif; wp_reset_query()?>
        </section>
        <div class="expand">
            <h2>PRESS RELEASES</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="press">
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
            <div class="release">
                <h3>Press Release</h3>
                <p>Vivamus quis dapibus nisi. Maecenas porttitor risus et urna tincidunt lobortis. Sed ultricies sapien
                    a felis mattis, quis tempor nunc accumsan. Nam a orci quis purus imperdiet semper vel sed velit.
                    Fusce malesuada vehicula lectus et ultrices. Curabitur vestibulum ac erat pharetra cursus.
                    Vestibulum eget velit eu libero tempus fermentum. Sed accumsan sodales dui, sed pretium elit auctor
                    ac. Proin facilisis varius sem id vehicula....</p>
            </div>
        </section>
        <div class="expand">
            <h2>DOWNLOADS</h2>
            <i class="fas fa-chevron-down"></i>
        </div>
        <section id="downloads">
            <p>Download1...</p>
            <p>Download2...</p>
            <p>Download3...</p>
            <p>Download4...</p>
            <p>Download5...</p>
            <p>Download6...</p>
        </section>
    </section>
    <section id="news2" class="design">
        <h1>MEDIA</h1>
        <div id="toggles">
            <a id="gallery">GALLERY</a>
            <a id="news">NEWS</a>
            <a id="press-releases">PRESS RELEASES</a>
            <a id="downloads">DOWNLOADS</a>
        </div>
        <section id="gallery">
            <div id="wrap">
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Kiepersol-8th-Nov-2011-026.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/ING0518-1-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Phalanndwa3-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9296-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9284-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BE9230-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/tiling-@Bomax-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/tiling-@-Bomax-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/BOMAX-welding-photo-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2020/01/Ingwenya-scaled.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Umlalazi.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture2.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/N-C-C-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant4.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Three-Product-Cyclone.png">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant2.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0623.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0529-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/ING0646-1.jpg">
                </div>
                <div class="photo">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-2.jpg">
                </div>
            </div>
        </section>
        <section id="news">
            <?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post();?>
            <article class="news">
                <div class="wrap">
                    <img src="<?php the_post_thumbnail_url()?>">
                    <div class="title-date">
                        <a href="<?php the_permalink()?>">
                            <h2><?php the_title()?></h2>
                        </a>
                        <p><?php the_time("jS F Y")?></p>
                    </div>
                    <p><?php the_excerpt()?></p>
                </div>
                <div class="circle"></div>
            </article>
            <?php endwhile; endif?>
        </section>
        <section id="press-releases">
            <div id="wrap">
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
                <article class="press">
                    <h3>Press Release</h3>
                    <p>Cras at lacinia orci, venenatis lobortis sem. Nunc et pharetra ipsum. Cras sit amet libero
                        tincidunt, pretium mi eget, pretium magna. Maecenas ultricies ante id leo imperdiet, et
                        malesuada urna consequat. Morbi sodales lorem sit amet dolor finibus, vitae malesuada erat
                        tristique. Suspendisse potenti. Praesent ut massa risus. Mauris ornare non augue eu facilisis.
                        Sed nec odio at elit porta accumsan condimentum sagittis lorem. Nullam lobortis orci sit amet
                        tincidunt molestie.</p>
                </article>
            </div>
        </section>
        <section id="downloads">
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
            <div class="download">
                <p>Download....</p>
            </div>
        </section>
    </section>
    <input id="main-toggle" class="toggle" type="range" min="0" max="1" value="0">
</main>
<?php get_footer()?>