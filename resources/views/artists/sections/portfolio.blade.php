<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .masonry-container {
            max-height: 600px; /* Sets a max height for the scrollable area */
            overflow-y: auto; /* Enables vertical scrolling */
            padding-right: 1rem; /* Adds padding to avoid content cutoff on the right */
        }

        .masonry {
            column-count: 3;
            column-gap: 1rem;
        }

        .masonry-item {
            display: inline-block;
            width: 100%;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 0.5rem;
            font-size: 0.875rem;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
        }

        .tag {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
            padding: 0.2rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
        }
        .scrollable-form {
            max-height: 400px;
            overflow-y: auto;
        }
        .success-modal {
            animation: fadeIn 0.5s ease-in-out, fadeOut 0.5s ease-in-out 2.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: scale(1);
            }
            to {
                opacity: 0;
                transform: scale(0.9);
            }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<div class="container mx-auto p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold">Portfolio</h1>
        @if(Auth::check())
            @if (Auth::user()->USER_ID == $artistUserId )
                <button onclick="openModal()" class="flex items-center px-6 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
                Add New 
                </button>
            @endif
        @endif
    </div>

    <!-- Masonry Grid Layout Container with Scrollable Area -->
    <div class="masonry-container">
        <div class="masonry">
            <!-- Example Artwork Items -->
            @foreach($artistPortfolio as $artistPortfolio => $listArtistPortfolio)
            <div class="masonry-item group relative">
                <img src="{{ asset($listArtistPortfolio->IMAGE_PATH) }}" 
                     alt="{{ $listArtistPortfolio->ART_TITLE }}" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div id="addPortfolioModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl mt-16">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Add New Portfolio</h2>
        </div>
         <div class="max-h-[60vh] overflow-y-auto pr-6"> <!-- Added padding-right to fix scrollbar issue -->
            <form class="space-y-6" method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data" id="addPortfolioForm">
                @csrf
                <!-- Title Field -->
                <div>
                    <label for="portfolioTitle" class="block text-lg font-semibold text-gray-700">Title</label>
                    <input type="text" id="portfolioTitle" name="portfolioTitle" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    <span id="portfolioTitleError" class="text-red-600"></span>
                </div>

                <!-- Description Field -->
                <div>
                    <label for="portfolioDescription" class="block text-lg font-semibold text-gray-700">Description</label>
                    <textarea id="portfolioDescription" name="portfolioDescription" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></textarea>
                    <span id="portfolioDescriptionError" class="text-red-600"></span>
                </div>

                <!-- Category Field -->
                <div>
                    <label class="block text-lg font-semibold text-gray-700">Category</label>
                    <div class="flex items-center">
                        <input type="text" id="selectedCategories" readonly class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="Select categories (max 6)">
                        <button type="button" onclick="toggleCategorySelection()" class="ml-3 text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <!-- Category Selection Modal -->
                <div id="categorySelection" class="hidden mt-4">
                    <h3 class="text-gray-700 font-semibold mb-2">Select Categories</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach($artCategoryMaster as $artCategoryMaster => $listArtCategoryMaster)
                        <label><input type="checkbox" class="category-checkbox" name="category_art[]" value="{{ $listArtCategoryMaster->ART_CATEGORY_MASTER_ID }}"> {{ $listArtCategoryMaster->DESCR }}</label>
                        @endforeach
                    </div>
                </div>
                <span id="portfolioCategoryError" class="text-red-600"></span>

                <!-- Image Upload Options -->
                <div>
                    <label class="block text-lg font-semibold text-gray-700 mb-2">Select Image Upload Option</label>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="linkOption" name="imageOption" value="link" class="mr-3" onclick="toggleImageUploadOption('link')" checked>
                        <label for="linkOption" class="text-gray-700">Upload by Link</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="fileOption" name="imageOption" value="file" class="mr-3" onclick="toggleImageUploadOption('file')">
                        <label for="fileOption" class="text-gray-700">Upload from File</label>
                    </div>
                </div>

                <!-- Image Upload Fields -->
                <div id="linkField" class="mb-4">
                    <label for="portfolioImageLink" class="block text-lg font-semibold text-gray-700">Image URL</label>
                    <input type="text" id="portfolioImageLink" name="portfolioImageLink" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    <span id="portfolioImageLinkError" class="text-red-600"></span>
                </div>
                <div id="fileField" class="mb-4 hidden">
                    <label for="portfolioImageUpload" class="block text-lg font-semibold text-gray-700">Upload Image</label>
                    <input type="file" id="portfolioImageUpload" name="portfolioImageUpload" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    <span id="portfolioImageUploadError" class="text-red-600"></span>
                </div>
            </div>
        </form>
            <!-- Modal Footer -->
            <div class="mt-6 flex justify-end space-x-4">
                <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-400 transition duration-200">Cancel</button>
                <button type="submit" onclick="submitPortfolio(event)" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 shadow-md transition duration-300 transform hover:scale-105">Add Portfolio</button>
            </div>
    </div>
