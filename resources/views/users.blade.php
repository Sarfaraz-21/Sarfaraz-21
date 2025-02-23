<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <h1>Users Page</h1>
  {{print_r($users)}}
    <ul>
        @foreach($users as $user)
            <li>{{$user->name}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->password}}</li>
        @endforeach
    </ul>
  
</div>
