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
                                <h3>Manage From</h3>
                            </div>
                            <div class="add">
                                <a href="{{ route('form.create') }}" class="btn btn-success btn-sm">Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($forms as $form)
                                    <tr>
                                        <td>{{ $form->name }}</td>
                                        <td>{{ $form->email }}</td>
                                        <td>
                                            <img width="80px" src="{{ asset($form->image) }}" alt="">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('form.edit', $form->id) }}" class="btn btn-sm btn-success">Edit</a>
                                            <form action="{{ route('form.destroy', $form->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
