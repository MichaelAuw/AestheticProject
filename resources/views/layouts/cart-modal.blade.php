<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Cart - Select Items</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    /* Hover Effects */
    .product-card:hover {
      transform: scale(1.02);
    }

    .product-card img {
      transition: transform 0.3s ease-in-out;
    }

    .product-card:hover img {
      transform: scale(1.1);
    }

    .artist-link:hover {
      text-decoration: underline;
    }

    /* Checkbox Styling */
    .custom-checkbox {
      width: 24px;
      height: 24px;
      border: 2px solid #4F46E5;
      appearance: none;
      border-radius: 0.25rem;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .custom-checkbox:checked {
      background-color: #4F46E5;
      border-color: #4F46E5;
      background-image: url('https://cdn-icons-png.flaticon.com/512/130/130906.png');
      background-position: center;
      background-size: 16px;
      background-repeat: no-repeat;
    }

    /* Smooth subtle hover for category and artist */
    .category,
    .artist {
      display: inline-block;
      cursor: pointer;
      color: #4a4a4a;
      transition: color 0.3s ease;
    }

    .category:hover,
    .artist:hover {
      color: #6366f1;
    }

    /* Modal background */
    .modal-bg {
      background-color: rgba(0, 0, 0, 0.5);
    }

  </style>
</head>
<body class="bg-gray-100 p-8">

<!-- Art Cart Modal -->
<div id="cartModal" class="hidden fixed inset-0 z-50 flex items-center justify-center modal-bg">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-3xl w-full">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold mb-4">Your Art Cart</h1> <!-- Reduced font size -->
            <!-- Close Button -->
            <button id="closeCartModal" class="text-gray-500 hover:text-red-500">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Cart Items (with limited height and scroll) -->
        <div class="border-b border-gray-200 pb-4 mb-6 product-list overflow-y-auto max-h-72">
            <!-- Abstract Illustration -->
            <div class="product-card hover:shadow-lg transform transition-transform duration-300 bg-gray-50 rounded-lg p-4 flex items-start mb-4">
                <input type="checkbox" class="mr-4 mt-2 custom-checkbox item-checkbox" data-price="200.00" checked>
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-start">
                        <img src="/images/indianart.webp" alt="Abstract Illustration" class="w-24 h-24 object-cover rounded-lg shadow-md">
                        <div class="ml-6">
                            <h2 class="text-lg font-semibold text-gray-800">Abstract Illustration</h2> <!-- Reduced font size -->
                            <p class="text-sm text-gray-500 mt-1"><span class="category">Illustrations</span></p> <!-- Reduced font size -->
                            <a href="#artist-mike" class="text-indigo-600 artist-link font-semibold mt-1 inline-block artist">Mike Hawk</a> <!-- Reduced font size -->
                            <div class="flex items-center mt-3 text-green-500 font-medium text-sm"><i class="fas fa-check-circle"></i><span class="ml-2">In stock</span></div> <!-- Reduced font size -->
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-semibold text-gray-800">$200.00</p> <!-- Reduced font size -->
                        <a href="#" class="text-indigo-600 font-medium mt-1 hover:text-purple-800 transition text-sm">Remove</a> <!-- Reduced font size -->
                    </div>
                </div>
            </div>

            <!-- Sculpture Section -->
            <div class="border-b border-gray-200 pb-4 mb-6 product-card hover:shadow-lg transform transition-transform duration-300 bg-gray-50 rounded-lg p-4 flex items-start">
                <input type="checkbox" class="mr-4 mt-2 custom-checkbox item-checkbox" data-price="450.00" checked>
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-start">
                        <img src="/images/powerpuff.jpg" alt="Modern Sculpture" class="w-24 h-24 object-cover rounded-lg shadow-md">
                        <div class="ml-6">
                            <h2 class="text-lg font-semibold text-gray-800">Modern Minimalist Sculpture</h2> <!-- Reduced font size -->
                            <p class="text-sm text-gray-500 mt-1"><span class="category">Sculptures</span></p> <!-- Reduced font size -->
                            <a href="#artist-jane" class="text-indigo-600 artist-link font-semibold mt-1 inline-block artist">Jane Doe</a> <!-- Reduced font size -->
                            <div class="flex items-center mt-3 text-green-500 font-medium text-sm"><i class="fas fa-check-circle"></i><span class="ml-2">In stock</span></div> <!-- Reduced font size -->
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-semibold text-gray-800">$450.00</p> <!-- Reduced font size -->
                        <a href="#" class="text-indigo-600 font-medium mt-1 hover:text-purple-800 transition text-sm">Remove</a> <!-- Reduced font size -->
                    </div>
                </div>
            </div>

            <!-- Poster Design Section -->
            <div class="border-b border-gray-200 pb-4 mb-6 product-card hover:shadow-lg transform transition-transform duration-300 bg-gray-50 rounded-lg p-4 flex items-start">
                <input type="checkbox" class="mr-4 mt-2 custom-checkbox item-checkbox" data-price="120.00" checked>
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-start">
                        <img src="/images/melody.webp" alt="Creative Poster Design" class="w-24 h-24 object-cover rounded-lg shadow-md">
                        <div class="ml-6">
                            <h2 class="text-lg font-semibold text-gray-800">Creative Poster Design</h2> <!-- Reduced font size -->
                            <p class="text-sm text-gray-500 mt-1"><span class="category">Posters</span></p> <!-- Reduced font size -->
                            <a href="#artist-john" class="text-indigo-600 artist-link font-semibold mt-1 inline-block artist">John Doe</a> <!-- Reduced font size -->
                            <div class="flex items-center mt-3 text-green-500 font-medium text-sm"><i class="fas fa-check-circle"></i><span class="ml-2">In stock</span></div> <!-- Reduced font size -->
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-semibold text-gray-800">$120.00</p> <!-- Reduced font size -->
                        <a href="#" class="text-indigo-600 font-medium mt-1 hover:text-indigo-600 transition text-sm">Remove</a> <!-- Reduced font size -->
                    </div>
                </div>
            </div>

            <!-- Digital Art Section -->
            <div class="product-card hover:shadow-lg transform transition-transform duration-300 bg-gray-50 rounded-lg p-4 flex items-start">
                <input type="checkbox" class="mr-4 mt-2 custom-checkbox item-checkbox" data-price="350.00" checked>
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-start">
                        <img src="/images/powerpuff2.jpg" alt="Digital Art Piece" class="w-24 h-24 object-cover rounded-lg shadow-md">
                        <div class="ml-6">
                            <h2 class="text-lg font-semibold text-gray-800">Digital Art - Exploration</h2> <!-- Reduced font size -->
                            <p class="text-sm text-gray-500 mt-1"><span class="category">Digital Art</span></p> <!-- Reduced font size -->
                            <a href="#artist-emily" class="text-indigo-600 artist-link font-semibold mt-1 inline-block artist">Emily Rose</a> <!-- Reduced font size -->
                            <div class="flex items-center mt-3 text-yellow-500 font-medium text-sm"><i class="fas fa-clock"></i><span class="ml-2">Ships in 1-2 weeks</span></div> <!-- Reduced font size -->
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-semibold text-gray-800">$350.00</p> <!-- Reduced font size -->
                        <a href="#" class="text-indigo-600 font-medium mt-1 hover:text-purple-800 transition text-sm">Remove</a> <!-- Reduced font size -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Subtotal and Checkout Section -->
        <div class="flex justify-between items-center mt-8">
            <p class="text-base font-semibold">Subtotal</p> <!-- Reduced font size -->
            <p class="text-base font-semibold" id="subtotal">$320.00</p> <!-- Reduced font size -->
        </div>
        <p class="text-sm text-gray-500 mt-2">Shipping and taxes will be calculated at checkout.</p> <!-- Reduced font size -->

        <button onclick="window.location.href='{{ route('checkout') }}'" class="w-full bg-indigo-600 text-white py-3 mt-6 rounded-lg text-base font-semibold hover:bg-indigo-800 transition">Checkout</button> <!-- Reduced font size -->

        <p class="text-center mt-4 text-sm text-gray-500">
            or
            <a href="#" class="text-indigo-600 hover:underline">Continue Shopping →</a> <!-- Reduced font size -->
        </p>
    </div>
</div>

<script>
    // Toggle the cart modal visibility
    const cartButton = document.getElementById('cartButton');
    const cartModal = document.getElementById('cartModal');
    const closeCartModal = document.getElementById('closeCartModal');

    cartButton.addEventListener('click', () => {
      cartModal.classList.remove('hidden');
    });

    closeCartModal.addEventListener('click', () => {
      cartModal.classList.add('hidden');
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', function(event) {
      if (event.target === cartModal) {
        cartModal.classList.add('hidden');
      }
    });

    // JavaScript to dynamically calculate subtotal based on checked items
    const checkboxes = document.querySelectorAll('.item-checkbox');
    const subtotalEl = document.getElementById('subtotal');

    function calculateSubtotal() {
      let subtotal = 0;
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          subtotal += parseFloat(checkbox.dataset.price);
        }
      });
      subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
    }

    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', calculateSubtotal);
    });

    // Initial calculation on page load
    calculateSubtotal();
</script>

</body>
</html>
