<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arist Profile</title>
</head>
<body>
<div class="container mx-auto px-4 py-6">
            <div class="flex">
                <!-- Sidebar: Profile Information -->
                <div class="w-1/4">
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="text-center">
                            <img src="{{ asset('images/Assets/About me/sam.jpg') }}" alt="Profile picture" class="w-24 h-24 rounded-full mx-auto object-cover">
                            <h2 class="text-xl font-bold mt-4">Something4U</h2>
                            <p class="text-gray-600">Freelance Illustrator</p>
                            <p class="text-gray-600">Fantasy, Cyberpunk, Retro Illustrator</p>
                            <p class="text-gray-600"><i class="fas fa-map-marker-alt"></i> Singapore</p>

                            <button class="bg-green-500 text-white px-4 py-2 rounded-full w-full mt-4">
                                <i class="fas fa-user-plus mr-2"></i> Follow
                            </button>
                            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full w-full mt-1">
                                <i class="fas fa-envelope mr-2"></i> Message
                            </button>
                        </div>

                        <div class="mt-4 flex justify-center items-center">
                            <button class="bg-white border border-indigo-500 rounded-lg p-2 px-4 shadow-md">
                            <h1 class="text-sm font-semibold text-center">Hire Something4U</h1>
                            <div class="flex items-center mt-1">
                                <i class="fas fa-clipboard-list text-indigo-500 mr-2"></i>
                                <div>
                                    <p class="text-sm font-small">Freelance/Project</p>
                                    <p class="text-gray-500 text-xs">Available</p>
                                </div>
                            </div>
                        </div>
                            </button>

                        <div class="mt-4 space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Project Views</span>
                                <span class="text-gray-800">225,210</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Likes</span>
                                <span class="text-gray-800">149,518</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Followers</span>
                                <span class="text-gray-800">85,518</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Following</span>
                                <span class="text-gray-800">1,490</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Artist Overall Rating</span>
                                <span class="text-gray-800">4.9</span>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4 space-x-4">
                            <button class="text-gray-600"><i class="fab fa-instagram"></i></button>
                            <button class="text-gray-600"><i class="fab fa-pinterest"></i></button>
                            <button class="text-gray-600"><i class="fab fa-twitter"></i></button>
                            <button class="text-gray-600"><i class="fab fa-linkedin"></i></button>
                        </div>

                </div>

                    <!-- Posts Section -->
                    <div class="bg-white p-4 rounded-lg shadow-lg mt-4">
                        <h3 class="text-lg font-bold">Posts</h3>
                        <div class="mt-4">
                            <div class="flex items-start">
                                <img src="{{ asset('images/Assets/Community/Media/Photos/media 5.jpg') }}" alt="Post profile picture" class="w-12 h-12 rounded-full object-cover">
                                <div class="ml-4">
                                    <h4 class="font-bold">Something4U</h4>
                                    <p class="text-gray-600">I'll hibernate for a while :)</p>
                                    <img src="{{ asset('images/Assets/Community/Media/Photos/media 6.jpg') }}" alt="Post image" class="mt-2 rounded-lg object-cover w-full h-32">
                                    <div class="flex justify-between items-center mt-2">
                                        <div class="flex space-x-10">
                                            <!-- like button -->
                                            <button class="text-gray-600 flex flex-col items-center">
                                                <img src="/images/heart.svg" alt="Shopping Cart" class="w-5 h-5">
                                                <span class="text-xs mt-1">Like</span>
                                            </button>
                                            <!-- comment button -->
                                            <button class="text-gray-600 flex flex-col items-center">
                                                <img src="/images/comment.svg" alt="Shopping Cart" class="w-5 h-5">
                                                <span class="text-xs mt-1">Comment</span>
                                            </button>
                                            <!-- share button -->
                                            <button class="text-gray-600 flex flex-col items-center">
                                                <img src="/images/share.svg" alt="Shopping Cart" class="w-5 h-5">
                                                <span class="text-xs mt-1">Share</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>
</html>