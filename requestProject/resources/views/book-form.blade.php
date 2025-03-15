<div class="book-form-div">
    <form action="{{ url('book-store') }}" class="book-store" method="post">
        <div class="form-section">
            <label for="title" class="label-book-form">Title</label><input type="text" class="fotm-control" id="title" name="title" required>
        </div>
        <div class="form-section">
            <label for="author" class="label-book-form">Author</label><input type="text" class="fotm-control" name="author" id="author" required>
        </div>
        <div class="form-section">
            <label for="genre" class="label-book-form">Choose genre</label>
            <select name="genre" id="genre" >
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="mistery">Mistery</option>
                <option value="drama">Drama</option>
            </select>
        </div>
        @csrf
        <button class="form-button" type="submit" >Submit</button>
    </form>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>