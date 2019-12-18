<?php get_header()?>
<main>
    <section id="contact1" class="design">
        <div id="box">
            <div id="left">
                <form>
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Email...">
                    <label for="message">Message:</label>
                    <textarea id="message" placeholder="Message..."></textarea>
                    <input id="submit" type="submit">
                </form>
            </div>
            <div id="right">
                <div class="contact">
                    <div class="details">+27 (0) 13 656 2440 / 4758</div>
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact">
                    <div class="details">+27 (0) 13 656 2401</div>
                    <i class="fas fa-fax"></i>
                </div>
                <div class="contact">
                    <div class="details">info@ingwenyamp.co.za</div>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact">
                    <div class="details location">
                        <p>Unit 12</p>
                        <p>Smokey Mountain Office Village</p>
                        <p>Route N4 Office Park</p>
                        <p>Ben Fleur Ext 11</p>
                        <p>Emalahleni</p>
                    </div>
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <section id="contact2" class="design">
        <div id="wrap">
            <div class="circle"></div>
            <div class="column">
                <div class="icon" id="phone">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <div class="column">
                <div class="icon" id="fax">
                    <i class="fas fa-fax"></i>
                </div>
            </div>
            <div class="column">
                <div class="icon" id="email">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="column">
                <div class="icon" id="location">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
            <div id="details">
                <div id="phone">
                    <h2>Phone:</h2>
                    <p>+27 (0) 13 656 2440 / 4758</p>
                </div>
                <div id="fax">
                    <h2>Fax:</h2>
                    <p>+27 (0) 13 656 2401</p>
                </div>
                <div id="email">
                    <h2>Email:</h2>
                    <p>info@ingwenyamp.co.za</p>
                </div>
                <div id="location">
                    <h2>Location:</h2>
                    <p>Unit 12</p>
                    <p>Smokey Mountain Office Village</p>
                    <p>Route N4 Office Park</p>
                    <p>Ben Fleur Ext 11</p>
                    <p>Emalahleni</p>
                </div>
            </div>
        </div>
        <div id="form">
            <h2>Leave a message:</h2>
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email...">
                <label for="product">Service:</label>
                <select id="product">
                    <option default value="Unspecified">Service...</option>
                    <option value="thickeners">Operation of Facilities</option>
                    <option value="agitation">Feasibility and Due Diligence Studies</option>
                    <option value="jigs">Engineering Design and Fabrication</option>
                    <option value="larcodems">Design and Build of Coal Processing Plants</option>
                    <option value="filters">Bomax Engineering</option>
                </select>
                <label for="message">Message:</label>
                <textarea id="message" placeholder="Message..."></textarea>
                <input id="submit" type="submit">
            </form>
        </div>
    </section>
    <input id="main-toggle" class="toggle" type="range" min="0" max="1" value="0">
</main>
<?php get_footer()?>