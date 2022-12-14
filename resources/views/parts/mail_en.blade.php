

<section class="container flex flex-col p-6 mx-auto my-12 lg:flex-row justify-evenly ">
    <div class="myblob"></div>


    <div class="flex flex-col pt-24 ">
        <div class="mx-auto div ">
            <h1 class="flex flex-col mb-4 space-y-4 text-3xl font-extrabold text-white md:text-5xl myshadowDark">
                <div>PROTECT</div><div> YOURSELF<span style="color: #EE007E"> AGAINST</span></div>
                <div> EMAILS </div>
                <div><span style="color: #EE007E">SCAMS</span></div>
            </h1>
            <P class="flex">
                <span class="py-8 text-lg font-bold text-left text-white md:text-2xl myshadowDark">E-mail is the primary vector of
                    <span style="color: #EE007E">cyber attacks </span><br> in organizations.</span>
            </P>
            <div class="flex pt-4">
                <a href="https://chrome.google.com/webstore/detail/billun/ecodhgndejkcckkabdnigikdcdhchfgc">
                    <button
                        class="flex mr-auto text-white font-bold bg-[#EE007E] hover:bg-opacity-80 border-0 py-3 px-12 focus:outline-none rounded-full shadow shadow-gray-400"><span
                            class="">Book a demo ></span> </button>
                </a>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="pt-24 mx-auto md:mx-0">
            <img class="object-cover object-center" alt="hero" src="./assets/computer.gif">
        </div>
    </div>

</section>


