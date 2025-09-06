<form action="{{ route('apply') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
    @csrf
    <input type="text" name="name" placeholder="Full Name" class="w-full p-3 text-black bg-white border border-gray-300 mb-3 md:mb-0">
    <input type="email" name="email" placeholder="Email Address" class="w-full p-3 text-black bg-white border border-gray-300 mb-3 md:mb-0">
    <input type="text" name="mobile" placeholder="Mobile No." class="w-full p-3 text-black bg-white border border-gray-300 mb-3 md:mb-0">
    <select name="state" class="w-full p-3 text-black bg-white border border-gray-300 mb-3 md:mb-0">
        <option value="">Select State</option>
        <!-- Add state options here -->
    </select>
    <input type="text" name="city" placeholder="City" class="w-full p-3 text-black bg-white border border-gray-300 mb-3 md:mb-0">
    <input type="text" name="pincode" placeholder="Pincode" class="w-full p-3 text-black bg-white border border-gray-300 mb-3 md:mb-0">
    <textarea name="message" placeholder="Write your message here..." class="w-full p-3 text-black bg-white border border-gray-300 col-span-1 md:col-span-3 mb-3 md:mb-0"></textarea>
    <div class="col-span-1 md:col-span-3 text-center">
        <button type="submit" class="w-full md:w-auto border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white py-3 px-6 transition-all duration-300">
            Apply Now
        </button>
    </div>
</form>