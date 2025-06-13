<?php include 'includes/header.php'; ?>

<!-- ===================== Hero Section with Animated SVG Lava Lamp Background ===================== -->
<section class="relative bg-gray-900 text-gray-100 py-28 overflow-hidden">
    <!-- SVG Lava Lamp Blobs: Animated, blurred SVG shapes for ambient background effect -->
    <svg class="absolute top-0 left-0 w-full h-full z-0 pointer-events-none" style="filter: blur(32px);" viewBox="0 0 1440 600" fill="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="blobGradient1" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#2563eb" />
                <stop offset="100%" stop-color="#9333ea" />
            </linearGradient>
            <linearGradient id="blobGradient2" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#22d3ee" />
                <stop offset="100%" stop-color="#2563eb" />
            </linearGradient>
        </defs>
        <g>
            <path id="blob1" fill="url(#blobGradient1)">
                <animate attributeName="d" dur="10s" repeatCount="indefinite"
                    values="M 400 300 Q 450 200 600 250 Q 750 300 700 400 Q 650 500 500 450 Q 350 400 400 300 Z;
                            M 420 320 Q 500 180 650 250 Q 800 320 700 420 Q 600 520 480 470 Q 360 420 420 320 Z;
                            M 400 300 Q 450 200 600 250 Q 750 300 700 400 Q 650 500 500 450 Q 350 400 400 300 Z" />
            </path>
            <path id="blob2" fill="url(#blobGradient2)">
                <animate attributeName="d" dur="12s" repeatCount="indefinite"
                    values="M 900 200 Q 1000 100 1150 200 Q 1300 300 1200 400 Q 1100 500 1000 400 Q 900 300 900 200 Z;
                            M 950 250 Q 1100 50 1250 200 Q 1400 350 1200 450 Q 1000 550 1050 350 Q 1100 150 950 250 Z;
                            M 900 200 Q 1000 100 1150 200 Q 1300 300 1200 400 Q 1100 500 1000 400 Q 900 300 900 200 Z" />
            </path>
        </g>
    </svg>
    <div class="relative z-10 container mx-auto px-4 flex flex-col items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg animate-fade-in">EngageMetrics: Boost Engagement</h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 animate-fade-in delay-100">Transform your customer engagement with interactive, data-driven experiences.</p>
        <a href="#contact" class="btn-primary flex items-center gap-2 animate-fade-in delay-200">
            <i class="fas fa-rocket"></i> Get Started
        </a>
    </div>
</section>

<!-- ===================== Stats Section: Animated Stat Cards ===================== -->
<section id="stats" class="py-20 bg-gray-900 text-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Stat Card: Telecom -->
            <div class="relative bg-gray-800 text-gray-100 backdrop-blur-lg rounded-2xl shadow-xl p-8 card-hover border border-gray-700 group">
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-blue-500 rounded-full p-5 shadow-lg group-hover:scale-110 transition">
                    <i class="fas fa-chart-line text-white text-3xl animate-bounce"></i>
                </div>
                <h3 class="text-xl font-bold mt-10 mb-2 text-center">Telecom</h3>
                <div class="flex flex-col items-center">
                    <span class="counter text-5xl font-extrabold text-gray-100" data-target="300">0</span>
                    <span class="text-lg font-semibold text-blue-400">%</span>
                </div>
                <p class="text-gray-300 text-center mt-2">engagement increase</p>
                <div class="w-full bg-blue-900 rounded-full h-2 mt-4">
                    <div class="bg-blue-400 h-2 rounded-full transition-all duration-1000" style="width: 90%"></div>
                </div>
            </div>
            <!-- Stat Card: Retail -->
            <div class="relative bg-gray-800 text-gray-100 backdrop-blur-lg rounded-2xl shadow-xl p-8 card-hover border border-gray-700 group">
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-green-600 rounded-full p-5 shadow-lg group-hover:scale-110 transition">
                    <i class="fas fa-shopping-cart text-white text-3xl animate-bounce"></i>
                </div>
                <h3 class="text-xl font-bold mt-10 mb-2 text-center">Retail</h3>
                <div class="flex flex-col items-center">
                    <span class="counter text-5xl font-extrabold text-gray-100" data-target="92">0</span>
                    <span class="text-lg font-semibold text-green-400">%</span>
                </div>
                <p class="text-gray-300 text-center mt-2">basket spend growth</p>
                <div class="w-full bg-green-900 rounded-full h-2 mt-4">
                    <div class="bg-green-400 h-2 rounded-full transition-all duration-1000" style="width: 92%"></div>
                </div>
            </div>
            <!-- Stat Card: Global -->
            <div class="relative bg-gray-800 text-gray-100 backdrop-blur-lg rounded-2xl shadow-xl p-8 card-hover border border-gray-700 group">
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-purple-600 rounded-full p-5 shadow-lg group-hover:scale-110 transition">
                    <i class="fas fa-globe text-white text-3xl animate-bounce"></i>
                </div>
                <h3 class="text-xl font-bold mt-10 mb-2 text-center">Global</h3>
                <div class="flex flex-col items-center">
                    <span class="counter text-5xl font-extrabold text-gray-100" data-target="8">0</span>
                    <span class="text-lg font-semibold text-purple-400">M+</span>
                </div>
                <p class="text-gray-300 text-center mt-2">monthly plays</p>
                <div class="w-full bg-purple-900 rounded-full h-2 mt-4">
                    <div class="bg-purple-400 h-2 rounded-full transition-all duration-1000" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== Features Section: Platform Benefits ===================== -->
