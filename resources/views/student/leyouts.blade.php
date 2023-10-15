<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion Etudiants') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenu de la page -->
                <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 CRUD Application Tutorial - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>   

    <div class="container">
        <h3 class=" mt-3">Gestion des Etudiants </h3>
            
    </div>
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-danger" href="{{ URL::to('#') }}">Export to PDF</a>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
    
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
            <div class="card">
                <div class="card-header">Liste des Etudiants</div>
                <form action="{{route('search')}}" method="GET" class="d-flex">
                    
                @csrf
                    <input class="form-control me-2 border border-danger" type="search" name="search" placeholder="Rechercher..." aria-label="Search" style="width: 200px;margin-top:10px">
                    <button class="btn btn-info" type="submit" style="margin-top: 10px">Rechercher <i class="fa fa-search" aria-hidden="true"></i></i></button>
                  </form>
                  <div class="image" style="display: flex; justify-content: center; background-image: url('{{asset('image/etudiants.jpg')}}'); background-size: cover; background-position: center;">
                    <span style="width: 50%; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;"></span>
                <div class="card-body" >
                    <a href="{{route('create')}}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Ajouter un nouveau Etudiant</a>
                    <table class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th scope="col" class='text-primary'>#</th>
                            <th scope="col" class='text-primary'>Nom</th>
                            <th scope="col" class='text-primary'>Prenom</th>
                            <th scope="col" class='text-primary'>Email</th>
                            <th scope="col" class='text-primary'>phone</th>
                            <th scope="col" class='text-primary'>DateNaissance</th>
                            <th scope="col" class='text-primary'>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            <tbody>
                                @php
                                    $it=1;
                                @endphp
                                @forelse ($students as $index => $student)
                                    <tr>
                                        <th>{{$it }}</th>
                                        <td>{{ $student->nom }}</td>
                                        <td>{{ $student->prenom }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->date_naissance }}</td>
                                        <td>
                                            <form action="{{route('deletestore',$student->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                            
                                                <div class="btn-group align-items-center" role="group">
                                                    <a href="{{ route('show', ['student' => $student]) }}" class="btn btn-warning btn-sm me-2"><i class="bi bi-eye"></i> Afficher</a>
                                                    <a href="{{ route('edit', $student->id) }}" class="btn btn-primary btn-sm me-2"><i class="bi bi-pencil-square"></i> Modifier</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet étudiant ?');"><i class="bi bi-trash"></i> Supprimer</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $it +=1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="7">
                                            <span class="text-danger">
                                                <strong>Aucun étudiant trouvé !</strong>
                                            </span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                      </table>
              
                      {{ $students->links() }}
                </div>
            </div>
        </div>    
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
            </div>
        </div>
    </div>
</x-app-layout>