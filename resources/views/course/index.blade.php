<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des Cours') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Gestion des cours</b></h1>

    </div>
    @if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Cours</b></div>
            <div class="col col-md-6">
                <a href="{{ route('add') }}" class="btn btn-success btn-sm float-end">Ajouter un nouveau cours</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th class="text-blue">#</th>
                <th class="text-blue">Titre</th>
                <th class="text-blue">Description</th>
                <th class="text-blue">Action</th>
            </tr>
            @php
                $ide = 1;
            @endphp
          @if ($courdata->count() > 0)
                @foreach ($courdata as $item)
                    <tr>
                        <td>{{ $ide }}</td>
                        <td>{{ $item->Title }}</td>
                        <td>{{ $item->Description }}</td>
                        <td>
                            <form method="post" action="{{ route('supprime', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('view', ['course' => $item]) }}" class="btn btn-primary btn-sm">Voir</a>
                                <a href="{{ route('update', $item->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Supprimer" />
                            </form>
                        </td>
                    </tr>
                    @php
                        $ide++;
                    @endphp
                @endforeach
            </table>
		
    </div>
</div>

</body>
</html>
@else
<div class='text-danger'>Aucun résultat trouvé !</div>
{{$courdata->links()}}
@endif
                <!-- Contenu de la page -->
            </div>
        </div>
    </div>


</x-app-layout>