<section id="features" class="py-20 bg-gray-900 text-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Why Choose EngageMetrics?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Feature: Rapid Implementation -->
            <div class="flex flex-col md:flex-row items-center gap-8 animate-fade-in">
                <div class="bg-blue-900 rounded-full p-6">
                    <i class="fas fa-rocket text-blue-400 text-3xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Rapid Implementation</h3>
                    <p class="text-gray-300">Get started in minutes with our easy-to-use platform and seamless onboarding.</p>
                </div>
            </div>
            <!-- Feature: Real-time Analytics -->
            <div class="flex flex-col md:flex-row items-center gap-8 animate-fade-in delay-100">
                <div class="bg-green-900 rounded-full p-6">
                    <i class="fas fa-chart-bar text-green-400 text-3xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Real-time Analytics</h3>
                    <p class="text-gray-300">Track engagement metrics in real-time and make data-driven decisions.</p>
                </div>
            </div>
            <!-- Feature: Mobile First -->
            <div class="flex flex-col md:flex-row items-center gap-8 animate-fade-in delay-200">
                <div class="bg-purple-900 rounded-full p-6">
                    <i class="fas fa-mobile-alt text-purple-400 text-3xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Mobile First</h3>
                    <p class="text-gray-300">Optimized for all devices and screen sizes for maximum reach.</p>
                </div>
            </div>
            <!-- Feature: Engaging Experiences -->
            <div class="flex flex-col md:flex-row items-center gap-8 animate-fade-in delay-300">
                <div class="bg-yellow-900 rounded-full p-6">
                    <i class="fas fa-user-friends text-yellow-400 text-3xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Engaging Experiences</h3>
                    <p class="text-gray-300">Gamified modules and interactive content to boost user engagement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== Contact Section: Contact Form ===================== -->
<section id="contact" class="py-20 bg-gray-900 text-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Get in Touch</h2>
            <form class="bg-gray-800 text-gray-100/90 backdrop-blur-lg rounded-2xl shadow-xl p-10 border border-gray-700 animate-fade-in">
                <!-- Name Field -->
                <div class="relative mb-6">
                    <input type="text" id="name" class="peer w-full px-4 py-3 border-b-2 border-blue-900 bg-transparent focus:border-blue-400 outline-none transition placeholder-transparent text-gray-100" placeholder="Name">
                    <label for="name" class="absolute left-4 top-3 text-gray-300 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-300 peer-focus:-top-5 peer-focus:text-blue-400 peer-focus:text-sm bg-gray-800 px-1">Name</label>
                </div>
                <!-- Email Field -->
                <div class="relative mb-6">
                    <input type="email" id="email" class="peer w-full px-4 py-3 border-b-2 border-blue-900 bg-transparent focus:border-blue-400 outline-none transition placeholder-transparent text-gray-100" placeholder="Email">
                    <label for="email" class="absolute left-4 top-3 text-gray-300 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-300 peer-focus:-top-5 peer-focus:text-blue-400 peer-focus:text-sm bg-gray-800 px-1">Email</label>
                </div>
                <!-- Message Field -->
                <div class="relative mb-6">
                    <textarea id="message" rows="4" class="peer w-full px-4 py-3 border-b-2 border-blue-900 bg-transparent focus:border-blue-400 outline-none transition placeholder-transparent text-gray-100" placeholder="Message"></textarea>
                    <label for="message" class="absolute left-4 top-3 text-gray-300 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-300 peer-focus:-top-5 peer-focus:text-blue-400 peer-focus:text-sm bg-gray-800 px-1">Message</label>
                </div>
                <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 