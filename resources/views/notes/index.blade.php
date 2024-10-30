<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container py-5">

    <div class="row min-100-vh d-flex align-items-center justify-content-center">

        <div class="col-md-12">

            @if(session('status'))
                    <div class="alert alert-warning">{{ session('status') }}</div>
            @endif

            <div class="py-2 border-bottom mb-4">

                <h4>Notes App
                    <a href="{{ url('/notes/create') }}" class="btn btn-dark float-end">Create Note</a>
                </h4>

            </div>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->description }}</td>
                        <td>
                            <a href="{{ url('notes/'.$note->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('notes/'.$note->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>