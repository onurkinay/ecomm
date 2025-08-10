<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                    <div role="alert" class="rounded-md border border-gray-300 bg-white p-4 shadow-sm">
                        <div class="flex items-start gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6 text-green-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <div class="flex-1">
                                <strong class="font-medium text-gray-900"> Product added </strong>

                                <p class="mt-0.5 text-sm text-gray-700">Your product has been added successfully.</p>
                            </div>

                            <button
                                class="-m-3 rounded-full p-1.5 text-gray-500 transition-colors hover:bg-gray-50 hover:text-gray-700"
                                type="button" aria-label="Dismiss alert">
                                <span class="sr-only">Dismiss popup</span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="overflow-x-auto w-full px-4 py-4">

                    <div class="min-w-full divide-y-2 divide-gray-200">
                        <span
                            class="inline-flex divide-x divide-gray-300 overflow-hidden rounded border border-gray-300 bg-white shadow-sm">
                            <a href="{{ route('products.create') }}">
                                <button type="button"
                                    class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:relative">
                                    Create
                                </button>
                            </a>

                            <button type="button"
                                class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:relative">
                                View
                            </button>

                            <button type="button"
                                class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:relative">
                                Delete
                            </button>
                        </span>
                    </div>

                    <table class="min-w-full divide-y-2 divide-gray-200">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr class="*:font-medium *:text-gray-900">
                                <th class="px-3 py-2 whitespace-nowrap text-left">ID</th>
                                <th class="px-3 py-2 whitespace-nowrap text-left">Image</th>
                                <th class="px-3 py-2 whitespace-nowrap text-left">Name</th>
                                <th class="px-3 py-2 whitespace-nowrap text-left">Price</th>
                                <th class="px-3 py-2 whitespace-nowrap text-left">Qty</th>
                                <th class="px-3 py-2 whitespace-nowrap text-left">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($products as $product)
                                <tr class="*:text-gray-900 *:first:font-medium">
                                    <td class="px-3 py-2 whitespace-nowrap">{{ $product->id }}</td>
                                    <td class="px-3 py-2 whitespace-nowrap">
                                        <img src="{{ asset('uploads/' . $product->image) }}" alt="{{ $product->name }}"
                                            class="w-16 h-16 object-cover">
                                    </td>
                                    <td class="px-3 py-2 whitespace-nowrap">{{ $product->name }}</td>
                                    <td class="px-3 py-2 whitespace-nowrap">{{ $product->price }}</td>
                                    <td class="px-3 py-2 whitespace-nowrap">{{ $product->qty }}</td>
                                    <td class="px-3 py-2 whitespace-nowrap">
                                        <button type="button"
                                            onclick="window.location='{{ route('products.edit', $product->id) }}'"
                                            class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:relative">
                                            Edit
                                        </button>

                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:relative">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
