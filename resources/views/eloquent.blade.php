<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    {{-- {{print_r($eloquent)}} --}}
    <h1>Eloquent Page</h1>
    <table border="1" style="border-collapse: collapse; text-align: center;">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach($eloquent as $eloquent)
        <tr>
            <td>{{$eloquent->id}}</td>
            <td>{{$eloquent->name}}</td>
            <td>{{$eloquent->email}}</td>
            <td>{{$eloquent->password}}</td>
        </tr>
        @endforeach
    </table>
</div>
