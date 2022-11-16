<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-center mb-5 p-5 text-lime-800 font-extrabold text-2xl shadow-md"> lista de estudiantes</h2>
                    <div>
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            ID
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Codigo
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            DNI
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Nombre y Apellidos
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Telefono
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Correo_Personal
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Correo_Institucional
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $item)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="py-4 px-6">
                                                {{ $item->id }}
                                            </td>
                                            <th scope="row"
                                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $item->codigo }}
                                            </th>
                                            <td class="py-4 px-6">
                                                {{ $item->dni }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $item->nombres }} {{ $item->apellidos }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $item->telefono }}
                                            </td>
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $item->correo_personal }}
                                            </td>
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $item->correo_institucional }}
                                            </td>
                                            </td>
                                            <td class="py-4 px-6">
                                                Accion
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $estudiantes->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
