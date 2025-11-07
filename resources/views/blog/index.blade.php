<x-layout>
    <x-slot:title>Blog</x-slot:title>
    
    <!-- Header Section -->
    <div class="text-center py-12 mb-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Our Blog
            </span>
        </h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Welcome to our blog! Here you'll find the latest posts, insights, and updates from our team.
        </p>
    </div>
    
    <!-- Blog Posts Container -->
    <div class="max-w-4xl mx-auto">
        <!-- Coming Soon Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 text-center">
            <div class="w-24 h-24 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z"></path>
                </svg>
            </div>
            
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Posts Coming Soon!</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                We're working hard to bring you amazing content. Our first blog posts will be available very soon. 
                In the meantime, feel free to explore the rest of our site!
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" 
                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Back to Home
                </a>
                
                <a href="/contact" 
                   class="inline-flex items-center px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg shadow-md hover:shadow-lg border border-gray-200 hover:border-gray-300 transform hover:-translate-y-1 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Get Notified
                </a>
            </div>
        </div>
        
        <!-- Newsletter Signup -->
        <div class="mt-12 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8 border border-gray-100">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Stay Updated</h3>
                <p class="text-gray-600 mb-6">Be the first to know when we publish new blog posts!</p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" 
                           class="flex-1 px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                    <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>