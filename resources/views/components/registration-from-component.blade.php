<label for="username">Name</label>
<input name="name" type="text" placeholder="Insert Your Name" required>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
