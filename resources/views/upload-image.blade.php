<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>Upload Image</h1>
    <form action="{{ url('upload-image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">Image</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">Upload</button>
    </form>
</div>