<div class="container p-6 mx-auto">
    <section class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-screen-xl mx-auto">
            <p class="text-xl py-4 font-black text-[#7923E4]">SOCIAL ENGINEERING</p>
            <h1 class="pb-8 text-4xl font-extrabold text-left text-black">
                What is <span class="text-[#7923E4]">SOCIAL ENGINEERING</span>?
            </h1>
            <div class="p-8 px-16 mt-6 mb-0 space-y-4 shadow-2xl rounded-3xl">
                <img class="object-cover object-center" alt="hero" src="./assets/API.png">
                <p class="text-2xl font-black">Social Engineering</p>

                <div class="relative mt-1">
                    <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-black ">
                       Social engineering is a manipulation technique consisting in extracting information from its victims without them being aware of it, thanks to persuasion techniques and often by usurping the identity of a legitimate and trusted third party. <br>
                       This can be done by phone, by mail, in real life, but very often it is done by email.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 pt-8 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-screen-xl mx-auto">
            <p class="text-xl py-4 font-black text-[#7923E4]">WHY CHOOSE BILLUN?</p>
            <h1 class="pb-4 text-4xl font-extrabold text-left text-black">
               Secure your <span class="text-[#7923E4]">personal</span> and <span
                    class="text-[#7923E4]">buisness data</span>
            </h1>
            <p class="max-w-screen-xl pb-4 mt-4 mb-4 text-xl font-medium text-black">
                Encrypted files, identity theft, fraudulent links ... Cyber attackers know just how easy it is to click on links, so <span class="text-[#7923E4]">BILLUN</span> checks them for you!
            </p>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 pt-8 mx-auto text-gray-900 sm:px-6 lg:px-8">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/3">
                    <div
                        class="relative h-full px-8 pt-6 pb-8 overflow-hidden bg-white bg-opacity-75 shadow rounded-2xl shadow-gray-400">
                        <img class="object-cover object-center" alt="hero" src="./assets/API.png">
                        <h1 class="py-4 text-lg font-black text-left">Secure your <span
                                class="text-[#7923E4]">exchanges</span> and <span
                                class="text-[#7923E4]">data</span></h1>
                        <p class="mb-3 leading-relaxed text-left cropped">What are the consequences of losing the confidentiality of your email exchanges? How would it look if attackers gained access to data you share, corporate documents you send and confidential documents you receive? With BILLUN, you can ensure that email exchanges are secure between your employees and between your organisation and the outside world. BILLUN keeps your emails, conversations and data confidential.</p>
                        <div x-data="{ modelOpen: false }">

                            <button @click="modelOpen =!modelOpen" id=""
                                class="text-[#EE007E] hover:text-[#6002E9] font-bold text-left">
                                Fin out more >
                            </button>
                
                            <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                                    <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>
                
                                    <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="inline-block max-w-4xl pt-16 overflow-hidden transition-all transform rounded-lg">
                                        <div class="p-8 px-16 mt-6 mb-0 space-y-4 bg-white shadow-2xl rounded-3xl">
                                            <i class="float-right mt-5 mr-5 text-red-300 hover:text-red-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                                            <img class="object-cover object-center" alt="hero" src="./assets/API.png">
                                            <p class="text-2xl font-black text-left">Secure your email <span
                                                class="text-[#7923E4]">exchanges</span> and <span
                                                class="text-[#7923E4]">data</span></p>
                            
                                            <div class="relative mt-1">
                                                <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-left text-black">
                                                    What are the consequences of losing the confidentiality of your email exchanges? How would it look if attackers gained access to data you share, corporate documents you send and confidential documents you receive? With BILLUN, you can ensure that email exchanges are secure between your employees and between your organisation and the outside world. BILLUN keeps your emails, conversations and data confidential.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/3">
                    <div
                        class="relative h-full px-8 pt-6 pb-8 overflow-hidden bg-white bg-opacity-75 shadow rounded-2xl shadow-gray-400">
                        <img class="object-cover object-center" alt="hero" src="./assets/Phishing.png">
                        <h1 class="pt-3 pb-4 text-lg font-black text-left">Protect yourself from <span
                                class="text-[#7923E4]">identity theft</span></h1>
                        <p class="mb-3 leading-relaxed text-left cropped"> A founder/executive officer calls his organisation's financial officer to request a large sum of money to be transferred in order to complete a transaction. The money is transferred in a panic and finally, as the tension subsides, it becomes clear that it was all a scam and millions of dollars have been lost. BILLUN checks the identity of email senders for you and alerts you when the supposed identity of the sender is not correct. This way you can be sure that you are dealing with the right people and avoid the risk of identity theft in your organisation.</p>
                            <div x-data="{ modelOpen: false }">

                                <button @click="modelOpen =!modelOpen" id=""
                                    class="text-[#EE007E] hover:text-[#6002E9] font-bold text-left">
                                    Fin out more >
                                </button>
                    
                                <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                                    role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>
                    
                                        <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block max-w-4xl pt-16 overflow-hidden transition-all transform rounded-lg">
                                            <div class="p-8 px-16 mt-6 mb-0 space-y-4 bg-white shadow-2xl rounded-3xl">
                                                <i class="float-right mt-5 mr-5 text-red-300 hover:text-red-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                                                <img class="object-cover object-center" alt="hero" src="./assets/Phishing.png">
                                                <p class="text-2xl font-black text-left">Protect yourself from <span
                                                    class="text-[#7923E4]">identity theft</span></p>
                                
                                                <div class="relative mt-1">
                                                    <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-left text-black">
                                                        A founder/executive officer calls his organisation's financial officer to request a large sum of money to be transferred in order to complete a transaction. The money is transferred in a panic and finally, as the tension subsides, it becomes clear that it was all a scam and millions of dollars have been lost. BILLUN checks the identity of email senders for you and alerts you when the supposed identity of the sender is not correct. This way you can be sure that you are dealing with the right people and avoid the risk of identity theft in your organisation.
                                                    </p>
                                                </div>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="p-4 lg:w-1/3">
                    <div
                        class="relative h-full px-8 pt-6 pb-8 overflow-hidden bg-white bg-opacity-75 shadow rounded-2xl shadow-gray-400">
                        <img class="object-cover object-center" alt="hero" src="./assets/aide.png">
                        <h1 class="py-4 text-lg font-black text-left">Make sur not to click on <span
                                class="text-[#7923E4]">malicious links</span></h1>
                        <p class="mb-3 leading-relaxed text-left cropped"> The main risk in cyber security is exactly where you click. BILLUN notifies you when a link in an email is suspicious, unsafe or fraudulent. A simple colour code enables you to see at a glance whether your browsing is safe. In this way, you can be sure that you are only surfing on official and trusted sites, while ensuring the confidentiality and security of your data.</p>
                            <div x-data="{ modelOpen: false }">

                                <button @click="modelOpen =!modelOpen" id=""
                                    class="text-[#EE007E] hover:text-[#6002E9] font-bold text-left">
                                    Fin out more >
                                </button>
                    
                                <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                                    role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>
                    
                                        <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block max-w-4xl pt-16 overflow-hidden transition-all transform rounded-lg">
                                            <div class="p-8 px-16 mt-6 mb-0 space-y-4 bg-white shadow-2xl rounded-3xl">
                                                <i class="float-right mt-5 mr-5 text-red-300 hover:text-red-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                                                <img class="object-cover object-center" alt="hero" src="./assets/aide.png">
                                                <p class="text-2xl font-black text-left">Make sure you don???t click on<span
                                                    class="text-[#7923E4]">malicious link</span></p>
                                
                                                <div class="relative mt-1">
                                                    <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-left text-black">
                                                        The main risk in cyber security is exactly where you click. BILLUN notifies you when a link in an email is suspicious, unsafe or fraudulent. A simple colour code enables you to see at a glance whether your browsing is safe. In this way, you can be sure that you are only surfing on official and trusted sites, while ensuring the confidentiality and security of your data.
                                                    </p>
                                                </div>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container flex flex-col p-6 mx-auto my-12 md:flex-row justify-evenly">
        <div class="myblob2"></div>
        <div class="flex">
            <div>
                <img class="object-cover object-center switch" alt="hero" src="./assets/computer.gif">
            </div>
        </div>
        <div class="flex">
            <ul role="list" class="pt-6 mt-4 ml-12 text-white myshadowDark">
                <li class="flex">
                    <div class="flex my-4">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Easy-to-integrate API on all email services</span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Increases the alertness of your employees </span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Monitoring of account connections</span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Protect yourself from the main phishing attacks</span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Protect your communications with your customers & providers</span>
                </li>
            </ul>
        </div>

    </section>




