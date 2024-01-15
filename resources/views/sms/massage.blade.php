@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h3 class="mt-3">
            Send SMS
        </h3>
        <div class="col container mt-4 pt-4 pb-4 rounded border border-warning">
            <form action="{{route('send.sms')}}" method="post" class="was-validated" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Number</label>
                    <input type="text" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email" required>
                </div>
                @error('gmail')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Massage</label>
                    <textarea class="form-control" name="massage" id="" cols="30" rows="10" required></textarea>
                </div>
                @error('gmail')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <button type="submit" class="btn btn-primary mt-2">Send Massage</button>
            </form>
        </div>
    </div>
</main>
@endsection