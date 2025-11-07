<x-layout>
    <x-slot:title>Welcome</x-slot:title>
    
    <!-- Hero Section -->
    <div class="text-center py-16 md:py-24">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 bg-clip-text text-transparent">
                    Hello World!
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8 leading-relaxed">
                This is a <span class="font-semibold text-gray-800">Laravel application</span> with beautiful 
                <span class="font-semibold text-blue-600">TailwindCSS</span> styling and 
                <span class="font-semibold text-purple-600">Blade components</span>.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/blog" 
                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z"></path>
                    </svg>
                    Explore Blog
                </a>
                
                <a href="/contact" 
                   class="inline-flex items-center px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg shadow-md hover:shadow-lg border border-gray-200 hover:border-gray-300 transform hover:-translate-y-1 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Get in Touch
                </a>
            </div>
        </div>
        
        <!-- Decorative elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-purple-200 rounded-full opacity-30 animate-pulse delay-300"></div>
        <div class="absolute bottom-20 left-20 w-12 h-12 bg-pink-200 rounded-full opacity-25 animate-pulse delay-700"></div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-white/50 rounded-2xl backdrop-blur-sm">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Choose Laravel?</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Fast Development</h3>
                    <p class="text-gray-600">Build amazing applications quickly with Laravel's elegant syntax and powerful features.</p>
                </div>
                
                <div class="text-center p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Robust & Secure</h3>
                    <p class="text-gray-600">Built-in security features and best practices to keep your applications safe.</p>
                </div>
                
                <div class="text-center p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Great Community</h3>
                    <p class="text-gray-600">Large, active community with extensive documentation and learning resources.</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
