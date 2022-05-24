@section('aside')




                                        <form class="filterForm" action="{{ route('alldatas')  }}" method="get">
                                            @csrf

                                            <div id="filterHome">

                                                    <p class="filterClose">X</p>

                                                <div class="btn-container " data-v-faf248e8>
                                                    <p id="agentClose">գործակալ</p>
                                                    <div id="agent">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="agent1" name="name" value="Գևորգ">
                                                                <label for="agent1">Գևորգ</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="agent2" name="name" value="Արամ">
                                                                <label for="agent2">Արամ</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="agent3" name="name" value="Նարեկ">
                                                                <label for="agent3">Նարեկ</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="agent4" name="name" value="Անի">
                                                                <label for="agent4">Անի</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="btn-container " data-v-faf248e8>
                                                    <p id="buy_rentClose">գործողության տեսակ</p>
                                                    <div id="buy_rent">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="rent" name="buy_rent" value="վարձակալություն">
                                                                <label for="rent">վարձակալություն</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="daily_rent" name="buy_rent" value="օրավարձ">
                                                                <label for="daily_rent">օրավարձ</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="sale" name="buy_rent" value="վաճառք">
                                                                <label for="sale">վաճառք</label>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="btn-container " data-v-faf248e8>
                                                    <p id="countryClose">քաղաք</p>
                                                    <div id="country">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="country1" name="country" value="Երևան">
                                                                <label for="country1">Երևան</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="country2" name="country" value="Աշտարակ">
                                                                <label for="country2">Աշտարակ</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="btn-container " data-v-faf248e8>
                                                    <p id="regionClose">փողոց </p>
                                                    <div id="region">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="region1" name="region" value="Շոպրոնի 2-րդ նրբանցք">
                                                                <label for="region1">Շոպրոնի 2-րդ նրբանցք</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="region2" name="region" value="Մինսկի փողոց">
                                                                <label for="region2">Մինսկի փողոց</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="region3" name="region" value="Նոր Նորք">
                                                                <label for="region3">Նոր Նորք</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="region4" name="region" value="Վիլնյուսի փողոց">
                                                                <label for="region4">Վիլնյուսի փողոց</label>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="categoryClose" class="btn-container " data-v-faf248e8>
                                                    <p id="categoryClose">շինություն </p>
                                                    <div id="category">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" id="apartment" name="type" value="բնակարան">
                                                                <label for="apartment">բնակարան</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="private" name="type" value="առանձնատուն">
                                                                <label for="private">առանձնատուն</label>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                                    <p id="swimmingClose">շինության տեսակ</p>
                                                    <div id="swimming">
                                                        <ul>

                                                            <li>
                                                                <input type="radio" id="yes" name="building_type" value="1">
                                                                <label for="yes">այո</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="no" name="building_type" value="0">
                                                                <label for="no">ոչ</label>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                                    <p id="swimmingClose">հարկ</p>
                                                    <div id="swimming">
                                                        <ul>

                                                            <li>
                                                                <input type="radio" id="yes" name="floor" value="1">
                                                                <label for="yes">այո</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="no" name="floor" value="0">
                                                                <label for="no">ոչ</label>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="roomClose" class="btn-container " data-v-faf248e8>
                                                    <p id="roomClose">սենյակների քանակ</p>
                                                    <div id="room">
                                                        <ul>

                                                            <li>
                                                                <input type="radio" id="room1" name="room" value="1">
                                                                <label for="room1">1</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="room2" name="room" value="2">
                                                                <label for="room2">2</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="room3" name="room" value="3">
                                                                <label for="room3">3</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="room4" name="room" value="4">
                                                                <label for="room4">4</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="room5+" name="room+" value="5+">
                                                                <label for="room5+">5+</label>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                                    <p id="swimmingClose">լողավազան</p>
                                                    <div id="swimming">
                                                        <ul>

                                                            <li>
                                                                <input type="radio" id="yes" name="swimming" value="1">
                                                                <label for="yes">այո</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="no" name="swimming" value="0">
                                                                <label for="no">ոչ</label>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="roomClose" class="btn-container " data-v-faf248e8>
                                                        <p id="roomClose">գնային ինտերվալ</p>
                                                        <div id="room">
                                                            <ul>

                                                                    <input type="number" id="firstSum" name="firstSum" value="">

                                                                    <input type="number" id="endSum" name="endSum" value="">

                                                            </ul>
                                                        </div>
                                                    </div>



                                                <input type="submit" >

                                            </div>

                                        </form>


                                    <section id="flexbox" class="main">

                                        <section class="left">



                                        @foreach($data as $el)

                                                <div class="posts">

                                                            <a data-v-767ef7eb="" tabindex="0" href="{{ route ('single').$el->key  }}" class="Results-card">

                                                                                <img src="img/imagereader.webp" lazy="loaded">

                                                                            <h3 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $el->title  }}</h3>
                                                                            <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $el->country  }}</h4>
                                                                            <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $el->region  }}</h4>
                                                                            <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $el->type  }}</h4>
                                                                            <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $el->building_type  }}</h4>
                                                                            <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $el->floor}}-րդ հարկ </h4>

                                                                            <h5 data-v-767ef7eb="" class="Results-card__body-price">  {{ $el->sum  }}</h5>
                                                                            <h5 data-v-767ef7eb="" class="Results-card__body-price  Results-card__body-price--rental-frequency">  {{ $el->buy_rent  }}</h5> <!---->

                                                                            <h5 data-v-767ef7eb="" class="Results-card__feat-item u-color-dark-grey">  {{ $el->room  }} սենյակ</h5>


                                                                        <h5 data-v-767ef7eb="" class="Results-card__body-marketedby u-color-dark-grey u-font-mercury-italic">  {{ $el->agent  }}</h5>
                                                                </a>
                                                </div>

                                                @endforeach

                                        </section>
                                        <section class="right">
{{--                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29001.37866792867!2d44.50573487783242!3d40.178034988508564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1650894840239!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

                                            <!--The div element for the map -->
                                            <div id="map"></div>

                                            <!--
                                             The `defer` attribute causes the callback to execute after the full HTML
                                             document has been parsed. For non-blocking uses, avoiding race conditions,
                                             and consistent behavior across browsers, consider loading using Promises
                                             with https://www.npmjs.com/package/@googlemaps/js-api-loader.
                                            -->
                                            <script
                                                src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap&v=weekly"
                                                defer
                                            >

                                            </script>

                                        </section>
                                    </section>

   <script src="https://awsstatic-sothebys-production.gtsstatic.net/_nuxt/commons/app0bf8b66a88a3ba42f576344a1e94f6a2611bd104.js" defer></script>
    <script src="https://awsstatic-sothebys-production.gtsstatic.net/_nuxt/styles0bf8b66a88a3ba42f576344a1e94f6a2611bd104.js" defer></script>
    <script src="https://awsstatic-sothebys-production.gtsstatic.net/_nuxt/app0bf8b66a88a3ba42f576344a1e94f6a2611bd104.js" defer></script>



