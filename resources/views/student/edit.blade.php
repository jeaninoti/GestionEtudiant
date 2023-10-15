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
    
    <div class="card-body">
        <div class="float-end">
            <a href="{{route('etudiant')}}" class="btn btn-primary btn-sm">&larr; Back</a>
        </div>
        <div class="image" style="display: flex; justify-content: center; background-image: url('{{asset('image/universite.jpg')}}'); background-size: cover; background-position: center;">
            <form action="{{ route('editstore', $student->id) }}" method="post" style="width: 50%; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label text-dark" style="font-size:20px;font-weight:bold">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value='{{$student->nom}}'>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label" style="font-size:20px;font-weight:bold">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value='{{$student->prenom}}'>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size:20px;font-weight:bold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value='{{$student->email}}'>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label" style="font-size:20px;font-weight:bold">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value='{{$student->phone}}'>
                </div>
                <div class="mb-3">
                    <label for="date_naissance" class="form-label" style="font-size:20px;font-weight:bold">Date de naissance</label>
                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" value='{{$student->date_naissance}}'>
                </div>
                <button type="submit" class="btn btn-warning">Envoyer</button>
            </form>
        </div>
        </div>
    </div>
</x-app-layout>