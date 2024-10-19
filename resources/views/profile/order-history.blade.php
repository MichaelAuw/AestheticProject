<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Order History</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .order-item {
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .order-item:hover {
      background-color: #f9fafb;
      transform: translateY(-2px);
    }

    .order-details {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
    }

    .order-item.open .order-details {
      max-height: 600px; /* Adjust to accommodate content */
    }

    .item-image {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 0.375rem;
    }

    .rotate-180 {
      transform: rotate(180deg);
    }
  </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

  <div class="max-w-7xl mx-auto py-12 px-4">
    <!-- Profile Heading -->
    <h1 class="text-3xl font-bold text-gray-800 mb-8">🛒 Order History</h1>

    <!-- Order History List -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
      <div class="px-6 py-4 bg-gray-50 border-b">
        <h3 class="text-lg leading-6 font-semibold text-gray-900">Your Orders</h3>
        <p class="mt-1 text-sm text-gray-500">Click on an order to view more details.</p>
      </div>

      <!-- Orders List -->
      <div class="divide-y divide-gray-200">
        <!-- Example of an order item -->
        <div class="order-item px-6 py-5 hover:bg-gray-50 transition" onclick="toggleOrderDetails(this)">
          <!-- Order Summary -->
          <div class="flex justify-between items-center">
            <div>
              <h4 class="text-gray-800 font-semibold">Order #12345</h4>
              <p class="text-sm text-gray-600">Date: Oct 12, 2024</p>
              <p class="text-sm text-gray-600">Total: $299.99</p>
              <p class="text-sm text-green-600 font-semibold">Status: Completed</p>
            </div>
            <div class="flex items-center text-indigo-600 font-semibold">
              <span class="mr-2">Details</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </div>
          </div>

          <!-- Order Details (Collapsible Section) -->
          <div class="order-details mt-4 space-y-4">
            <div class="text-gray-700">
              <p><strong>Items:</strong></p>
              <ul class="space-y-4">
                <!-- Item 1 -->
                <li class="flex items-center">
                  <img src="https://via.placeholder.com/80" alt="Product 1" class="item-image mr-4"/>
                  <div class="flex-1">
                    <p class="text-gray-900 font-medium">Product 1</p>
                    <p class="text-sm text-gray-500">Quantity: 1</p>
                  </div>
                  <p class="text-gray-900 font-medium">$150.00</p>
                </li>
                <!-- Item 2 -->
                <li class="flex items-center">
                  <img src="https://via.placeholder.com/80" alt="Product 2" class="item-image mr-4"/>
                  <div class="flex-1">
                    <p class="text-gray-900 font-medium">Product 2</p>
                    <p class="text-sm text-gray-500">Quantity: 1</p>
                  </div>
                  <p class="text-gray-900 font-medium">$149.99</p>
                </li>
              </ul>
            </div>
            <div>
              <p class="text-gray-700"><strong>Delivery Address:</strong> Jl. Elang Blok 22 No. 29</p>
              <p class="text-gray-700"><strong>Payment Method:</strong> Cash On Delivery</p>
            </div>
          </div>
        </div>

        <!-- Another Order Example -->
        <div class="order-item px-6 py-5 hover:bg-gray-50 transition" onclick="toggleOrderDetails(this)">
          <!-- Order Summary -->
          <div class="flex justify-between items-center">
            <div>
              <h4 class="text-gray-800 font-semibold">Order #12346</h4>
              <p class="text-sm text-gray-600">Date: Oct 11, 2024</p>
              <p class="text-sm text-gray-600">Total: $49.99</p>
              <p class="text-sm text-yellow-600 font-semibold">Status: Sent to Address</p>
            </div>
            <div class="flex items-center text-indigo-600 font-semibold">
              <span class="mr-2">Details</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </div>
          </div>

          <!-- Order Details (Collapsible Section) -->
          <div class="order-details mt-4 space-y-4">
            <div class="text-gray-700">
              <p><strong>Items:</strong></p>
              <ul class="space-y-4">
                <!-- Item with Picture -->
                <li class="flex items-center">
                  <img src="https://via.placeholder.com/80" alt="Product 3" class="item-image mr-4"/>
                  <div class="flex-1">
                    <p class="text-gray-900 font-medium">Product 3</p>
                    <p class="text-sm text-gray-500">Quantity: 1</p>
                  </div>
                  <p class="text-gray-900 font-medium">$49.99</p>
                </li>
              </ul>
            </div>
            <div>
              <p class="text-gray-700"><strong>Shipping Address:</strong> 456 Market St, Los Angeles, CA 90001</p>
              <p class="text-gray-700"><strong>Payment Method:</strong> PayPal</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination Links -->
    <div class="mt-6 flex justify-center">
      <nav class="inline-flex rounded-md shadow">
        <a href="#" class="px-4 py-2 border border-gray-300 text-sm font-medium text-gray-500 bg-white hover:bg-gray-50">Previous</a>
        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 text-sm font-medium text-gray-700 bg-gray-50">1</a>
        <a href="#" class="px-4 py-2 border border-gray-300 text-sm font-medium text-gray-500 bg-white hover:bg-gray-50">Next</a>
      </nav>
    </div>
  </div>

<script>
  // Function to toggle the order details visibility
  function toggleOrderDetails(orderElement) {
    const details = orderElement.querySelector('.order-details');
    const arrowIcon = orderElement.querySelector('svg');

    // Toggle the open class to expand/collapse the order
    orderElement.classList.toggle('open');
    arrowIcon.classList.toggle('rotate-180');  // Rotate the arrow on click
  }
</script>

</body>
</html>
