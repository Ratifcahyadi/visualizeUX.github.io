<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/all.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body class="bg-white">
    <nav class="bg-white bg-opacity-15 backdrop-filter backdrop-blur-md p-6 sticky top-0">
        <div class="container flex justify-between">

            <img src="/img/VisualizeUX.png" alt="VisualizeUX" class="w-[150px] h-[30px]">
            <ul class="flex flex-row gap-6">
                <li><a class="text-2xl custom-link text-indigo-700 hover:text-indigo-500" href="#home">Home</a></li>
                <li><a class="text-2xl custom-link text-indigo-700 hover:text-indigo-500" href="#services">Services</a></li>
                <li><a class="text-2xl custom-link text-indigo-700 hover:text-indigo-500" href="#product">Product</a></li>
                <li><a class="text-2xl custom-link text-indigo-700 hover:text-indigo-500" href="#about">About</a></li>
                <li><a class="text-2xl custom-link text-indigo-700 hover:text-indigo-500" href="#about">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section>
        <main id="home" class="bg-[#eaebed] container mx-auto flex justify-between items-center p-28  gap-12">
            <div class="w-6/12">
                <h1
                    class="text-5xl font-semibold mb-2 bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">
                    Let's Make Beautiful UI</h1>
                <p class="text-pink-500 w-auto">"You can order UI Design or UX Design services, or hire me for a project
                    brief. If you need a consult, redesign, or want to share knowledge about UI/UX Design, it's
                    FREE."</span></p>
                <button type="button"
                    class="transition duration-300 ease-in-out delay-100 bg-emerald-300 hover:bg-emerald-500 hover:text-white p-3 w-48 text-xl text-emerald-800 hover:drop-shadow-xl hover:animate-none rounded-full mt-6">
                    <a href="#services">Explore Now!</a>
                </button>
            </div>
            <div class="w-6/12">
                <img src="/img/hero.png" alt="hero"
                    class=" w-full hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
            </div>
        </main>

        <!-- Hero Section -->
        <header class="bg-emerald-500 py-20 text-center">
            <div class="container mx-auto">
                <h1 class="text-4xl font-bold text-white">Welcome to VisualizeUX</h1>
                <p class="mt-4 text-lg text-white">Your Partner in UI/UX Design</p>
            </div>
        </header>

        <article id="services" class="container mx-auto my-16">
            <h1
                class="text-center bg-clip-text text-transparent text-4xl bg-gradient-to-r from-blue-500 to-emerald-500 p-4 font-semibold">
                Our Services</h1>
            <div class="our-services flex flex-row gap-16 p-8 justify-center">
                <div class="rounded-[50vw] w-96 bg-yellow-400 shadow-xl image-full border-4 border-yellow-500">
                    <figure><img src="/img/hire.png" alt="hire" class="w-[200px]" /></figure>
                    <div class="card-body">
                        <h2 class="card-title text-emerald-400 text-3xl">Order Here!</h2>
                        <p class="text-error">Need some design? to order Send me a titile of design</p>
                        <div class="card-actions justify-end">
                            <a href="#product" class="btn btn-error text-white rounded-full capitalize">Choose Now!</a>
                        </div>
                    </div>
                </div>
                <div class="rounded-[50vw] w-96 bg-blue-500 shadow-xl image-full border-4 border-sky-700">
                    <figure><img src="/img/order.png" alt="order" class="w-[230px]" /></figure>
                    <div class="card-body">
                        <h2 class="card-title text-3xl text-sky-400">Hire Me!</h2>
                        <p class="text-sky-200">Do you have project need to be finished?</p>
                        <div class="card-actions justify-end">
                            <a href="https://wa.me/+6285727362894"
                                class="btn btn-info text-white capitalize rounded-full">Send Brief</a>
                        </div>
                    </div>
                </div>
                <div class="rounded-[50vw] w-96 bg-emerald-500 shadow-xl image-full border-4 border-emerald-700">
                    <figure><img src="/img/consult.png" alt="consult" class="w-[200px]" /></figure>
                    <div class="card-body">
                        <h2 class="card-title text-3xl text-warning">Consult</h2>
                        <p class="text-emerald-200">Need help? Share idea, suggest redesign your project, it's FREE</p>
                        <div class="card-actions justify-end">
                            {{-- <button class="btn btn-primary rounded-full capitalize"> --}}
                            <a class="btn btn-warning text-white rounded-full capitalize"
                                href="https://wa.me/+6285727362894">Chat Now!</a>
                            {{-- </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article id="product" class="container mx-auto bg-gradient-to-tl from-blue-500 to-emerald-500 p-16">
            <main class="container mx-auto">

                <h1 class="text-white text-3xl text-center font-semibold mb-2">Our Product</h1>
                <hr>
                <div class="w-full flex flex-row gap-4 my-4">
                    <div class="rounded-2xl card-compact w-96 bg-base-100 shadow-xl">
                        <figure><img src="/img/login_mockup.png" alt="login_mockup" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">Login Page - Mobile Version</h2>
                            <p>If you need to create simple login page</p>
                            <div class="card-actions justify-end">
                                <a href="https://wa.me/+6285727362894"
                                    class="btn btn-primary rounded-full capitalize">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl card-compact w-full bg-base-100 shadow-xl">
                        <figure><img src="/img/analysis_mockup.png" alt="analysis_mockup" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">Landing Page - DataSync</h2>
                            <p>If you need to create simple landing page</p>
                            <div class="card-actions justify-end">
                                <a href="https://wa.me/+6285727362894"
                                    class="btn btn-primary rounded-full capitalize">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-row gap-4">
                    <div class="rounded-2xl card-compact w-full bg-base-100 shadow-xl">
                        <figure><img src="/img/film_mockup.png" alt="film_mockup" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">Landing Page - CinemaArena</h2>
                            <p>If you need to create simple landing page</p>
                            <div class="card-actions justify-end">
                                <a href="https://wa.me/+6285727362894"
                                    class="btn btn-primary rounded-full capitalize">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </article>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16">
        <h1
            class="text-center bg-clip-text text-transparent text-4xl bg-gradient-to-r from-blue-500 to-emerald-500 p-4 font-semibold">
            About VisualizeUX</h1>
        <div class="container mx-auto">
            <p class="text-lg text-gray-700">
                VisualizeUX is a leading UI/UX design company, providing custom design services, selling UI/UX design
                elements, and offering free consultation, sharing, and redesign services. Our dedicated team of talented
                designers is committed to creating compelling and user-friendly interfaces for all types of products and
                services.
            </p>
        </div>
        <div class="container mx-auto m-4">
            <h2 class="text-3xl font-bold mb-6 text-left">About Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service Item 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-rose-400">
                    <h3 class="text-xl font-bold mb-2 text-rose-400">UI/UX Design</h3>
                    <p class="text-gray-700">
                        Our team of skilled designers specializes in creating attractive and functional user interfaces
                        for various platforms, including mobile apps, websites, and custom software.
                    </p>
                </div>
                <!-- Service Item 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-blue-400">
                    <h3 class="text-xl font-bold mb-2 text-blue-400">UI/UX Design Elements</h3>
                    <p class="text-gray-700">
                        In addition to custom design services, we offer a collection of ready-to-use UI/UX design
                        elements that can accelerate the design process and help our clients create captivating products
                        more efficiently.
                    </p>
                </div>
                <!-- Service Item 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-emerald-400">
                    <h3 class="text-xl font-bold mb-2 text-emerald-400">Consultation and Redesign</h3>
                    <p class="text-gray-700">
                        We believe that consultation is a crucial part of successful design. Our team is ready to
                        provide expert guidance in strategic planning, user analysis, and design implementation. We also
                        offer free redesign services for products or websites that require improvement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 bg-emerald-600 text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center">Contact Us</h2>
            <p class="text-lg text-center">We would love to hear from you! If you need UI/UX design services, are
                interested in our design elements, require consultation, or want to take advantage of our free sharing
                and redesign services, feel free to reach out to us.</p>
            <div class="mt-8 text-center">
                <a href="mailto:ratifcahyadi@students.amikom.ac.id" class="text-lg font-semibold">Email: ratifcahyadi@students.amikom.ac.id</a>
                <p class="text-lg font-semibold">Phone: +62 857 2736-2894</p>
                <!-- Add more contact information here if necessary -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="content p-8 ">
        {{-- <div class="p-4">
            <ul class="wrapper">
                <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <span><i class="fab fa-facebook-f"></i></span>
                </li>
                <li class="icon twitter">
                    <span class="tooltip">Twitter</span>
                    <span><i class="fab fa-twitter"></i></span>
                </li>
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <span><i class="fab fa-instagram"></i></span>
                </li>
                <li class="icon github">
                    <span class="tooltip">Github</span>
                    <span><i class="fab fa-github"></i></span>
                </li>
                <li class="icon youtube">
                    <span class="tooltip">Youtube</span>
                    <span><i class="fab fa-youtube"></i></span>
                </li>
            </ul>
        </div> --}}
        <div class="flex flex-row justify-center text-center items-center gap-2">
            <img src="/img/VisualizeUX.png" class="w-[150px] h-4" alt="">
            <p class="text-2xl text-rose-400">
                | Copyright &copy;2023 All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
