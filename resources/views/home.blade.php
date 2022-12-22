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
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="text-danger">
                            @error('name')
                                {{ 'name is required' }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                        <span class="text-danger">
                            @error('city')
                                {{ 'city is required' }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <span class="text-danger">
                            @error('email')
                                {{ 'email is required' }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="radio" name="gender" value="male"> Male<i class="bi bi-gender-male"></i>
                        <input type="radio" name="gender" value="female"> Female<i class="bi bi-gender-female"></i>
                        <span class="text-danger">
                            @error('gender')
                                {{ 'gender is required' }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks">
                        <span class="text-danger">
                            @error('marks')
                                {{ 'marks input in required' }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <form action="" class="col-15">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="search" />
                    </div>
                    <br>
                    <button class="btn btn-primary">Search</button>
                </form>
                <br><br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Email</th>
                            <th scope="col">Marks</th>

                            <th scope="col">Gender</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $rel)
                            <tr>
                                <th>{{ $rel->id }}</th>
                                <td>{{ $rel->name }}</td>
                                <td>{{ $rel->city }}</td>
                                <td>{{ $rel->email }}</td>

                                <td>{{ $rel->marks }}</td>
                                <td>{{ $rel->gender }}</td>
                                <td>
                                    <a href="{{ url('/edit', $rel->id) }}" class="btn btn-info btn-sm">EDIT</a>
                                    <a href="{{ url('/delete', $rel->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <span>
                    {{ $result->links() }}
                </span>
                <style>
                    .w-5 {
                        display: none;

                    }
                </style>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>


</html>
