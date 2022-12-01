

<section class="container flex flex-col p-6 mx-auto my-12 lg:flex-row justify-evenly ">
    <div class="myblob"></div>


    <div class="flex flex-col pt-24 ">
        <div class="mx-auto div ">
            <h1 class="flex flex-col mb-4 space-y-4 text-3xl font-extrabold text-white md:text-5xl myshadowDark">
                <div>PROTÉGEZ-VOUS <span style="color: #EE007E">FACE</span></div>
                <div>AUX <span style="color: #EE007E">EMAILS </span></div>
                <div>FRAUDULEUX</div>
            </h1>
            <P class="flex">
                <span class="py-8 text-lg font-bold text-left text-white md:text-2xl myshadowDark">L'email est le
                    premier
                    vecteur de
                    <span style="color: #EE007E">cyber attaque </span><br> en entreprise.</span>
            </P>
            <div class="flex pt-4">
                <a href="https://chrome.google.com/webstore/detail/billun/ecodhgndejkcckkabdnigikdcdhchfgc">
                    <button
                        class="flex mr-auto text-white font-bold bg-[#EE007E] hover:bg-opacity-80 border-0 py-3 px-12 focus:outline-none rounded-full shadow shadow-gray-400"><span
                            class="">Réserver une démo ></span> </button>
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
                Qu'est ce que le <span class="text-[#7923E4]">SOCIAL ENGINEERING</span>?
            </h1>
            <div class="p-8 px-16 mt-6 mb-0 space-y-4 shadow-2xl rounded-3xl">
                <img class="object-cover object-center" alt="hero" src="./assets/API.png">
                <p class="text-2xl font-black">Social Engineering</p>

                <div class="relative mt-1">
                    <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-black ">
                        Le social engineering (ou ingénierie sociale en français) est une technique de manipulation qui
                        consiste pour un attaquant à extirper des informations à ses victimes sans qu’elles ne s’en
                        rendent compte, grâce à des techniques de persuasion et bien souvent en usurpant l’identité d’un
                        tiers légitime et de confiance.<br>
                        <br>
                        Cela peut se produire par téléphone, par courrier, en réél, mais très souvent, cela se fait par
                        email.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 pt-8 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-screen-xl mx-auto">
            <p class="text-xl py-4 font-black text-[#7923E4]">POURQUOI BILLUN</p>
            <h1 class="pb-4 text-4xl font-extrabold text-left text-black">
                Sécurisez vos données <span class="text-[#7923E4]">personnelles</span> et <span
                    class="text-[#7923E4]">d'entreprise</span>
            </h1>
            <p class="max-w-screen-xl pb-4 mt-4 mb-4 text-xl font-medium text-black">
                Fichiers piégés, usurpation d’identité, liens frauduleux ... Les cyber attaquants savent bien avec
                quelle facilité vous cliquez sur les liens, alors <span class="text-[#7923E4]">BILLUN</span> les vérifie
                pour vous !
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
                        <h1 class="py-4 text-lg font-black text-left">Sécurisez vos <span
                                class="text-[#7923E4]">échanges</span> email et vos <span
                                class="text-[#7923E4]">données</span></h1>
                        <p class="mb-3 leading-relaxed text-left cropped">Quelles seraient les conséquences d’une perte de confidentialité de vos échanges emails ? Que se passerait-il si des attaquants avaient accès aux données que vous partagez, aux documents d’entreprise que vous envoyez et aux documents confidentiels que vous recevez ? Avec BILLUN, assurez-vous de sécuriser les échanges emails entre vos collaborateurs et entre votre organisation et l’extérieur. BILLUN veille à la confidentialité de vos échanges emails, de vos conversations et des données que vous partagez.</p>
                        <div x-data="{ modelOpen: false }">

                            <button @click="modelOpen =!modelOpen" id=""
                                class="text-[#EE007E] hover:text-[#6002E9] font-bold text-left">
                                En savoir plus >
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
                                            <p class="text-2xl font-black text-left">Sécurisez vos <span
                                                class="text-[#7923E4]">échanges</span> email et vos <span
                                                class="text-[#7923E4]">données</span></p>
                            
                                            <div class="relative mt-1">
                                                <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-left text-black">
                                                    Quelles seraient les conséquences d’une perte de confidentialité de vos échanges emails ? Que se passerait-il si des attaquants avaient accès aux données que vous partagez, aux documents d’entreprise que vous envoyez et aux documents confidentiels que vous recevez ? Avec BILLUN, assurez-vous de sécuriser les échanges emails entre vos collaborateurs et entre votre organisation et l’extérieur. BILLUN veille à la confidentialité de vos échanges emails, de vos conversations et des données que vous partagez.
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
                        <h1 class="pt-3 pb-4 text-lg font-black text-left">Prémunissez-vous des risques <span
                                class="text-[#7923E4]">d’usurpation d’identité</span></h1>
                        <p class="mb-3 leading-relaxed text-left cropped"> Un fondateur dirigeant appelle le responsable financier de son organisation pour lui demander le virement d’une grosse somme d’argent afin de finaliser une transaction. Le virement est effectué dans la panique et finalement, lorsque la tension retombe, on s’apperçoit que tout cela n’était qu’une arnaque et que des millions se sont envolés. BILLUN vérifie pour vous l’identité des expéditeurs vous envoyant des emails et vous averti lorsque l’identité supposée de l’émeteur n’est pas correcte. Assurez-vous ainsi d’avoir à faire aux bons interlocuteurs et prémunissez-vous des risques d’usurpation d’identité dans votre organisation.</p>
                            <div x-data="{ modelOpen: false }">

                                <button @click="modelOpen =!modelOpen" id=""
                                    class="text-[#EE007E] hover:text-[#6002E9] font-bold text-left">
                                    En savoir plus >
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
                                                <p class="text-2xl font-black text-left">Prémunissez-vous des risques <span
                                                    class="text-[#7923E4]">d’usurpation d’identité</span></p>
                                
                                                <div class="relative mt-1">
                                                    <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-left text-black">
                                                        Un fondateur dirigeant appelle le responsable financier de son organisation pour lui demander le virement d’une grosse somme d’argent afin de finaliser une transaction. Le virement est effectué dans la panique et finalement, lorsque la tension retombe, on s’apperçoit que tout cela n’était qu’une arnaque et que des millions se sont envolés. BILLUN vérifie pour vous l’identité des expéditeurs vous envoyant des emails et vous averti lorsque l’identité supposée de l’émeteur n’est pas correcte. Assurez-vous ainsi d’avoir à faire aux bons interlocuteurs et prémunissez-vous des risques d’usurpation d’identité dans votre organisation.
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
                        <h1 class="py-4 text-lg font-black text-left">Assurez-vous de ne pas cliquer sur un <span
                                class="text-[#7923E4]">lien malveillant</span></h1>
                        <p class="mb-3 leading-relaxed text-left cropped"> Le principal risque en cybersécurité, c’est là où vous cliquez. BILLUN vous avertie lorsqu’un lien contenu dans un email est suspect, dangereux ou frauduleux. Un code couleur simple pour vous permettre de détecter, en un clin d’oeil, si votre navigation est sécurisée. Ainsi, vous vous assurez de ne naviguer que sur des sites officiels et de confiance, tout en veillant à la confidentialité et à la sécurité de vos données.</p>
                            <div x-data="{ modelOpen: false }">

                                <button @click="modelOpen =!modelOpen" id=""
                                    class="text-[#EE007E] hover:text-[#6002E9] font-bold text-left">
                                    En savoir plus >
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
                                                <p class="text-2xl font-black text-left">Assurez-vous de ne pas cliquer sur un <span
                                                    class="text-[#7923E4]">lien malveillant</span></p>
                                
                                                <div class="relative mt-1">
                                                    <p class="max-w-screen-xl mt-4 mb-4 text-xl font-medium text-left text-black">
                                                        Le principal risque en cybersécurité, c’est là où vous cliquez. BILLUN vous avertie lorsqu’un lien contenu dans un email est suspect, dangereux ou frauduleux. Un code couleur simple pour vous permettre de détecter, en un clin d’oeil, si votre navigation est sécurisée. Ainsi, vous vous assurez de ne naviguer que sur des sites officiels et de confiance, tout en veillant à la confidentialité et à la sécurité de vos données.
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
                    <span class="mt-5 ml-3 font-medium text-left">API facile à intégrer sur tous les services de messagerie</span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Améliore la vigilance de vos collaborateurs </span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Surveillance des connexion aux comptes</span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Prémunissez-vous des principales attaques de phishing</span>
                </li>
                <li class="flex">
                    <div class="my-4 ">
                        <img class="w-8 h-8 mr-4" src="./assets/checkr.png" alt="">
                    </div>
                    <span class="mt-5 ml-3 font-medium text-left">Sécurisez vos communications avec vos clients & prestataires</span>
                </li>
            </ul>
        </div>

    </section>




