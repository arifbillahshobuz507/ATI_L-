@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h3 class="mt-3">
            Input Admin Information!
        </h3>
        <div class="col container mt-4 pt-4 pb-4 rounded border border-warning">
            <form action="{{route('sotre.admin')}}" method="post" class="was-validated" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email" required>
                </div>
                @error('gmail')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Unique Phone Number" required>
                </div>
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>

</main>
@endsection