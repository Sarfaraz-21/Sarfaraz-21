<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <h1>Employ list</h1>
    {{-- {{print_r($employs)}} --}}
    <br>
    <form action="search" method="GET">
        <input type="text" name="search" id="search" placeholder="Search with Name" value="{{ @$search }}">
        <button type="submit">Search</button>
    </form>
    <table border="1" style="width: 40%;" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employs as $employ)
                <tr>
                    <td>{{ $employ->id }}</td>
                    <td>{{ $employ->name }}</td>
                    <td>{{ $employ->email }}</td>
                    <td>{{ $employ->phone }}</td>
                    <td><a href="{{'delete/'.$employ->id}}">Delete</a>
                        <a href="{{'edit/'.$employ->id}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{-- <tfoot>
            <tr>
                <td colspan="5">
                    {{ $employs->links() }}
                </td>
            </tr>
        </tfoot> --}}
    </table>
    <br>
    {{-- {{$employs->links()}} --}}
    {{ $employs->links('pagination::bootstrap-5') }}

</div>