</div>

<section class="flex flex-col items-center justify-center w-full mx-auto mt-12 text-white border-t mypurple h-72">
    <div class="flex flex-col items-center justify-center ">
        <hi class="pb-8 mx-auto text-4xl font-extrabold myshadowDark">Get in touch !</hi>
        <div x-data="{ modelOpen: false }">

            <button @click="modelOpen =!modelOpen" id=""
                class="px-12 py-3 mx-4 border border-gray-400 rounded-full hover:bg-gray-400 hover:bg-opacity-50">
                Contact Us today >
            </button>

            <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                role="dialog" aria-modal="true">
                <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                    <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>

                    <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        class="inline-block max-w-xl pt-8 overflow-hidden transition-all transform rounded-lg">
                        <div class="w-full pt-4 pb-8 space-y-3 text-gray-800 bg-white rounded-xl">
                            <i class="float-right mr-5 text-gray-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                            <div class="flex justify-center pl-9">
                                <img class="w-16 h-16 p-2 mx-auto" src="./assets/logo.png" alt="logo">
                            </div>
                            <h1 class="px-20 text-xl font-bold text-black">CONTACT-US</h1>
                            <form action="contact" class="z-10 p-8 pt-4 mt-2 ml-12 text-lg" method="POST">
                            @csrf
                            <div class="flex">
                                <input type="text" name="nom" placeholder="Name" required
                                    class="block w-[40%] px-5 py-2 mt-2 mr-8 text-gray-700 placeholder-gray-400 bg-gray-200  rounded-xl  focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <input type="text" name="prenom" placeholder="Last Name"
                                    class="block w-[40%] px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200  rounded-xl  focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div class="flex-1 pt-2 mt-2">
                                <input type="text" name="societe" placeholder="Company"
                                    class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div class="flex-1 mt-2 pt-2.5">
                                <input type="email" name="email" placeholder="Email" required
                                    class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div class="flex-1 pt-2 mt-2">
                                <input type="text" name="siteweb" placeholder="Website link"
                                    class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div class="w-full pt-2 mt-2">
                                <textarea name="message" required
                                    class="block w-3/4 h-24 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl md:h-48 focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40"
                                    placeholder="Message"></textarea>
                            </div>
                                <div class="w-full pt-2 mt-2">
                                    <div class="flex">
                                        <input type="checkbox" name="operation" value="0" class="mb-20 mr-4" id="checkme" required>
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
                                        class="w-3/4 px-6 py-2 mt-6 mr-12 font-bold tracking-wide text-white capitalize transition-colors duration-300 transform rounded-full shadow mycolor hover:bg-blue-800 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                       Send message
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

  @include('parts.footer_en')

