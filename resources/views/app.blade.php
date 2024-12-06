<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport"  content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keyword"
        content="resume, cv, portfolio, vcard, responsive, retina, jquery, css3, tailwindcss, material CV, creative, designer, developer, online cv, online resume, powerful portfolio, professional, landing page">
    <meta name="description" 
        content="Minfo vCard/Resume TailwindCSS HTML Template">
    <meta name="author"   content="Themearray">

      <!-- Site Title
    ================================================== -->
    <title>Web Developer</title>

    <!-- Site Favicon
    ================================================== -->
    <link rel="shortcut icon" href="/img/user-sidebar-thumb.png" sizes="any">

    <!-- Google Fonts
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- All CSS Here
    ================================================== -->
    <link rel="stylesheet" href="css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="css/cdheadline.css">
    <!--<link rel="stylesheet" href="css/swiper-bundle.min.css">-->
    <link rel="stylesheet" href="css/style.min.css">

        <title inertia>{{ config('app.name', 'Laravels') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body class="font-sans antialiased relative custom_cursor">
     <!--   Custom Cursor Start -->
        <div
            class="custom_cursor_one fixed top-0 left-0 w-8 h-8 border border-gray-400 rounded-full pointer-events-none">
        </div>
        <div
            class="custom_cursor_two w-1 h-1 rounded-full border border-gray-400 bg-metborder-gray-400 fixed pointer-events-none left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        </div>
     <!--Cusom Cursor End -->



    <div id="preloader">
        <div class="loader_line"></div>
        <div
            class="absolute w-20 h-20 transition-all delay-300 -translate-x-1/2 -translate-y-1/2 rounded-full logo top-1/2 left-1/2 bg-nightBlack border-greyBlack flex-center">
            <img src="/img/site-logo.svg" alt="Minfo">
        </div>
    </div>
   

    <!-- App Start -->
    <div class="relative pt-10 minfo__app max-xl:pt-20">
        <div
            class="menu-overlay fixed top-0 left-0 w-full h-full bg-black/60 transition-all duration-200 z-999 opacity-0 invisible [&.is-menu-open]:visible [&.is-menu-open]:opacity-100">
        </div>
        <div class="max-lg:px-4">

            <!-- Mobile Menu Bar Start -->
            <div
                class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between p-2 px-3 bg-white/10 mobile-menu-bar sm:px-6 backdrop-blur-md xl:hidden">
                <div class="text-lg font-medium name">
                    <a href="index.html" class="flex items-center gap-2 text-black dark:text-white">
                        <img src="img/site-logo.svg" alt="Minfo">
                        <span>Minfo</span>
                    </a>
                </div>
                <!-- Mobile Hamburger Menu Start -->
                <button
                    class="w-12 h-12 border rounded-full hamburger menu_toggle bg-white dark:bg-nightBlack border-platinum dark:border-greyBlack flex-center"
                    type="button"
                    aria-label="Open Mobile Menu">
                    <svg viewBox="0 0 20 12" class="w-6"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.33333 11.3333C5.33333 11.1565 5.40357 10.987 5.5286 10.8619C5.65362 10.7369 5.82319 10.6667 6 10.6667H19.3333C19.5101 10.6667 19.6797 10.7369 19.8047 10.8619C19.9298 10.987 20 11.1565 20 11.3333C20 11.5101 19.9298 11.6797 19.8047 11.8047C19.6797 11.9298 19.5101 12 19.3333 12H6C5.82319 12 5.65362 11.9298 5.5286 11.8047C5.40357 11.6797 5.33333 11.5101 5.33333 11.3333ZM2.66667 6C2.66667 5.82319 2.7369 5.65362 2.86193 5.5286C2.98695 5.40357 3.15652 5.33333 3.33333 5.33333H16.6667C16.8435 5.33333 17.013 5.40357 17.1381 5.5286C17.2631 5.65362 17.3333 5.82319 17.3333 6C17.3333 6.17681 17.2631 6.34638 17.1381 6.4714C17.013 6.59643 16.8435 6.66667 16.6667 6.66667H3.33333C3.15652 6.66667 2.98695 6.59643 2.86193 6.4714C2.7369 6.34638 2.66667 6.17681 2.66667 6ZM0 0.666667C0 0.489856 0.0702379 0.320287 0.195262 0.195262C0.320286 0.070238 0.489856 0 0.666667 0H14C14.1768 0 14.3464 0.070238 14.4714 0.195262C14.5964 0.320287 14.6667 0.489856 14.6667 0.666667C14.6667 0.843478 14.5964 1.01305 14.4714 1.13807C14.3464 1.2631 14.1768 1.33333 14 1.33333H0.666667C0.489856 1.33333 0.320286 1.2631 0.195262 1.13807C0.0702379 1.01305 0 0.843478 0 0.666667Z"
                            class="fill-theme dark:fill-white" />
                    </svg>
                </button>
                <!-- Mobile Hamburger Menu End -->
            </div>
            <!-- Mobile Menu Bar End -->


            <!-- Mobile Menu Sidebar Start -->
            <div
                class="mobile-menu fixed top-0 -right-full w-full max-w-mobilemenu bg-flashWhite dark:bg-nightBlack z-999 h-full xl:hidden transition-all duration-300 [&.is-menu-open]:right-0 py-12 px-8 overflow-y-scroll">
                <button
                    class="absolute flex items-center justify-center w-9 h-9 text-sm text-white rounded-full close-menu top-4 right-4 bg-greyBlack" aria-label="Close Menu">
                    <i class="fal fa-times"></i>
                </button>
                <div class="mb-6 text-lg font-medium text-black dark:text-white menu-title">
                    Menu
                </div>
                <ul class="space-y-5 font-normal main-menu">
                    <li data-scroll-nav="0" class="relative group active">
                        <a href="#home" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-home"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Home
                            </span>
                        </a>
                    </li>
                    <li data-scroll-nav="1" >
                        <a href="#about" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-user"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                About
                            </span>
                        </a>
                    </li>
                    <li data-scroll-nav="2" class="relative group">
                        <a href="#" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-briefcase"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Service
                            </span>
                        </a>
                    </li>
                    <li data-scroll-nav="3" class="relative group">
                        <a href="#skill" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-graduation-cap"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Skills
                            </span>
                        </a>
                    </li>
                    <li data-scroll-nav="4" class="relative group">
                        <a href="#resume" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-file-alt"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Resume
                            </span>
                        </a>
                    </li>
                  <!--  <li data-scroll-nav="5" class="relative group">
                        <a href="#portfolio" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-tasks-alt"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Poftfolio
                            </span>
                        </a>
                    </li>
                -->
                    <li data-scroll-nav="6" class="relative group">
                        <a href="#blog" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-blog"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Blog
                            </span>
                        </a>
                    </li>
                    <li data-scroll-nav="7" class="relative group">
                        <a href="#testimonial" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-comment-alt-lines"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Testimonial
                            </span>
                        </a>
                    </li>
                    <li data-scroll-nav="8" class="relative group">
                        <a href="#contact" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-envelope"></i>
                            </span>
                            <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Contact
                            </span>
                        </a>
                    </li>
                </ul>
                <br><br>
                <div class="mb-4 font-medium text-black dark:text-white menu-title text-md">
                    Get in Touch
                </div>
                <!-- Social Share Icon Start  -->
                <div class="flex items-center space-x-4 social-icons *:flex">
                    <a href="#" title="Share with Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" title="Share with Linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" title="Share with X">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" title="Share with X">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <!-- Social Share Icon End  -->
            </div>
            <!-- Mobile Menu Sidebar End -->


            <!-- Sidebar Profile Start -->
            <div
                class="w-full mx-auto minfo__sidebar__wrapper xl:fixed xl:top-1/2 xl:left-4 2xl:left-14 xl:-translate-y-1/2 md:max-w-sidebar xl:max-2xl:max-w-xs z-999">

                <div class="p-3 max-xl:mb-3 overflow-hidden minfo__sidebar bg-white dark:bg-nightBlack rounded-2xl">
                    <div class="mx-4 mt-12 text-center user-info lg:mx-6">
                        <a href="index.html"
                            class="w-36 h-36 mb-2.5 block mx-auto border-6 border-platinum dark:border-[#2f2f2f] overflow-hidden rounded-full *:w-full *:h-full *:rounded-full">
                            <img 
                                src="/img/user-sidebar-thumb.png" 
                                class="hidden dark:block "
                                alt="Brown Reddick"> <!--Image for Dark Version -->
                            <img 
                                src="/img/user-sidebar-thumb-light.png" 
                                class="dark:hidden"
                                alt="Brown Reddick"> <!--Image for Light Version -->
                        </a>
                        <h6 class="mb-1 text-lg font-semibold text-black dark:text-white name">Cristian Dumitriu</h6>
                        <div class="leading-none cd-headline clip is-full-width">
                            <h6 class="text-sm cd-words-wrapper designation text-theme after:!bg-theme *:font-normal">
                                <b class="is-visible">Fullstack Web Developer</b>
                                <b>IT consultant</b>
                                <b>Cloud consultant</b>
                            </h6>
                        </div>
                    </div>
                    <div class="pt-6 mx-4 border-t lg:mx-6 user-meta-info md:mx-7 my-7 border-platinum dark:border-metalBlack">
<!--                        <ul class="space-y-3 *:flex *:text-sm">
                            <li>
                                <span class="flex-1 font-medium text-black dark:text-white">Residence:</span>
                                <span>Spain</span>
                            </li>
                            <li>
                                <span class="flex-1 font-medium text-black dark:text-white">City:</span>
                                <span>Castellon</span>
                            </li>
                            <li>
                                <span class="flex-1 font-medium text-black dark:text-white">Age:</span>
                                <span>41</span>
                            </li>
                        </ul>
-->                   </div>

 
                    <div class="px-4 py-5 lg:py-6 lg:px-6 rounded-2xl md:px-8 bg-flashWhite dark:bg-metalBlack">
                        <div class="text-sm font-medium text-black dark:text-white">Specialization</div>
                        <div class="flex items-center justify-between my-4 space-x-4 skills_circle *:space-y-2 *:text-center">
                            <div class="progressCircle flex-col flex-center">
                                <div class="relative w-15 h-15 circle" data-percent="65" data-circlefill="#00BC91" data-circleempty="#777777">
                                    <div class="absolute inset-0 text-[13px] font-medium label flex-center">65%</div>
                                </div>
                                <p class="text-[13px] font-normal dark:font-light text-black dark:text-white/90">Backend <br />& SQL Databases</p>
                            </div>
                            <div class="progressCircle flex-col flex-center">
                                <div class="relative w-15 h-15 circle" data-percent="55" data-circlefill="#00BC91" data-circleempty="#777777">
                                    <div class="absolute inset-0 text-[13px] font-medium label flex-center">55%</div>
                                </div>
                                <p class="text-[13px] font-normal dark:font-light text-black dark:text-white/90">Frontend & NoSQL Databases</p>
                            </div>
                            <div class="progressCircle flex-col flex-center">
                                <div class="relative w-15 h-15 circle" data-percent="35" data-circlefill="#00BC91" data-circleempty="#777777">
                                    <div class="absolute inset-0 text-[13px] font-medium label flex-center">35%</div>
                                </div>
                                <p class="text-[13px] font-normal dark:font-light text-black dark:text-white/90">Devops Systems & Networking</p>
                            </div>
                            <div class="progressCircle flex-col flex-center">
                                <div class="relative w-15 h-15 circle" data-percent="25" data-circlefill="#00BC91" data-circleempty="#777777">
                                    <div class="absolute inset-0 text-[13px] font-medium label flex-center">25%</div>
                                </div>
                                <p class="text-[13px] font-normal dark:font-light text-black dark:text-white/90">AI Software <br />& Cibersecurity</p>
                            </div>
                        </div>

                        
                        <div class="mt-6">
                            <a href="mycv.pdf" download target="_blank"
                                class="text-center text-sm border border-theme bg-theme flex items-center justify-center gap-2 text-white rounded-4xl py-3.5 transition duration-300 text-[15px] font-semibold hover:bg-themeHover hover:border-themeHover">
                                DOWNLOAD CV
                                <span class="animate-bounce">
                                    <svg width="18" height="18" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0724 4.92378C12.0726 4.91034 12.0726 4.89691 12.0726 4.88368C12.0726 2.53968 10.1657 0.632812 7.82171 0.632812C5.47771 0.632812 3.57084 2.53968 3.57084 4.88368C3.57084 4.89691 3.57084 4.91055 3.57104 4.92378C1.95417 5.0992 0.691406 6.47267 0.691406 8.13554C0.691406 9.91704 2.14059 11.3662 3.92209 11.3662H4.33138C4.55606 11.3662 4.7384 11.1839 4.7384 10.9592C4.7384 10.7345 4.55606 10.5522 4.33138 10.5522H3.92209C2.58952 10.5522 1.50544 9.46811 1.50544 8.13554C1.50544 6.80297 2.58952 5.71888 3.92209 5.71888H4.00309C4.11868 5.71888 4.22898 5.66963 4.30611 5.58355C4.38345 5.49726 4.42028 5.38248 4.40766 5.2673C4.3924 5.12769 4.38487 5.00233 4.38487 4.88348C4.38487 2.98842 5.92665 1.44664 7.82171 1.44664C9.71678 1.44664 11.2586 2.98842 11.2586 4.88348C11.2586 5.00233 11.251 5.12769 11.2358 5.2673C11.2231 5.38228 11.26 5.49726 11.3373 5.58355C11.4144 5.66963 11.5247 5.71888 11.6403 5.71888H11.7217C13.0541 5.71888 14.138 6.80297 14.138 8.13554C14.138 9.46811 13.0541 10.5522 11.7217 10.5522H11.288C11.0634 10.5522 10.881 10.7345 10.881 10.9592C10.881 11.1839 11.0634 11.3662 11.288 11.3662H11.7217C13.5028 11.3662 14.952 9.91704 14.952 8.13554C14.952 6.47247 13.6892 5.099 12.0724 4.92378Z"
                                            fill="white" />
                                        <path
                                            d="M6.26314 11.942C6.0877 12.1876 6.26327 12.5288 6.5651 12.5288H8.81272L7.3764 14.5396C7.25728 14.7064 7.29591 14.9382 7.46268 15.0573C7.62945 15.1764 7.86122 15.1378 7.98034 14.971L9.83579 12.3734C10.0112 12.1278 9.83566 11.7866 9.53382 11.7866H7.2862L8.72252 9.77578C8.84164 9.609 8.80302 9.37724 8.63624 9.25811C8.46947 9.13899 8.23771 9.17762 8.11858 9.34439L6.26314 11.942Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <svg class="absolute w-0 h-0">
                        <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox" stroke="white" stroke-width="2">
                            <path
                                d="M0.001,0.031 C0.001,0.014,0.026,0.001,0.055,0.001 H0.492 C0.506,0.001,0.52,0.004,0.53,0.009 L0.61,0.052 C0.62,0.057,0.634,0.06,0.649,0.06 H0.947 C0.977,0.06,1,0.074,1,0.091 V0.971 C1,0.987,0.977,1,0.947,1 H0.055 C0.026,1,0.001,0.987,0.001,0.971 V0.031">
                            </path>
                        </clipPath>
                    </svg>
                </div>

            </div>
            <!-- Sidebar Profile End -->


            <!-- Nav/Navigation Start -->
            <div class="minfo__nav__wrapper bg-snowWhite dark:bg-power__black max-xl:hidden fixed top-1/2 -translate-y-1/2 right-4 2xl:right-14 z-999 flex items-center flex-col gap-4 border border-platinum dark:border-metalBlack rounded-4xl px-2.5 py-4">

                <!-- Site Logo Start -->
                <div class="flex border rounded-full logo w-15 h-15 border-platinum dark:border-metalBlack flex-center hover:bg-white dark:hover:bg-metalBlack">
                    <a href="index.html">
                        <img src="/img/site-logo.svg" alt="Minfo">
                    </a>
                </div>
                <!-- Site Logo Start -->


                <!-- Main Menu/Navigation Start -->
                <div class="my-4 menu">
                    <ul class="space-y-2 text-center *:relative">
                        <li data-scroll-nav="0" class="group active">
                            <a href="#home"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Home">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-home"></i>
                                </span>
                            </a>
                        </li>
                        <li data-scroll-nav="1" class="group">
                            <a href="#about"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="About">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-user"></i>
                                </span>
                            </a>
                        </li>
                        <li data-scroll-nav="2" class="group">
                            <a href="#service"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Service">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-briefcase"></i>
                                </span>
                            </a>
                        </li>
                        <li data-scroll-nav="3" class="group">
                            <a href="#skill"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Skills">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-graduation-cap"></i>
                                </span>
                            </a>
                        </li>
                        <li data-scroll-nav="4" class="group">
                            <a href="#resume"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Resume">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-file-alt"></i>
                                </span>
                            </a>
                        </li>
                        <!--
                        <li data-scroll-nav="5" class="group">
                            <a href="#portfolio"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Poftfolio">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-tasks-alt"></i>
                                </span>
                            </a>
                        </li>
                        -->
                        <li data-scroll-nav="6" class="group">
                            <a href="#blog"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Blog">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-blog"></i>
                                </span>
                            </a>
                        </li>
                        <li data-scroll-nav="7" class="group">
                            <a href="#testimonial"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Testimonial">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-comment-alt-lines"></i>
                                </span>
                            </a>
                        </li>
                        <li data-scroll-nav="8" class="group">
                            <a href="#contact"
                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                data-title="Contact">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-envelope"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Main Menu/Navigation End -->

                <!-- Share Button Wrapper Start -->
                <div class="relative share group">
                    <button
                        class="w-10 h-10 text-sm border rounded-full border-platinum dark:border-metalBlack flex-center group-hover:bg-white dark:group-hover:bg-metalBlack text-black dark:text-white"
                        aria-label="Share">
                        <i class="fal fa-share-alt"></i>
                    </button>

                    <!-- Social Share Icon Start  -->
                    <div
                        class="absolute bottom-0 flex items-center invisible px-5 py-6 space-x-3 transition-all duration-300 -translate-y-1/2 opacity-0 social-icons top-1/2 bg-white dark:bg-nightBlack rounded-4xl right-6 group-hover:opacity-100 group-hover:visible group-hover:right-10 -z-1 *:flex *:transition *:duration-200">
                        <a href="#" class="hover:text-theme" title="Share with Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-theme" title="Share with Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="hover:text-theme" title="Share with X">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-theme" title="Share with X">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <!-- Social Share Icon End  -->
                </div>
                <!-- Share Button Wrapper End -->

            </div>
            <!-- Nav/Navigation End -->
        </div>
    </div>
    <!-- App End -->


    <!-- Background Line and Animation -->
    <div class="bg-lines fixed inset-0 -z-1 md:max-xl:max-w-[45rem] xl:max-w-60rem 2xl:max-w-container mx-auto max-sm:px-8 sm:max-xl:px-12">
        <div class="line-wrapper max-w-[1130px] w-full h-full ml-auto 2xl:-mr-24 relative flex justify-between *:w-px *:h-full *:border-r *:border-dashed *:border-slate-300 dark:*:border-metalBlack *:relative *:before:absolute *:before:bg-theme *:before:rotate-45 *:before:-left-1 *:before:w-2 *:before:h-2">
            <div class="line1 before:animate-top_bottom"></div>
            <div class="line2 before:bottom-0 before:animate-bottom_top before:animate-delay-3s"></div>
            <div class="line3 before:animate-top_bottom before:animate-delay-3s"></div>
            <div class="line4 before:bottom-0 before:animate-bottom_top before:animate-delay-2s"></div>
        </div>
    </div>
    <!-- Ends Here -->

    
    <!-- Js Library Start -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/tw-elements.umd.min.js"></script>
    <script src="/js/cd-headline.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/scrollIt.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/theme-mode.js"></script>
    <!-- Js Library End -->
        @inertia
    </body>
</html>
