<x-web-layout>

    <!-- Container1 -->
    <div class="container-fluid" id="c1Background">
        <div class="container" id="Container1">
            <div class="parent" id="c1Parent1">
                <h3>
                    Simple Hearts, <br />
                    Effective Solutions
                </h3>

                <p id="c1P2">
                    We understand based on our client's perspective, not thru personal assumptions. 
                    Providing the best "simplified" technical expertise, professional advices, and
                    objective practical business solutions to our MSMEs in the Philippines.
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
                            Who We Are?
                        </h3>
                        
                        <p>
                            We are three of the hardworking "aspiring" professional developers from one 
                            of the best bootcamps in the universe, KodeGo Philippines.
                        </p>
                    </div>

                    <div style="text-align: right">
                        <h3>
                            What We Do?
                        </h3>

                        <p>
                            We provide simple, effective, efficient and elegant streamlined
                            online IT solutions, especially "Web Solutions" to our dear
                            clients.
                        </p>
                    </div>

                    <div>
                        <h3>
                            Where Are We?
                        </h3>

                        <p>
                            We are remote-based workers. One call/text/message away, <u>0919-549-9133</u> 
                            and <u>0927-395-9131</u>. You may also contact us via facebook/messenger or 
                            thru <u>NagaCity.LGU@negosyocenter.gov.ph</u> or via links below.
                        </p>
                    </div>
                    
                    <div style="text-align: right">
                        <h3>
                            Why We?
                        </h3>

                        <p>
                            Not only that we do love to create efficient solutions, but also
                            we value our clients and users experience above anything else. 
                            Developers with a "heart".
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
                            <img src="{{ asset('assets/Icons/ChrisAbellana.jpg') }}" alt="" id="icon" />
                        </div>
                        
                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Christopher Abellana
                            </h3>

                            <p>
                                E-mail Address: <u>abellanachristopher@gmail.com</u><br/>
                                GitHub Profile: <u>https://github.com/nuwiechi</u>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/blackk.png') }}" alt="" id="icon" />
                        </div>

                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Aisiah Severino
                            </h3>

                            <p>
                                E-mail Address: <u>aisiahseverino77@gmail.com</u><br/>
                                Github Profile: <u>https://github.com/aisiahseverino</u>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/LorenzoReyes.jpg') }}" alt="" id="icon" />
                        </div>
                        
                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Lorenzo Laurel Reyes
                            </h3>

                            <p>
                                E-mail Address: <u>enzoreyes016@gmail.com</u><br/>
                                Github Profile: <u>https://github.com/Enzo-El</u>
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