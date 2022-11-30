<nav x-data="{ isOpen: false }" class="shadow bg-[#F8F8F8] z-50 top-0 fixed w-full">
    <div class="container py-4 mx-auto md:px-24">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <div class="flex">
                    <img src="./assets/logo.png" alt="" class="z-10 flex w-16 h-16 pt-1 mx-4">
                    <a class="z-10 pt-4 text-2xl font-black lg:text-3xl hover:text-gray-300" href="/">BILLUN</a>
                </div>


                <!-- Mobile menu button -->
                <div class="z-10 flex mr-4 lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button"
                        class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-800"
                        aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 w-full px-6 py-4 mt-2 transition-all duration-300 ease-in-out bg-black shadow-md lg:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0">
                <div class="-mx-4 lg:flex lg:items-center">
                    <a href="/" class=" block mx-4 py-2 font-black text-[color:var(--bg-color)] ">Sécurité pour le
                        Web</a>
                    <a href="secure_mail"
                        class=" block mx-4 py-2 mt-4 font-black  lg:mt-0 text-gray-600  hover:text-[#6002E9] ">Sécurité
                        pour E-mail</a>
                        <select title="lang" name="lang"
                        class="hidden bg-[#F8F8F8] lg:inline-block h-12 px-3 py-1 ml-2 leading-normal no-underline whitespace-no-wrap align-middle select-none font-bold text-gray-400  border-l-[3px] border-gray-300"
                        id="lang">
                        <option class="text-center" id="optionx" value="Fr" selected>Fr</option>
                        <option class="text-center" id="optionx" value="En">En</option>
                        <option class="text-center" id="optionx" value="Es">Es</option>
                        <option class="text-center" id="optionx" value="It">It</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</nav>