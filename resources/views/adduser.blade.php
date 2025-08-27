<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add User Form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>

               {{-- @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                 @endforeach
                </ul>
                   
               @endif --}}
                {{-- <pre>
                 @php
                    print_r($errors->all())
                @endphp
                </pre> --}}
                 <form action="{{ route('addUser') }}" method="POST">
                     {{-- <form action="" method="POST"> --}}
                    @csrf
                    <div class="mb-3">
            <label class="form-label">Name:</label>
            {{-- <input type="text" name="username" id="name" class="form-control @error('username') is-invalid @enderror" placeholder="" required> --}}
           <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror">
            <span class="text-danger">
                @error("username")
                {{ $message }}
                    
                @enderror
            </span>
        </div>
                    <div class="mb-3">
            <label class="form-label">Email:</label>
            {{-- <input type="email" name="useremail" id="name" class="form-control @error('useremail') is-invalid @enderror" placeholder="" required> --}}
            <input type="email" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
             <span class="text-danger">
                @error("useremail")
                {{ $message }}
                    
                @enderror
            </span>
        </div>
      <div class="mb-3">
            <label class="form-label">Password:</label>
            {{-- <input type="text" name="username" id="name" class="form-control @error('username') is-invalid @enderror" placeholder="" required> --}}
           <input type="password" name="userpassword" value="{{ old('userpassword') }}"class="form-control @error('userpassword') is-invalid @enderror">
            <span class="text-danger">
                @error("userpassword")
                {{ $message }}
                    
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Age:</label>
            {{-- <input type="number" name="userage" id="name" class="form-control @error('userage') is-invalid @enderror" placeholder="" required> --}}
             <input type="number" value="{{ old('userage') }}" name="userage" class="form-control @error('userage') is-invalid @enderror">
            <span class="text-danger">
                @error("userage")
                {{ $message }}
                    
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">City:</label>
            <select class="form-control" name="usercity" id="name">
                <option value="delhi">Delhi</option>
                 <option value="hyd">HYD</option>
                  <option value="mumbai">MUMBAI</option>
                   <option value="vizag">VIZAG</option>
            </select>
             <span class="text-danger">
                @error("usercity")
                {{ $message }}
                    
                @enderror
            </span>
        </div>
           <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </div>
</body>
</html>