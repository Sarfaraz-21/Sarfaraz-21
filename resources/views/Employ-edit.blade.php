<div>
    <!-- Be present above all else. - Naval Ravikant -->
    <h1>Edit Employ</h1>
    <form action="{{ url('edit-employ/' . $data->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$data->name}}" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$data->email}}" required>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="{{$data->phone}}" required>
        <button type="submit">Update</button>
    </form>
</div>
