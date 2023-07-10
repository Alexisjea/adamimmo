<h1>COUCOU  </h1>
<table>
    <tr class="table-danger">
        <th scope="col">#</th>
        <th scope="col">Name</th>

    </tr>
    @foreach($cotations ?? '' as $data)
        <tr>
            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->nom }}</td>
       
        </tr>
        @endforeach
</table>