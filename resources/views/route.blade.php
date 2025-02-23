<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>Form for testing</h1>
    <form action="routes" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="email" placeholder="Enter your email">
        <button type="submit">Submit</button>
    </form>
</div>
