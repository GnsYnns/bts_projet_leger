<header>
    <div class="sub-header">
        <div class="first-container">
            <!-- logo for the larger screen only  -->
            <div class="logo">
                <svg alt="welocation logo" id="svg" version="1.1" width="1024" height="1024"
                    viewBox="339.75799560546875 377.4629211425781 348.87835693359375 297.5370788574219"
                    xmlns="http://www.w3.org/2000/svg" style="fill: rgb(255, 90, 95);">
                    <path
                        d="M507.718 378.044 C 492.279 381.873,482.956 398.016,487.384 413.249 C 489.494 420.508,496.101 427.937,503.140 430.965 C 507.334 432.769,509.708 433.126,515.420 432.809 C 531.545 431.915,541.462 421.324,541.456 405.000 C 541.453 396.977,539.785 392.463,534.502 386.185 C 529.161 379.837,516.277 375.921,507.718 378.044 M340.000 381.500 C 338.977 382.733,340.934 389.373,350.978 418.750 C 357.701 438.413,373.231 483.975,385.488 520.000 C 426.306 639.963,437.271 671.485,438.797 673.250 C 440.145 674.810,442.521 675.000,460.632 675.000 C 480.628 675.000,480.976 674.964,482.343 672.750 C 483.108 671.513,490.358 650.363,498.455 625.750 C 506.552 601.138,513.479 581.000,513.847 581.000 C 514.215 581.000,521.201 601.138,529.371 625.750 C 537.541 650.363,544.860 671.513,545.636 672.750 C 547.024 674.964,547.373 675.000,567.500 675.000 C 587.784 675.000,587.966 674.981,589.472 672.683 C 590.972 670.393,607.620 621.948,670.978 435.500 C 674.716 424.500,680.336 408.155,683.466 399.177 C 686.597 390.199,688.911 382.212,688.610 381.427 C 688.155 380.241,683.603 380.000,661.642 380.000 C 637.909 380.000,635.018 380.178,633.221 381.750 C 631.843 382.955,621.010 414.155,598.429 481.956 C 580.394 536.107,565.505 579.982,565.344 579.456 C 557.205 552.921,542.288 505.460,533.844 479.235 C 530.799 469.776,531.306 470.000,512.952 470.000 C 497.549 470.000,497.001 470.071,495.611 472.250 C 494.128 474.575,480.184 517.959,468.543 556.465 C 464.891 568.546,461.802 578.531,461.680 578.653 C 461.558 578.776,449.814 543.916,435.583 501.188 C 402.687 402.418,396.063 383.206,394.291 381.434 C 392.114 379.257,341.811 379.318,340.000 381.500 "
                        stroke="none" fillnot="black" fillnot-rule="evenodd"></path>
                </svg>
            </div>
            <div class="welocation-name">
                <h1>Welocation</h1>
            </div>
        </div>

        <!-- top bar for search etc. -->
        <div class="middle-container">
            <div class="top-bar">
                <!-- when the screen size is large -->
                <div class="desktop-options">
                    <div class="text">
                        <a href="#">
                            <h4>{{ __('Anywere')}}</h4>
                        </a>
                    </div>
                    <div class="text">
                        <a href="#">
                            <h4>{{ __('Any week')}}</h4>
                        </a>
                    </div>
                    <div class="last-text">
                        <a href="#">
                            <h4>{{ __('Add guests')}}</h4>
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
                        <h4>{{ __('Anywere')}}</h4>
                        <p>{{ __('Any week')}}<span>·</span> <span>{{ __('Add guests')}}</span></p>
                    </a>
                </div>

                <!-- filter button and icon  -->
                <div class="filter-container" tabindex="0">
                    <div class="blur"></div>

                    <div class="desktop-filter" tabindex="0">
                        <a href="#filter-popup"><img src="./icons/filter.png" alt="filter icon" />
                            <p>{{__('Filters')}}</p>
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
                                        <h4>{{__('Filters')}}</h4>
                                        <a href="#" tabindex="0">
                                            <img class="icon" src="./icons/close.svg" alt="cross icon" /></a>
                                    </div>

                                    <!-- price range selection  -->

                                    <div class="price">
                                        <h3>{{__('Price range')}}</h3>
                                        <p>{{__('The average nightly price is')}} £181</p>
                                        <div class="range">
                                            <div class="price-box">
                                                <div class="price-text">{{__('min price')}}</div>
                                                <div class="input-area">
                                                    <div>£</div>

                                                    <input type="number" id="minval" name="minval" value="8" min="8"
                                                        max="973" />
                                                </div>
                                            </div>

                                            <div class="divider">-</div>

                                            <div class="price-box">
                                                <div class="price-text">{{__('max price')}}</div>
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
                                        <h3>{{__('Type of place')}}</h3>
                                        <div class="place-grid">
                                            <div class="place-type-option">
                                                <div class="place-text">
                                                    <h5>{{__('Entire place')}}</h5>
                                                    <p>{{__('A place all to yourself')}}</p>
                                                </div>
                                                <div class="checkbox-container">
                                                    <input class="checkbox" type="checkbox" id="entire" name="entire" />
                                                </div>
                                            </div>

                                            <div class="place-type-option">
                                                <div class="place-text">
                                                    <h5>{{__('Private room')}}</h5>
                                                    <p>
                                                        {{__('Your own room in a home or a hotel, plus some shared common spaces')}}
                                                    </p>
                                                </div>
                                                <div class="checkbox-container">
                                                    <input class="checkbox" type="checkbox" id="private"
                                                        name="private" />
                                                </div>
                                            </div>

                                            <div class="place-type-option">
                                                <div class="place-text">
                                                    <h5>{{__('Shared room')}}</h5>
                                                    <p>
                                                        {{__('A sleeping space and common areas that may be shared with others')}}
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
                                        <h3>{{__('Rooms and beds')}}</h3>
                                        <div class="space">
                                            <h5>{{__('Bedrooms')}}</h5>
                                            <div class="scroll-bar" tabindex="0">
                                                <div class="number">
                                                    <input type="radio" id="any" name="room" value="any" />
                                                    <label for="any">{{__('Any')}}</label>
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
                                            <h5>{{__('Beds')}}</h5>
                                            <div class="scroll-bar" tabindex="0">
                                                <div class="number">
                                                    <input type="radio" id="bed-any" name="bed" value="any" />
                                                    <label for="bed-any">{{__('Any')}}</label>
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
                                            <h5>{{__('Bathrooms')}}</h5>
                                            <div class="scroll-bar" tabindex="0">
                                                <div class="number">
                                                    <input type="radio" id="bath-any" name="bath" value="any" />
                                                    <label for="bath-any">{{__('Any')}}</label>
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
                                        <h3>{{__('Property type')}}</h3>
                                        <div class="property-grid">
                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="house" name="house"
                                                    value="house" />
                                                <label for="house"><img src="./icons/house.svg" alt="house-icon" />
                                                    <p>{{__('House')}}</p>
                                                </label>
                                            </div>

                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="flat" name="flat"
                                                    value="flat" />
                                                <label for="flat"><img src="./icons/flat.svg" alt="flat-icon" />
                                                    <p>{{__('Flat')}}</p>
                                                </label>
                                            </div>
                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="guesthouse"
                                                    name="guesthouse" value="guesthouse" />
                                                <label for="guesthouse"><img src="./icons/guesthouse.svg"
                                                        alt="guesthouse-icon" />
                                                    <p>{{__('Guest House')}}</p>
                                                </label>
                                            </div>
                                            <div class="property-item">
                                                <input class="property-checkbox" type="checkbox" id="hotel" name="hotel"
                                                    value="hotel" />
                                                <label for="hotel"><img src="./icons/hotel.svg" alt="hotel-icon" />
                                                    <p>{{__('Hotel')}}</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- amenities  -->

                                    <div class="amenities" id="amenities">
                                        <h3>{{__('Amenities')}}</h3>
                                        <h4>{{__('Essentials')}}</h4>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>{{__('Wifi')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="wifi" name="wifi" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>{{__('Kitchen')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="kitchen" name="kitchen" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>{{__('Washing machine')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="washing" name="washing" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>{{__('Dryer')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="dryer" name="dryer" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="amenities-text">
                                                <h5>{{__('Air conditioning')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="air" name="air" />
                                            </div>
                                        </div>

                                        <a href="#amenities">{{__('Show more')}}</a>
                                    </div>

                                    <!-- booking options  -->

                                    <div class="booking-options">
                                        <h3>{{__('Booking options')}}</h3>
                                        <div class="switch">
                                            <div class="switch-text">
                                                <h5>{{__('Instant Book')}}</h5>
                                                <p>
                                                    {{__('Listings you can book without waiting for host approval')}}
                                                </p>
                                            </div>
                                            <div class="toggle-div">
                                                <input class="toggle" type="checkbox" id="toggle-1" name="toggle" />
                                                <label class="toggle-switch" for="toggle-1"></label>
                                            </div>
                                        </div>

                                        <div class="switch">
                                            <div>
                                                <h5>{{__('Self check-in')}}</h5>
                                                <p>{{__('Easy access to the property once you arrive')}}</p>
                                            </div>

                                            <input class="toggle" type="checkbox" id="toggle-2" name="toggle" />
                                            <label class="toggle-switch" for="toggle-2"></label>
                                        </div>
                                    </div>

                                    <!-- accessibility features  -->

                                    <div class="accessibility" id="accessibility">
                                        <h3>{{__('Accessibility features')}}</h3>

                                        <h4>{{__('Guest entrance and parking')}}</h4>

                                        <div>
                                            <div class="access-text">
                                                <h5>{{__('Step-free guest entrance')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="access-1" name="access-1" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="access-text">
                                                <h5>
                                                    {{__('Guest entrance wider than 32 inches (81 centimeters)')}}
                                                </h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="access-2" name="access-2" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="access-text">
                                                <h5>{{__('Accessible parking spot')}}</h5>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="access-3" name="access-3" />
                                            </div>
                                        </div>

                                        <a href="#accessibility">{{__('Show more')}}</a>
                                    </div>

                                    <!-- top-tier stuff  -->

                                    <div class="top-tier">
                                        <h3>{{__('Top-tier stays')}}</h3>
                                        <div>
                                            <div>
                                                <h5>{{__('Superhost')}}</h5>
                                                <p>{{__('Stay with recognized hosts')}}</p>
                                            </div>
                                            <div class="toggle-div">
                                                <input class="toggle" type="checkbox" id="toggle-3" name="toggle" />
                                                <label class="toggle-switch" for="toggle-3"></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <h5>{{__('Welocation Plus')}}</h5>
                                                <p>{{__('Every Plus home is reviewed for quality')}}</p>
                                            </div>
                                            <div class="toggle-div">
                                                <input class="toggle" type="checkbox" id="toggle-4" name="toggle" />
                                                <label class="toggle-switch" for="toggle-4"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- language  -->

                                    <div class="language" id="language">
                                        <h3>{{__('Host language')}}</h3>
                                        <div>
                                            <h5>{{__('English')}}</h5>
                                            <input type="checkbox" id="eng" name="eng" />
                                        </div>

                                        <div>
                                            <h5>{{__('French')}}</h5>
                                            <input type="checkbox" id="fre" name="fre" />
                                        </div>

                                        <div>
                                            <h5>{{__('German')}}</h5>
                                            <input type="checkbox" id="ger" name="ger" />
                                        </div>

                                        <a href="#language">{{__('Show more')}}</a>
                                    </div>

                                    <!-- filter footer  -->

                                    <div class="filter-footer" id="filter-footer">
                                        <div>
                                            <div><a href="#filter-footer">{{__('Clear all')}}</a></div>
                                            <div class="more-box" tabindex="0">
                                                <a href="#filter-footer">{{__('Show')}} 978 {{__('homes')}}</a>
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
                    <h4>{{__('Welocation your home')}}</h4>
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
                            <p>{{__('Login')}}</p>
                        </a>

                        <a style="margin-bottom: 0.75rem" href="#">
                            <p>{{__('Sign up')}}</p>
                        </a>

                        <a href="#" style="border-top: 0.01rem solid rgb(225, 225, 225)">
                            <p>{{__('Welocation your home')}}</p>
                        </a>

                        <a href="#">
                            <p>{{__('Host an experience')}}</p>
                        </a>

                        <a href="#">
                            <p>{{__('Help')}}</p>
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
                    <p>{{__('OMG!')}}</p>
                </a>
            </div>
        </div>

        <div class="countryside">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/countryside.svg" alt="place-icon" />
                    <p>{{__('Countryside')}}</p>
                </a>
            </div>
        </div>

        <div class="historical">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/historical.svg" alt="place-icon" />
                    <p>{{__('Historical homes')}}</p>
                </a>
            </div>
        </div>

        <div class="adapted">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/adapted.svg" alt="place-icon" />
                    <p>{{__('Adapted')}}</p>
                </a>
            </div>
        </div>

        <div class="mansions">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/mansion.svg" alt="place-icon" />
                    <p>{{__('Mansions')}}</p>
                </a>
            </div>
        </div>

        <div class="arctic">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/arctic.svg" alt="place-icon" />
                    <p>{{__('Arctic')}}</p>
                </a>
            </div>
        </div>

        <div class="b&b">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/b&b.svg" alt="place-icon" />
                    <p>{{__('Bed & Breakfast')}}</p>
                </a>
            </div>
        </div>

        <div class="huts">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/hut.svg" alt="place-icon" />
                    <p>{{__('Huts')}}</p>
                </a>
            </div>
        </div>

        <div class="luxe">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/luxe.svg" alt="place-icon" />
                    <p>{{__('Luxe')}}</p>
                </a>
            </div>
        </div>

        <div class="views">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/view.svg" alt="place-icon" />
                    <p>{{__('Amazing views')}}</p>
                </a>
            </div>
        </div>

        <div class="creative">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/creative.svg" alt="place-icon" />
                    <p>{{__('Creative spaces')}}</p>
                </a>
            </div>
        </div>

        <div class="beachfront">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/beach.svg" alt="place-icon" />
                    <p>{{__('Beachfront')}}</p>
                </a>
            </div>
        </div>

        <div class="boats">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/boat.svg" alt="place-icon" />
                    <p>{{__('Boats')}}</p>
                </a>
            </div>
        </div>

        <div class="desert">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/desert.svg" alt="place-icon" />
                    <p>{{__('Desert')}}</p>
                </a>
            </div>
        </div>

        <div class="pools">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/pool.svg" alt="place-icon" />
                    <p>{{__('Pools')}}</p>
                </a>
            </div>
        </div>

        <div class="islands">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/island.svg" alt="place-icon" />
                    <p>{{__('Islands')}}</p>
                </a>
            </div>
        </div>

        <div class="mountains">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/mountain.svg" alt="place-icon" />
                    <p>{{__('Mountains')}}</p>
                </a>
            </div>
        </div>

        <div class="glamping">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/tent2.svg" alt="place-icon" />
                    <p>{{__('Glamping')}}</p>
                </a>
            </div>
        </div>

        <div class="cabins">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/cabin.svg" alt="place-icon" />
                    <p>{{__('Cabins')}}</p>
                </a>
            </div>
        </div>

        <div class="trending">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/trending.svg" alt="place-icon" />
                    <p>{{__('Trending')}}</p>
                </a>
            </div>
        </div>

        <div class="parks">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/park.svg" alt="place-icon" />
                    <p>{{__('Parks')}}</p>
                </a>
            </div>
        </div>

        <div class="castles">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/castle.svg" alt="place-icon" />
                    <p>{{__('Castles')}}</p>
                </a>
            </div>
        </div>

        <div class="cities">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/paris.svg" alt="place-icon" />
                    <p>{{__('Cities')}}</p>
                </a>
            </div>
        </div>

        <div class="caves">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/caves.svg" alt="place-icon" />
                    <p>{{__('Caves')}}</p>
                </a>
            </div>
        </div>

        <div class="design">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/design.svg" alt="place-icon" />
                    <p>{{__('Design')}}</p>
                </a>
            </div>
        </div>

        <div class="skiing">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/skiing.svg" alt="place-icon" />
                    <p>{{__('Skiing')}}</p>
                </a>
            </div>
        </div>

        <div class="play">
            <div class="scroll-icon">
                <a href="#">
                    <img class="icon" src="./icons/play.svg" alt="place-icon" />
                    <p>{{__('Play')}}</p>
                </a>
            </div>
        </div>
    </div>
</header>