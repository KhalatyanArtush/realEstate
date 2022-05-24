@include('inc.header')
@yield('content')
            <main role="main" data-v-0109a204>

                    <section class="ListingHero" data-v-0109a204>
                        <div class="single_left Listing-hero-image" style="height:100vh;" data-v-110938e4>




                                            <img src="img/imagereader.webp" lazy="loaded">

                        <div class="single_info Listing-hero-content js-container-fade" data-v-6fcd20ad>
                            <div class="container" data-v-6fcd20ad>
                                <div class="grid">

                                    <div class="vvvvvvvv" >
                                        <h1 data-v-6fcd20ad><!---->
                                            <div class="h4" data-v-6fcd20ad>{{ $datasingle->country  }}</div>
                                            <div class="h4" data-v-6fcd20ad>{{ $datasingle->region  }} </div>
                                        </h1> <!---->
                                    </div>
                                </div>
                                <div class="grid" data-v-6fcd20ad>
                                    <div class="grid__item" data-v-6fcd20ad>
                                        <div class="grid Listing-hero-content__detail-wrapper" data-v-6fcd20ad>
                                            <div class="grid__item desk--7-12" data-v-6fcd20ad>
                                                <ul class="Listing-hero-content__info" data-v-6fcd20ad>
                                                    <li class="Listing-hero-content__info-item" data-v-6fcd20ad>
                                                        <span class="e1 u-color-gold u-text-uppercase Listing-hero-content__label" data-v-6fcd20ad>գինը</span>
                                                        <div class="Listing-hero-content__price-container" data-v-6fcd20ad>
                                                            <div class="h5" data-v-6fcd20ad>{{ $datasingle->sum}} դրամ</div>
                                                        </div>
                                                        <div class="u-text-capitalize h5" data-v-6fcd20ad>{{ $datasingle->buy_rent}} </div>
                                                    </li>
                                                    <li class="Listing-hero-content__info-item" data-v-6fcd20ad>
                                                        <span class="e1 u-color-gold u-text-uppercase Listing-hero-content__label" data-v-6fcd20ad>նկարագիր</span>
                                                        <div class="h5" data-v-6fcd20ad>{{ $datasingle->type}} </div>
                                                        <div class="h5" data-v-6fcd20ad>{{ $datasingle->building_type}} </div>
                                                        <div class="h5" data-v-6fcd20ad>{{ $datasingle->floor}}-րդ հարկ </div>
                                                    </li>

                                                    <li class="Listing-hero-content__info-item" data-v-6fcd20ad>
                                                        <span class="e1 u-color-gold u-text-uppercase Listing-hero-content__label" data-v-6fcd20ad>սենյակների քանակը</span>

                                                        <div class="h5" data-v-6fcd20ad>{{ $datasingle->room}} </div>
                                                    </li>



                                                </ul>
                                                    <span class="e1 u-color-gold u-text-uppercase Listing-hero-content__label" data-v-6fcd20ad>մանրամասն</span>
                                                    <div class="h5" data-v-6fcd20ad>{{ $datasingle->informations}} </div>


                                            </div>
                                            <div class="SendMessage u-bg-blueSir u-color-white btn grid__item desk--4-12 push--desk--1-12 lap--auto palm--1-1 has-one-agent" data-v-6fcd20ad data-v-6fcd20ad>
                                                <div>
                                                    <div class="SendMessage__one-agent-wrap js-fitty-container SendMessage__one-agent-wrap--no-photo"><!----> <div>
                                                   </div> <div data-v-74ef2f96>
                                                                <a class="btn u-text-uppercase" data-v-74ef2f96>
                                                                    ուղարկել հաղորդագրություն
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="12" viewBox="0 0 31 12" role="presentation" icon-name="arrow" class="arrow-right" data-v-5cfb6d82 data-v-74ef2f96><g fill="#000" data-v-5cfb6d82><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" id="arrow" data-v-74ef2f96><g transform="translate(-197.000000, -28.000000)" fill="#FFF" fill-rule="nonzero" stroke="#FFF" stroke-width="0.8" class="fillColor"><g id="cta-text"><g transform="translate(54.000000, 28.000000)"><path d="M167.112693,1.00099326 C166.99732,1.00786588 166.898156,1.0848237 166.863351,1.19449725 C166.828547,1.3041708 166.865312,1.42384332 166.955794,1.49540378 L171.950407,5.72825171 L144.306323,5.72825171 C144.288928,5.72662193 144.271418,5.72662193 144.254023,5.72825171 C144.099974,5.74262305 143.9868,5.87854286 144.001242,6.03183711 C144.015684,6.18513136 144.152274,6.29775064 144.306323,6.28337931 L171.950407,6.28337931 L166.955794,10.5075534 C166.879471,10.5726225 166.843838,10.6732711 166.862321,10.771576 C166.880804,10.8698809 166.950593,10.9509026 167.045393,10.9841131 C167.140194,11.0173236 167.245598,10.9976759 167.321891,10.9325729 L172.900517,6.21398836 C172.963585,6.16124471 173,6.08345779 173,6.00147857 C173,5.91949936 172.963585,5.84171244 172.900517,5.78896879 L167.321891,1.07038421 C167.264695,1.01964513 167.189043,0.994551512 167.112693,1.00099326 Z" id="Path"></path></g></g></g></g></g>
                                                                    </svg>
                                                                </a>
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       </div>
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

            </main>
@include('inc.footerSingle')
