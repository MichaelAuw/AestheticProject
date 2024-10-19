<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Checkout</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
        font-family: 'Inter', sans-serif;
    }
  </style>

</head>
<body class="bg-gray-100 font-sans antialiased">
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                <form action="#" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                  <ol class="items-center flex w-full max-w-2xl text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">
                        <li class="relative flex items-center text-indigo-600 after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                                <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] sm:after:hidden">
                                  <svg class="mr-2 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                  </svg>
                                  <span class="font-semibold text-gray-900">Cart</span>
                                </span>
                        </li>
              
                        <li class="relative flex items-center text-indigo-600 after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                                <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] sm:after:hidden">
                                  <svg class="mr-2 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                  </svg>
                                  <span class="font-semibold text-gray-900">Checkout</span>
                                </span>
                        </li>
              
                        <li class="flex items-center text-gray-500">
                                <svg class="mr-2 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="font-semibold">Order Summary</span>
                        </li>
                  </ol>
  <!-- Main Container -->
  <div class="max-w-7xl mx-auto bg-white p-8 rounded-lg shadow-lg space-y-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-4">🛒 Checkout</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      
      <div class="lg:col-span-2 space-y-8">
        
        <!-- Delivery Address Section -->
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
              <h2 class="text-2xl font-semibold mb-4 text-gray-800">🚚 Alamat Pengiriman</h2>
              
              <!-- Address Info and Button -->
              <div class="flex justify-between items-center">
                <p class="text-gray-600">Alamat Pengiriman:</p>
                <button class="text-indigo-600 hover:text-indigo-800 transition font-semibold" onclick="openSavedAddressModal()">Ubah</button>
              </div>

        <!-- Formatted Address Section -->
        <div class="mt-2">
                <p class="font-bold text-lg text-gray-900">
                  rival <span class="font-semibold">+62 83142822199</span>
                </p>
                <p class="text-gray-700 mt-1">
                  Jalan Gunung Anyar Jaya III B No.8, Gunung Anyar, KOTA SURABAYA - GUNUNGANYAR, JAWA TIMUR, ID 60294
                </p>
              </div>
            </div>

        <!-- Saved Address Modal -->
        <div id="saved-address-modal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center">
          <div class="bg-white p-6 rounded-lg shadow-lg w-96 transform scale-95 transition-transform">
            <h3 class="text-xl font-bold mb-4 text-gray-800">📋 Alamat Saya</h3>
            <ul id="saved-address-list" class="mb-4 space-y-2">
              <li data-index="0">
                <label class="block text-gray-700">
                  <input type="radio" name="saved_address" value="Jl. Sudirman, Jakarta" class="mr-2" checked>
                  Jl. Sudirman, Jakarta
                </label>
                <button class="text-indigo-600 hover:text-indigo-800 transition font-semibold mt-2" onclick="editAddress(0)">Edit</button>
              </li>
              <li data-index="1">
                <label class="block text-gray-700">
                  <input type="radio" name="saved_address" value="Jl. Thamrin, Jakarta" class="mr-2">
                  Jl. Thamrin, Jakarta
                </label>
                <button class="text-indigo-600 hover:text-indigo-800 transition font-semibold mt-2" onclick="editAddress(1)">Edit</button>
              </li>
            </ul>
            <button class="text-indigo-600 hover:text-indigo-800 font-semibold transition" onclick="openNewAddressModal()">➕ Tambah Alamat Baru</button>
            <div class="flex justify-end mt-6 space-x-4">
              <button class="bg-gray-200 hover:bg-gray-300 text-gray-600 font-semibold px-4 py-2 rounded" onclick="closeModal()">Batal</button>
              <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded" onclick="confirmAddress()">Konfirmasi</button>
            </div>
          </div>
        </div>

        <!-- New Address Modal -->
        <div id="new-address-modal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center">
          <div class="bg-white p-6 rounded-lg shadow-lg w-[600px] transform scale-95 transition-transform">
            <h3 id="address-modal-title" class="text-xl font-bold mb-4 text-gray-800">📍 Alamat Baru</h3>
            <!-- Nama Lengkap -->
            <div class="mb-4">
              <label for="full-name" class="block text-gray-700 mb-2">Nama Lengkap</label>
              <input id="full-name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-indigo-200 transition" placeholder="Nama Lengkap" />
            </div>
            <!-- Nomor Telepon -->
            <div class="mb-4">
              <label for="phone-number" class="block text-gray-700 mb-2">Nomor Telepon</label>
              <input id="phone-number" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-indigo-200 transition" placeholder="08xxxxxx" />
            </div>
            <!-- Provinsi, Kota, Kecamatan, Kode Pos -->
            <div class="mb-4">
              <label class="block text-gray-700 mb-2">Provinsi, Kota, Kecamatan, Kode Pos</label>
              <select id="province" class="w-full p-3 border border-gray-300 rounded mb-2 focus:outline-none focus:ring focus:ring-indigo-200 transition" onchange="updateCities()">
                <option>Provinsi</option>
                <option>BALI</option>
                <option>BANTEN</option>
                <option>DI YOGYAKARTA</option>
              </select>
              <select id="city" class="w-full p-3 border border-gray-300 rounded mb-2 focus:outline-none focus:ring focus:ring-indigo-200 transition" onchange="updateKecamatan()">
                <option>Kota</option>
              </select>
              <select id="kecamatan" class="w-full p-3 border border-gray-300 rounded mb-2 focus:outline-none focus:ring focus:ring-indigo-200 transition">
                <option>Kecamatan</option>
        </select>
        <input id="kode-pos" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-indigo-200 transition" placeholder="Kode Pos" />
      </div>
      <!-- Nama Jalan, Gedung, No Rumah -->
      <div class="mb-4">
        <label for="address-details" class="block text-gray-700 mb-2">Nama Jalan, Gedung, No Rumah</label>
        <textarea id="address-details" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-indigo-200 transition" placeholder="Nama Jalan, Gedung, No Rumah"></textarea>
      </div>
      <!-- Save Address -->
      <div class="mb-4">
        <input type="checkbox" id="save_address" class="mr-2">
        <label for="save_address" class="text-gray-700">Simpan Alamat</label>
      </div>
      <!-- Form Controls -->
      <div class="flex justify-end space-x-4">
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-600 font-semibold px-4 py-2 rounded" onclick="closeModal()">Batal</button>
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded" onclick="saveNewAddress()">Simpan</button>
      </div>
    </div>
  </div>

  <!-- Store Pickup Option -->
  <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">🏬 Store Pickup</h2>
    <div class="flex items-center">
      <input type="radio" id="delivery_address" name="delivery_address" class="mr-2" checked>
      <label for="delivery_address" class="text-gray-700">Kirim ke alamat yang sama</label>
    </div>
    <div class="flex items-center mt-2">
      <input type="radio" id="store_pickup" name="delivery_address" class="mr-2">
      <label for="store_pickup" class="text-gray-700">Ambil di Toko</label>
    </div>
    <p class="text-gray-500 text-sm mt-2">(Pilih toko dari mana Anda ingin mengambil produk)</p>
    <div class="mt-2 hidden" id="seller_info">
      <p class="text-gray-700">Alamat Toko: Jl. Thamrin, Jakarta</p>
      <p class="text-gray-700">Telepon: 0812-3456-7890</p>
    </div>
  </div>

  <!-- Payment Method Section -->
  <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Metode Pembayaran</h2>
        <div class="flex space-x-4">
          <button class="px-4 py-2 bg-gray-200 border-2 border-transparent rounded-md" id="cod" onclick="selectPayment('COD')">COD</button>
          <button class="px-4 py-2 bg-gray-200 border-2 border-transparent rounded-md" id="transfer-bank" onclick="selectPayment('Transfer Bank')">Transfer Bank</button>
          <button class="px-4 py-2 bg-gray-200 border-2 border-transparent rounded-md" id="qris" onclick="selectPayment('QRIS')">QRIS</button>
        </div>
      </div>

      <!-- Bank List Section (only appears if Transfer Bank is selected) -->
      <div id="bank-list-section" class="bg-gray-50 p-6 rounded-lg shadow-sm hidden">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Pilih Bank</h2>
        <ul class="space-y-4">
          <li class="flex items-center">
            <input type="radio" name="bank" value="SeaBank" class="mr-2">
            <span class="font-medium text-gray-700">SeaBank</span>
          </li>
          <li class="flex items-center">
            <input type="radio" name="bank" value="Bank BCA" class="mr-2">
            <span class="font-medium text-gray-700">Bank BCA</span>
          </li>
          <li class="flex items-center">
            <input type="radio" name="bank" value="Bank Mandiri" class="mr-2">
            <span class="font-medium text-gray-700">Bank Mandiri</span>
          </li>
          <li class="flex items-center">
            <input type="radio" name="bank" value="Bank BNI" class="mr-2">
            <span class="font-medium text-gray-700">Bank BNI</span>
          </li>
          <li class="flex items-center">
            <input type="radio" name="bank" value="Bank BRI" class="mr-2">
            <span class="font-medium text-gray-700">Bank BRI</span>
          </li>
        </ul>
      </div>

