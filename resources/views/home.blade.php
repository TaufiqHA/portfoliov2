<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Taufiq Hidayah Abdullah | Home</title>
</head>
<body>
    {{-- Navbar Section Start --}}
    <header class="antialiased nav">
        <nav class="bg-white px-4 lg:px-6 py-2.5 dark:bg-gray-900">
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center">
                    <a href="https://flowbite.com" class="flex mr-4">
                    <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
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
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Web Development</h1>
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
                        <img src="{{ asset('img/programmer.jpg') }}" alt="programmer" class="rounded-2xl">
                    </div>
                    <div class="space-y-4 text-start">
                        <span
                        class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-cente px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                        Alphabet Inc.
                        </span>
                        <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                        Official website
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
                <svg class="mr-2 h-8" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.2696 13.126C25.1955 13.6364 24.8589 14.3299 24.4728 14.9328C23.9856 15.6936 23.2125 16.2264 22.3276 16.4114L18.43 17.2265C17.8035 17.3575 17.2355 17.6853 16.8089 18.1621L14.2533 21.0188C13.773 21.5556 13.4373 21.4276 13.4373 20.7075C13.4315 20.7342 12.1689 23.9903 15.5149 25.9202C16.8005 26.6618 18.6511 26.3953 19.9367 25.6538L26.7486 21.7247C29.2961 20.2553 31.0948 17.7695 31.6926 14.892C31.7163 14.7781 31.7345 14.6639 31.7542 14.5498L25.2696 13.126Z" fill="url(#paint0_linear_11430_22515)"/><path d="M23.5028 9.20133C24.7884 9.94288 25.3137 11.0469 25.3137 12.53C25.3137 12.7313 25.2979 12.9302 25.2694 13.1261L28.0141 14.3051L31.754 14.5499C32.2329 11.7784 31.2944 8.92561 29.612 6.65804C28.3459 4.9516 26.7167 3.47073 24.7581 2.34097C23.167 1.42325 21.5136 0.818599 19.8525 0.486816L17.9861 2.90382L17.3965 5.67918L23.5028 9.20133Z" fill="url(#paint1_linear_11430_22515)"/><path d="M1.5336 11.2352C1.5329 11.2373 1.53483 11.238 1.53556 11.2358C1.67958 10.8038 1.86018 10.3219 2.08564 9.80704C3.26334 7.11765 5.53286 5.32397 8.32492 4.40943C11.117 3.49491 14.1655 3.81547 16.7101 5.28323L17.3965 5.67913L19.8525 0.486761C12.041 -1.07341 4.05728 3.51588 1.54353 11.2051C1.54233 11.2087 1.53796 11.2216 1.5336 11.2352Z" fill="url(#paint2_linear_11430_22515)"/><path d="M19.6699 25.6538C18.3843 26.3953 16.8003 26.3953 15.5147 25.6538C15.3402 25.5531 15.1757 25.4399 15.0201 25.3174L12.7591 26.8719L10.8103 30.0209C12.9733 31.821 15.7821 32.3997 18.589 32.0779C20.7013 31.8357 22.7995 31.1665 24.7582 30.0368C26.3492 29.1191 27.7 27.9909 28.8182 26.7195L27.6563 23.8962L25.7762 22.1316L19.6699 25.6538Z" fill="url(#paint3_linear_11430_22515)"/><path d="M15.0201 25.3175C14.0296 24.5373 13.4371 23.3406 13.4371 22.0588V21.931V11.2558C13.4371 10.6521 13.615 10.5494 14.1384 10.8513C13.3323 10.3864 11.4703 8.79036 9.17118 10.1165C7.88557 10.858 6.8269 12.4949 6.8269 13.978V21.8362C6.8269 24.775 8.34906 27.8406 10.5445 29.7966C10.6313 29.874 10.7212 29.9469 10.8103 30.0211L15.0201 25.3175Z" fill="url(#paint4_linear_11430_22515)"/><path d="M28.6604 5.49565C28.6589 5.49395 28.6573 5.49532 28.6589 5.49703C28.9613 5.83763 29.2888 6.23485 29.6223 6.68734C31.3648 9.05099 32.0158 12.0447 31.4126 14.9176C30.8093 17.7906 29.0071 20.2679 26.4625 21.7357L25.7761 22.1316L28.8181 26.7195C34.0764 20.741 34.09 11.5388 28.6815 5.51929C28.6789 5.51641 28.67 5.50622 28.6604 5.49565Z" fill="url(#paint5_linear_11430_22515)"/><path d="M7.09355 13.978C7.09354 12.4949 7.88551 11.1244 9.17113 10.3829C9.34564 10.2822 9.52601 10.1965 9.71002 10.1231L9.49304 7.38962L7.96861 4.26221C5.32671 5.23364 3.1897 7.24125 2.06528 9.83067C1.2191 11.7793 0.75001 13.9294 0.75 16.1888C0.75 18.0243 1.05255 19.7571 1.59553 21.3603L4.62391 21.7666L7.09355 21.0223V13.978Z" fill="url(#paint6_linear_11430_22515)"/><path d="M9.71016 10.1231C10.8817 9.65623 12.2153 9.74199 13.3264 10.3829L13.4372 10.4468L22.3326 15.5777C22.9566 15.9376 22.8999 16.2918 22.1946 16.4392L22.7078 16.332C23.383 16.1908 23.9999 15.8457 24.4717 15.3428C25.2828 14.4782 25.5806 13.4351 25.5806 12.5299C25.5806 11.0468 24.7886 9.67634 23.503 8.93479L16.6911 5.00568C14.1436 3.53627 11.0895 3.22294 8.29622 4.14442C8.18572 4.18087 8.07756 4.2222 7.96875 4.26221L9.71016 10.1231Z" fill="url(#paint7_linear_11430_22515)"/><path d="M20.0721 31.8357C20.0744 31.8352 20.0739 31.8332 20.0717 31.8337C19.6252 31.925 19.1172 32.0097 18.5581 32.0721C15.638 32.3978 12.7174 31.4643 10.5286 29.5059C8.33986 27.5474 7.09347 24.7495 7.09348 21.814L7.09347 21.0222L1.59546 21.3602C4.1488 28.8989 12.1189 33.5118 20.0411 31.8421C20.0449 31.8413 20.0582 31.8387 20.0721 31.8357Z" fill="url(#paint8_linear_11430_22515)"/>
                    <defs>
                    <linearGradient id="paint0_linear_11430_22515" x1="20.8102" y1="23.9532" x2="23.9577" y2="12.9901" gradientUnits="userSpaceOnUse"><stop stop-color="#1724C9"/><stop offset="1" stop-color="#1C64F2"/></linearGradient>
                    <linearGradient id="paint1_linear_11430_22515" x1="28.0593" y1="10.5837" x2="19.7797" y2="2.33321" gradientUnits="userSpaceOnUse"><stop stop-color="#1C64F2"/><stop offset="1" stop-color="#0092FF"/></linearGradient>
                    <linearGradient id="paint2_linear_11430_22515" x1="16.9145" y1="5.2045" x2="4.42432" y2="5.99375" gradientUnits="userSpaceOnUse"><stop stop-color="#0092FF"/><stop offset="1" stop-color="#45B2FF"/></linearGradient>
                    <linearGradient id="paint3_linear_11430_22515" x1="16.0698" y1="28.846" x2="27.2866" y2="25.8192" gradientUnits="userSpaceOnUse"><stop stop-color="#1C64F2"/><stop offset="1" stop-color="#0092FF"/></linearGradient>
                    <linearGradient id="paint4_linear_11430_22515" x1="8.01881" y1="15.8661" x2="15.9825" y2="24.1181" gradientUnits="userSpaceOnUse"><stop stop-color="#1724C9"/><stop offset="1" stop-color="#1C64F2"/></linearGradient>
                    <linearGradient id="paint5_linear_11430_22515" x1="26.2004" y1="21.8189" x2="31.7569" y2="10.6178" gradientUnits="userSpaceOnUse"><stop stop-color="#0092FF"/><stop offset="1" stop-color="#45B2FF"/></linearGradient>
                    <linearGradient id="paint6_linear_11430_22515" x1="6.11387" y1="9.31427" x2="3.14054" y2="20.4898" gradientUnits="userSpaceOnUse"><stop stop-color="#1C64F2"/><stop offset="1" stop-color="#0092FF"/></linearGradient>
                    <linearGradient id="paint7_linear_11430_22515" x1="21.2932" y1="8.78271" x2="10.4278" y2="11.488" gradientUnits="userSpaceOnUse"><stop stop-color="#1724C9"/><stop offset="1" stop-color="#1C64F2"/></linearGradient>
                    <linearGradient id="paint8_linear_11430_22515" x1="7.15667" y1="21.5399" x2="14.0824" y2="31.9579" gradientUnits="userSpaceOnUse"><stop stop-color="#0092FF"/><stop offset="1" stop-color="#45B2FF"/></linearGradient>
                    </defs>
                </svg>
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
                console.log(response.status); // Output: Data berhasil disimpan
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
