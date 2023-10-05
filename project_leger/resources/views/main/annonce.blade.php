<!-- main part of the page  -->
<main>
    <!-- grid container for all listings  -->
    <div class="grid-container">
        @for ($i = 0; $i < 20; $i++)<!-- individual listings -->
            <div class="listing">
                <img class="listing-icon" tabindex="0" src="./icons/heart2.png" alt="heart-icon" />
                <a href="#">
                    <div class="picture-container">
                        <img class="picture" src="./images/luxury_suite.webp" alt="listing-photo" />
                    </div>
                    <div class="listing-text">
                        <div class="listing-summary">
                            <h5 class="location">Harlingen, Netherlands</h5>
                            <div class="rating">
                                <img class="star-icon" src="./icons/star.svg" alt="star-icon" /><span>4.99</span>
                            </div>
                        </div>
                        <div class="listing-details">
                            <p>Professional Host</p>
                            <p>2-7 Apr</p>
                            <p>£1,790 total</p>
                        </div>
                    </div>
                </a>
            </div>
            @endfor
    </div>

    <!-- show more button  -->

    <div class="show-more" id="show-more">
        <div class="button" tabindex="0">
            <a href="#show-more">{{__('Show more')}}</a>
        </div>
    </div>
</main>