<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Éclairage Public</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style type="text/css">


    </style>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-indigo-950 text-white min-h-screen p-4">
            <h2 class="text-4xl font-bold mb-4">Menu</h2>
            <ul class="text-xl px-4">
                <li class="mb-2"><a href="#map" class="hover:underline"> Home page</a></li>
                <li class="mb-2"><a href="#chart" class="hover:underline">Statistiques</a></li>
                <li class="mb-2"><a href="#alerts" class="hover:underline"> Alertes</a></li>
            </ul>
           
        </aside>

        <main class="flex-1 p-6">
            <!-- Navbar -->
            <nav class=" p-4 text-indigo-950 text-center">
                <h1 class="text-5xl font-bold">Surveillance Éclairage Public</h1>
            </nav>

            <div class="grid grid-cols-1 gap-6 mt-4">
                <!-- Hero -->
                <div class="flex">
                    <div class="w-1/2 p-4">
                        <div class="bg-white p-4 rounded shadow mb-4">
                            <h2 class="text-2xl  font-bold mb-2">Lampadaires Total</h2>
                            <p class="text-2xl font-bold">305</p>
                        </div>
                        <div class="flex justify-between ">
                            <div class=" w-6/12 bg-white p-4 rounded-lg shadow-lg">
                                <h3 class="font-semibold text-gray-700">Lampadaires Actifs</h3>
                                <p class="text-3xl font-bold text-green-600" id="activeLamps">248</p>
                            </div>
                            <div class="  w-5/12 bg-white p-4 rounded-lg shadow-lg">
                                <h3 class="font-semibold text-gray-700">Lampadaires en Panne</h3>
                                <p class="text-3xl font-bold text-red-600" id="faultyLamps">12</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                            <canvas id="lampadairesChart" width="450" height="200"></canvas>
                    </div>
                </div>

                <!-- Carte des Lampes -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Répartition Géographique </h2>
                    <div class="flex">
                       <div class="w-1/2" id="map" style="height: 400px;"></div>
                       <div class="w-1/2"  style="height: 400px;"> 





    <!-- Tableau -->
    <div class="bg-white rounded-lg shadow overflow-hidden p-4">
        <table class="min-w-full divide-y divide-gray-200">
            <!-- En-tête -->
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Dernière Maintenance</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            
            <!-- Corps -->
            <tbody class="divide-y divide-gray-200">
                <!-- Ligne 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <i data-feather="zap" class="w-5 h-5 mr-2 text-blue-500"></i>
                            <span class="font-medium">LP-045</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Actif</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">2023-10-15</div>
                        <div class="text-sm text-gray-500">il y a 2 jours</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-500 hover:text-blue-700">
                                <i data-feather="edit" class="w-4 h-4"></i>
                            </button>
                            <button class="text-gray-500 hover:text-gray-700">
                                <i data-feather="clock" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Ligne 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <i data-feather="zap" class="w-5 h-5 mr-2 text-red-500"></i>
                            <span class="font-medium">LP-128</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-sm">En Panne</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">2023-09-28</div>
                        <div class="text-sm text-gray-500">il y a 19 jours</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-500 hover:text-blue-700">
                                <i data-feather="edit" class="w-4 h-4"></i>
                            </button>
                            <button class="text-gray-500 hover:text-gray-700">
                                <i data-feather="clock" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Ligne 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <i data-feather="zap" class="w-5 h-5 mr-2 text-yellow-500"></i>
                            <span class="font-medium">LP-072 </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Maintenance</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">2023-10-10</div>
                        <div class="text-sm text-gray-500">il y a 7 jours</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-500 hover:text-blue-700">
                                <i data-feather="edit" class="w-4 h-4"></i>
                            </button>
                            <button class="text-gray-500 hover:text-gray-700">
                                <i data-feather="clock" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


     <div class="mt-4 flex justify-between items-center p-4">
        <div class="text-sm text-gray-700">
            Affichage de 1 à 3 sur 50 entrées
        </div>
        <div class="flex space-x-2">
            <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">
                Précédent
            </button>
            <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                1
            </button>
            <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">
                Suivant
            </button>
        </div>
    </div>





                       </div>

                    </div>
                    
                </div>

                

                <!-- Alertes -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Alertes</h2>
                    <ul id="alerts" class="text-red-600">
                        



                              <!-- Alerte Panne de Lampadaire -->
    <div class="flex items-start m-1 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
        <div class="flex-shrink-0">
            <i data-feather="alert-octagon" class="w-6 h-6 text-red-600"></i>
        </div>
        <div class="ml-3 flex-1">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-red-800">Panne détectée</h3>
                <span class="text-xs text-red-600">il y a 2h</span>
            </div>
            <div class="mt-1 text-sm text-red-700">
                <p>Lampadaire #LP-045 - Rue Principale</p>
                <p class="mt-1 text-xs opacity-75">Dernier signal: 0V - 0W</p>
            </div>
        </div>
    </div>

    <!-- Alerte Surconsommation Énergétique -->
    <div class="flex items-start m-1 p-4 bg-orange-50 border-l-4 border-orange-500 rounded-lg">
        <div class="flex-shrink-0">
            <i data-feather="zap" class="w-6 h-6 text-orange-600"></i>
        </div>
        <div class="ml-3 flex-1">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-orange-800">Surconsommation</h3>
                <span class="text-xs text-orange-600">il y a 45min</span>
            </div>
            <div class="mt-1 text-sm text-orange-700">
                <p>Lampadaire #LP-128 - +35% consommation</p>
                <p class="mt-1 text-xs opacity-75">230V - 185W (moyenne: 135W)</p>
            </div>
        </div>
    </div>

    <!-- Alerte Maintenance Préventive -->
    <div class="flex items-start m-1 p-4 bg-blue-50 border-l-4 border-blue-500 rounded-lg">
        <div class="flex-shrink-0">
            <i data-feather="tool" class="w-6 h-6 text-blue-600"></i>
        </div>
        <div class="ml-3 flex-1">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-blue-800">Maintenance Requise</h3>
                <span class="text-xs text-blue-600">Programmée</span>
            </div>
            <div class="mt-1 text-sm text-blue-700">
                <p>Lampadaire #LP-072 - 1500h de fonctionnement</p>
                <p class="mt-1 text-xs opacity-75">Dernière maintenance: 2023-09-15</p>
            </div>
        </div>
    </div>

    <!-- Alerte Défaillance Communication -->
    <div class="flex items-start m-1 p-4 bg-purple-50 border-l-4 border-purple-500 rounded-lg">
        <div class="flex-shrink-0">
            <i data-feather="wifi-off" class="w-6 h-6 text-purple-600"></i>
        </div>
        <div class="ml-3 flex-1">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-purple-800">Perte de Signal</h3>
                <span class="text-xs text-purple-600">en cours</span>
            </div>
            <div class="mt-1 text-sm text-purple-700">
                <p>Lampadaire #LP-201 - Non connecté</p>
                <p class="mt-1 text-xs opacity-75">Dernière communication: 2023-10-17 22:15</p>
            </div>
        </div>
    </div>

    <!-- Alerte Conditions Météo -->
    <div class="flex items-start m-1 p-4 bg-yellow-50 border-l-4 border-yellow-500 rounded-lg">
        <div class="flex-shrink-0">
            <i data-feather="cloud-rain" class="w-6 h-6 text-yellow-600"></i>
        </div>
        <div class="ml-3 flex-1">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-yellow-800">Alerte Météo</h3>
                <span class="text-xs text-yellow-600">Active</span>
            </div>
            <div class="mt-1 text-sm text-yellow-700">
                <p>Détection d'humidité élevée</p>
                <p class="mt-1 text-xs opacity-75">Température: 4°C - Humidité: 92%</p>
            </div>
        </div>
    </div>

    <!-- Alerte Résolution Problème -->
    <div class="flex items-start m-1 p-4 bg-green-50 border-l-4 border-green-500 rounded-lg">
        <div class="flex-shrink-0">
            <i data-feather="check-circle" class="w-6 h-6 text-green-600"></i>
        </div>
        <div class="ml-3 flex-1">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-green-800">Problème Résolu</h3>
                <span class="text-xs text-green-600">il y a 15min</span>
            </div>
            <div class="mt-1 text-sm text-green-700">
                <p>Lampadaire #LP-045 - Remise en service</p>
                <p class="mt-1 text-xs opacity-75">230V - 150W - Temp: 38°C</p>
            </div>
        </div>
    </div>




                    </ul>
                </div>

            </div>
        </main>
    </div>
     <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <!-- Marker Cluster Plugin -->
    <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />

    <script>
     

       

          // Initialize map
        const map = L.map('map').setView([30.17482, -9.497734], 17); // Paris coordinates

        // Add OpenStreetMap tiles
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Sample lamp data (replace with your actual data)
        const lamps = [
            {
                id: "LP-045",
                lat: 30.176954,
                lng: -9.499397,
                status: "active",
                address: "Rue Principale",
                lastMaintenance: "2023-10-20"
            },
            {
                id: "LP-128",
                lat: 30.173856,
                lng: -9.499236,
                status: "faulty",
                address: "Avenue des Champs",
                lastMaintenance: "2023-09-28"
            },
            {
                id: "LP-129",
                lat: 30.175034,
                lng: -9.499279,
                status: "active",
                address: "Avenue des Champs",
                lastMaintenance: "2023-09-28"
            },
            {
                id: "LP-121",
                lat: 30.176045,
                lng: -9.498045,
                status: "active",
                address: "Avenue des Champs",
                lastMaintenance: "2023-09-28"
            },
            {
                id: "LP-113",
                lat: 30.175173,
                lng: -9.497734,
                status: "active",
                address: "Avenue des Champs",
                lastMaintenance: "2023-09-28"
            },
            {
                id: "LP-153",
                lat: 30.173680,
                lng: -9.497241,
                status: "active",
                address: "Avenue des Champs",
                lastMaintenance: "2023-09-28"
            },
            {
                id: "LP-193",
                lat: 30.176082,
                lng: -9.499365,
                status: "active",
                address: "Avenue des Champs",
                lastMaintenance: "2023-09-28"
            }
        ];

        // Custom icons
        const iconSettings = {
            active: {
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png'
            },
            faulty: {
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png'
            },
            maintenance: {
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png'
            }
        };

        // Create marker cluster group
        const markers = L.markerClusterGroup();

        // Add markers to map
        lamps.forEach(lamp => {
            const icon = L.icon({
                iconUrl: iconSettings[lamp.status].iconUrl,
                shadowUrl: iconSettings[lamp.status].shadowUrl,
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            const marker = L.marker([lamp.lat, lamp.lng], { icon })
                .bindPopup(`
                    <div class="p-2">
                        <h3 class="font-bold">${lamp.id}</h3>
                        <p>${lamp.address}</p>
                        <p class="text-sm mt-2">
                            Statut: <span class="font-semibold">${lamp.status}</span><br>
                            Dernière maintenance: ${lamp.lastMaintenance}
                        </p>
                    </div>
                `);

            markers.addLayer(marker);
        });

        map.addLayer(markers);







      
          
        const ctx = document.getElementById('lampadairesChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Lampadaires Actifs', 'Lampadaires en Panne'],
                datasets: [{
                    data: [248, 12], // Data values
                    backgroundColor: ['#2E1A47', '#9E7BFF'], // Colors for active and broken lamps
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: false, // Désactiver l'adaptation automatique
                maintainAspectRatio: false, // Désactiver le ratio fixe
                plugins: {
                    legend: {
                        position: 'left'
                    }
                }
            }
        });
    </script>


        <script>
        feather.replace();
        
        // Fonctionnalité de fermeture
        document.querySelectorAll('.alert').forEach(alert => {
            const closeBtn = document.createElement('button');
            closeBtn.className = 'ml-4 text-gray-400 hover:text-gray-600';
            closeBtn.innerHTML = '<i data-feather="x" class="w-4 h-4"></i>';
            closeBtn.onclick = () => alert.remove();
            alert.querySelector('div:last-child').appendChild(closeBtn);
        });
        feather.replace();
    </script>

    <style>
        /* Animation d'apparition */
        @keyframes alertSlideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        div[class*="border-l-4"] {
            animation: alertSlideIn 0.3s ease-out;
        }
    </style>

</body>
</html>
