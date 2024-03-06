<x-web-layout>

    <!-- Container1 -->
    <div class="container-fluid" id="c1Background">
        <div class="container" id="Container1">
            <div class="parent" id="c1Parent1">
                <h3>
                    We make records safe, <br />
                    thru Virtual Copy.
                </h3>

                <p id="c1P2">
                    We redifine records keeping and assurance safety with our
                    simplified "OmniView". Whether you're on mobile, laptop, tablet
                    or desktop computer, our platform is designed to bring
                    you ease of records access, and confidence in records keeping.
                </p>

                <button id="schedule">Try our Sample</button>
            </div>

            <div class="parent" id="c1Parent2">
                <div class="Image"></div>
            </div>
        </div>
    </div>
    <!-- End of Container1 -->


    <!-- Container2 -->
    <div class="container-fluid" id="c2Background">
        <div class="container" id="Container2">
            <div class="parent" id="c2Parent1">
                <div class="c2Child1"></div>
            </div>
            
            <div class="parent" id="c2Parent2">
                <div class="child" id="c2Child">
                    <div>
                        <h3>
                            Business Consultancy
                        </h3>
                        
                        <p>
                            We prioritize your security and use advanced measures to protect
                            your information, handling it responsibly with the highest level
                            of security.
                        </p>
                    </div>

                    <div style="text-align: right">
                        <h3>
                            Privacy Commitment
                        </h3>

                        <p>
                            We value your privacy, handling business information
                            confidentially in a secure website during virtual records
                            keeping.
                        </p>
                    </div>

                    <div>
                        <h3>
                            "Maaasahang" Support
                        </h3>

                        <p>
                            Online supports are always available to provide MSMEs with efficient
                            and specialized support for managing and addressing records keeping seamlessly.
                        </p>
                    </div>
                    
                    <div style="text-align: right">
                        <h3>
                            Continuous Development
                        </h3>

                        <p>
                            We customize records keeping website depending on the type of your business
                            to enhance MSME experience, strengthen security, and introduce new features for the
                            best service possible.
                        </p>

                        <button id="joinUs">
                            Try it out!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Container2 -->


    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: #f4f5f6;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/list.png') }}" alt="" id="icon" />
                        </div>
                        
                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Management of Lists
                            </h3>

                            <p>
                                Effortlessly create, read, update and delete records through our
                                streamlined process and user-friendly records keeping interface, ease of
                                access.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/tax.png') }}" alt="" id="icon" />
                        </div>

                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                We do Taxation
                            </h3>

                            <p>
                                We collaborate with our clients not only to assess, but also
                                to help them resolve their taxation queries and, other
                                business-related taxes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/POS.png') }}" alt="" id="icon" />
                        </div>
                        
                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                We Customized Systems
                            </h3>

                            <p>
                                We can also customize your system, either POS, Bookkeeping
                                Systems, and other transactions that can be streamlined online.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/online.png') }}" alt="" id="icon" />
                        </div>

                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Other Online Solutions
                            </h3>

                            <p>
                                As we acquire more experience developers in our team, we are
                                expanding our platforms and services, catering the needs of
                                MSMEs and other businesses.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>      
        </div>
    </div>
    <!-- End of Carousel -->

</x-web-layout>