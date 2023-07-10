
    <div class="container mt-5">
        <h2 class="text-center mb-3">Liste des cotations</h2>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ url('cotations/create') }}">Créer cotation</a>
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Nom cotation</th>
                    
                
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cotations ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nom }}</td>
                 
                    <td>

                        <form action="{{ url('cotations/'. $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
    
                            <a class="btn btn-info" href="{{ url('cotations/'. $data->id) }}">Voir</a>
                            <a class="btn btn-primary" href="{{ url('cotations/'. $data->id .'/edit') }}">Modifier</a>
    
                            <button type="submit" class="btn btn-danger">Supprimer</button>
    
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a>
        {{--  --}}
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
