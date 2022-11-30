<footer aria-label="Site Footer" class="bg-white">
  <div class="container px-24 py-4 pb-6 mx-auto sm:px-6 lg:pr-24 lg:pl-32">
    <div class="pt-6 border-t border-gray-100 sm:flex sm:items-center sm:justify-between">
      <a href="admin"><img class="mx-auto md:mx-0" src="./assets/logofoot.png"></a>
      <ul class="flex items-center justify-center gap-6 mt-4 sm:mt-0 sm:justify-start">
        <li>
          <div x-data="{ modelOpen: false }">

            <button @click="modelOpen =!modelOpen" id="primaryButton"
              class="text-xs text-gray-700 transition md:text-base hover:text-gray-700/75">
              Confidentialité
            </button>

            <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
              role="dialog" aria-modal="true">
              <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                  x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                  x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                  class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                  x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave="transition ease-in duration-200 transform"
                  x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  class="inline-block max-w-2xl pt-8 overflow-hidden transition-all transform rounded-lg">
                  <div class="w-full pt-4 pb-8 space-y-3 text-gray-800 bg-white rounded-xl">
                    <i class="float-right mr-5 text-gray-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                    <div class="flex justify-center pl-9">
                      <img class="w-16 h-16 p-2 mx-auto" src="./assets/logo.png" alt="logo">
                    </div>
                    <h1 class="px-20 text-xl font-bold text-black">POLITIQUE DE CONFIDENTIALITÉ</h1>
                    <p class="px-20 text-sm">
                      <span class="text-base font-bold text-black">Objet du document </span><br>
                      Cette politique de confidentialité a pour objectif de vous fournir une information concise, transparente et compréhensible quant aux raisons de la collecte d’informations personnelles sur ce site, de vous informer des procédés de traitements appliqués à vos données et de faciliter l’exercice de vos droits Informatique et Libertés.
                      
                      <br><span class="text-base font-bold text-black"> 1- Identité et coordonnées du responsable de traitement</span><br>
                      Pour les besoins de son activité et via ce site web, Billun, marque appartenant à la société PODAYCAST, SAS immatriculée sous le SIREN 884705294 (siège social 4 rue Jules Ferry, 42800 Rive de Gier, France) collecte des données à caractère personnel sur son site Internet www.billun.com.
                      
                      <br> <span class="text-base font-bold text-black"> 2- Quels types de données sont collectées, et de quelle manière ?</span><br>
                      
                      Nom, prénom et entreprise (pour les professionnels)
                      Ces informations sont récoltées via le formulaire présent sur notre site internet, et afin de pouvoir répondre à votre demande. Lorsque vous remplissez le formulaire, vous êtes informé de la raison de cette collecte de données, et êtes invité à y consentir en cochant une case spécifique.
                      
                      
                      Une adresse email ou un numéro de téléphone
                      Ces informations de contact sont également récoltées via le formulaire de contact, et nous permettent de vous recontacter conformément à votre demande.
                      
                      
                      Vos données de navigation sur notre site web
                      Nous récoltons des données de navigation afin de mieux comprendre vos intercations avec notre site web, et afin d’améliorer votre expérience sur notre site internet. Cependant, nous ne recoltons aucune information personnelle avec notre outil d’analytics : toutes ces informations sont 100% anonymisées. Pour en savoir plus, veuillez consulter notre Politique de Confidentialité.
                      
                      <br> <span class="text-base font-bold text-black">3- Utilisation de vos données personnelles</span><br>
                      Vos données personnelles ne sont utilisées qu’aux fins pour lesquelles vous avez explicitement consenties. Lors du remplissage d’un formulaire en ligne, vos données personnelles sont utilisées afin que nous puissions prendre contact avec vous et/ou traiter votre demande.
                      
                      <br>  <span class="text-base font-bold text-black"> 4- Destinataires de vos données personnelles</span><br>
                      À moins que nous y soyions contraints par la loi, vos données personnelles ne sont transmises à aucun tiers autre que la société PODAYCAST. En cas de besoin de transfert de vos données à un tiers autre que PODAYCAST, vous auriez alors la possibilité d’y consentir ou de vous y opposer.
                      
                      <br><span class="text-base font-bold text-black"> 5- Délais de conservations des données et conditions de suppression</span><br>
                      
                      Vos données personnelles ne sont conservées que le temps nécessaire au traitement de votre demande. Elles seront supprimées aussiôt après.
                      
                      Cependant, en cas de téléchargement de l’extension ou de l’installation de notre API, il est possible que nous conservions vos données personnelles et notamment votre adresse email de contact afin de pouvoir vous tenir informé des nouvelles mises à jour et des nouveaux correctifs à appliquer sur ces solutions, et ceci afin de pouvoir vous garantir leur bon fonctionnement et leur sécurité. Dans ce cas là, et conformément au Réglement Européen sur la Protection des Données (RGPD), vos données personnelles pourraient être conservées durant 3 ans à compter du dernier contact de votre part.
                      
                      Malgré ce délai de conservation réglementaire, vous avez la possibilité de demander la suppression de vos données personnelles à tout moment, en vous réferrant à la section suivante.
                      
                      <br><span class="text-base font-bold text-black"> 6- Droits des personnes concernées et contact pour exercice des droits</span><br>
                      Conformément à la loi Informatique et Libertés, vous avez la possbilité de faire exercice de vos droits et ainsi de demander l’accès, la modification ou la suppression de vos données personnelles. Pour cela, veuillez nous contacter par email à contact@billun.com, ou par courrier postale au 4 rue Jules Ferry, 42800 Rive de Gier.
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </li>

        </li>

        <li>
          <div x-data="{ modelOpen: false }">

            <button @click="modelOpen =!modelOpen" id="primaryButton"
              class="text-xs text-gray-700 transition md:text-base hover:text-gray-700/75">
              Conditions d'utilisations
            </button>

            <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
              role="dialog" aria-modal="true">
              <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                  x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                  x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                  class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                  x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave="transition ease-in duration-200 transform"
                  x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  class="inline-block max-w-2xl pt-8 overflow-hidden transition-all transform rounded-lg">
                  <div class="w-full pt-4 pb-8 space-y-3 text-gray-800 bg-white rounded-xl">
                    <i class="float-right mr-5 text-gray-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                    <div class="flex justify-center pl-9">
                      <img class="w-16 h-16 p-2 mx-auto" src="./assets/logo.png" alt="logo">
                    </div>
                    <h1 class="px-20 text-xl font-bold text-black">CONDITIONS GENERALES D'UTILISATIONS (CGU)</h1>
                    <p class="px-20 text-sm">
                      Cette page a pour objectif de vous informer sur le fonctionnement général du site, sur les modalités et les règles à respecter en navigant sur ce site internet et de définir précisemment la responsabilité de l’éditeur (PODAYCAST) et des utilisateurs de ce site.
                      <br><span class="text-base font-bold text-black"> 1- Raison d’être et fonctionnement du site internet</span><br>
                      Le site internet www.billun.com a pour objectif de vous présenter la marque Billun ainsi que ses services d’outils de sécurisation contre les attaques de phishing (ou hameçonnage en français). Billun est une marque appartenant à la société PODAYCAST et proposant des outils de sécurisation de navigation web. Billun propose notamment (1) une extension de navigateur destinée à vous offrir une meilleure visibilité quant à la fiabilité et à la sécurité des sites sur lesquels vous naviguez et (2) une API (Application Programming Interface) destinée à optimiser la sécurité de vos échanges emails. Le site internet www.billun.com ne propose aucun espace de connexion privé.
                      
                      <br><span class="text-base font-bold text-black"> 2- Dispositions relatives à la propriété intellectuelle</span><br>
                      Toutes les informations disponibles sur le site (textes, images, logos et illustrations) relèvent de la propriété de l’éditeur et sont protégées par le droit de la propriété intellectuelle et plus particulièrement le droit d’auteur. Toute utilisation totale ou partielle du site ou de son contenu, sans l’accord préalable et écrit de l’éditeur, par quelque procédé que ce soit ou sur quelque support que ce soit, à des fins commerciales ou publicitaires, est interdite et engage la responsabilité de l’utilisateur. Lorsque les médias ou textes utilisés sur le site ne sont pas de la propriété de l’éditeur, la propriété intellectuelle est mentionnée explicitement.
                      
                      <br><span class="text-base font-bold text-black"> 3- Responsabilité de l’éditeur</span><br>
                      Billun en tant qu’éditeur de ce site internet met tout en œuvre pour assurer l’exactitude et la mise à jour régulière des informations fournies sur ce site. Le site www.billun.com peut contenir des liens vers d’autres sites web détenus et administrés par des tiers dont Billun ne peut garantir la licéité, l’exactitude, l’exhaustivité et la qualité des informations qui y sont contenues. Ainsi, le contenu de ces sites extérieurs ne peut en aucune manière engager la responsabilité de Billun. La création de liens hypertexte vers le Site Billun nécessite une autorisation écrite et préalable pouvant être révoqué à tout moment. Toutefois, nous nous engageons à apporter le plus grand soin à une mise à jour régulière de ce site internet et à supprimer tout lien vers ces sources tierces dès que nous auront pris connaissance de leur caractère manifestement illicite, inexact ou inadéquat. Si Billun veille à assurer la disponibilité de son site internet, la marque ne saurait engager sa responsabilité en cas d’indisponibilité du site.
                      
                      <br><span class="text-base font-bold text-black">4- Droit applicable et juridication compétente</span><br>
                      Les parties conviennent que tout désaccord ou différend relatif aux présentes conditions générales ou découlant de son interprétation ou de son application, qui ne pourrait être réglé de commun accord, sera soumis à une médiation. A cet effet, les parties s’engagent à participer à au moins une rencontre de médiation en y déléguant une personne ayant pouvoir de décision.
                      Le médiateur (agréé par la Commission fédérale de médiation) sera choisi par les parties. A défaut d’accord amiable, tout différend relevant de l’exécution ou de l’interprétation des présentes conditions générales sera de la compétence exclusive du Tribunal de Grande Instance de Saint Etienne (Tribunal de grande instance Saint-Étienne 42000place du Palais de Justice42022 ST ETIENNE CEDEX 1).
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div x-data="{ modelOpen: false }">

            <button @click="modelOpen =!modelOpen" id="primaryButton"
              class="text-xs text-gray-700 transition md:text-base hover:text-gray-700/75">
              Mentions Légales
            </button>

            <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
              role="dialog" aria-modal="true">
              <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                  x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                  x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                  class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                  x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave="transition ease-in duration-200 transform"
                  x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  class="inline-block max-w-2xl pt-8 overflow-hidden transition-all transform rounded-lg">
                  <div class="w-full pt-4 pb-8 space-y-3 text-gray-800 bg-white rounded-xl">
                    <i class="float-right mr-5 text-gray-600 fa fa-close fa-2x" @click="modelOpen = false"></i>
                    <div class="flex justify-center pl-9">
                      <img class="w-16 h-16 p-2 mx-auto" src="./assets/logo.png" alt="logo">
                    </div>
                    <h1 class="px-20 text-xl font-bold text-black">MENTIONS LÉGALES</h1>
                    <p class="px-20 text-sm">
                      <span class="text-base font-bold text-black">1- Identité du professionnel</span><br>
                      Raison sociale : Billun (par PODAYCAST).
                      Forme juridique : SAS
                      Siège social : 4 rue Jules Ferry, 42800 Rive de Gier, FRANCE.
                      Capital social : 1€
                      SIREN n°884705294.
                      Numéro d’identification à la TVA : FR51884705294.<br>
                      <span class="text-base font-bold text-black">2- Coordonnées</span><br>
                      Siège social : 4 rue Jules Ferry, 42800 Rive de Gier, FRANCE. Contact : par email à
                      contact@billun.com ou par télépone au 06 28 74 55 36.<br>

                      <span class="text-base font-bold text-black">3- Mentions relatives à la propriété
                        intellectuelle</span><br>
                      Toutes les informations disponibles sur le site (textes, images, logos et illustrations) relèvent
                      de la propriété de l’éditeur et sont protégées par le droit de la propriété intellectuelle et plus
                      particulièrement le droit d’auteur. Toute utilisation totale ou partielle du site ou de son
                      contenu, sans l’accord préalable et écrit de l’éditeur, par quelque procédé que ce soit ou sur
                      quelque support que ce soit, à des fins commerciales ou publicitaires, est interdite et engage la
                      responsabilité de l’utilisateur.

                      Lorsque les médias ou textes utilisés sur le site ne sont pas de la propriété de l’éditeur, la
                      propriété intellectuelle est mentionnée explicitement.<br>

                      <span class="text-base font-bold text-black"> 4- Hébergement</span><br>
                      Raison sociale : Infomaniak. Siège social : Les Acacias, Genève, Suisse. Adresse postale :
                      Infomaniak Network SA, Rue Eugène Marziano 25, 1227 Les Acacias (GE). La politique de
                      confidentialité de Infomaniak (#lien) Les mentions légales de Infomaniak (#lien)<br>

                      <span class="text-base font-bold text-black">5- Politique de confidentialité sur ce
                        site.</span><br>
                      Retrouvez la politique de confidentialité de sur www.billun.com/Confidentiality<br>

                      <span class="text-base font-bold text-black">6- Contact</span><br>
                      Pour toute demande ou question vous pouvez nous contacter par email à contact@billun.com ou par
                      téléphone au 06 28 74 55 36.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- <li>
          <button
            class="block px-8 py-3 pb-4 text-xs font-medium text-white transition rounded-full mcolor md:text-base"
            type="submit">
            Contactez-nous
          </button>
        </li> -->
      </ul>
    </div>
  </div>
<div class="flex flex-col items-center justify-center mx-auto text-xs">
  © 2022 BILLUN™. All Rights Reserved.
</div>
</footer>


<style>
  .mcolor {
    background: rgb(115, 122, 255);
    background: linear-gradient(90deg, rgba(115, 122, 255, 1) 0%, rgba(47, 66, 235, 1) 100%);
  }

  .mcolor:active {
    background: rgba(47, 66, 235, 1);
    background: linear-gradient(90deg, rgba(47, 66, 235, 1) 0%, rgba(115, 122, 255, 1) 100%);
  }
</style>
