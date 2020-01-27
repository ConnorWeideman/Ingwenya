<?php get_header()?>
<main>
    <section id="projects1" class="design">
        <section id="about">
            <h2>OPERATIONS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere eros purus, blandit ultricies nulla
                consectetur eget. Maecenas in nibh id dui varius sollicitudin. Aliquam sagittis lectus quis nibh
                efficitur vulputate. In augue lacus, sodales a lobortis vel, lobortis in lorem. Orci varius natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras egestas dui nunc, ut vulputate
                sem iaculis eu. Duis ac auctor urna. Fusce in tellus mattis, malesuada mauris in, volutpat lacus. Etiam
                ac neque id sem convallis blandit sit amet vel mi.

                Mauris at magna eu orci dignissim congue non nec felis. Donec interdum sit amet mi vitae rutrum. Orci
                varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec at nisi
                ultrices, tincidunt nulla in, tempor ex. Curabitur id velit dui. Maecenas ut consectetur ex.
                Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci volutpat, ut efficitur
                felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque leo, non blandit felis sagittis
                sit amet. Sed placerat vel tortor id molestie. Cras dignissim nulla sed diam convallis blandit. Nulla
                facilisi. Cras auctor lorem in leo scelerisque, eget eleifend dui facilisis. Vivamus purus nisl, sodales
                eu lectus nec, suscipit sodales ante. Ut dolor ligula, dictum at augue volutpat, sodales consequat
                risus.</p>
        </section>
        <section id="toggles">
            <select id="location">
                <option default value="all">Location</option>
                <option value="africa">Africa</option>
                <option value="europe">Europe</option>
                <option value="asia">Asia</option>
                <option value="north-america">North America</option>
                <option value="south-america">South America</option>
                <option value="antarctica">Antarctica</option>
            </select>
            <select id="capacity">
                <option default value="all">Capacity</option>
                <option value="<10">
                    < 10t/d </option>
                <option value="10-50">10 - 50t/d
                </option>
                <option value="50-100">50 - 100t/d</option>
                <option value=">100">> 100t/d</option>
            </select>
            <select id="type">
                <option default value="all">Type</option>
                <option value="gold">Gold</option>
                <option value="iron">Iron</option>
                <option value="coal">Coal</option>
                <option value="nickel">Nickel</option>
            </select>
        </section>
        <section id="project-row">
            <div class="project show africa >100 iron">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show asia >100 gold">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show africa <10 coal">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show 10-50 europe iron">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show asia 50-100 iron">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show south-america 50-100 gold">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show south-america <10 nickel">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show north-america >100 gold">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show south-america 10-50 coal">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show >100 africa coal">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show 50-100 europe gold">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
            <div class="project show 10-50 asia coal">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/Plant3.jpg">
                <div class="overlay">
                    <h3>Project</h3>
                    <p>Location: Kimberly</p>
                    <p>Capacity: 100t/h</p>
                    <p>Type: Iron</p>
                    <p>Other: Pellentesque vitae mattis metus, sit amet mollis dui. Morbi luctus libero et orci
                        volutpat, ut efficitur felis viverra. Nulla accumsan ornare luctus. Etiam pharetra pellentesque
                        leo, non blandit felis sagittis sit amet. Sed placerat vel tortor id molestie. Cras dignissim
                        nulla sed diam convallis blandit. Nulla facilisi. Cras auctor lorem in leo scelerisque, eget
                        eleifend dui facilisis. Vivamus purus nisl, sodales eu lectus nec, suscipit sodales ante. Ut
                        dolor ligula, dictum at augue volutpat, sodales consequat risus.
                    </p>
                </div>
            </div>
        </section>
    </section>
</main>
<?php get_footer()?>