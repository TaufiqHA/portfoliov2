<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo/logo_baru.png') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Taufiq Hidayah Abdullah | Home</title>
</head>
<body>
    {{-- Banner Seciton Start --}}
    <div id="banner" tabindex="-1" class="hidden fixed z-50 gap-8 justify-between items-start py-3 px-4 w-full bg-gray-50 border border-b border-gray-200 sm:items-center dark:border-gray-700 lg:py-4 dark:bg-green-400">
        <p class="text-sm font-light text-gray-700" id="banner_value"></p>
        <button data-collapse-toggle="banner" type="button" class="flex items-center text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    {{-- Banner Seciton End --}}
    {{-- Navbar Section Start --}}
    <header class="antialiased nav">
        <nav class="bg-white px-4 lg:px-6 py-2.5 dark:bg-gray-900">
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center">
                    <a href="#" class="flex mr-4">
                    <img src="{{ asset('img/logo/logo_baru.png') }}" class="mr-3 h-8" alt="logo" />
                        <span class="self-center lg:text-2xl font-semibold whitespace-nowrap dark:text-white text-md">Taufiq Hidayah Abdullah</span>
                    </a>
                </div>
                <div class="lg:block hidden" >
                    <menu>
                        <ul class="flex gap-10 text-md text-white hover:cursor-pointer" >
                            <li class="p-3 rounded-xl hover:bg-gray-400"><a href="#home">Home</a></li>
                            <li class="p-3 rounded-xl hover:bg-gray-400"><a href="#about">About</a></li>
                            <li class="p-3 rounded-xl hover:bg-gray-400"><a href="#portfolio">Portfolio</a></li>
                            <li class="p-3 rounded-xl hover:bg-gray-400"><a href="#contact">Contact</a></li>
                        </ul>
                    </menu>
                </div>
                <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:block hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>
    {{-- Navbar Section End --}}
    {{-- Sidebar Section Start --}}
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 lg:hidden" aria-label="Sidenav">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <ul class="space-y-2">
            <li>
                <a href="#home" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#b3b3b3" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                    <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="#about" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#c3c6d1" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    <span class="ml-3">About</span>
                </a>
            </li>
            <li>
                <a href="#portfolio" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#c3c6d1" d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                    <span class="ml-3">Portfolio</span>
                </a>
            </li>
            <li>
                <a href="#contact" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#c3c6d1" d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
                    <span class="ml-3">Contact</span>
                </a>
            </li>
        </ul>
    </div>
    </aside>
    {{-- Sidebar Section End --}}
    {{-- Hero section start --}}
    <section id="home" class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl h-screen px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Web Developer</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Skilled web developer specializing in creating dynamic and user-friendly websites. Explore my portfolio for more</p>
                <a href="#about" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Let's talk
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-4 lg:flex">
                <img src="{{ asset('img/coding.svg') }}" alt="mockup">
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}
    {{-- About Section Start --}}
    <section id="about" class="w-full h-screen flex justify-center items-center bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md flex flex-col items-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hi, I’m Taufiq. Nice to meet you.</h2>
                <p class="text-center mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">Since beginning my journey as a freelance web developer 2 years ago, I've done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use. I'm quietly confident, naturally curious, and perpetually working on improving my chops.</p>
            </div>
        </div>
    </section>
    {{-- About Section End --}}
    {{-- Skill Section Start --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-5 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">The technologies I use</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">In crafting powerful websites, I leverage a suite of cutting-edge technologies to enhance functionality and deliver an exceptional user experience.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 p-2 rounded-full bg-primary-100 lg:h-16 lg:w-16 dark:bg-primary-900">
                        <img src="{{ asset('img/logo/laravel.png') }}" alt="laravel" class="w-10">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Laravel</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">Laravel is an elegant and expressive open-source web development framework for the PHP programming language. With clean syntax, Laravel simplifies common tasks such as routing, session management, and Object-Relational Mapping (ORM), allowing developers to focus on core business logic. Advanced features like Eloquent ORM, the Blade templating engine, and Laravel Mix for resource management provide powerful tools for creating efficient, scalable, and easily maintainable web applications.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 p-2 rounded-full bg-primary-100 lg:h-16 lg:w-16 dark:bg-primary-900">
                        <img src="{{ asset('img/logo/node js.png') }}" alt="node js" class="w-10">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Node Js</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">Node.js is a powerful, open-source, server-side JavaScript runtime environment. It allows developers to build scalable and high-performance applications by leveraging non-blocking, event-driven architecture. Node.js is commonly used for developing real-time applications, APIs, and microservices. Its ecosystem, facilitated by the npm package manager, offers a wide range of modules and libraries, making it a popular choice for building fast and efficient server-side applications.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-16 lg:w-16 dark:bg-primary-900">
                        <img src="{{ asset('img/logo/express js.png') }}" alt="express">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Express Js</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">Express.js is a minimalistic and flexible Node.js web application framework that simplifies the process of building robust and scalable web applications. With a focus on simplicity and performance, Express.js provides essential features for web development, such as routing, middleware support, and template engines. It is widely used to create RESTful APIs and is known for its lightweight nature, making it an excellent choice for developing both small and large-scale web applications with Node.js.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-16 lg:w-16 dark:bg-primary-900">
                        <img src="{{ asset('img/logo/mysql.png') }}" alt="mysql" class="w-10">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Mysql</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">MySQL is an open-source relational database management system (RDBMS) that is widely used for managing and organizing structured data. Known for its reliability, speed, and ease of use, MySQL is a popular choice for various applications, ranging from small-scale websites to large enterprise systems. It supports SQL for querying and manipulating data, and its features include transactions, indexing, and robust security mechanisms. MySQL is a key component in the LAMP (Linux, Apache, MySQL, PHP/Python/Perl) stack and is compatible with various programming languages and frameworks.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-16 lg:w-16 dark:bg-primary-900">
                        <img src="{{ asset('img/logo/react js.png') }}" alt="react" class="w-10">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">React Js</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">React.js is a declarative and efficient JavaScript library for building user interfaces. Developed by Facebook, it enables developers to create reusable UI components, making it easier to manage and update complex user interfaces. React.js follows a component-based architecture, promoting a modular and scalable approach to front-end development. Its virtual DOM (Document Object Model) efficiently updates only the necessary parts of the actual DOM, resulting in improved performance. React.js is widely used for building interactive and dynamic web applications, providing a robust foundation for creating modern, responsive user interfaces.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-16 lg:w-16 dark:bg-primary-900">
                        <img src="{{ asset('img/logo/tailwindcss.png') }}" alt="tailwind" class="w-10">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Tailwind CSS</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">Tailwind CSS is a utility-first CSS framework that streamlines the process of styling web interfaces. Unlike traditional frameworks, Tailwind doesn't rely on pre-defined components; instead, it offers a set of low-level utility classes that you can compose to build custom designs. This approach provides developers with fine-grained control over styling without the need for writing custom CSS. Tailwind CSS emphasizes simplicity and flexibility, allowing for rapid development and consistent styling across projects..</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Skill Section End --}}
    {{-- Portfolio Section Start --}}
    <section id="portfolio" class="bg-white dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                Our work
                </h2>
                <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                    Here are a few past design projects I've worked on
                </p>
            </div>

            <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-1">
                <div class="flex flex-col lg:flex-row gap-7 items-center">
                    <div>
                        <img src="{{ asset('img/sita.jpg') }}" alt="sita" class="rounded-2xl">
                    </div>
                    <div class="space-y-4 text-start">
                        <span
                        class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-cente px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                        Jurusan Matematika UIN Alauddin Makassar
                        </span>
                        <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                        Sistem Informasi Tugas Akhir
                        </h3>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                            Dibuat dengan Laravel untuk efisiensi, keamanan, dan kemudahan pemeliharaan. Pendaftaran dan pelacakan proyek terintegrasi.
                        </p>
                        <a href="#" title="" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        role="button">
                        View case study
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col-reverse lg:flex-row gap-7 items-center" >
                    <div class="space-y-4 text-end">
                        <span
                        class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                        Microsoft Corp.
                        </span>
                        <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                        Management system
                        </h3>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                        Flowbite helps you connect with friends, family and communities of people who share your interests.
                        </p>
                        <a href="#" title=""
                        class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        role="button">
                        View case study
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                        </svg>
                        </a>
                    </div>
                    <div>
                        <img src="{{ asset('img/programmer.jpg') }}" alt="programmer" class="rounded-2xl" >
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-7 items-center" >
                    <div>
                        <img src="{{ asset('img/programmer.jpg') }}" alt="programmer" class="rounded-2xl">
                    </div>
                    <div class="space-y-4 text-start">
                        <span
                        class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                        Adobe Inc.
                        </span>
                        <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                        Logo design
                        </h3>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                        Flowbite helps you connect with friends, family and communities of people who share your interests.
                        </p>
                        <a href="#" title=""
                        class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        role="button">
                        View case study
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                        </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Portfolio Section End --}}
    {{-- Contact Section Start --}}
    <section id="contact" class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Thanks for taking the time to reach out. How can I help you today?</p>
            <div class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" name="email" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="text" id="name" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Your name" name="name" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..." name="message"></textarea>
                </div>
                <button id="send" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
            </div>
        </div>
    </section>
    {{-- Contact Section End --}}
    {{-- Footer Section Start --}}
    <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{ asset('img/logo/logo_baru.png') }}" class="mr-2 h-8" alt="logo">
                Taufiq Hidayah Abdullah
            </a>
            <p class="my-6 text-gray-500 dark:text-gray-400">Empowering you to bring your dream website to life.</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                <li>
                    <a href="#home" class="mr-4 hover:underline md:mr-6 ">Home</a>
                </li>
                <li>
                    <a href="#about" class="mr-4 hover:underline md:mr-6">About</a>
                </li>
                <li>
                    <a href="#portfolio" class="mr-4 hover:underline md:mr-6 ">Portfolio</a>
                </li>
                <li>
                    <a href="#contact" class="mr-4 hover:underline md:mr-6">Contact</a>
                </li>
            </ul>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022-2024</span>
        </div>
    </footer>
    {{-- Footer Section End --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" ></script>
    <script>
        $(document).ready(function() {
            var navbar = $(".nav"); // Ganti dengan class navbar Anda

            $(window).scroll(function() {
            if ($(this).scrollTop() > 30) { // Sesuaikan nilai 50 dengan tinggi scroll yang diinginkan
                navbar.addClass("w-full");
                navbar.addClass("fixed");
            } else {
                navbar.removeClass("w-full");
                navbar.removeClass("fixed");
            }
            });
        });
    </script>
    <script>
        const button = document.getElementById('send')
        button.addEventListener('click', function () {
            const email = document.getElementById('email')
            const name = document.getElementById('name')
            const message = document.getElementById('message')
            const banner = document.getElementById('banner')
            const banner_value = document.getElementById('banner_value')
            const xhr = new XMLHttpRequest();

            var data = {
                _token: document.querySelector('meta[name="csrf-token"]').content,
                email: email.value,
                name: name.value,
                message: message.value
            };
            xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                banner.classList.remove('hidden')
                banner.classList.add('flex')
                banner_value.innerHTML = response.success
                } else {
                console.error('Terjadi kesalahan: ' + xhr.status);
                }
            }
            };

            xhr.open('POST', '{{ route("send.mail") }}', true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');

            xhr.send(JSON.stringify(data));
        })
    </script>
</body>
</html>
