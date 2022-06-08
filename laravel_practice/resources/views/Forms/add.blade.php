<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="container">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="title">
                                <h3>Add New One</h3>
                            </div>
                            <div class="add">
                                <a href="{{ route('form.index') }}" class="btn btn-success btn-sm">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-gorup">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-gorup">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" placeholder="Enter Your Email" class="form-control">
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="custom-file mt-2">
                                    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group mt-2">
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
