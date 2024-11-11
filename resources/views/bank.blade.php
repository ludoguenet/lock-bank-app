<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes scroll-down {

            0%,
            20% {
                opacity: 1;
                transform: translateY(0);
            }

            80%,
            100% {
                opacity: 0;
                transform: translateY(10px);
            }
        }

        .scroll-down-button {
            padding-top: 50px;
        }

        .scroll-down-dot {
            animation: scroll-down 2s infinite;
        }
    </style>
</head>

<body>
    <div class="relative isolate overflow-hidden bg-gray-900">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
        </svg>
        <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
            aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl shrink-0 lg:mx-0 lg:pt-8">
                <img class="h-11" src="{{ asset('img/logo.png') }}" alt="Votre Banque">
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <a href="#" class="inline-flex space-x-6">
                        <span
                            class="rounded-full bg-green-500/10 px-3 py-1 text-sm/6 font-semibold text-green-400 ring-1 ring-inset ring-green-500/20">Nouveautés</span>
                        <span class="inline-flex items-center space-x-2 text-sm/6 font-medium text-gray-300">
                            <span>Version 1.0 disponible</span>
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
                <h1 class="mt-10 text-pretty text-5xl font-semibold tracking-tight text-white sm:text-7xl">Gérez vos
                    finances en toute sérénité</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Accédez à des fonctionnalités
                    avancées pour mieux gérer vos comptes et atteindre vos objectifs financiers.</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-400">Commencer</a>
                    <a href="#" class="text-sm/6 font-semibold text-white">En savoir plus <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-30">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="{{ asset('img/hero.png') }}" alt="Capture d'écran de l'application" class="w-[38rem]">
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2">
            <a href="#next-section"
                class="scroll-down-button relative inline-block w-8 h-12 border-2 border-white rounded-full flex items-center justify-center">
                <span
                    class="scroll-down-dot absolute top-3 w-1.5 h-1.5 bg-white rounded-full animate-scroll-down"></span>
            </a>
        </div>
    </div>

    <div class="isolate overflow-hidden bg-gray-900" id="next-section">
        <div class="mx-auto max-w-7xl px-6 pb-96 pt-24 text-center sm:pt-32 lg:px-8">
            <div class="mx-auto max-w-4xl">
                <h2 class="text-base/7 font-semibold text-green-400">Tarifs</h2>
                <p class="mt-2 text-balance text-5xl font-semibold tracking-tight text-white sm:text-6xl">Choisissez le
                    forfait qui vous convient</p>
            </div>
            <div class="relative mt-6">
                <p class="mx-auto max-w-2xl text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Sélectionnez une
                    formule abordable offrant des fonctionnalités optimales pour la gestion de vos finances et
                    l'atteinte de vos objectifs.</p>
            </div>
        </div>
        <div class="flow-root bg-white pb-24 sm:pb-32">
            <div class="-mt-80">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto grid max-w-md grid-cols-1 gap-8 lg:max-w-4xl lg:grid-cols-2">
                        <div
                            class="flex flex-col justify-between rounded-3xl bg-white p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                            <div>
                                <h3 id="tier-hobby" class="text-base/7 font-semibold text-green-600">Essentiel</h3>
                                <div class="mt-4 flex items-baseline gap-x-2">
                                    <span class="text-5xl font-semibold tracking-tight text-gray-900">29€</span>
                                    <span class="text-base/7 font-semibold text-gray-600">/mois</span>
                                </div>
                                <p class="mt-6 text-base/7 text-gray-600">Accédez aux fonctionnalités de base pour gérer
                                    vos finances au quotidien.</p>
                                <ul role="list" class="mt-10 space-y-4 text-sm/6 text-gray-600">
                                    <li class="flex gap-x-3">Accès aux comptes courants</li>
                                    <li class="flex gap-x-3">Historique d'un an</li>
                                    <li class="flex gap-x-3">Support en 48h</li>
                                </ul>
                            </div>
                            <a href="#" aria-describedby="tier-hobby"
                                class="mt-8 block rounded-md bg-green-600 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Commencez
                                maintenant</a>
                        </div>
                        <div
                            class="flex flex-col justify-between rounded-3xl bg-white p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                            <div>
                                <h3 id="tier-enterprise" class="text-base/7 font-semibold text-green-600">Pro</h3>
                                <div class="mt-4 flex items-baseline gap-x-2">
                                    <span class="text-5xl font-semibold tracking-tight text-gray-900">59€</span>
                                    <span class="text-base/7 font-semibold text-gray-600">/mois</span>
                                </div>
                                <p class="mt-6 text-base/7 text-gray-600">Des fonctionnalités avancées pour optimiser la
                                    gestion de votre argent.</p>
                                <ul role="list" class="mt-10 space-y-4 text-sm/6 text-gray-600">
                                    <li class="flex gap-x-3">Tous les comptes bancaires</li>
                                    <li class="flex gap-x-3">Historique illimité</li>
                                    <li class="flex gap-x-3">Support en 24h</li>
                                </ul>
                            </div>
                            <a href="#" aria-describedby="tier-enterprise"
                                class="mt-8 block rounded-md bg-green-600 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Commencez
                                maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mx-auto max-w-5xl">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Transfert d'argent</h2>

                <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
                    <form action="{{ route('transfer-funds') }}"
                        method="post"
                        class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
                        @csrf
                        <div class="mb-6 grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="full_name"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nom complet
                                    (comme sur la carte)*</label>
                                <input type="text" id="full_name"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-green-500 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-green-500 dark:focus:ring-green-500"
                                    placeholder="Jean Dupont" />
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="card-number-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Numéro de
                                    carte*</label>
                                <input type="text" id="card-number-input"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-green-500 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-green-500 dark:focus:ring-green-500"
                                    placeholder="xxxx-xxxx-xxxx-xxxx" />
                            </div>

                            <div>
                                <label for="card-expiration-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Expiration*</label>
                                <input type="text" id="card-expiration-input"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="MM/AA" />
                            </div>

                            <div>
                                <label for="cvv-input"
                                    class="mb-2 flex items-center gap-1 text-sm font-medium text-gray-900 dark:text-white">
                                    CVV*
                                    <button data-tooltip-target="cvv-desc" data-tooltip-trigger="hover"
                                        class="text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="cvv-desc" role="tooltip"
                                        class="tooltip invisible absolute z-10 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm dark:bg-gray-700">
                                        Les 3 derniers chiffres au dos de la carte
                                    </div>
                                </label>
                                <input type="number" id="cvv-input"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-green-500 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-green-500 dark:focus:ring-green-500"
                                    placeholder="•••" />
                            </div>
                            <div>
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Somme à
                                    transférer</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="amount" id="amount"
                                        class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        placeholder="100,00 €">
                                </div>
                            </div>
                            <div>
                                <label for="location" class="block text-sm/6 font-medium text-gray-900">Vos
                                    bénéficiaires</label>
                                <select id="location" name="location"
                                    class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm/6">
                                    <option selected>Utilisateur 1</option>
                                    <option>Utilisateur 2</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit"
                            class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-800 dark:bg-white dark:border-gray-700 dark:text-gray-900 dark:hover:bg-gray-200 me-2 mb-2">
                            <svg aria-hidden="true" class="w-10 h-3 me-2 -ms-1" viewBox="0 0 660 203" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M233.003 199.762L266.362 4.002H319.72L286.336 199.762H233.003V199.762ZM479.113 8.222C468.544 4.256 451.978 0 431.292 0C378.566 0 341.429 26.551 341.111 64.604C340.814 92.733 367.626 108.426 387.865 117.789C408.636 127.387 415.617 133.505 415.517 142.072C415.384 155.195 398.931 161.187 383.593 161.187C362.238 161.187 350.892 158.22 333.368 150.914L326.49 147.803L319.003 191.625C331.466 197.092 354.511 201.824 378.441 202.07C434.531 202.07 470.943 175.822 471.357 135.185C471.556 112.915 457.341 95.97 426.556 81.997C407.906 72.941 396.484 66.898 396.605 57.728C396.605 49.591 406.273 40.89 427.165 40.89C444.611 40.619 457.253 44.424 467.101 48.39L471.882 50.649L479.113 8.222V8.222ZM616.423 3.99899H575.193C562.421 3.99899 552.861 7.485 547.253 20.233L468.008 199.633H524.039C524.039 199.633 533.198 175.512 535.27 170.215C541.393 170.215 595.825 170.299 603.606 170.299C605.202 177.153 610.098 199.633 610.098 199.633H659.61L616.423 3.993V3.99899ZM551.006 130.409C555.42 119.13 572.266 75.685 572.266 75.685C571.952 76.206 576.647 64.351 579.34 57.001L582.946 73.879C582.946 73.879 593.163 120.608 595.299 130.406H551.006V130.409V130.409ZM187.706 3.99899L135.467 137.499L129.902 110.37C120.176 79.096 89.8774 45.213 56.0044 28.25L103.771 199.45L160.226 199.387L244.23 3.99699L187.706 3.996"
                                    fill="#0E4595" />
                                <path
                                    d="M86.723 3.99219H0.682003L0 8.06519C66.939 24.2692 111.23 63.4282 129.62 110.485L110.911 20.5252C107.682 8.12918 98.314 4.42918 86.725 3.99718"
                                    fill="#F2AE14" />
                            </svg>
                            Payer avec Visa
                        </button>
                    </form>

                    <div class="mt-6 grow sm:mt-8 lg:mt-0">
                        <div
                            class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Prix d'origine
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$6,592.00</dd>
                                </dl>
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Économies</dt>
                                    <dd class="text-base font-medium text-green-500">-$299.00</dd>
                                </dl>
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Retrait en
                                        magasin</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
                                </dl>
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Taxes</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$799</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">$7,191.00</dd>
                            </dl>
                        </div>

                        <div class="mt-6 flex items-center justify-center gap-8">
                            <img class="h-8 w-auto dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg"
                                alt="PayPal" />
                            <img class="hidden h-8 w-auto dark:flex"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal-dark.svg"
                                alt="PayPal" />
                            <img class="h-8 w-auto dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg"
                                alt="Visa" />
                            <img class="hidden h-8 w-auto dark:flex"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg"
                                alt="Visa" />
                            <img class="h-8 w-auto dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg"
                                alt="MasterCard" />
                            <img class="hidden h-8 w-auto dark:flex"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard-dark.svg"
                                alt="MasterCard" />
                        </div>
                    </div>
                </div>

                <p class="mt-6 text-center text-gray-500 dark:text-gray-400 sm:mt-8 lg:text-left">
                    Paiement sécurisé via <a href="#" title=""
                        class="font-medium text-green-700 underline hover:no-underline dark:text-green-500">Paddle</a>
                    pour <a href="#" title=""
                        class="font-medium text-green-700 underline hover:no-underline dark:text-green-500">Flowbite
                        LLC</a> - États-Unis
                </p>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-base/7 font-semibold text-green-400">Commencez dès maintenant</h2>
                <p class="mt-2 text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">Boostez votre
                    productivité. Utilisez notre application dès aujourd'hui.</p>
                <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-400">Découvrez comment notre solution
                    peut vous aider à atteindre vos objectifs plus rapidement et plus facilement.</p>
                <div class="mt-8 flex justify-center">
                    <a href="#"
                        class="rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-400">Commencer</a>
                </div>
            </div>
            <div class="mt-24 border-t border-white/10 pt-12 xl:grid xl:grid-cols-3 xl:gap-8">
                <img class="h-9" src="{{ asset('img/logo.png') }}" alt="Nom de l'entreprise">
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white">Solutions</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Marketing</a>
                                </li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Analyse</a>
                                </li>
                                <li><a href="#"
                                        class="text-sm/6 text-gray-400 hover:text-white">Automatisation</a></li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Commerce</a>
                                </li>
                                <li><a href="#"
                                        class="text-sm/6 text-gray-400 hover:text-white">Statistiques</a></li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white">Support</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Soumettre un
                                        ticket</a></li>
                                <li><a href="#"
                                        class="text-sm/6 text-gray-400 hover:text-white">Documentation</a></li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Guides</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white">Entreprise</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">À propos</a>
                                </li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Blog</a></li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Emplois</a>
                                </li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Presse</a></li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white">Juridique</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Conditions
                                        d'utilisation</a></li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Politique de
                                        confidentialité</a></li>
                                <li><a href="#" class="text-sm/6 text-gray-400 hover:text-white">Licence</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-white/10 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex gap-x-6 md:order-2">
                    <!-- Icônes de réseaux sociaux (Facebook, Instagram, X/Twitter, GitHub, YouTube) -->
                    <a href="#" class="text-gray-400 hover:text-gray-300"><span class="sr-only">Facebook</span>
                        <!-- SVG pour Facebook --></a>
                    <a href="#" class="text-gray-400 hover:text-gray-300"><span
                            class="sr-only">Instagram</span> <!-- SVG pour Instagram --></a>
                    <a href="#" class="text-gray-400 hover:text-gray-300"><span class="sr-only">X</span>
                        <!-- SVG pour X --></a>
                    <a href="#" class="text-gray-400 hover:text-gray-300"><span class="sr-only">GitHub</span>
                        <!-- SVG pour GitHub --></a>
                    <a href="#" class="text-gray-400 hover:text-gray-300"><span class="sr-only">YouTube</span>
                        <!-- SVG pour YouTube --></a>
                </div>
                <p class="mt-8 text-sm/6 text-gray-400 md:order-1 md:mt-0">&copy; 2024 Votre Entreprise, Inc. Tous
                    droits réservés.</p>
            </div>
        </div>
    </footer>


</body>

</html>
