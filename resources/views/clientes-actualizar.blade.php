<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar clientes') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="/clientes/editar/{{$cliente->customerNumber}}">
                        @csrf
                        <label class="mt-3">Nombre</label>
                        <input type="text" name="contactFirstName" class="form-control" value="{{$cliente->contactFirstName}}">
                        
                        <label class="mt-3">Apellido</label>
                        <input type="text" name="contactLastName" class="form-control" value="{{$cliente->contactLastName}}">

                        <label class="mt-3">Telefono</label>
                        <input type="text" name="phone" class="form-control" value="{{$cliente->phone}}">

                        <label class="mt-3">Ciudad</label>
                        <input type="text" name="city" class="form-control" value="{{$cliente->city}}">

                        <Button type="submit" class="btn btn-primary">Actualizar</Button>

                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
