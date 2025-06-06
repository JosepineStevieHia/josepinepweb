<!-- Featured Card -->
<div class="max-w-4xl mx-auto mb-12">
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ $imgsrc }}" alt="Featured Dish">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $desc }}</p>
                    <button class="self-start mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">Order Now</button>
                </div>
            </a>
        </div>