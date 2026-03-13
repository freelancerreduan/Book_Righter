@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Book Author Update</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('admin.book.author.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Author Title</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Enter your name" name="author_title" value="{{ $book_author->book_author_title ?? '' }}">
                    @error('author_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Edit Descriptions</label>
                    <textarea id="summernote" name="author_description">{{ $book_author->book_author_des ?? '' }}</textarea>

                    @error('author_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <hr> <br/>
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="book_title" value="">
                    @error('book_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Book Description</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="book_description" value="">
                    @error('book_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Select Book Img</label>
                    <input type="file" class="form-control" id="exampleInputUsername1" name="book_img">
                    <img src="" alt="" class="mt-2" width="30%" height="100px">
                    @error('book_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>

        </div>
    </div>

    {{-- <div class="card">
        <div class="card-body">
            <h5 class="card-title">about Page Details</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Filed Name</th>
                        <th scope="col">Filed Value</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book_author as $key => $details)
                    
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $details->book_author_title }}</td>
                            <td>{{ $details->book_author_des }}</td>
                            <td>
                                <a href="{{ route('about.details.edit', $details->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('about.details.delete', $details->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
@endsection

@push('scripts')
    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Updated successfully"
            });
        </script>
    @endif
@endpush
