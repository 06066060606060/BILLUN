<section class="container p-6 mx-auto">
@if (session('Message_envoye'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000, PopupUser())" class="absolute flex flex-col items-center top-[20%] left-[45%] z-50 transition">
        <div id="popmenu" class="px-4 py-2 text-lg btnmenu text-white mx-auto bg-blue-700 rounded-lg">&zwnj; Message envoyé</div>
    </div>
@endif
@if (session('Inscription'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000, PopupUser())" class="absolute flex flex-col items-center top-[20%] left-[45%] z-50 transition">
        <div id="popmenu" class="px-4 py-2 text-lg btnmenu text-white mx-auto bg-blue-700 rounded-lg">&zwnj; Inscription en attente de validation</div>
    </div>
@endif

    <div class="overflow-hidden body-font">
	<div class="z-0 one"></div>
        <div class="container px-5 mx-auto py-18">
            <div class="flex flex-wrap w-full mx-auto mt-48 lg:flex-nowrap md:justify-center">
                <div class="w-full mb-6 lg:w-1/2 lg:pr-16 lg:py-6 lg:mb-0 ">
                    <h1 class="z-50 mb-4 text-3xl font-bold leading-tight text-gray-900 md:text-5xl title-font">BROWSE THE WEB
                        <span style="color: #2F42EB">SAFELY</span>
                    </h1>
                    <ul role="list" class="pt-6 mt-4 text-lg font-medium md:text-xl align-center">
                        <li class="flex">
                            <div class="inline-flex items-center w-10 h-10 my-4 rounded-xl">
                                <img class="w-8 h-8 mb-8 mr-8" src="./assets/check.png" alt="">
                            </div>
                            <span class="ml-3 text-lg font-bold text-left md:text-2xl">Experience a safer surfing experience</span>
                        </li>
                        <li class="flex">
                            <div class="inline-flex items-center w-10 h-10 my-4 rounded-xl">
                                <img class="w-8 h-8 mb-8 mr-8" src="./assets/check.png" alt="">
                            </div>
                            <span class="ml-3 text-lg font-bold text-left md:text-2xl">Browse only on certified websites </span>
                        </li>
                        <li class="flex">
                            <div class="inline-flex items-center w-10 h-10 my-4 rounded-xl">
                                <img class="w-8 h-8 mb-8 mr-8" src="./assets/check.png" alt="">
                            </div>
                            <span class="ml-3 text-lg font-bold text-left md:text-2xl">BILLUN is free and available on all browsers</span>
                        </li>
                    </ul>

                    <div class="flex">
                        <a href="https://chrome.google.com/webstore/detail/billun/ecodhgndejkcckkabdnigikdcdhchfgc"
                            class="flex mt-8">
                            <button
                                class="flex px-6 py-4 ml-2 mr-auto font-bold text-white border-0 rounded-full shadow-xl mycolor focus:outline-none hover:bg-indigo-600"><span
                                    class="pt-2 text-xs md:pt-1 md:text-base">GET BILLUN FOR CHROME</span> <img class="w-8 h-8 ml-2"
                                    src="./assets/chrome0.png" alt=""></button>
                        </a>
                    </div>
                    <div class="flex pt-4 md:py-8">
                        <a href="#download" class="ml-3 my-2 text-lg font-bold underline text-[#2F42EB]">Download BILLUN for another browser</a>
                    </div>
                </div>
                <div class="">
                    <img class="object-cover object-center" alt="hero" src="./assets/bro.png">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="container p-6 mx-auto">

    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-screen-xl mx-auto">
            <h1 class="pb-8 text-4xl font-extrabold text-center text-black">
                What is <span class="text-[#2F42EB]">Phishing</span> ?
            </h1>
            <div class="p-8 mt-6 mb-0 space-y-4 shadow-2xl rounded-3xl">
                <img class="object-cover object-center" alt="hero" src="./assets/Phishing.png">
                <p class="text-2xl font-black">Protection against phishing</p>

                <div class="relative mt-1">
                    <p class="max-w-screen-xl mt-4 text-sm font-medium text-black md:text-lg">
                        Phishing is <span
                            class="text-[#2F42EB] font-semibold">an attempt to obtain your personal information</span>
                        (login details, personal and/or confidential information, all kinds of access codes, or even banking information), very often by pretending to be a trusted third party.
                        <br>
                        &nbsp; <br>
                       Attackers<span
                            class="text-[#2F42EB] font-semibold"> build websites that are identical copies of official websites : </span>the website of your bank, the CAF, the URSSAF, your CPF account and all of your online connection spaces of all kinds. <br>
                        &nbsp; <br>

                        Why? Because, in the eyes of the attackers, these online accounts are full of personal information with a high market value.<br>
                        &nbsp; <br>

                       You are therefore encouraged to log in or provide personal information on a fraudulent site: your name, your first name, personal and banking information and even your identity documents! All of this information input on fraudulent sites is then accessible by cyber attackers and thus compromised. <br>
                        &nbsp; <br>

                       
Most of the data breaches and cyber attacks are caused by the human factor and the lack of vigilance. And email remains the most secure way to deceive your attention and thus<span
                            class="text-[#2F42EB] font-semibold"> steal your data or extort your money from you. </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container p-6 mx-auto">
    <div class="max-w-screen-xl px-4 py-16 mx-auto">
        <div class="flex flex-col justify-center max-w-screen-xl mx-auto align-center">
            <p class="max-w-3xl pb-8 mx-auto text-4xl font-extrabold text-center text-black">
                Your <span class="text-[#2F42EB]">alertness </span> is your first line of <span
                    class="text-[#2F42EB]">protection</span> against cyber attack..
            </p>

            <p class="max-w-5xl pt-8 pb-4 mx-auto text-2xl font-medium text-center text-black">
                 <span class="text-[#2F42EB]"> ensures for you the security of the websites</span> you visit to guarantee you a safe browsing.
            </p>
        </div>
    </div>
</section>

<section class="container relative p-6 mx-auto">
    <div class="max-w-screen-xl px-4 pt-8 pb-16 mx-auto lg:px-2">
        <h1 class="pb-8 text-4xl font-extrabold text-center text-black">
           Secured navigation thanks to <span class="text-[#2F42EB]">BILLUN</span> !
        </h1>
        <div class="flex flex-wrap w-full mx-auto mt-16 lg:flex-nowrap md:mt-16 md:justify-center">
        	<div class="shape-blob"></div>
            <div class="">
                <img id="logo"
                    class="absolute object-cover object-center select-none md:w-[290px] md:h-[290px] w-48 h-48 ml-16 mt-16 md:ml-32 md:mt-24 lg:mt-36"
                    alt="hero" src="./assets/animation.gif">
                <img class="object-cover object-center" alt="hero" src="./assets/Google_ Main.png">
            </div>
            <div class="w-full lg:w-1/3 lg:py-6 lg:mb-0 ">
                <ul role="list" class="pt-6 mt-4">
                    <li class="flex">
                        <div class="flex my-4">
                            <img class="w-8 h-8 mr-4" src="./assets/check.png" alt="">
                        </div>
                        <span class="mt-5 ml-3 font-medium text-left">Enjoy a more secure web </span>
                    </li>
                    <li class="flex">
                        <div class="my-4 ">
                            <img class="w-8 h-8 mr-4" src="./assets/check.png" alt="">
                        </div>
                        <span class="mt-5 ml-3 font-medium text-left">Browse only on certified websites </span>
                    </li>
                    <li class="flex">
                        <div class="my-4 ">
                            <img class="w-8 h-8 mr-4" src="./assets/check.png" alt="">
                        </div>
                        <span class="mt-5 ml-3 font-medium text-left">Protect your personal data </span>
                    </li>
                    <li class="flex">
                        <div class="my-4 ">
                            <img class="w-8 h-8 mr-4" src="./assets/check.png" alt="">
                        </div>
                        <span class="mt-5 ml-3 font-medium text-left"> Free extension & available on all browsers</span>
                    </li>
                    <li class="flex">
                        <div class="my-4 ">
                            <img class="w-8 h-8 mr-4" src="./assets/check.png" alt="">
                        </div>
                        <span class="mt-5 ml-3 font-medium text-left"> Easy to understand thanks to the color code</span>
                    </li>
                    <li class="flex">
                        <div class="my-4 ">
                            <img class="w-8 h-8 mr-4" src="./assets/check.png" alt="">
                        </div>
                        <span class="mt-5 ml-3 font-medium text-left "> Make sure you're only browsing official and trusted sites</span>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section id="download" class="w-full mt-12 bg-blue-700 wave">
    <h1 class="pt-12 mx-4 text-4xl font-extrabold text-center text-white">
       The free extension is available on all <br>browsers
    </h1>
    <div class="flex flex-col items-center justify-center w-3/4 pt-12 pb-12 mx-auto">
        <div
            class="flex flex-wrap items-baseline justify-center max-w-5xl space-x-4 space-y-8 md:space-x-6 xl:space-x-8">
            <img class="w-32 h-auto" src="./assets/chrome.png" alt="">
            <img class="w-32 h-auto" src="./assets/opera.png" alt="">
            <img class="w-32 h-auto" src="./assets/edge.png" alt="">
            <img class="w-32 h-auto" src="./assets/firefox.png" alt="">
            <img class="w-32 h-auto" src="./assets/brave.png" alt="">
        </div>
    </div>
</section>


<section class="w-full mt-12">
    <h1 class="pt-12 text-4xl font-extrabold text-center">
        Certifiy your website with  <span class="text-[#2F42EB]">BILLUN</span>
    </h1>
    <div class="flex flex-col items-center justify-center w-3/4 pt-6 pb-12 mx-auto md:pt-12">

        <div class="container py-12">
            <div class="lg:flex">
                <div class="w-full mx-auto md:w-1/2">
                    <h1 class="pt-16 text-3xl font-bold lg:text-2xl lg:pl-16">If you'd like <span
                            class="text-[#2F42EB]"> certify your website </span> or <br> contest the redlisting of your site,<span class="text-[#2F42EB]"> please fill out the form. <br></span></h1>
                    <img class="object-cover object-center mx-auto billy" alt="hero" src="./assets/billy.gif">

                </div>


                <div
                    class="z-10 w-full md:w-3/4 px-2 py-8 mx-auto overflow-hidden bg-white rounded-[50px] shadow-lg shadow-gray-400  lg:max-w-lg mt-8 min-w-[310px] pr-4">
                    <h1 class="text-xl font-extrabold text-[#2F42EB] ml-4">Form *</h1>

                    <form action="contact" class="z-10 p-4 pt-4 mt-2 text-lg md:p-8" method="POST" >
                    @csrf
                        <div class="flex">
                            <input type="text" name="nom" placeholder="Nom" 
                                class="block w-[40%] px-5 py-2 mt-2 mr-8 text-gray-700 placeholder-gray-400 bg-gray-200  rounded-xl  focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" required />
                            <input type="text" name="prenom" placeholder="Last Name"
                                class="block w-[40%] px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200  rounded-xl  focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div class="flex-1 pt-2 mt-2">
                            <input type="text" name="societe" placeholder="Company"
                                class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div class="flex-1 mt-2 pt-2.5">
                            <input type="email" name="email" placeholder="E-mail" required
                                class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="flex-1 pt-2 mt-2">
                            <input type="text" name="siteweb" placeholder="Your website"
                                class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="w-full pt-2 mt-2">
                            <textarea name="message" required
                                class="block w-3/4 h-24 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl md:h-48 focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="w-full pt-2 mt-2">
                            <div class="flex">
                                <input type="checkbox" name="operation" value="0" class="mb-20 mr-4" id="checkme"  required>
                                <p class="text-xs leading-relaxed text-left">
                                    I agree <span class="text-[#2F42EB] font-semibold">Billun</span> process my data in order to respond to my request.*<br>
                                    <br>
                                     For more information, we invite you to read the <span
                                        class="text-[#2F42EB] font-semibold" onclick="document.getElementById('primaryButton').click()">Privacy Policy</span>, or send an email requesting information.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pt-2 align-middle">
                            <button id="sendNew" type="submit"
                                class="w-3/4 px-6 py-2 mt-6 font-bold tracking-wide text-white capitalize transition-colors duration-300 transform rounded-full shadow mycolor focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Send message
                            </button>
                        </div>

                    </form>
                </div>
  
            </div>
        </div>

    </div>
</section>

  @include('parts.footer_en')
<style>
    .billy {
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
    }
</style>

<script>
    function PopupUser() {
        console.log('okpop');
        var updateElement = document.getElementById("popmenu");
        updateElement.classList.toggle("active");

    }
</script>