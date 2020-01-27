<?php get_header()?>

<main>
    <section class="design" id="main3">
        <section id="about">
            <h2>ABOUT US</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor diam in felis posuere, et
                vestibulum mauris facilisis. Pellentesque dapibus mauris a condimentum imperdiet. Donec ut ante blandit,
                viverra sem vitae, volutpat sem. Vestibulum dictum, urna sit amet pretium volutpat, augue libero commodo
                dolor, eu gravida ligula est vel tortor. Sed semper nisi risus, nec fermentum neque faucibus in. Nulla
                et metus orci. Morbi laoreet efficitur arcu, sed congue diam tristique et. Donec elementum dictum
                mauris, non viverra dui commodo id. Suspendisse porta posuere commodo. Etiam ut ipsum faucibus,
                ultricies odio eu, finibus ligula. Morbi pulvinar feugiat arcu, vitae efficitur nisl egestas ut.
                Phasellus sed pretium felis. Quisque elementum, ligula condimentum rutrum mollis, purus lectus facilisis
                leo, sed egestas eros orci a tellus. Praesent posuere imperdiet tempus.</p>
            <p>Maecenas imperdiet tempus orci quis semper. Cras eget augue neque. Cras non justo ut justo auctor
                pretium. Vestibulum a ornare odio. Vivamus imperdiet vehicula lectus, non iaculis nunc tincidunt eget.
                Vestibulum et luctus mi, sed pretium diam. Cras varius feugiat lectus, at volutpat tellus consequat et.
                Nulla porta odio sit amet convallis tincidunt. Nam vel purus id quam convallis porttitor non sit amet
                neque. Vestibulum mauris felis, condimentum eu luctus non, elementum sit amet urna. Proin laoreet turpis
                a metus dignissim, ac eleifend velit euismod. Quisque a metus leo.</p>
        </section>
        <section id="products">
            <h2>PRODUCTS / SERVICES</h2>
            <div id="toggle">
                <label for="filter">Filter By:</label>
                <select id="filter">
                    <option value="all">All</option>
                    <option value="thickeners">Operation of Facilities</option>
                    <option value="agitation">Feasibility and Due Diligence Studies</option>
                    <option value="jigs">Engineering Design and Fabrication</option>
                    <option value="larcodems">Design and Build of Coal Processing Plants</option>
                    <option value="filters">Bomax Engineering</option>
                </select>
            </div>
            <div id="product-row">
                <div class="product jigs">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/10/Jigs.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Operation and maintenance of processing facilities</a>
                </div>
                <div class="product other">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant3.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Design and build of coal processing of coal processing
                        plants</a>
                </div>
                <div class="product agitation">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Plant2.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Plant modifications, retrofits and additions</a>
                </div>
                <div class="product agitation">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-1.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">General metallurgical consulting</a>
                </div>
                <div class="product filters">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Three-Product-Cyclone.png">
                    <a href="<?php bloginfo('wpurl')?>/services">Consultation: Feasibility and Due diligence Studies</a>
                </div>
                <div class="product thickeners">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Picture1-2.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Engineering design and fabrication</a>
                </div>
                <div class="product other">
                    <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/Umlalazi.jpg">
                    <a href="<?php bloginfo('wpurl')?>/services">Modernization of plant</a>
                </div>
            </div>
        </section>
        <section id="projects">
            <h2>OPERATIONS</h2>
            <div id="project-row">
                <div class="project">
                    <h3>Africa</h3>
                    <a href="<?php bloginfo('wpurl')?>/operations">Kimberly</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Cape Town</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Lexington</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Mining Project</a>
                </div>
                <div class="project">
                    <h3>Europe</h3>
                    <a href="<?php bloginfo('wpurl')?>/operations">Kimberly</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Cape Town</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Lexington</a>
                    <a href="<?php bloginfo('wpurl')?>/operations">Mining Project</a>
                </div>
                <div class="project">
                    <h3>Asia</h3>
                    <a href="<?php bloginfo('wpurl')?>/project">Kimberly</a>
                    <a href="<?php bloginfo('wpurl')?>/project">Cape Town</a>
                    <a href="<?php bloginfo('wpurl')?>/project">Lexington</a>
                    <a href="<?php bloginfo('wpurl')?>/project">Mining Project</a>
                </div>
                <div class="project">
                    <h3>South America</h3>
                    <a href="<?php bloginfo('wpurl')?>/project">Kimberly</a>
                    <a href="<?php bloginfo('wpurl')?>/project">Cape Town</a>
                    <a href="<?php bloginfo('wpurl')?>/project">Lexington</a>
                    <a href="<?php bloginfo('wpurl')?>/project">Mining Project</a>
                </div>
            </div>
        </section>
        <section id="news">
            <h2>NEWS</h2>
            <div id="news-row">
                <a href="<?php bloginfo('wpurl')?>/news" class="news">
                    <div class="date">18</div>
                    <div class="title">A News Story</div>
                </a>
                <a href="<?php bloginfo('wpurl')?>/news" class="news">
                    <div class="date">15</div>
                    <div class="title">This News Story</div>
                </a>
                <a href="<?php bloginfo('wpurl')?>/news" class="news">
                    <div class="date">12</div>
                    <div class="title">Some News Story</div>
                </a>
                <a href="<?php bloginfo('wpurl')?>/news" class="news">
                    <div class="date">10</div>
                    <div class="title">Another News Story</div>
                </a>
            </div>
        </section>
        <section id="clients">
            <h2>OUR CLIENTS</h2>
            <div id="client-row">
                <div class="client">
                    <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/CNY_logo-01.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2020/01/images.png">
                </div>
            </div>
        </section>
    </section>
</main>

<?php get_footer()?>