</div>

<!-- Order Summary Section -->
<div class="space-y-6">
  <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">📦 Ringkasan Pesanan</h2>
    <div class="space-y-4">
      <!-- Item 1 -->
      <div class="flex items-center">
        <img alt="PC system All in One APPLE iMac (2023)" class="w-16 h-16 rounded-lg shadow" src="https://placehold.co/60x60"/>
        <div class="ml-4">
          <p class="text-gray-700 font-medium">PC system All in One APPLE iMac (2023)</p>
          <p class="text-gray-500 text-sm">x1</p>
        </div>
        <p class="ml-auto text-gray-700 font-semibold">$1,499</p>
      </div>

      <!-- Item 2 -->
      <div class="flex items-center">
        <img alt="Apple Watch Series 8" class="w-16 h-16 rounded-lg shadow" src="https://placehold.co/60x60"/>
        <div class="ml-4">
          <p class="text-gray-700 font-medium">Apple Watch Series 8</p>
          <p class="text-gray-500 text-sm">x2</p>
        </div>
        <p class="ml-auto text-gray-700 font-semibold">$598</p>
      </div>
    </div>
  </div>

  <!-- Total Summary -->
  <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
    <h2 class="text-xl font-semibold mb-4 text-gray-800">💳 Total Pesanan</h2>
    <div class="flex justify-between text-lg font-medium mb-2">
      <p>Subtotal</p>
      <p>$2,896</p>
    </div>
    <div class="flex justify-between text-lg font-medium mb-2">
      <p>Ongkir</p>
      <p>$20</p>
    </div>
    <div class="flex justify-between text-xl font-semibold">
      <p>Total</p>
      <p>$2,916</p>
    </div>
    <button onclick="window.location.href='{{ route('order-summary') }}'" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold mt-4 hover:bg-indigo-700 transition">Lanjutkan ke Pembayaran</button>
  </div>
