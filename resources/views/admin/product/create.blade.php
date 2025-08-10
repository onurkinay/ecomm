<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>


    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- component -->
                <!--
  UI Design Prototype
  Link : https://dribbble.com/shots/10452538-React-UI-Components
-->
                <div class="min-h-screen bg-gray-100 py-6 flex flex-col  sm:py-1">
                    <div class="relative py-3 w-full">
                        <div class="relative  bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                            <div class="w-full mx-auto">
                                <div class="flex items-center space-x-5">
                                    <div
                                        class="  bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                                        i</div>
                                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                        <h2 class="leading-relaxed">Create a Product</h2>
                                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor
                                            sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="divide-y divide-gray-200">
                                    <div
                                        class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Product Name</label>
                                            <input type="text" name="name"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Product name">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Image</label>
                                            <input type="file" name="image"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Images</label>
                                            <input type="file" name="images"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Price</label>
                                            <input type="text" name="price"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Colors</label>
                                            <x-select-input type="text" name="colors"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                                <option value="white">White</option>
                                                <option value="black">Black</option>
                                                <option value="red">Red</option>
                                                <option value="blue">Blue</option>
                                            </x-select-input>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Short Description</label>
                                            <input type="text" name="short_description"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Optional">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Qty</label>
                                            <input type="text" name="qty"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Optional">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Sku</label>
                                            <input type="text" name="sku"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Optional">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Description</label>
                                            <textarea name="description"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Optional" rows="3"></textarea>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex flex-col">
                                                <label class="leading-loose">Start</label>
                                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                                    <input type="text"
                                                        class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                        placeholder="25/02/2020">
                                                    <div class="absolute left-3 top-2">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <label class="leading-loose">End</label>
                                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                                    <input type="text"
                                                        class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                        placeholder="26/02/2020">
                                                    <div class="absolute left-3 top-2">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="pt-4 flex items-center space-x-4">
                                        <button
                                            class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg> Cancel
                                        </button>
                                        <button
                                            class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            tinymce.init({
                selector: 'textarea',
                license_key: 'gpl',
                height: 500,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        </script>
    </x-slot>
</x-app-layout>
