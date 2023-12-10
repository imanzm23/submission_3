<!DOCTYPE html>
<html lang="en">
<head>
    <title>Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Buku</h2>

        @if (session('status'))
            <div class="alert alert-success mt-3">{{ session('status') }}</div>
        @endif

        <form name="book-save-form" id="book-save-form" action="{{ url('/books/save-book') }}" method="post" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" id="id">
            </div>
            <div class="form-group">
                <label for="book_name">Book Name</label>
                <input type="text" class="form-control" name="book_name" id="book_name">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" id="book_name">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <div class="mt-4">
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $b)
                    <tr>
                        <td>{{ $b['id'] }}</td>
                        <td>{{ $b['book_name'] }}</td>
                        <td>{{ $b['author'] }}</td>
                        <td>{{ $b['published_at'] }}</td>
                        <td>
                            <form action="{{ url('/books/delete-book') }}" method="get">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $b['id'] }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js are required for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