</div>

</div>
</div>

<!-- Scripts -->
<script>
const provinceData = {
  'BALI': ['Denpasar', 'Badung', 'Tabanan'],
  'BANTEN': ['Tangerang', 'Serang', 'Cilegon'],
  'DI YOGYAKARTA': ['Yogyakarta', 'Sleman', 'Bantul'],
  'DKI JAKARTA': ['Jakarta Selatan', 'Jakarta Timur', 'Jakarta Barat'],
  'JAWA BARAT': ['Bandung', 'Bogor', 'Bekasi'],
  'JAWA TENGAH': ['Semarang', 'Surakarta', 'Magelang'],
  'JAWA TIMUR': ['Surabaya', 'Malang', 'Kediri'],
  'SUMATERA UTARA': ['Medan', 'Binjai', 'Pematangsiantar'],
  'SULAWESI SELATAN': ['Makassar', 'Parepare', 'Gowa']
};

const cityData = {
  'Denpasar': ['Denpasar Selatan', 'Denpasar Barat'],
  'Badung': ['Kuta', 'Abiansemal'],
  'Tabanan': ['Tabanan', 'Kediri'],
  'Tangerang': ['Cipondoh', 'Karawaci'],
  'Serang': ['Serang Barat', 'Serang Timur'],
  'Cilegon': ['Pulomerak', 'Cibeber'],
  'Yogyakarta': ['Danurejan', 'Gedong Tengen'],
  'Sleman': ['Depok', 'Godean'],
  'Bantul': ['Sewon', 'Kasihan'],
  'Jakarta Selatan': ['Kebayoran Baru', 'Pasar Minggu'],
  'Jakarta Timur': ['Matraman', 'Duren Sawit'],
  'Jakarta Barat': ['Grogol Petamburan', 'Palmerah'],
  'Bandung': ['Cicendo', 'Coblong'],
  'Bogor': ['Bogor Timur', 'Bogor Barat'],
  'Bekasi': ['Bekasi Timur', 'Bekasi Barat'],
  'Semarang': ['Semarang Tengah', 'Semarang Utara'],
  'Surakarta': ['Banjarsari', 'Jebres'],
  'Magelang': ['Magelang Utara', 'Magelang Selatan'],
  'Surabaya': ['Sukolilo', 'Tegalsari'],
  'Malang': ['Klojen', 'Sukun'],
  'Kediri': ['Mojoroto', 'Kota Kediri'],
  'Medan': ['Medan Selayang', 'Medan Tembung'],
  'Binjai': ['Binjai Timur', 'Binjai Barat'],
  'Pematangsiantar': ['Siantar Barat', 'Siantar Timur'],
  'Makassar': ['Panakkukang', 'Tamalanrea'],
  'Parepare': ['Ujung', 'Soreang'],
  'Gowa': ['Somba Opu', 'Tombolo Pao']
};

