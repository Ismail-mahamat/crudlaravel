<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!DOCTYPE html>
                    <html lang="fr">
                    <head>
                        <meta charset="UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                        <title>Personne</title>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                        <style>
                            /* Style général */
                            body {
                                background-color: #f4f7fa;
                                color: #333;
                                font-family: 'Roboto', sans-serif;
                                margin: 0;
                                padding: 0;
                            }

                            .header-content {
                                text-align: center;
                                padding: 60px 20px;
                                color: #333;
                            }

                            .header-content h1 {
                                font-size: 3rem;
                                font-weight: 700;
                                margin-bottom: 20px;
                            }

                            .header-content p {
                                font-size: 1.2rem;
                                line-height: 1.6;
                            }

                            /* Ajustement de l'image */
                            .image-card {
                                display: flex;
                                justify-content: center;
                                margin-top: 30px;
                            }

                            .image-card img {
                                max-width: 100%;
                                height: auto;
                                border-radius: 8px;
                                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
                            }

                            footer {
                                background-color: #fff;
                                color: #333;
                                padding: 20px;
                                text-align: center;
                            }

                            footer a {
                                color: #ff5733;
                                text-decoration: none;
                            }

                            footer a:hover {
                                text-decoration: underline;
                            }
                        </style>
                    </head>
                    <body>

                        <div class="header-content">
                            <h1>Bienvenue dans L'assemblee</h1>

                        </div>

                        <div class="image-card">
                            <img src="https://i.pinimg.com/736x/9e/28/ff/9e28ff68fb5561af68edf75c6096a3c6.jpg" alt="Plage de Sable" />
                        </div>

                        <footer>
                            <p>&copy; 2024 Notre Localité. Tous droits réservés.</p>
                            <p><a href="#">Contactez-nous</a></p>
                        </footer>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                    </body>
                    </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>