<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Detail</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans leading-relaxed text-gray-800">
  <div class="bg-gray-50 min-h-screen py-10">
    <div class="container mx-auto px-6 lg:px-10 space-y-10">
      
      <!-- Blog Header Section -->
      <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden transition hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1728921976673-a9902271c2c7?q=80&w=3067&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Blog Header Image" class="w-full h-[500px] object-cover transition-transform duration-500 hover:scale-105">
          <div class="absolute bottom-0 bg-gradient-to-t from-black via-transparent w-full p-8 text-white">
            <h1 class="text-5xl font-bold mb-2">How to Create Stunning Digital Art</h1>
            <div class="mt-2 text-lg flex items-center space-x-3">
              <span>By <span class="font-semibold">Aesthetic</span></span>
              <span>&bull;</span>
              <span>April 5, 2025</span>
            </div>
          </div>
        </div>
        
        <!-- Blog Content -->
        <div class="p-10 md:p-14 lg:p-16 bg-gray-50">
          <div class="prose prose-xl max-w-none leading-relaxed text-gray-700">
            <p>Digital art is an exciting medium that allows artists to experiment with colors, textures, and compositions that would be challenging or impossible with traditional art. From fantasy landscapes to portraits, digital art lets artists push boundaries like never before.</p>
            
            <h2 class="text-3xl font-semibold text-gray-800 mt-10 mb-4">Getting Started with Digital Art</h2>
            <img src="https://images.unsplash.com/photo-1541233349642-6e425fe6190e?q=80&w=2400&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Digital Art Tools" class="w-full h-80 rounded-lg object-cover my-6 shadow-lg transition-transform duration-500 hover:scale-105">
            <p>For beginners, start by choosing the right software and tools. Programs like Adobe Photoshop, Procreate, and Clip Studio Paint offer powerful features that let you create professional-level artwork from the comfort of your home. These programs come with customizable brushes, layers, and color adjustment tools, which make them ideal for all kinds of artwork.</p>
            
            <h2 class="text-3xl font-semibold text-gray-800 mt-10 mb-4">Exploring Different Art Styles</h2>
            <p>Digital art allows you to easily switch between art styles, from realism to abstract, and even 3D rendering. Experimenting with styles is crucial as it helps you discover what resonates most with your creative vision. Try everything from pixel art to hyperrealism and find what works best for you.</p>

            <blockquote class="border-l-4 border-indigo-600 pl-4 my-8 text-gray-700 italic">
              “Art is not what you see, but what you make others see.” – Edgar Degas
            </blockquote>

            <h2 class="text-3xl font-semibold text-gray-800 mt-10 mb-4">Tools to Enhance Your Workflow</h2>
            <p>Aside from art software, hardware tools like graphic tablets and styluses are essential for digital artists. Tablets like the Wacom Intuos or iPad Pro with the Apple Pencil provide precise control over brush strokes and enhance the creative experience. These tools are especially helpful for artists aiming to achieve intricate details.</p>
          </div>
          
          <!-- Back to Blog Link -->
          <a href="{{ route('blog') }}" class="text-indigo-600 hover:text-indigo-700 font-medium mt-10 inline-block">← Back to Blog</a>
        </div>
      </div>

      <!-- Other Articles Section -->
      <div class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
          <div class="flex justify-between items-center mb-8">
            <h2 class="text-4xl font-bold text-gray-800">Our Latest Blogs</h2>
            <a href="all-blogs.html" class="flex items-center px-6 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
              View All <span class="ml-2">→</span>
            </a>
          </div>
          <p class="text-center text-gray-500 mb-12">A daily dose of knowledge will keep building you to your next stage</p>
          
          <div class="grid gap-10 md:grid-cols-2">
            <!-- Article Card 1 -->
            <a href="blog-detail-portfolio.html" class="flex group bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
              <img src="https://plus.unsplash.com/premium_photo-1664197369883-a16e8ca7e503?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="w-1/3 h-48 object-cover transition-transform duration-500 group-hover:scale-105">
              <div class="p-6 w-2/3">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">10 Tips for Capturing Stunning Landscape Photos</h3>
                <p class="text-gray-600 text-sm mb-3">Landscape photography is one of the most popular genres among photographers.</p>
                <p class="text-indigo-600 text-sm font-medium">Read in 2 minutes</p>
              </div>
            </a>
            <!-- Article Card 2 -->
            <a href="blog-detail-portfolio.html" class="flex group bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1613271913923-f6aa924cf9d6?q=80&w=3024&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="w-1/3 h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="p-6 w-2/3">
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Exploring the Basics of Color Theory</h3>
                  <p class="text-gray-600 text-sm mb-3">A beginner-friendly guide to understanding and applying color theory in your art for impactful compositions.</p>
                  <p class="text-indigo-600 text-sm font-medium">Read in 2 minutes</p>
                </div>
              </a>
            <!-- Article Card 3 -->
            <a href="blog-detail-portfolio.html" class="flex group bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
              <img src="https://media.istockphoto.com/id/1143734743/photo/hand-for-drawing-with-pen.webp?a=1&s=612x612&w=0&k=20&c=8YEmYHMO8SnRj5ocDB3xbba5IX3Kt5rTb03WLQQ1Fak=" alt="Portfolio Image" class="w-1/3 h-48 object-cover transition-transform duration-500 group-hover:scale-105">
              <div class="p-6 w-2/3">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">The Essentials of Composition</h3>
                <p class="text-gray-600 text-sm mb-3">Learn the basics of composition and how it can elevate your artwork by guiding the viewer's eye.</p>
                <p class="text-indigo-600 text-sm font-medium">Read in 3 minutes</p>
              </div>
            </a>
            <!-- Article Card 4 -->
            <a href="blog-detail-portfolio.html" class="flex group bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <img src="https://plus.unsplash.com/premium_photo-1682542226177-b22eb1ca7fcc?q=80&w=2915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="w-1/3 h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="p-6 w-2/3">
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Creating Depth with Light and Shadow</h3>
                  <p class="text-gray-600 text-sm mb-3">Tips and techniques for using light and shadow to add dimension and realism to your artwork.</p>
                  <p class="text-indigo-600 text-sm font-medium">Read in 2 minutes</p>
                </div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-indigo-600 border-t border-slate-50 mt-10">
        <div class="container mx-auto py-8 px-6 lg:px-8 text-center">
          
          <!-- Navigation Links -->
          <div class="flex justify-center space-x-8 mb-6 text-white">
            <a href="#" class="hover:text-yellow-300 transition">About</a>
            <a href="#" class="hover:text-yellow-300 transition">Blog</a>
            <a href="#" class="hover:text-yellow-300 transition">Jobs</a>
            <a href="#" class="hover:text-yellow-300 transition">Press</a>
            <a href="#" class="hover:text-yellow-300 transition">Accessibility</a>
            <a href="#" class="hover:text-yellow-300 transition">Partners</a>
          </div>
      
          <!-- Social Media Icons -->
          <div class="flex justify-center space-x-6 text-yellow-300 mb-4">
            <a href="#" class="hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-twitter"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-github"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-youtube"></i></a>
          </div>
      
          <!-- Copyright Text -->
          <p class="text-white text-sm">&copy; 2024 Aesthetic, Inc. All rights reserved.</p>
        </div>
      </footer>
</body>

</html>
