<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>User Form Validation</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
@push("style")
<style type="text/css">
  .container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;
}

form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
}

.form-control:focus {
    border-color: #000;
    box-shadow: none;
}

label {
    font-weight: 600;
}

.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}

.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}
</style>
@endpush
<body>
    <div class="container mt-5">

        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('validate.form') }}" novalidate>

            @csrf

            <div class="form-group mb-2">
                <label>Name *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Email*</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

             <div class="form-group mb-2">
                <label>Subject*</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject">

                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

             <div class="form-group mb-2">
                <label>Message*</label>
                <input type="text" class="form-control @error('message') is-invalid @enderror" name="message" id="message">

                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group mb-2">
                <label>Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date">

                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Time</label>
                <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" min="09:00" max="18:00 id="subject">

                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group mb-2">
                <label>File Upload*</label>
                <input type="file" class="form-control @error('fileupload') is-invalid @enderror" name="fileupload" id="fileupload" >
                @error('fileupload')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                     
            </div>

            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
    <script type="text/javascript">
   const element = document.getElementById('date');
   element.valueAsNumber = Date.now()-(new Date()).getTimezoneOffset()*60000;
    </script>
</body>

</html>