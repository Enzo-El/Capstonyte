<x-web-layout>

    <!-- Container1 -->
    <div class="container-fluid" id="c1Background">
        <div class="container" id="Container1">
            <div class="parent" id="c1Parent1">
                <h3>
                    Empowering MSMEs, <br />
                    thru Increase Online Capability
                </h3>

                <p id="c1P2">
                    Physical records and offline files are prone to inevitable fortuitous 
                    events. Online back-up is a must for a more secure and
                    efficient business record keeping. Virtual acesss
                    thru few clicks.
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
                            Virtual Copy of Records
                        </h3>
                        
                        <p>
                            We prioritize your record security and use of possible various ways to protect
                            your business information and records, handling it responsibly and securely.
                        </p>
                    </div>

                    <div style="text-align: right">
                        <h3>
                            Commitment to Clients
                        </h3>

                        <p>
                            Your time is one of the most valued assets for your business, 
                            handling and keeping of business information confidentially in 
                            a secure website is a must.
                        </p>
                    </div>

                    <div>
                        <h3>
                            One-Call Away Support
                        </h3>

                        <p>
                            Need someone to talk to regarding business systems? We provides
                            consultancy services to properly handle and resolve your records
                            online streamlining seamlessly.
                        </p>
                    </div>
                    
                    <div style="text-align: right">
                        <h3>
                            Online Availability
                        </h3>

                        <p>
                            Looking for a secure business record/lists keeping way?
                            Products List, Customers List, Transactions List, and Suppliers List
                            are just a few samples.
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
                            <img src="{{ asset('assets/Icons/easy.png') }}" alt="" id="icon" />
                        </div>
                        
                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Less Effort C|R|U|D
                            </h3>

                            <p>
                                Effortlessly create, update/edit and delete records,
                                streamlined process and user-friendly interface, ensuring
                                ease of access.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/savetime.png') }}" alt="" id="icon" />
                        </div>

                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Time Saving
                            </h3>

                            <p>
                                Just record it online, access it online, retrieve it online
                                Need not to worry with phsyical loss, Back-up real time
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/secretfile.png') }}" alt="" id="icon" />
                        </div>

                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Confidential Communication
                            </h3>

                            <p>
                                Ensuring user privacy, our platform securely handles records
                                in our system, a confidential environment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div id="carouselParent">
                        <div class="carouselChild" id="carouselChild1">
                            <img src="{{ asset('assets/Icons/jar.png') }}" alt="" id="icon" />
                        </div>

                        <div class="carouselChild" id="carouselChild2">
                            <h3>
                                Cost Efficient
                            </h3>

                            <p>
                                We offer at a friendly and affordable price. "Maka-masa",
                                "Para sa Masa", and for our Local MSMEs' aid.
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