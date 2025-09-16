<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Test psychotechnique pour permis de conduire à Montgeron</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f7fafc;
        }
    </style>
</head>

<body class="bg-white min-h-screen pb-24 md:pb-32">
    <header class="w-full bg-white">
        <div class="container mx-auto ">
            <div class="relative w-full h-auto flex justify-center items-center py-3 md:h-[80px]">
                <img src="logo.jpg"
                    class="w-[200px] h-[50px] md:absolute md:top-[15px] md:left-[80px]" alt="Logo">
            </div>
        </div>
        <div class=" bg-white shadow-[0_3px_14px_rgba(0,0,0,0.16)]">
            <div class="container mx-auto relative w-full px-3 py-5 md:h-[70px] md:py-0">
                <h1
                    class="container mx-auto text-center font-lato font-bold text-[20px] leading-[24px] text-[#36578A] md:absolute md:top-[20px] md:left-[80px] md:w-[600px] md:text-left md:text-[22px] md:leading-[28px]">
                    Test psychotechnique pour permis de conduire à Montgeron
                </h1>
            </div>
        </div>
    </header>

    <main class="bg-white">

        <section class="container mx-auto mt-6 md:mt-[30px] md:px-20">
            <h2 class="font-lato font-bold text-[24px] leading-[30px] text-[#383838] mb-6">
                Confirmer et payer
            </h2>
            <div class="flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-2/3 flex flex-col gap-6">
                    <div
                        class="bg-white rounded-[10px] shadow-[0_3px_6px_rgba(0,0,0,0.16)] p-4 flex items-center gap-3">
                        <i class="fas fa-chart-line text-[red]"></i>
                        <p class="font-lato font-normal text-[15px]">
                            <span class="font-bold">Date de réservation en forte demande</span>
                            <br>
                            <span class="font-normal">Les réservations sont fréquentes pour ce centre</span>
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-[10px] pt-2">
                        <h2 class="font-lato font-bold text-[24px] leading-[30px] text-[#383838] mb-6">
                            Vos informations personnelles
                        </h2>
                        <div class="flex flex-col gap-4">
                            <input type="text" placeholder="Nom Prénom"
                                class="font-lato w-full border bg-gray-50 border-[#DEDEDE] py-3 px-4 rounded-lg focus:outline-none" />
                            <input type="email" placeholder="Email"
                                class="font-lato w-full border bg-gray-50 border-[#DEDEDE] py-3 px-4 rounded-lg focus:outline-none" />
                            <input type="tel" placeholder="Numéro de téléphone"
                                class="font-lato w-full border bg-gray-50 border-[#DEDEDE] py-3 px-4 rounded-lg focus:outline-none" />
                        </div>
                    </div>
                    <hr />

                    <div class="bg-white rounded-[10px] pt-3">
                        <h2 class="font-lato font-bold text-[24px] leading-[30px] text-[#383838] mb-6">
                            Votre test psychotechnique
                        </h2>
                        <div class="flex flex-col gap-3 text-[#383838] font-lato font-normal">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-calendar-alt"></i>
                                <div>
                                    <p class="font-lato font-bold">Date</p>
                                    <p>12 Mai 2025</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <p class="font-lato font-bold">Heure</p>
                                    <p>12:30</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <p class="font-lato font-bold">Adresse</p>
                                    <p class="font-lato">39 rue Emile Steiner, 27200 Vernon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="bg-white">
                        <h2 class="font-lato font-bold text-[24px] leading-[30px] text-[#383838] mb-6">
                            Choisissez votre moyen de paiement
                        </h2>
                        <div class="mb-5 mt-[-25px]">
                            <i class="fas fa-lock text-[#383838]"></i>
                            <span class="text-[10px] text-gray-500">100% SÉCURISÉ</span>
                        </div>
                        <div class="flex flex-col gap-4 font-lato font-normal">
                            <div class="flex items-center gap-3">
                                <input
                                    type="radio"
                                    id="credit-card"
                                    name="payment"
                                    class="h-4 w-4 appearance-none border border-gray-500 checked:bg-gray-500 rounded-full"
                                />
                                <label for="credit-card" class="flex-1 flex items-center gap-2">
                                    <img src="https://www.reussir-mon-ecommerce.fr/wp-content/uploads/2016/03/Logo_CB-1-1024x503.png" width="50" alt="Carte bancaire" />
                                    Carte bancaire
                                </label>
                            </div>
                            <hr/>
                            <div class="flex items-center gap-3">
                                <input
                                    type="radio"
                                    id="apple-pay"
                                    name="payment"
                                    class="h-4 w-4 appearance-none border border-gray-500 checked:bg-gray-500 rounded-full"
                                />
                                <label for="apple-pay" class="flex-1 flex items-center gap-2">
                                    <img src="https://tse4.mm.bing.net/th/id/OIP.VpCh041MJt63E0nqd_nsewHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" width="50" alt="">
                                    Apple Pay
                                </label>
                            </div>
                            <hr/>
                            <div class="flex items-center gap-3">
                                <input
                                    type="radio"
                                    id="paypal"
                                    name="payment"
                                    class="h-4 w-4 appearance-none border border-gray-500 checked:bg-gray-500 rounded-full"
                                />
                                <label for="paypal" class="flex-1 flex items-center gap-2">
                                    <img src="https://tse4.mm.bing.net/th/id/OIP.YX3kTP68gO3cyirk-CGPnQHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" width="50" alt="">
                                    Paypal
                                </label>
                            </div>
                            <hr/>
                            <div class="flex items-center gap-3">
                                <input
                                    type="radio"
                                    id="alma"
                                    name="payment"
                                    class="h-4 w-4 appearance-none border border-gray-500 checked:bg-gray-500 rounded-full"
                                />
                                <label for="alma" class="flex-1 flex items-center gap-2">
                                    <img src="https://vlceurope.com/wp-content/uploads/2021/08/alma.png" width="50" alt="Alma" />
                                    Alma
                                </label>
                            </div>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/3 bg-white rounded-[10px] pl-5 h-fit sticky top-6">
                    <h3 class="font-lato font-bold text-[18px] text-[#A73D5E] mb-4">Récapitulatif de votre test
                        psychotechnique</h3>
                    <div class="flex flex-col gap-4 font-lato">
                        <p class="font-bold text-xl text-[#383838]">
                            Total à payer : 130.00€
                        </p>
                        <p class="font-normal text-[12px] text-[#383838]">
                            En passant votre commande, vous acceptez les conditions générales de vente de la société
                            AAAEP.
                            Veuillez consulter notre politique de protection des données.
                        </p>
                        <hr />
                        <div class="grid grid-cols-3 gap-4 mt-4 text-center font-lato">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-hand-pointer shadow-[0_3px_10px_rgba(0,0,0,0.16)] px-3 py-2 border rounded-[200px] text-xl text-[#0DBC0D]"></i>
                                <span class="font-bold text-[12px] mt-2">Entraînement</span>
                                <span class="font-normal text-[10px]">Gratuit illimité</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <i class="fas fa-file-alt shadow-[0_3px_10px_rgba(0,0,0,0.16)] px-4 py-2 border rounded-[200px] text-xl text-[#0DBC0D]"></i>
                                <span class="font-bold text-[12px] mt-2">Résultats</span>
                                <span class="font-normal text-[10px]">Le Jour Même</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <i class="fas fa-check-circle shadow-[0_3px_10px_rgba(0,0,0,0.16)] px-3 py-2 border rounded-[200px] text-xl text-[#0DBC0D]"></i>
                                <span class="font-bold text-[12px] mt-2">Annulation</span>
                                <span class="font-normal text-[10px]">Gratuite jusqu'à 48h</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <button
                    class="font-lato bg-[#A73D5E] text-white font-bold text-[20px] rounded-[10px] w-full h-[55px] shadow-lg mt-8 md:hidden">
                    Je réserve mon test psychotechnique →
                </button>
            </div>
        </section>
    </main>
</body>

</html>