@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Blog Area</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title"
                        name="blog_title" value=" {{ old('blog_title') }} ">

                    @error('blog_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Edit Descriptions</label>
                    <textarea id="summernote" name="blog_description">{{ old('blog_description') }}</textarea>

                    @error('blog_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Select Blog img</label>
                    <input type="file" class="form-control" id="exampleInputUsername1" name="blog_img">
                    <img src="https://img.freepik.com/premium-vector/red-stop-button_875240-2899.jpg" alt="" class="mt-2" width="30%" height="100px">
                    @error('blog_img')
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
                        <th scope="col">Blog Title</th>
                        <th scope="col">Blog Description</th>
                        <th scope="col">Blog Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $key => $blog)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->blog_description }}</td>
                            <td>
                                <img src="{{ asset('admin/img/' . $blog->blog_img) }}" alt="" style = "width: 100px; height: 50px; border-radius: 5px !important;">
                            </td>
                            <td>
                                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
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
                title: "{{ session('success') }}"
            });
        </script>
    @endif
@endpush
