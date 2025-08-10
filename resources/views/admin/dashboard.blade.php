<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

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
                                <th class="px-3 py-2 whitespace-nowrap">Name</th>
                                <th class="px-3 py-2 whitespace-nowrap">DoB</th>
                                <th class="px-3 py-2 whitespace-nowrap">Role</th>
                                <th class="px-3 py-2 whitespace-nowrap">Salary</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            <tr class="*:text-gray-900 *:first:font-medium">
                                <td class="px-3 py-2 whitespace-nowrap">Nandor the Relentless</td>
                                <td class="px-3 py-2 whitespace-nowrap">04/06/1262</td>
                                <td class="px-3 py-2 whitespace-nowrap">Vampire Warrior</td>
                                <td class="px-3 py-2 whitespace-nowrap">$0</td>
                            </tr>

                            <tr class="*:text-gray-900 *:first:font-medium">
                                <td class="px-3 py-2 whitespace-nowrap">Laszlo Cravensworth</td>
                                <td class="px-3 py-2 whitespace-nowrap">19/10/1678</td>
                                <td class="px-3 py-2 whitespace-nowrap">Vampire Gentleman</td>
                                <td class="px-3 py-2 whitespace-nowrap">$0</td>
                            </tr>

                            <tr class="*:text-gray-900 *:first:font-medium">
                                <td class="px-3 py-2 whitespace-nowrap">Nadja</td>
                                <td class="px-3 py-2 whitespace-nowrap">15/03/1593</td>
                                <td class="px-3 py-2 whitespace-nowrap">Vampire Seductress</td>
                                <td class="px-3 py-2 whitespace-nowrap">$0</td>
                            </tr>

                            <tr class="*:text-gray-900 *:first:font-medium">
                                <td class="px-3 py-2 whitespace-nowrap">Colin Robinson</td>
                                <td class="px-3 py-2 whitespace-nowrap">01/09/1971</td>
                                <td class="px-3 py-2 whitespace-nowrap">Energy Vampire</td>
                                <td class="px-3 py-2 whitespace-nowrap">$53,000</td>
                            </tr>

                            <tr class="*:text-gray-900 *:first:font-medium">
                                <td class="px-3 py-2 whitespace-nowrap">Guillermo de la Cruz</td>
                                <td class="px-3 py-2 whitespace-nowrap">18/11/1991</td>
                                <td class="px-3 py-2 whitespace-nowrap">Familiar/Vampire Hunter</td>
                                <td class="px-3 py-2 whitespace-nowrap">$0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
