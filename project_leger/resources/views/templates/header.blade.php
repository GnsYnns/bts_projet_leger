<header>
    <div class="sub-header">
        <div class="first-container">
            <!-- logo for the larger screen only  -->
            <div class="logo">
                <img src="./icons/airbnb-logo-2.png" alt="airbnb logo" />
            </div>
            <div class="airbnb-name">
                <h1>airbnb</h1>
            </div>
        </div>

        <!-- top bar for search etc. -->
        <div class="middle-container">
            <div class="top-bar">
                <!-- when the screen size is large -->
                <div class="desktop-options">
                    <div class="text">
                        <a href="#">
                            <h4>Anywhere</h4>
                        </a>
                    </div>
                    <div class="text">
                        <a href="#">
                            <h4>Any week</h4>
                        </a>
                    </div>
                    <div class="last-text">
                        <a href="#">
                            <h4>Add guests</h4>
                        </a>
                    </div>
                    <div class="search">
                        <a href="#">
                            <img class="icon" src="./icons/magnifying.svg" alt="magnifying_glass_icon" /></a>
                    </div>
                </div>

                <!-- for mobile version only -->
                <div class="search-container">
                    <div class="search">
                        <a href="#">
                            <img class="icon" src="./icons/magnifying.svg" alt="magnifying_glass_icon" /></a>
                    </div>
                </div>

                <!-- top bar  -->
                <div class="top-bar-text">
                    <a href="#">
                        <h4>Anywhere</h4>
                        <p>Any week <span>·</span> <span>Add guests</span></p>
                    </a>
                </div>

                <!-- filter button and icon  -->
                <div class="filter-container" tabindex="0">
                    <div class="blur"></div>

                    <div class="desktop-filter" tabindex="0">
                        <a href="#filter-popup"><img src="./icons/filter.png" alt="filter icon" />
                            <p>Filters</p>
                        </a>
                    </div>

                    <div class="blur-2"></div>

                    <div class="filter" tabindex="0">
                        <a href="#filter-popup">
                            <img class="icon" src="./icons/filter.png" alt="filter_icon" />
                        </a>
                    </div>

                    <!-- filter main body  -->

                    <div>
                        <div class="filter-popup" id="filter-popup">
                            <div class="filter-menu">
                                <form>
                                    <div class="filter-heading">
                                        <h4>Filters</h4>
                                        <a href="#" tabindex="0">
                                            <img class="icon" src="./icons/close.svg" alt="cross icon" /></a>
                                    </div>

                                    <!-- price range selection  -->

                                    <div class="price">
                                        <h3>Price range</h3>
                                        <p>The average nightly price is £181</p>
                                        <div class="range">
                                            <div class="price-box">
                                                <div class="price-text">min price</div>
                                                <div class="input-area">
                                                    <div>£</div>

                                                    <input type="number" id="minval" name="minval" value="8" min="8"
                                                        max="973" />
                                                </div>
                                            </div>

                                            <div class="divider">-</div>

                                            <div class="price-box">
                                                <div class="price-text">max price</div>
                                                <div class="input-area">
                                                    <div>£</div>

                                                    <input type="number" id="maxval" name="maxval" value="973" min="8"
                                                        max="973" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- place type selection  -->

                                    <div class="place-type">
                                        <h3>Type of place</h3>
                                        <div class="place-grid">
                                            <div class="place-type-option">
                                                <div class="place-text">
                                                    <h5>Entire place</h5>
                                                    <p>A place all to yourself</p>
                                                </div>
                                                <div class="checkbox-container">
                                                    <input class="checkbox" type="checkbox" id="entire" name="entire" />
                                                </div>
                                            </div>

                                            <div class="place-type-option">
                                                <div class="place-text">
                                                    <h5>Private room</h5>
                                                    <p>
                                                        Your own room in a home or a hotel, plus some
                                                        shared common spaces
                                                    </p>
                                                </div>
                                                <div class="checkbox-container">
                                                    <input class="checkbox" type="checkbox" id="private"
                                                        name="private" />
                                                </div>
                                            </div>

                                            <div class="place-type-option">
                                                <div class="place-text">
                                                    <h5>Shared room</h5>
                                                    <p>
                                                        A sleeping space and common areas that may be
                                                        shared with others
                                                    </p>
                                                </div>
                                                <div class="checkbox-container">
                                                    <input class="checkbox" type="checkbox" id="shared" name="shared" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- rooms and beds  -->

                                    <div class="rooms">
                                        <h3>Rooms and beds</h3>
                                        <div class="space">
                                            <h5>Bedrooms</h5>
                                            <div class="scroll-bar" tabindex="0">
                                                <div class="number">
                                                    <input type="radio" id="any" name="room" value="any" />
                                                    <label for="any">Any</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="one" name="room" value="1" />
                                                    <label for="one">1</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="two" name="room" value="2" />
                                                    <label for="two">2</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="three" name="room" value="3" />
                                                    <label for="three">3</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="four" name="room" value="4" />
                                                    <label for="four">4</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="five" name="room" value="5" />
                                                    <label for="five">5</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="six" name="room" value="6" />
                                                    <label for="six">6</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="seven" name="room" value="7" />
                                                    <label for="seven">7</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="eight" name="room" value="8" />
                                                    <label for="eight">8</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="nine" name="room" value="9" />
                                                    <label for="nine">9</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="ten" name="room" value="10" />
                                                    <label for="ten">10</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space">
                                            <h5>Beds</h5>
                                            <div class="scroll-bar" tabindex="0">
                                                <div class="number">
                                                    <input type="radio" id="bed-any" name="bed" value="any" />
                                                    <label for="bed-any">Any</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-1" name="bed" value="1" />
                                                    <label for="bed-1">1</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-2" name="bed" value="2" />
                                                    <label for="bed-2">2</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-3" name="bed" value="3" />
                                                    <label for="bed-3">3</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-4" name="bed" value="4" />
                                                    <label for="bed-4">4</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-5" name="bed" value="5" />
                                                    <label for="bed-5">5</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-6" name="bed" value="6" />
                                                    <label for="bed-6">6</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-7" name="bed" value="7" />
                                                    <label for="bed-7">7</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-8" name="bed" value="8" />
                                                    <label for="bed-8">8</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-9" name="bed" value="9" />
                                                    <label for="bed-9">9</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bed-10" name="bed" value="10" />
                                                    <label for="bed-10">10</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space">
                                            <h5>Bathrooms</h5>
                                            <div class="scroll-bar" tabindex="0">
                                                <div class="number">
                                                    <input type="radio" id="bath-any" name="bath" value="any" />
                                                    <label for="bath-any">Any</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-1" name="bath" value="1" />
                                                    <label for="bath-1">1</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-2" name="bath" value="2" />
                                                    <label for="bath-2">2</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-3" name="bath" value="3" />
                                                    <label for="bath-3">3</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-4" name="bath" value="4" />
                                                    <label for="bath-4">4</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-5" name="bath" value="5" />
                                                    <label for="bath-5">5</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-6" name="bath" value="6" />
                                                    <label for="bath-6">6</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-7" name="bath" value="7" />
                                                    <label for="bath-7">7</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-8" name="bath" value="8" />
                                                    <label for="bath-8">8</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-9" name="bath" value="9" />
                                                    <label for="bath-9">9</label>
                                                </div>

                                                <div class="number">
                                                    <input type="radio" id="bath-10" name="bath" value="10" />
                                                    <label for="bath-10">10</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- property stuff  -->

                                    <div class="property">
                                        <h3>Property type</h3>
                                        <div class="property-grid">
                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="house" name="house"
                                                    value="house" />
                                                <label for="house"><img src="./icons/house.svg" alt="house-icon" />
                                                    <p>House</p>
                                                </label>
                                            </div>

                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="flat" name="flat"
                                                    value="flat" />
                                                <label for="flat"><img src="./icons/flat.svg" alt="flat-icon" />
                                                    <p>Flat</p>
                                                </label>
                                            </div>
                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="guesthouse"
                                                    name="guesthouse" value="guesthouse" />
                                                <label for="guesthouse"><img src="./icons/guesthouse.svg"
                                                        alt="guesthouse-icon" />
                                                    <p>Guest house</p>
                                                </label>
                                            </div>
                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="hotel" name="hotel"
                                                    value="hotel" />
                                                <label for="hotel"><img src="./icons/hotel.svg" alt="hotel-icon" />
                                                    <p>Hotel</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- amenities  -->

                                    <div class="amenities" id="amenities">
                                        <h3>Amenities</h3>
                                        <h4>Essentials</h4>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>Wifi</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="wifi" name="wifi" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>Kitchen</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="kitchen" name="kitchen" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>Washing machine</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="washing" name="washing" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>Dryer</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="dryer" name="dryer" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>Air conditioning</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="air" name="air" />
                                            </div>
                                        </div>

                                        <a href="#amenities">Show more</a>
                                    </div>

                                    <!-- booking options  -->

                                    <div class="booking-options">
                                        <h3>Booking options</h3>
                                        <div class="switch">
                                            <div class="switch-text">
                                                <h5>Instant Book</h5>
                                                <p>
                                                    Listings you can book without waiting for host
                                                    approval
                                                </p>
                                            </div>
                                            <div class="toggle-div">
                                                <input class="toggle" type="checkbox" id="toggle-1" name="toggle" />
                                                <label class="toggle-switch" for="toggle-1"></label>
                                            </div>
                                        </div>

                                        <div class="switch">
                                            <div>
                                                <h5>Self check-in</h5>
                                                <p>Easy access to the property once you arrive</p>
                                            </div>

                                            <input class="toggle" type="checkbox" id="toggle-2" name="toggle" />
                                            <label class="toggle-switch" for="toggle-2"></label>
                                        </div>
                                    </div>

                                    <!-- accessibility features  -->

                                    <div class="accessibility" id="accessibility">
                                        <h3>Accessibility features</h3>

                                        <h4>Guest entrance and parking</h4>

                                        <div>
                                            <div class="access-text">
                                                <h5>Step-free guest entrance</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="access-1" name="access-1" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="access-text">
                                                <h5>
                                                    Guest entrance wider than 32 inches (81
                                                    centimetres)
                                                </h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="access-2" name="access-2" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="access-text">
                                                <h5>Accessible parking spot</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="access-3" name="access-3" />
                                            </div>
                                        </div>

                                        <a href="#accessibility">Show more</a>
                                    </div>

                                    <!-- top-tier stuff  -->

                                    <div class="top-tier">
                                        <h3>Top-tier stays</h3>
                                        <div>
                                            <div>
                                                <h5>Superhost</h5>
                                                <p>Stay with recognised hosts</p>
                                            </div>
                                            <div class="toggle-div">
                                                <input class="toggle" type="checkbox" id="toggle-3" name="toggle" />
                                                <label class="toggle-switch" for="toggle-3"></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <h5>Airbnb Plus</h5>
                                                <p>Every Plus home is reviewed for quality</p>
                                            </div>
                                            <div class="toggle-div">
                                                <input class="toggle" type="checkbox" id="toggle-4" name="toggle" />
                                                <label class="toggle-switch" for="toggle-4"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- language  -->

                                    <div class="language" id="language">
                                        <h3>Host language</h3>
                                        <div>
                                            <h5>English</h5>
                                            <input type="checkbox" id="eng" name="eng" />
                                        </div>

                                        <div>
                                            <h5>French</h5>
                                            <input type="checkbox" id="fre" name="fre" />
                                        </div>

                                        <div>
                                            <h5>German</h5>
                                            <input type="checkbox" id="ger" name="ger" />
                                        </div>

                                        <a href="#language">Show more</a>
                                    </div>

                                    <!-- filter footer  -->

                                    <div class="filter-footer" id="filter-footer">
                                        <div>
                                            <div><a href="#filter-footer">Clear all</a></div>
                                            <div class="more-box" tabindex="0">
                                                <a href="#filter-footer">Show 978 homes</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- desktop version end container  -->
        <div class="end-container">
            <div class="text">
                <a href="#">
                    <h4>Airbnb your home</h4>
                </a>
            </div>
            <div class="world">
                <a href="#"><img class="icon" src="./icons/world.svg" alt="world_icon" /></a>
            </div>

            <!-- menu stuff  -->
            <div class="top-menu" tabindex="0">
                <div class="top-profile">
                    <a href="#">
                        <img class="menu-icon" src="./icons/menu-burger.svg" alt="menu icon" />

                        <img class="login-icon" src="./icons/login2.png" alt="login" /></a>
                    <div class="popup-menu">
                        <a style="font-weight: 600" href="#">
                            <p>Login</p>
                        </a>

                        <a style="margin-bottom: 0.75rem" href="#">
                            <p>Sign up</p>
                        </a>

                        <a href="#" style="border-top: 0.01rem solid rgb(225, 225, 225)">
                            <p>Airbnb your home</p>
                        </a>

                        <a href="#">
                            <p>Host an experience</p>
                        </a>

                        <a href="#">
                            <p>Help</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main scrollbar for type of preferred stays  -->
    <div class="scroll-bar" tabindex="0">
        <div class="omg">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/rocket.svg" alt="place-icon" />
                    <p>OMG!</p>
                </a>
            </div>
        </div>

        <div class="countryside">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/countryside.svg" alt="place-icon" />
                    <p>Countryside</p>
                </a>
            </div>
        </div>

        <div class="historical">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/historical.svg" alt="place-icon" />
                    <p>Historical homes</p>
                </a>
            </div>
        </div>

        <div class="adapted">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/adapted.svg" alt="place-icon" />
                    <p>Adapted</p>
                </a>
            </div>
        </div>

        <div class="mansions">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/mansion.svg" alt="place-icon" />
                    <p>Mansions</p>
                </a>
            </div>
        </div>

        <div class="arctic">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/arctic.svg" alt="place-icon" />
                    <p>Arctic</p>
                </a>
            </div>
        </div>

        <div class="b&b">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/b&b.svg" alt="place-icon" />
                    <p>Bed & Breakfast</p>
                </a>
            </div>
        </div>

        <div class="huts">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/hut.svg" alt="place-icon" />
                    <p>Huts</p>
                </a>
            </div>
        </div>

        <div class="luxe">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/luxe.svg" alt="place-icon" />
                    <p>Luxe</p>
                </a>
            </div>
        </div>

        <div class="views">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/view.svg" alt="place-icon" />
                    <p>Amazing views</p>
                </a>
            </div>
        </div>

        <div class="creative">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/creative.svg" alt="place-icon" />
                    <p>Creative spaces</p>
                </a>
            </div>
        </div>

        <div class="beachfront">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/beach.svg" alt="place-icon" />
                    <p>Beachfront</p>
                </a>
            </div>
        </div>

        <div class="boats">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/boat.svg" alt="place-icon" />
                    <p>Boats</p>
                </a>
            </div>
        </div>

        <div class="desert">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/desert.svg" alt="place-icon" />
                    <p>Desert</p>
                </a>
            </div>
        </div>

        <div class="pools">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/pool.svg" alt="place-icon" />
                    <p>Pools</p>
                </a>
            </div>
        </div>

        <div class="islands">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/island.svg" alt="place-icon" />
                    <p>Islands</p>
                </a>
            </div>
        </div>

        <div class="mountains">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/mountain.svg" alt="place-icon" />
                    <p>Mountains</p>
                </a>
            </div>
        </div>

        <div class="glamping">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/tent2.svg" alt="place-icon" />
                    <p>Glamping</p>
                </a>
            </div>
        </div>

        <div class="cabins">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/cabin.svg" alt="place-icon" />
                    <p>Cabins</p>
                </a>
            </div>
        </div>

        <div class="trending">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/trending.svg" alt="place-icon" />
                    <p>Trending</p>
                </a>
            </div>
        </div>

        <div class="parks">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/park.svg" alt="place-icon" />
                    <p>Parks</p>
                </a>
            </div>
        </div>

        <div class="castles">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/castle.svg" alt="place-icon" />
                    <p>Castles</p>
                </a>
            </div>
        </div>

        <div class="cities">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/paris.svg" alt="place-icon" />
                    <p>Cities</p>
                </a>
            </div>
        </div>

        <div class="caves">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/caves.svg" alt="place-icon" />
                    <p>Caves</p>
                </a>
            </div>
        </div>

        <div class="design">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/design.svg" alt="place-icon" />
                    <p>Design</p>
                </a>
            </div>
        </div>

        <div class="skiing">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/skiing.svg" alt="place-icon" />
                    <p>Skiing</p>
                </a>
            </div>
        </div>

        <div class="play">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/play.svg" alt="place-icon" />
                    <p>Play</p>
                </a>
            </div>
        </div>
    </div>
</header>