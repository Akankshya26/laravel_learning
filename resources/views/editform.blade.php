<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
</head>

<body>
    <h1 align="center">Edit Form </h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $result->name }}">
                        <span class="text-danger">
                            @error('name')
                                {{ 'name is required' }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city"
                            value="{{ $result->city }}">
                        <span class="text-danger">
                            @error('city')
                                {{ 'city is required' }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $result->email }}">
                        <span class="text-danger">
                            @error('email')
                                {{ 'email is required' }}
                            @enderror
                        </span>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="radio" name="gender" value="male"> Male<i class="bi bi-gender-male"></i>
                            <input type="radio" name="gender" value="female"> Female<i
                                class="bi bi-gender-female"></i>
                            <span class="text-danger">
                                @error('gender')
                                    {{ 'gender is required' }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="marks" class="form-label">Marks</label>
                            <input type="number" class="form-control" id="marks" name="marks"
                                value="{{ $result->marks }}">
                            <span class="text-danger">
                                @error('marks')
                                    {{ 'mark is required' }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