function updateCities() {
const province = document.getElementById('province').value;
const citySelect = document.getElementById('city');
const kecamatanSelect = document.getElementById('kecamatan');

citySelect.innerHTML = '<option>Kota</option>';
kecamatanSelect.innerHTML = '<option>Kecamatan</option>';

if (province in provinceData) {
  provinceData[province].forEach(city => {
    const option = document.createElement('option');
    option.text = city;
    citySelect.add(option);
  });
}
}

function updateKecamatan() {
const city = document.getElementById('city').value;
const kecamatanSelect = document.getElementById('kecamatan');

kecamatanSelect.innerHTML = '<option>Kecamatan</option>';

if (city in cityData) {
  cityData[city].forEach(kecamatan => {
    const option = document.createElement('option');
    option.text = kecamatan;
    kecamatanSelect.add(option);
  });
}
}

function selectPayment(method) {
      // Reset all buttons
      document.getElementById('cod').classList.remove('border-indigo-600');
      document.getElementById('transfer-bank').classList.remove('border-indigo-600');
      document.getElementById('qris').classList.remove('border-indigo-600');

      // Hide bank list section initially
      document.getElementById('bank-list-section').classList.add('hidden');

      // Highlight selected payment button
      if (method === 'COD') {
        document.getElementById('cod').classList.add('border-indigo-600');
      } else if (method === 'Transfer Bank') {
        document.getElementById('transfer-bank').classList.add('border-indigo-600');
        document.getElementById('bank-list-section').classList.remove('hidden');
      } else if (method === 'QRIS') {
        document.getElementById('qris').classList.add('border-indigo-600');
      }
}

function openSavedAddressModal() {
document.getElementById('saved-address-modal').classList.remove('hidden');
document.getElementById('saved-address-modal').classList.add('scale-100');
}

function openNewAddressModal() {
document.getElementById('saved-address-modal').classList.add('hidden');
document.getElementById('new-address-modal').classList.remove('hidden');
}

function closeModal() {
document.getElementById('saved-address-modal').classList.add('hidden');
document.getElementById('new-address-modal').classList.add('hidden');
}

function confirmAddress() {
const selectedAddress = document.querySelector('input[name="saved_address"]:checked').value;
document.getElementById('selected-address').innerText = selectedAddress;
closeModal();
}

function saveNewAddress() {
const fullName = document.getElementById('full-name').value;
const phoneNumber = document.getElementById('phone-number').value;
const province = document.getElementById('province').value;
const city = document.getElementById('city').value;
const kecamatan = document.getElementById('kecamatan').value;
const addressDetails = document.getElementById('address-details').value;
const newAddress = `${fullName}, ${phoneNumber}, ${province}, ${city}, ${kecamatan}, ${addressDetails}`;

if (document.getElementById('save_address').checked) {
        const savedAddressList = document.getElementById('saved-address-list');
        const newAddressIndex = savedAddressList.children.length;
        const newAddressHTML = `
          <li data-index="${newAddressIndex}">
            <label class="block text-gray-700">
              <input type="radio" name="saved_address" value="${newAddress}" class="mr-2">
              ${newAddress}
            </label>
            <button class="text-indigo-600 hover:text-indigo-800 transition font-semibold mt-2" onclick="editAddress(${newAddressIndex})">Edit</button>
            </li>
            `;
            savedAddressList.insertAdjacentHTML('beforeend', newAddressHTML);
      }
      
      document.getElementById('selected-address').innerText = newAddress;
      closeModal();
    }

    function editAddress(index) {
      const addressItem = document.querySelector(`li[data-index="${index}"] label`).innerText.split(', ');
      document.getElementById('full-name').value = addressItem[0];
      document.getElementById('phone-number').value = addressItem[1];
      document.getElementById('province').value = addressItem[2];
      updateCities();
      document.getElementById('city').value = addressItem[3];
      updateKecamatan();
      document.getElementById('kecamatan').value = addressItem[4];
      document.getElementById('address-details').value = addressItem[5];
      document.getElementById('address-modal-title').innerText = 'Edit Alamat';
      
      openNewAddressModal();
    }
  </script>

</body>
</html>