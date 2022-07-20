<x-app-layout>
    <x-slot name="title">
        home     
    </x-slot>
    <!-- Header -->
    <x-slot name="header">
        <div class="grid gap-4 lg:grid-cols-2 sm:grid-cols-1">
            <!-- Head -->
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Bank Papper UIN') }}
                </h2>
            </div>
            <!-- End Head -->
            <!-- pembatas -->
            <div class="">
                <!-- Input Search -->           
               <div class="form-control " >
                    <div class="input-group lg:justify-end md:justify-center sm:justify-center" >
                        <input type="text" placeholder="Search…" class="input input-bordered w-96" />
                        <button class="btn btn-square">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </button>
                    </div>
                </div> 
                             
                <!-- End Input Search -->
            </div>
        </div>
        
        
        

        
    </x-slot>
   
    <!-- End Header -->



    <!-- Hero Section -->
    <div class="">
        <div class="hero min-h-screen" style="background-image: url(https://placeimg.com/1000/800/arch);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Content -->
    <div class="m-10 grid grid-cols-3 gap-2">
        <!-- Card -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
                </h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
                </h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
                </h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
                </div>
            </div>
        </div>


        <!-- End Card -->
    </div>
   <!-- End Content -->
</x-app-layout>
