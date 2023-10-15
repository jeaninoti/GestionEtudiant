<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenu de la page -->


                @foreach ($course as $courseItem)
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                       
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-label-form"><b>Title</b></label>
                            <div class="col-sm-10">
                                {{ $courseItem->Title }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-label-form"><b>Description</b></label>
                            <div class="col-sm-10">
                                {{ $courseItem->Description }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </div>
</x-app-layout>