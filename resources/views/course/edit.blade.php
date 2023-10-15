<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification des Coordonnées de Cours') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenu de la page -->
                <div class="text-center">
                    <!-- Vous pouvez ajouter du contenu supplémentaire ici si nécessaire -->
                </div>
                <div class="image" style="display: flex; justify-content: center; background-image: url('{{ asset('image/livres.jpg') }}'); background-size: cover; background-position: center;">
                    <form action="{{ route('courpost', $courses->id) }}" method="post" style="width: 50%; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
                        @csrf
                        <div class="mb-3">
                            <label for="Title" class="form-label text-blue" style="font-size: 20px; font-weight: bold;">Titre:</label>
                            <input type="text" class="form-control" id="Title" name="Title" value="{{ $courses->Title }}">
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="form-label text-red" style="font-size: 20px; font-weight: bold;">Description:</label>
                            <textarea class="form-control" id="Description" rows="2" placeholder="Entrez la description" name="Description">{{ $courses->Description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-danger" style="position: relative; left: 80%; background-color: #3546dc; border-radius: 30%;">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>