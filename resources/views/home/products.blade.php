<!--Team Style Three-->
<section class="team-style-three">
    <div class="outer-container">

        <div class="centered-title">
            <h3 class="subtitle">OUR PRODUCTS</h3>
            <h2><strong>Innovative Cooling Products Designed <br>
                    for Efficiency and Reliability
                </strong></h2>
            <div class="desc-text">
                Masar Arabia Cooling Solutions offers a complete range of high-performance
                cooling systems designed to deliver energy efficiency, durability, and reliability.
                Every product is built to meet international standards and adapted for Saudi Arabia’s
                unique climate and industrial needs.
            </div>
        </div>

        <!--Team Carousel Three-->
        <div class="team-carousel-three four-column-carousel">

            @if ($mainProducts->count())
                @foreach ($mainProducts as $main)
                    <!--Team Member-->
                    <div class="team-member-three">
                        <div class="inner-box">

                            <figure class="image-box">
                                @if ($main->home_image)
                                    <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->home_image) }}"
                                        alt="{{ $main->home_alt ?? $main->name }}">
                                @else
                                    <img src="{{ asset('assets/no-image.png') }}"
                                        alt="No Image Available">
                                @endif
                            </figure>

                            <div class="caption">
                                <a href="{{ route('products.main', $main->slug) }}">
                                    <h3>{{ $main->name }}</h3>
                                    <div class="designation">View Product</div>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <p>No products available.</p>
            @endif

        </div>
    </div>
</section>
