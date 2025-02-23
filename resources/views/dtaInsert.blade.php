<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1>Add Student</h1>
    <form action="" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" required>
       
        <button type="submit">Add</button>
    </form>
</div>
