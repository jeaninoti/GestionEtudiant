<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card text-center" >
            <div class="card-header">
                <div class="float-start" style="font-weight: bold; font-size: 30px;font-family:'Times New Roman', Times, serif">
                    Information d'un Etudiant
                </div>
                
            </div>
            <div class="card-body">

                    <div class="row ">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>nom:</strong></label>
                        <div class="col-md-6" style="line-height: 35px; color:blue">
                            {{ $student->nom }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>prenom:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color:blue">
                            {{ $student->prenom }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color:blue">
                            {{ $student->email }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color:blue">
                            {{ $student->phone}}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>DateNaissance:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color:blue">
                            {{ $student->date_naissance }}
                        </div>
                    </div>
                    <div class="float-end">
                        <a href="{{route('etudiant')}}" class="btn btn-info btn-sm">&larr; Back</a>
                    </div>
            </div>
        </div>
    </div>    
</div>
    
</div>
</div>
</div>
</x-app-layout>
