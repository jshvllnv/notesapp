<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container py-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">

            <div class="py-2 border-bottom mb-4">
                <h4>Create Note
                    <a href="{{ url('notes') }}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>

            <form action="{{ url('notes/'. $note->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $note->title }}" required>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $note->description }}" required>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark form-control">Create Note</button>
                </div>
                
            </form>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>