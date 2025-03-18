<form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Designation</label>
        <input type="text" name="designation" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Profile Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save Profile</button>
</form>