</div>

<!-- Success Modal -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center success-modal">
        <i class="fas fa-check-circle text-indigo-600 text-5xl mb-4"></i>
        <h2 class="text-2xl font-bold text-gray-800">Portfolio Added!</h2>
        <p class="text-gray-600 mt-2">Your portfolio has been successfully added.</p>
    </div>
</div>


<script>
    function openModal() {
        document.getElementById('addPortfolioModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addPortfolioModal').classList.add('hidden'); // Hide the modal
        clearErrorsAndForm(); // Clear errors and reset the form
    }

    function clearErrorsAndForm() {
        // Clear error messages
        document.getElementById('portfolioTitleError').textContent = '';
        document.getElementById('portfolioDescriptionError').textContent = '';
        document.getElementById('portfolioCategoryError').textContent = '';
        document.getElementById('portfolioImageLinkError').textContent = '';
        document.getElementById('portfolioImageUploadError').textContent = '';

        // Reset the form
        document.getElementById('addPortfolioForm').reset();
    }

    function toggleCategorySelection() {
        const categorySelection = document.getElementById('categorySelection');
        categorySelection.classList.toggle('hidden');
    }

    function toggleImageUploadOption(option) {
        document.getElementById('linkField').classList.toggle('hidden', option !== 'link');
        document.getElementById('fileField').classList.toggle('hidden', option !== 'file');
    }

    function submitPortfolio(event) {
        event.preventDefault(); // Prevent traditional form submission

        // Clear previous error messages
        document.getElementById('portfolioTitleError').textContent = '';
        document.getElementById('portfolioDescriptionError').textContent = '';
        document.getElementById('portfolioCategoryError').textContent = '';
        document.getElementById('portfolioImageLinkError').textContent = '';
        document.getElementById('portfolioImageUploadError').textContent = '';

        // Get the form and form data
        const form = document.getElementById('addPortfolioForm');
        const formData = new FormData(form);

        // Get the selected image option
        const imageOption = formData.get('imageOption'); // "file" or "link"

        // Send AJAX request
        fetch('{{ route('portfolio.store') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: formData,
        })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => {
                        throw err; // Throw JSON error
                    });
                }
                return response.json();
            })
            .then(data => {
                // Success handling
                if (data.success) {
                    location.reload(); // Reload the page to reflect changes
                }
            })
            .catch(error => {
                console.error('Error:', error);
                if (error.errors) {
                    // Display validation errors dynamically
                    if (error.errors.portfolioTitle) {
                        document.getElementById('portfolioTitleError').textContent = error.errors.portfolioTitle[0];
                    }
                    if (error.errors.portfolioDescription) {
                        document.getElementById('portfolioDescriptionError').textContent = error.errors.portfolioDescription[0];
                    }
                    if (error.errors.category_art) {
                        document.getElementById('portfolioCategoryError').textContent = error.errors.category_art[0];
                    }
                    if (error.errors.portfolioImageUpload && imageOption === 'file') {
                        document.getElementById('portfolioImageUploadError').textContent = error.errors.portfolioImageUpload[0];
                    }
                    if (error.errors.portfolioImageLink && imageOption === 'link') {
                        document.getElementById('portfolioImageLinkError').textContent = error.errors.portfolioImageLink[0];
                    }
                } else {
                    alert('An unexpected error occurred. Please try again later.');
                }
            });
    }

    // Update the selected categories display
    document.querySelectorAll('.category-checkbox').forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            const selectedCategories = Array.from(document.querySelectorAll('.category-checkbox:checked')).map(
                (checkbox) => checkbox.nextSibling.textContent.trim()
            );
            if (selectedCategories.length > 6) {
                checkbox.checked = false;
                alert('You can select up to 6 categories.');
            } else {
                document.getElementById('selectedCategories').value = selectedCategories.join(', ');
            }
        });
    });
</script>

</body>
</html>