</div>

<section class="flex flex-col items-center justify-center w-full mx-auto mt-12 text-white border-t mypurple h-72">
    <div class="flex flex-col items-center justify-center ">
        <hi class="pb-8 mx-auto text-4xl font-extrabold myshadowDark">Contactez-Nous !</hi>
        <div x-data="{ modelOpen: false }">

            <button @click="modelOpen =!modelOpen" id=""
                class="px-12 py-3 mx-4 border border-gray-400 rounded-full hover:bg-gray-400 hover:bg-opacity-50">
                Contactez Nous Maintenant >
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
                            <h1 class="px-20 text-xl font-bold text-black">CONTACTEZ-NOUS</h1>
                            <form action="contact" class="z-10 p-8 pt-4 mt-2 ml-12 text-lg" method="POST">
                            <div class="flex">
                                <input type="text" name="nom" placeholder="Nom" required
                                    class="block w-[40%] px-5 py-2 mt-2 mr-8 text-gray-700 placeholder-gray-400 bg-gray-200  rounded-xl  focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <input type="text" name="prénom" placeholder="Prenom"
                                    class="block w-[40%] px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200  rounded-xl  focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div class="flex-1 pt-2 mt-2">
                                <input type="text" name="société" placeholder="Société" required
                                    class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <div class="flex-1 mt-2 pt-2.5">
                                <input type="email" name="email" placeholder="Email" required
                                    class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div class="flex-1 pt-2 mt-2">
                                <input type="text" name="siteweb" placeholder="Lien vers votre site web" required
                                    class="block w-3/4 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div class="w-full pt-2 mt-2">
                                <textarea name="message" required
                                    class="block w-3/4 h-24 px-5 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-gray-200 rounded-xl md:h-48 focus:border-blue-800 focus:ring-blue-800 focus:outline-none focus:ring focus:ring-opacity-40"
                                    placeholder="Message"></textarea>
                            </div>
                                <div class="w-full pt-2 mt-2">
                                    <div class="flex">
                                        <input type="checkbox" name="operation" value="0" class="mb-20 mr-4" id="checkme"  onchange="displayRadioValue();">
                                        <p class="text-xs leading-relaxed text-left">
                                            J'accepte que <span class="text-[#2F42EB] font-semibold">Billun</span> traite mes
                                            données afin de répondre à ma demande.*<br>
                                            <br>
                                            Pour plus d’informations, nous vous invitons à lire la <br><span
                                                class="text-[#2F42EB] font-semibold" onclick="document.getElementById('primaryButton').click()"  @click="modelOpen = false">Politique de
                                                Confidentialité</span>, ou à envoyer un mail de demande d’information.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center pt-2 align-middle">
                                    <button id="sendNew" disabled="disabled"
                                        class="w-3/4 px-6 py-2 mt-6 mr-12 font-bold tracking-wide text-white capitalize transition-colors duration-300 transform rounded-full shadow mycolor hover:bg-blue-800 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Envoyer le message
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
<script>

function displayRadioValue(){
  var checker = document.getElementById('checkme');
        var sendbtn = document.getElementById('sendNew');
        // when unchecked or checked, run the function
        checker.onchange = function() {
            if (this.checked) {
              console.log("checked");
                sendbtn.disabled = false;
            } else {
              console.log("unchecked");
                sendbtn.disabled = true;
            }

        }
}

   </script>