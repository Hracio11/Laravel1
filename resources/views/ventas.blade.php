<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Tamaño</th>
                            <th>Acciones</th>
                        </tr>

                        <tr>
                            <td>Libro</td>
                            <td>10</td>
                            <td>25</td>
                            <td>mediano</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">ELiminar</a>
                            </td>
                        </tr>
                  
                        <tr>
                            <td>Libro</td>
                            <td>10</td>
                            <td>25</td>
                            <td>mediano</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">ELiminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Libro</td>
                            <td>10</td>
                            <td>25</td>
                            <td>mediano</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">ELiminar</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
