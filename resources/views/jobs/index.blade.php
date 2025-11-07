<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    
    <!-- Header Section -->
    <div class="text-center py-12 mb-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Job Listings
            </span>
        </h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
            Find your next opportunity! Browse through our curated job listings and take the next step in your career.
        </p>
        
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 max-w-lg mx-auto">
                {{ session('success') }}
            </div>
        @endif
        
        @auth
            <a href="/jobs/create" 
               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Post a Job
            </a>
        @else
            <p class="text-gray-600 mb-4">
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Login</a> 
                or 
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-semibold">register</a> 
                to post a job!
            </p>
        @endauth
    </div>
    
    <!-- Job Listings -->
    <div class="max-w-4xl mx-auto">
        <div class="grid gap-6">
            @foreach($jobs as $job)
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $job['title'] }}</h3>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    {{ $job['company'] }}
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $job['location'] }}
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                    {{ $job['salary'] }}
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0 md:ml-6">
                            <a href="/jobs/{{ $job['id'] }}" 
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                                View Details
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>