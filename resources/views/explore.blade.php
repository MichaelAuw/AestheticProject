<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - Aesthetic</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> 
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-roboto text-gray-700">

<!-- Navbar Start -->
@include('layouts.navbar')
<!-- Navbar End -->

<!-- Hero Section Start -->
<section id="hero" class="relative">
    <img alt="Abstract background with pastel colors" class="w-full h-96 object-cover" src="https://storage.googleapis.com/a1aa/image/GAqmcA8MPrZZFpbPetB7noYQN2t7Zka9P9lOBK7fvgmucEjTA.jpg" width="1920" height="400"/>
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
        <h1 class="text-5xl font-bold">Discover Inspiring Design Ideas</h1>
        <p class="text-lg mt-4">Find The Perfect Design For Your Next Project</p>
        <div class="mt-8">
            <a href="#explore" class="px-6 py-3 bg-indigo-600 text-white rounded-full text-lg font-semibold hover:bg-indigo-700 transform hover:scale-105 transition duration-300">Explore Now</a>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Content Section with white background -->
<div class="bg-white py-10">
    <div class="container mx-auto px-6">
      <!-- Job Count and Filters -->
      <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-gray-800">10,000+ Assets</h2>
          <div class="flex items-center space-x-4">
              <div class="relative">
                  <select class="appearance-none pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500" id="locationFilter">
                      <option value="sort-by-likes">Sort by Likes</option>
                      <option value="most-recent">Most Recent</option>
                      <option value="trending">Trending</option>
                  </select>
                  <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              </div>
              <div class="relative">
                  <select id="filterField" class="appearance-none pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500" onchange="filterArtists()">
                      <option value="poster">Poster Design</option>
                      <option value="logo">Logo Design</option>
                      <option value="3d-art">3D Art</option>
                      <option value="animation">Animation</option>
                      <option value="comission">Commision</option>
                  </select>
                  <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              </div>
          </div>
      </div>

    <!-- Art Gallery Grid Start -->
    <section id="art-gallery" class="py-8">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Card 1 -->
            <div class="card bg-white rounded-lg shadow-md hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
                <img src="/images/Assets/Category/Hero.jpg" alt="Night Kingdom of Fantasy" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Night Kingdom of Fantasy</h3>
                    <p class="text-sm text-gray-500">Mike Hawk</p>
                    <div class="flex justify-between items-center mt-2 text-gray-500 text-sm">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-2 1-2-1V5a2 2 0 012-2h0a2 2 0 012 2v4z" />
                            </svg>
                            <span>500</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                            <span>5.2K</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Example Card 2 -->
            <div class="card bg-white rounded-lg shadow-md hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
                <img src="/images/Assets/Gallery/1.jpg" alt="Sky Fantasy" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Painting The Sky Fantasy</h3>
                    <p class="text-sm text-gray-500">Mike Hawk</p>
                    <div class="flex justify-between items-center mt-2 text-gray-500 text-sm">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-2 1-2-1V5a2 2 0 012-2h0a2 2 0 012 2v4z" />
                            </svg>
                            <span>500</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                            <span>5.2K</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Example Card 3 -->
            <div class="card bg-white rounded-lg shadow-md hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
                <img src="/images/Assets/Gallery/2.jpg" alt="Commission Art" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Commission Art</h3>
                    <p class="text-sm text-gray-500">Jane Doe</p>
                    <div class="flex justify-between items-center mt-2 text-gray-500 text-sm">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-2 1-2-1V5a2 2 0 012-2h0a2 2 0 012 2v4z" />
                            </svg>
                            <span>400</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                            <span>4.5K</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Example Card 4 -->
            <div class="card bg-white rounded-lg shadow-md hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
                <img src="/images/Assets/Gallery/3.jpg" alt="Commission Art" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Commission Art</h3>
                    <p class="text-sm text-gray-500">Jane Doe</p>
                    <div class="flex justify-between items-center mt-2 text-gray-500 text-sm">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9l-2 1-2-1V5a2 2 0 012-2h0a2 2 0 012 2v4z" />
                            </svg>
                            <span>400</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                            <span>4.5K</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>

    <!-- Art Gallery Grid End -->
</div>

<!-- Footer Start -->
@include('layouts.footer')
<!-- Footer End -->

    <script>
        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Typing Effect for Heading
        const typingText = document.getElementById('typing-text');
        const textArray = typingText.textContent.split('');
        typingText.textContent = '';
        let i = 0;
        const typingEffect = setInterval(() => {
            if (i < textArray.length) {
                typingText.textContent += textArray[i];
                i++;
            } else {
                clearInterval(typingEffect);
            }
        }, 100);

        // Carousel Auto-Sliding
        const slides = document.querySelectorAll('#carousel img');
        const totalSlides = slides.length;
        let currentIndex = 0;

        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const carousel = document.getElementById('carousel');

        function updateSlide(newIndex) {
            carousel.style.transform = `translateX(-${newIndex * 100}%)`;
            currentIndex = newIndex;
        }

        prevButton.addEventListener('click', () => {
            const newIndex = currentIndex > 0 ? currentIndex - 1 : totalSlides - 1;
            updateSlide(newIndex);
        });

        nextButton.addEventListener('click', () => {
            const newIndex = currentIndex < totalSlides - 1 ? currentIndex + 1 : 0;
            updateSlide(newIndex);
        });

        let autoSlideInterval = setInterval(() => {
            const newIndex = currentIndex < totalSlides - 1 ? currentIndex + 1 : 0;
            updateSlide(newIndex);
        }, 5000);

        carousel.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
        carousel.addEventListener('mouseout', () => {
            autoSlideInterval = setInterval(() => {
                const newIndex = currentIndex < totalSlides - 1 ? currentIndex + 1 : 0;
                updateSlide(newIndex);
            }, 5000);
        });

        // Scroll Animations
        const scrollElements = document.querySelectorAll('.scroll-animation');
        
        const elementInView = (el, dividend = 1) => {
            const elementTop = el.getBoundingClientRect().top;
            return (
                elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
            );
        };
        
        const displayScrollElement = (element) => {
            element.classList.add('is-visible');
        };
        
        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 1.25)) {
                    displayScrollElement(el);
                }
            });
        };
        
        window.addEventListener('scroll', () => {
            handleScrollAnimation();
        });

        handleScrollAnimation();

        // Filter Gallery by Category
        const categoryFilter = document.getElementById('categoryFilter');
        const cards = document.querySelectorAll('.card');

        categoryFilter.addEventListener('change', function() {
            const selectedCategory = this.value;

            cards.forEach(card => {
                if (selectedCategory === 'all' || card.classList.contains(`category-${selectedCategory}`)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
