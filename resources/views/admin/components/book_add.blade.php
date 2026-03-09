@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Home Page Update</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title"
                        name="title" value=" {{ old('title') }} ">

                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Edit Descriptions</label>
                    <textarea id="summernote" name="description">{{ old('description') }}</textarea>

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Select book img</label>
                    <input type="file" class="form-control" id="exampleInputUsername1" name="book_img">
                    <img src="https://img.freepik.com/premium-vector/red-stop-button_875240-2899.jpg" alt="" class="mt-2" width="30%" height="100px">
                    @error('book_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>

        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Book Details</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book Descriptions</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book as $key => $details)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $details->book_name }}</td>
                            <td>{{ $details->book_des }}</td>
                            <td>
                                <a href="{{ route('book_links', $details->id) }}" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
