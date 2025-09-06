@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('{{ asset('build/assets/img/hero-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Navbar -->
        <header class="absolute top-0 left-0 w-full flex items-center justify-between px-4 md:px-10 py-4 z-20">
            <!-- Logo -->
            <img src="{{ asset('build/assets/img/logo/logo-2.png') }}" alt="Logo" class="h-12 md:h-16">

            <!-- Desktop Nav -->
            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-6 lg:space-x-10 text-white text-sm md:text-base">
                <a href="#home" class="hover:text-green-500 hover:underline underline-offset-4">HOME</a>
                <a href="#about" class="hover:text-green-500 hover:underline underline-offset-4">ABOUT</a>
                <a href="#features" class="hover:text-green-500 hover:underline underline-offset-4">FEATURES</a>
                <a href="#reviews" class="hover:text-green-500 hover:underline underline-offset-4">REVIEWS</a>
                <a href="#contact" class="hover:text-green-500 hover:underline underline-offset-4">CONTACT</a>
            </nav>

            <!-- Mobile Toggle -->
            <button class="md:hidden text-white text-2xl"
                onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                ☰
            </button>
        </header>

        <!-- Mobile Nav -->
        <div id="mobileMenu" class="absolute top-16 right-4 bg-black/90 p-4 rounded-lg hidden md:hidden z-20">
            <a href="#home" class="block text-white py-1 hover:text-green-500">HOME</a>
            <a href="#about" class="block text-white py-1 hover:text-green-500">ABOUT</a>
            <a href="#features" class="block text-white py-1 hover:text-green-500">FEATURES</a>
            <a href="#reviews" class="block text-white py-1 hover:text-green-500">REVIEWS</a>
            <a href="#contact" class="block text-white py-1 hover:text-green-500">CONTACT</a>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-6 md:px-20 w-full max-w-7xl">

            <!-- Left Side Text -->
            <div class="text-center md:text-left">
                <h1 class="text-5xl sm:text-5xl md:text-4xl font-Fredoka text-white leading-snug">
                    A Ride That Benefits Both <br> Nature And Its Residents.
                </h1>
                <p class="mt-4 text-sm sm:text-base md:text-lg text-gray-200">
                    Electric vehicles are gaining popularity and providing exceptional performance.
                </p>
            </div>

            <!-- Right Side Image -->
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('build/assets/img/hero-sec.png') }}" alt="Scooter"
                    class="w-full max-w-xs sm:max-w-sm md:max-w-lg lg:max-w-xl">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-Fredoka">
                    INFORMATION <span class="text-green-600">ABOUT US</span>
                </h2>
                <p class="mt-4 text-gray-700">
                    "Electricsscooterbook," which is designed to promote natural cause an electric , <br><span> scooter, has
                        big aims. Bring it home right now.</span>
                </p>
            </div>

            <!-- Content Grid -->
            <div class="md:grid md:grid-cols-2 gap-10 items-center">
                <!-- Image Section -->
                <div class="relative">
                    <img src="{{ asset('build/assets/img/about-sec.png') }}" alt="Electric Scooter"
                        class="rounded-lg shadow-lg">
                    <!-- Optional green overlay, if you want -->
                    <div class="absolute inset-0 bg-green-500 opacity-20 rounded-lg"></div>
                </div>

                <!-- Text Section -->
                <div>
                    <h3 class="text-2xl font-Fredoka mb-4" style="font-family: 'Poppins', sans-serif;">Welcome To Electric
                        Scooter</h3>
                    <p class="text-gray-700 leading-relaxed">
                        It intends to construct India’s largest two-wheeler production facility
                        as well as India’s largest charging network infrastructure in the next years,
                        with the objective of making Indian mobility completely electric. Electric
                        scooters are adorable and create an excellent first impression. It makes numerous
                        assertions. Electric scooters will be the most common means of transportation in the
                        future, not only because they are good for the environment, but also because they
                        are fashionable, with many people preferring scooters to bicycles. Electric scooters
                        have two major advantages: they are both environmentally friendly and extensively used.
                    </p>

                    <!-- Contact Button -->
                    <a href="#contact"
                        class="mt-6 inline-block bg-green-600 text-white px-6 py-2 rounded shadow hover:bg-green-700 transition-all duration-300">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="py-16 bg-gray-100 bg-white" id="features">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Heading -->
            <h2 class="text-3xl font-Fredoka text-center mb-4">
                FEATURES OF <span class="text-green-600">ELECTRIC SCOOTER</span>
            </h2>
            <p class="text-center text-gray-600 mb-16">
                The distinguishing quality that sets it apart from others
            </p>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-3 gap-10 text-center">

                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-lg hover:shadow-lg transition duration-300">
                    <img src="{{ asset('build/assets/img/services/service-1.png') }}" alt="Eco Friendly"
                        class="h-14 mx-auto mb-4">
                    <h4 class="font-Fredoka mb-2">ECO-FRIENDLY</h4>
                    <p class="text-gray-600">
                        Electric scooters emit nearly little pollution. Electric scooters have been among the front-runners
                        thus far.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-lg hover:shadow-lg transition duration-300">
                    <img src="{{ asset('build/assets/img/services/service-2.png') }}" alt="Powerful Brakes"
                        class="h-14 mx-auto mb-4">
                    <h4 class="font-Fredoka mb-2">POWERFUL BRAKES</h4>
                    <p class="text-gray-600">
                        The regenerative braking mechanism has been improved so that experienced riders can ride without
                        using the disc brakes.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-lg hover:shadow-lg transition duration-300">
                    <img src="{{ asset('build/assets/img/services/service-3.png') }}" alt="Powerful Batteries"
                        class="h-14 mx-auto mb-4">
                    <h4 class="font-Fredoka mb-2">POWERFUL BATTERIES</h4>
                    <p class="text-gray-600">
                        Electric scooters use three types of batteries: sealed lead acid, nickel-metal hydride, and
                        lithium-ion.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 bg-white rounded-lg hover:shadow-lg transition duration-300">
                    <img src="{{ asset('build/assets/img/services/service-4.png') }}" alt="Cruise Control"
                        class="h-14 mx-auto mb-4">
                    <h4 class="font-Fredoka mb-2">CRUISE CONTROL</h4>
                    <p class="text-gray-600">
                        Cruise control is one of the numerous modern technologies available on electric scooters. It can be
                        activated with a single button press.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="p-6 bg-white rounded-lg hover:shadow-lg transition duration-300">
                    <img src="{{ asset('build/assets/img/services/service-5.png') }}" alt="BLDC"
                        class="h-14 mx-auto mb-4">
                    <h4 class="font-Fredoka mb-2">BLDC</h4>
                    <p class="text-gray-600">
                        This is one example of the cutting-edge technology offered on electric scooters. With a single
                        button press, you can activate cruise control.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="p-6 bg-white rounded-lg hover:shadow-lg transition duration-300">
                    <img src="{{ asset('build/assets/img/services/service-6.png') }}" alt="A Fantastic Ride"
                        class="h-14 mx-auto mb-4">
                    <h4 class="font-Fredoka mb-2">A FANTASTIC RIDE</h4>
                    <p class="text-gray-600">
                        Compared to gasoline scooters, electric scooters provide a better riding experience with a quiet,
                        vibration-free ride and quick torque.
                    </p>
                </div>
            </div>
        </div>
    </section>


    @include('inc.enquiry-form')


    <!-- Counter Section -->
    <section class="relative  bg-center bg-no-repeat bg-fixed py-16 text-white"
        style="background-image: url('{{ asset('build/assets/img/company-status-bg.jpg') }}');">


        <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-10 text-center">
            <div class="absolute inset-0 bg-black opacity-50 pointer-events-none"></div>


            <!-- <section
              class="relative bg-cover bg-center bg-no-repeat bg-fixed py-16 text-white"
              style="background-image: url('{{ asset('build/assets/img/company-status-bg.jpg') }}');">
              -->

            <!-- Project -->
            <div>
                <div class="text-green-500 mb-2 flex justify-center">
                    <!-- Project Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M3 6a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm12 0a3 3 0 1 1 6 0 3 3 0 0 1-6 0zM6 9h6v2H6v2h3a3 3 0 0 1 3 3v4h-2v-4a1 1 0 0 0-1-1H6v-2H3v-2h3V9zm12 2h3v2h-3v2h-3a1 1 0 0 0-1 1v4h-2v-4a3 3 0 0 1 3-3h3v-2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-Fredoka">3564</h3>
                <p class="text-white">Project</p>
            </div>

            <!-- Car Count -->
            <div>
                <div class="text-green-500 mb-2 flex justify-center">
                    <!-- Car Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M5 11l1-3h12l1 3h1a1 1 0 0 1 1 1v7h-2v-2H5v2H3v-7a1 1 0 0 1 1-1h1zm2.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm11 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-Fredoka">322</h3>
                <p class="text-white">Car Count</p>
            </div>

            <!-- KM/MIL -->
            <div>
                <div class="text-green-500 mb-2 flex justify-center">
                    <!-- Flag Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 3v18h2v-6h8l1 2h3V5h-3l-1 2H7V3H5z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-Fredoka">155657</h3>
                <p class="text-white">KM/MIL</p>
            </div>

            <!-- Support -->
            <div>
                <div class="text-green-500 mb-2 flex justify-center">
                    <!-- Support Icon (Headset) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 1a9 9 0 0 0-9 9v5a4 4 0 0 0 4 4h1v-6H5v-3a7 7 0 0 1 14 0v3h-3v6h1a4 4 0 0 0 4-4v-5a9 9 0 0 0-9-9z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-Fredoka">123566</h3>
                <p class="" style="color: white;">Support</p>
            </div>


        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-Fredoka">
                    CLIENTS <span class="text-green-600">REVIEW</span>
                </h2>
                <p class="text-gray-600 mt-2 text-sm">We are appreciated with good words.</p>
            </div>

            <!-- Grid Layout -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Left Image -->
                <div>
                    <img src="{{ asset('build/assets/img/testimonial-sec.png') }}" alt="Scooter"
                        class="mx-auto max-w-full" />
                </div>

                <!-- Right Slider -->
                <div class="relative overflow-hidden">
                    <div id="testimonial-slider" class="flex transition-transform duration-500 ease-in-out">

                        <!-- Slide 1 -->
                        <div class="min-w-full bg-black p-8 rounded-lg shadow-lg text-white flex flex-col">
                            <div class="border-4 border-green-600 rounded-full w-20 h-20 overflow-hidden mb-4">
                                <img src="{{ asset('build/assets/img/testimonials/1.png') }}" alt="User 1"
                                    class="object-cover w-full h-full" />
                            </div>
                            <p class="text-sm leading-relaxed mb-4">
                                I was looking for an electric scooter franchise when I came across an enticing business
                                opportunity to start one. Now that I have it, all I can say is a big thank you to the Book
                                Electric Scooter team for assisting me with the franchise.
                            </p>
                            <div>
                                <div class="flex items-center font-black text-green-500 space-x-1 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>


                                <h4 class="font-Fredoka text-lg">Paras Agnihotri</h4>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full bg-black p-8 rounded-lg shadow-lg text-white flex flex-col">
                            <div class="border-4 border-green-600 rounded-full w-20 h-20 overflow-hidden mb-4">
                                <img src="{{ asset('build/assets/img/testimonials/2.png') }}" alt="User 2"
                                    class="object-cover w-full h-full" />
                            </div>
                            <p class="text-sm leading-relaxed mb-4">
                                I was looking for an electric scooter franchise when I came across an enticing business
                                opportunity to start one. Now that I have it, all I can say is a big thank you to the Book
                                Electric Scooter team for assisting me with the franchise.
                            </p>
                            <div>
                                <div class="flex items-center font-black text-green-500 space-x-1 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>


                                <h4 class="font-Fredoka text-lg">Anjali Sharma</h4>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="min-w-full bg-black p-8 rounded-lg shadow-lg text-white flex flex-col">
                            <div class="border-4 border-green-600 rounded-full w-20 h-20 overflow-hidden mb-4">
                                <img src="{{ asset('build/assets/img/testimonials/3.png') }}" alt="User 3"
                                    class="object-cover w-full h-full" />
                            </div>
                            <p class="text-sm leading-relaxed mb-4">
                                I was looking for an electric scooter franchise when I came across an enticing business
                                opportunity to start one. Now that I have it, all I can say is a big thank you to the Book
                                Electric Scooter team for assisting me with the franchise.
                            </p>
                            <div>
                                <div class="flex items-center font-Fredoka text-green-500 space-x-1 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>
                                <h4 class="font-Fredoka text-lg">Rohan Verma</h4>
                            </div>
                        </div>

                    </div>

                    <!--  Only Dots for Navigation -->
                    <!-- <div class="absolute bottom-4 right-4 flex space-x-2">
                      <span class="dot w-3 h-3 bg-green border-2 border-green-500 rounded-full cursor-pointer" data-index="0"></span>
                      <span class="dot w-3 h-3 bg-green border-2 border-green-500 rounded-full cursor-pointer" data-index="1"></span>
                      <span class="dot w-3 h-3 bg-green border-2 border-green-500 rounded-full cursor-pointer" data-index="2"></span>
                    </div> -->

                    <!-- Dots -->
                    <div class="absolute bottom-4 right-4 flex space-x-2">
                        <span class="dot w-3 h-3 bg-black border-2 border-green-500 rounded-full cursor-pointer"
                            data-index="0"></span>
                        <span class="dot w-3 h-3 bg-black border-2 border-green-500 rounded-full cursor-pointer"
                            data-index="1"></span>
                        <span class="dot w-3 h-3 bg-black border-2 border-green-500 rounded-full cursor-pointer"
                            data-index="2"></span>
                    </div>

                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>





    <!-- Footer -->
    <footer class="bg-black text-white py-15">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <nav class="mb-4 space-x-4 text-sm">
                <a href="#home" class="hover:text-green-500">Home</a> |
                <a href="#about" class="hover:text-green-500">About</a> |
                <a href="#features" class="hover:text-green-500">Features</a> |
                <a href="#reviews" class="hover:text-green-500">Reviews</a> |
                <a href="#contact" class="hover:text-green-500">Contact</a>
            </nav>
            <div class="text-lg font-Fredoka mb-2">
                <span>📞</span> 9083635404
            </div>
            <p class="text-sm text-gray-400">&copy; 2022 Electric Scooters Book Now</p>
        </div>
    </footer>


    @include('pop')
@endsection
