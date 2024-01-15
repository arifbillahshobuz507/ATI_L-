<label for="username">Email</label>
<input name="email" type="text" placeholder="Insert Your Email"  required>
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="password">Password</label>
<input name="password" type="password" placeholder="Password"  required >
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror