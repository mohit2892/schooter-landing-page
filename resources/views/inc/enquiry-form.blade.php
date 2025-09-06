<!-- Application Form -->
<section id="apply" class="py-10 sm:py-16 bg-black text-gray-200">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
        <h2 class="text-xl sm:text-3xl font-Fredoka text-center mb-8 sm:mb-12">
            Apply For <span class="text-green-500">Electric Scooters</span>
        </h2>
        @if(session('success'))
            <div class="mb-6 bg-green-100 text-green-700 p-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        @include('inc.form')
    </div>
</section>