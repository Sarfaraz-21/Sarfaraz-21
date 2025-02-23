<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1>Students Page</h1>
    {{
        print_r($students);
    }}
    <table border="1" style="width: 50%;  text-align: center; margin-top: 20px;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
            <th>Email</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->batch }}</td>
                <td>{{ $student->email }}</td>
            </tr>
        @endforeach
    </table>
</div>
