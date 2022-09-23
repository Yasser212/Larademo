<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/demolinoStock.ico" />
    <title>Demolino</title>
    <link href="/css/app.css" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<style>
    [x-cloak] {
        display: none;
    }


    .spin {
        background-image: url("{{ asset('images/DemolinoWhite.svg') }}");
    }

    .demolino:hover .spin {
        background-image: url("{{ asset('images/demolinoStock.svg') }}");
        -webkit-animation-name: spin;
        animation-name: spin;
        -webkit-animation-duration: 1000ms;
        animation-duration: 1000ms;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
</style>

<body x-cloak :class="{ 'dark': darkMode === true }" x-data="{ 'darkMode': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
    <div class="bg-slate-400 dark:bg-slate-600  w-full h-full">

        <!-- Header -->
        <header
            class="sticky top-0 z-50 flex items-center shadow-md shadow-veryDarkBlue justify-center w-full h-fit text-slate-300 bg-darkBlue dark:bg-black dark:text-white">
            <div x-on:click.away="open = false" x-data="{ open: false }" class="flex flex-col w-full bg-transparent">
                <div x-on:click.away="close = false" x-data="{ close: false }"
                    class="relative flex flex-col md:flex-row mx-auto items-center lg:w-9/12 w-full xs:px-4 bg-transparent">
                    <div class="flex flex-row w-full md:justify-start bg-transparent">
                        <!-- Logo -->
                        <div class="flex bg-transparent items-center w-fit">
                            <div
                                class="demolino duration-200 flex h-fit w-min sm:mr-6 items-center justify-center py-3 bg-transparent">
                                <a href="/"
                                    class="spin md:h-10 md:w-10 h-8 w-8 my-auto sm:mr-2 duration-300 bg-transparent hidden xs:block">
                                </a>
                                <a href="/"
                                    class="flex my-auto pl-2 sm:pl-0 text-md sm:text-lg md:text-2xl font-bold font-sans bg-transparent">
                                    <!-- <span style="color:#00B4D8;">DEMOLINO</span> -->
                                    <span class="text-red-600">D</span>
                                    <span class="text-orange-400">E</span>
                                    <span class="text-yellow-300">M</span>
                                    <span class="text-lime-400">O</span>
                                    <span class="text-lime-600">L</span>
                                    <span class="text-teal-500">I</span>
                                    <span class="text-sky-500">N</span>
                                    <span class="text-blue-500">O</span>
                                </a>
                            </div>
                        </div>
                        <div class="md:hidden flex grow bg-transparent"></div>


                        <div class="relative flex flex-row md:justify-start justify-end items-center">
                            <!-- Search Button + Dark Mode Swap -->
                            <div class="flex justify-start items-center">

                                <!-- Search Button -->
                                <button x-on:click="open = !open" class="btn btn-ghost -mr-3">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                        class="w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                        </path>
                                    </svg>
                                </button>

                                <!-- Dark Mode Swap -->
                                <label for="toggle" class="btn btn-ghost swap swap-rotate md:mr-0">
                                    <!-- this hidden checkbox controls the state -->
                                    <input id="toggle" type="checkbox" class="hidden" :value="darkMode"
                                        x-on:change="darkMode = !darkMode" x-cloak />
                                    <!-- sun icon -->
                                    <svg class="swap-on fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                                    </svg>
                                    <!-- moon icon -->
                                    <svg class="swap-off fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                                    </svg>
                                </label>

                            </div>

                            <!-- Hamburger Button -->
                            <div class="flex flex-row items-center mr-3 md:hidden">
                                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                                    x-on:click="close = !close">
                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                        <path x-cloak x-show="!close" fill-rule="evenodd"
                                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                        <path x-cloak x-show="close" fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Profile -->
                            <div class="dropdown dropdown-end md:hidden mr-1 mt-1">
                                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                    <div class="w-10 rounded-full">
                                        <img src="https://api.lorem.space/image/face?hash=33791" />
                                    </div>
                                </label>
                                <ul tabindex="0"
                                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-darkBlue dark:bg-black border-slate-400 border-2 rounded-box w-52">
                                    <li>
                                        <a class="justify-between">
                                            Profile
                                            <span class="badge">New</span>
                                        </a>
                                    </li>
                                    <li><a>Settings</a></li>
                                    <li><a>Logout</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <nav class="md:flex md:flex-row flex-col w-full">
                        <div :class="{ 'flex': close, 'hidden': !close }"
                            class="flex-col-reverse flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                            <div x-on:click.away="open = false" class="relative" x-data="{ open: false }">
                                <button x-on:click="open = !open" class="btn btn-ghost w-full items-center">
                                    <span class="text-base">more</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20"
                                        :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                                    <div
                                        class="mt-1 p-2 shadow menu menu-compact dropdown-content bg-darkBlue dark:bg-black border-slate-400 border-2 rounded-box w-full md:w-52">
                                        <a class="btn btn-ghost" href="#">Sports</a>
                                        <a class="btn btn-ghost" href="#">Tech</a>
                                        <a class="btn btn-ghost" href="#">Culture</a>
                                        <a class="btn btn-ghost" href="#">Art</a>
                                        <a class="btn btn-ghost" href="#">Music</a>
                                        <a class="btn btn-ghost" href="#">World</a>
                                        <a class="btn btn-ghost" href="#">Environment</a>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-ghost text-base" href="#">Science</a>
                            <a class="btn btn-ghost text-base" href="#">Business</a>
                            <a class="btn btn-ghost text-base" href="#">Politic</a>
                        </div>
                    </nav>
                    <!-- Profile -->
                    <div class="md:block dropdown dropdown-end hidden">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://api.lorem.space/image/face?hash=33791" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-darkBlue dark:bg-black border-slate-400 border-2 rounded-box w-52">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>

                </div>
                @include('partials._search')

            </div>
        </header>


        <main>
            {{ $slot }}
            {{-- <div class="w-full h-screen flex guide">
                <div></div>
            </div> --}}
        </main>


        <!-- Footer -->
        <footer class="w-full text-slate-300 bg-darkBlue dark:bg-black dark:text-white md:px-10">

            <div class="p-5 mx-auto flex flex-col md:space-y-8 space-y-4 justify-between text-white">
                <form
                    class="w-full sm:hidden flex md:flex-row flex-col md:space-y-0 space-y-4 md:flex-nowrap flex-wrap items-center justify-center md:space-x-3 my-2 grow">
                    <div class="flex  bg-white w-full rounded-full p-1">
                        <input type="text"
                            class="text-black w-full px-2 md:px-4 rounded-full h-10 md:w-96 focus:outline-none placeholder:text-sm md:placeholder:text-base my-auto mb-1"
                            placeholder="Get new articles delivered to your inbox!" />
                        <button
                            class="px-6 py-2 w-fit text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">
                            Subscribe
                        </button>
                    </div>
                </form>
                <div
                    class="flex xl:flex-row xl:w-10/12 mx-auto w-full flex-wrap flex-col space-y-6 lg:justify-between justify-center items-center sm:order-1 order-2">
                    <hr class="sm:hidden border-b-white bottom-2 w-full mt-4 md:mt-0">

                    <div
                        class="demolino duration-200 flex h-fit items-center justify-center sm:py-0 py-10 order-2 sm:order-1">
                        <a href="/" class="spin md:h-10 md:w-10 h-8 w-8 my-auto mr-2 duration-300">
                        </a>
                        <a href="/" class="flex my-auto text-2xl font-bold font-sans bg-transparent">
                            <!-- <span style="color:#00B4D8;">DEMOLINO</span> -->
                            <span class="text-red-600">D</span>
                            <span class="text-orange-400">E</span>
                            <span class="text-yellow-300">M</span>
                            <span class="text-lime-400">O</span>
                            <span class="text-lime-600">L</span>
                            <span class="text-teal-500">I</span>
                            <span class="text-sky-500">N</span>
                            <span class="text-blue-500">O</span>
                        </a>
                    </div>

                    <!-- Input Container -->
                    <form
                        class="w-full md:w-fit hidden sm:flex md:flex-row flex-col md:space-y-0 space-y-4 md:flex-nowrap flex-wrap items-center justify-center md:space-x-3 my-2 order-2">
                        <div class="flex  bg-white w-full rounded-full p-1">
                            <input type="text"
                                class="text-black w-full px-2 md:px-4 rounded-full h-10 md:w-96 focus:outline-none placeholder:text-xs md:placeholder:text-base my-auto"
                                placeholder="Get new articles delivered to your inbox!" />
                            <button
                                class="px-6 py-2 w-fit text-white btn btn-error rounded-full bg-gradient-to-br from-brightRedLight to-brightRed shadow-inner">
                                Subscribe
                            </button>
                        </div>
                    </form>


                    <div class="flex justify-between items-center sm:space-x-4 xs:space-x-10 sm:min-w-fit sm:order-3">
                        <!-- Facebook Link -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48"
                                height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993"
                                    x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#2aa4f4"></stop>
                                    <stop offset="1" stop-color="#007ad9"></stop>
                                </linearGradient>
                                <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                                    d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                                </path>
                                <path fill="#fff"
                                    d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                                </path>
                            </svg>
                        </a>
                        <!-- Youtube Link -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48"
                                height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                <linearGradient id="PgB_UHa29h0TpFV_moJI9a_9a46bTk3awwI_gr1" x1="9.816"
                                    x2="41.246" y1="9.871" y2="41.301" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#f44f5a"></stop>
                                    <stop offset=".443" stop-color="#ee3d4a"></stop>
                                    <stop offset="1" stop-color="#e52030"></stop>
                                </linearGradient>
                                <path fill="url(#PgB_UHa29h0TpFV_moJI9a_9a46bTk3awwI_gr1)"
                                    d="M45.012,34.56c-0.439,2.24-2.304,3.947-4.608,4.267C36.783,39.36,30.748,40,23.945,40	c-6.693,0-12.728-0.64-16.459-1.173c-2.304-0.32-4.17-2.027-4.608-4.267C2.439,32.107,2,28.48,2,24s0.439-8.107,0.878-10.56	c0.439-2.24,2.304-3.947,4.608-4.267C11.107,8.64,17.142,8,23.945,8s12.728,0.64,16.459,1.173c2.304,0.32,4.17,2.027,4.608,4.267	C45.451,15.893,46,19.52,46,24C45.89,28.48,45.451,32.107,45.012,34.56z">
                                </path>
                                <path
                                    d="M32.352,22.44l-11.436-7.624c-0.577-0.385-1.314-0.421-1.925-0.093C18.38,15.05,18,15.683,18,16.376	v15.248c0,0.693,0.38,1.327,0.991,1.654c0.278,0.149,0.581,0.222,0.884,0.222c0.364,0,0.726-0.106,1.04-0.315l11.436-7.624	c0.523-0.349,0.835-0.932,0.835-1.56C33.187,23.372,32.874,22.789,32.352,22.44z"
                                    opacity=".05"></path>
                                <path
                                    d="M20.681,15.237l10.79,7.194c0.689,0.495,1.153,0.938,1.153,1.513c0,0.575-0.224,0.976-0.715,1.334	c-0.371,0.27-11.045,7.364-11.045,7.364c-0.901,0.604-2.364,0.476-2.364-1.499V16.744C18.5,14.739,20.084,14.839,20.681,15.237z"
                                    opacity=".07"></path>
                                <path fill="#fff"
                                    d="M19,31.568V16.433c0-0.743,0.828-1.187,1.447-0.774l11.352,7.568c0.553,0.368,0.553,1.18,0,1.549	l-11.352,7.568C19.828,32.755,19,32.312,19,31.568z">
                                </path>
                            </svg>
                        </a>
                        <!-- Twitter Link -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48"
                                height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                <linearGradient id="_osn9zIN2f6RhTsY8WhY4a_5MQ0gPAYYx7a_gr1" x1="10.341"
                                    x2="40.798" y1="8.312" y2="38.769" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#2aa4f4"></stop>
                                    <stop offset="1" stop-color="#007ad9"></stop>
                                </linearGradient>
                                <path fill="url(#_osn9zIN2f6RhTsY8WhY4a_5MQ0gPAYYx7a_gr1)"
                                    d="M46.105,11.02c-1.551,0.687-3.219,1.145-4.979,1.362c1.789-1.062,3.166-2.756,3.812-4.758	c-1.674,0.981-3.529,1.702-5.502,2.082C37.86,8.036,35.612,7,33.122,7c-4.783,0-8.661,3.843-8.661,8.582	c0,0.671,0.079,1.324,0.226,1.958c-7.196-0.361-13.579-3.782-17.849-8.974c-0.75,1.269-1.172,2.754-1.172,4.322	c0,2.979,1.525,5.602,3.851,7.147c-1.42-0.043-2.756-0.438-3.926-1.072c0,0.026,0,0.064,0,0.101c0,4.163,2.986,7.63,6.944,8.419	c-0.723,0.198-1.488,0.308-2.276,0.308c-0.559,0-1.104-0.063-1.632-0.158c1.102,3.402,4.299,5.889,8.087,5.963	c-2.964,2.298-6.697,3.674-10.756,3.674c-0.701,0-1.387-0.04-2.065-0.122C7.73,39.577,12.283,41,17.171,41	c15.927,0,24.641-13.079,24.641-24.426c0-0.372-0.012-0.742-0.029-1.108C43.483,14.265,44.948,12.751,46.105,11.02">
                                </path>
                            </svg>
                        </a>
                        <!-- Pinterest Link -->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48"
                                height="48" viewBox="0 0 48 48" style=" fill:#000000;">
                                <circle cx="24" cy="24" r="20" fill="#E60023"></circle>
                                <path fill="#FFF"
                                    d="M24.4439087,11.4161377c-8.6323242,0-13.2153931,5.7946167-13.2153931,12.1030884	c0,2.9338379,1.5615234,6.5853882,4.0599976,7.7484131c0.378418,0.1762085,0.581543,0.1000366,0.668457-0.2669067	c0.0668945-0.2784424,0.4038086-1.6369019,0.5553589-2.2684326c0.0484619-0.2015381,0.0246582-0.3746338-0.1384277-0.5731201	c-0.8269653-1.0030518-1.4884644-2.8461304-1.4884644-4.5645752c0-4.4115601,3.3399658-8.6799927,9.0299683-8.6799927	c4.9130859,0,8.3530884,3.3484497,8.3530884,8.1369019c0,5.4099731-2.7322998,9.1584473-6.2869263,9.1584473	c-1.9630737,0-3.4330444-1.6238403-2.9615479-3.6153564c0.5654297-2.3769531,1.6569214-4.9415283,1.6569214-6.6584473	c0-1.5354004-0.8230591-2.8169556-2.5299683-2.8169556c-2.006958,0-3.6184692,2.0753784-3.6184692,4.8569336	c0,1.7700195,0.5984497,2.9684448,0.5984497,2.9684448s-1.9822998,8.3815308-2.3453979,9.9415283	c-0.4019775,1.72229-0.2453003,4.1416016-0.0713501,5.7233887l0,0c0.4511108,0.1768799,0.9024048,0.3537598,1.3687744,0.4981079l0,0	c0.8168945-1.3278198,2.0349731-3.5056763,2.4864502-5.2422485c0.2438354-0.9361572,1.2468872-4.7546387,1.2468872-4.7546387	c0.6515503,1.2438965,2.5561523,2.296936,4.5831299,2.296936c6.0314941,0,10.378418-5.546936,10.378418-12.4400024	C36.7738647,16.3591919,31.3823242,11.4161377,24.4439087,11.4161377z">
                                </path>
                            </svg>
                        </a>
                        <!-- Instagram Link -->
                        <a href="#">
                            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132 132">
                                <defs>
                                    <linearGradient id="b">
                                        <stop offset="0" stop-color="#3771c8" />
                                        <stop stop-color="#3771c8" offset=".128" />
                                        <stop offset="1" stop-color="#60f" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="a">
                                        <stop offset="0" stop-color="#fd5" />
                                        <stop offset=".1" stop-color="#fd5" />
                                        <stop offset=".5" stop-color="#ff543e" />
                                        <stop offset="1" stop-color="#c837ab" />
                                    </linearGradient>
                                    <radialGradient id="c" cx="158.429" cy="578.088" r="65"
                                        xlink:href="#a" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)"
                                        fx="158.429" fy="578.088" />
                                    <radialGradient id="d" cx="147.694" cy="473.455" r="65"
                                        xlink:href="#b" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)"
                                        fx="147.694" fy="473.455" />
                                </defs>
                                <path fill="url(#c)"
                                    d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                    transform="translate(1.004 1)" />
                                <path fill="url(#d)"
                                    d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                    transform="translate(1.004 1)" />
                                <path fill="#fff"
                                    d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="hidden sm:flex md:flex-row flex-col md:space-x-20 justify-center order-2 xl:mr-32">
                    <div class="flex flex-col md:space-y-4 space-y-1">
                        <p class="text-zinc-400">Unternehmen</p>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="impressum">Impressum</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="about">Info</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="jobs">Jobs</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="press">For
                            the Record</a>
                    </div>
                    <div class="flex flex-col md:space-y-4 space-y-1">
                        <p class="text-zinc-400 mt-6 sm:mt-0">Communitys</p>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="artists">Services</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="developers">Developers</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="advertising">Werbung</a>
                    </div>
                    <div class="flex flex-col md:space-y-4 space-y-1">
                        <p class=" text-zinc-400 mt-6 sm:mt-0">Nützliche Links</p>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="help">Support</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="play">Webplayer</a>
                        <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                            data-ga-action="free">Mobile
                            App</a>
                    </div>
                </div>


                <div x-data="{ tab1: false, tab2: false, tab3: false, tab4: false }" class="sm:hidden flex flex-col pt-4 space-y-8 justify-center w-fit">
                    <div x-on:mouseover.away="tab1 = false" class="flex flex-col space-y-5 transi">
                        <p x-on:click="tab1 = !tab1"
                            class="text-white text-lg hover:underline font-bold cursor-pointer">
                            About Us
                        </p>
                        <div x-show="tab1" x-transition:enter="transition ease-in-out duration-300"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="flex flex-col space-y-4">
                            <a class="hover:text-orange-500" href="">Rechtliches
                            </a>
                            <a class="hover:text-orange-500" href="">Datenschutz-Center
                            </a>
                            <a class="hover:text-orange-500" href="">Datenschutzrichtlinie
                            </a>
                            <a class="hover:text-orange-500" href="">Cookie-Einstellungen
                            </a>
                            <a class="hover:text-orange-500" href="">Über Werbung</a>
                        </div>
                    </div>
                    <div x-on:mouseover.away="tab2 = false" class="flex flex-col space-y-5">
                        <p x-on:click="tab2 = !tab2"
                            class="text-white text-lg hover:underline font-bold cursor-pointer">
                            Communitys
                        </p>
                        <div x-show="tab2" x-transition:enter="transition ease-in-out duration-300"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="flex flex-col space-y-4">
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="artists">Services</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="developers">Developers</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="advertising">Werbung</a>
                        </div>
                    </div>
                    <div x-on:mouseover.away="tab3 = false" class="flex flex-col space-y-5">
                        <p x-on:click="tab3 = !tab3"
                            class="text-white text-lg hover:underline font-bold cursor-pointer">
                            Nützliche Links
                        </p>
                        <div x-show="tab3" x-transition:enter="transition ease-in-out duration-300"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="flex flex-col space-y-4">
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="help">Support</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="play">Webplayer</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="free">Mobile
                                App</a>
                        </div>
                    </div>
                    <div x-on:mouseover.away="tab4 = false" class="flex flex-col space-y-5 transi">
                        <p x-on:click="tab4 = !tab4"
                            class="text-white text-lg hover:underline font-bold cursor-pointer">
                            Unternehmen
                        </p>
                        <div x-show="tab4" x-transition:enter="transition ease-in-out duration-300"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="flex flex-col space-y-4">
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="impressum">Impressum</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="about">Info</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="jobs">Jobs</a>
                            <a href="#" class="hover:text-orange-500" data-ga-category="menu"
                                data-ga-action="press">For
                                the Record</a>
                        </div>
                    </div>
                </div>

                <div
                    class="flex xl:w-10/12 mx-auto md:flex-row-reverse space-y-8 flex-col md:justify-between items-center order-3">
                    <div class="text-gray-300 flex flex-col justify-center items-center">
                        <p class="font-bold">Germany</p>
                        <p> Copyright &copy; <span class="text-brightRedLight"
                                x-text="new Date().getFullYear()"></span>
                        </p>
                    </div>

                    <div class="sm:flex hidden flex-wrap md:justify-start justify-center font-semibold text-gray-300">
                        <a class="hover:text-orange-500 mr-6 mb-2" href="">Rechtliches
                        </a>
                        <a class="hover:text-orange-500 mr-6 mb-2" href="">Datenschutz-Center
                        </a>
                        <a class="hover:text-orange-500 mr-6 mb-2" href="">Datenschutzrichtlinie
                        </a>
                        <a class="hover:text-orange-500 mr-6 mb-2" href="">Cookie-Einstellungen
                        </a>
                        <a class="hover:text-orange-500 mr-6 mb-2" href="">Über Werbung</a>
                    </div>
                </div>
            </div>

        </footer>

        <a href="/articles/create" dir="rtl"
            class="fixed bottom-10 right-10 btn btn-error bg-gradient-to-br from-brightRedLight to-brightRed font-bold py-2 px-5">New
            Article
        </a>
    </div>

</body>

</html>
