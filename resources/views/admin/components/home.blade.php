@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Home Page Update</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="name" value="{{ $home->name ?? '' }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title"
                        name="title" value="{{ $home->title ?? '' }}">

                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Edit Descriptions</label>
                    <textarea id="summernote" name="description">{{ $home->description ?? ''}}</textarea>

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Select your img</label>
                    <input type="file" class="form-control" id="exampleInputUsername1" name="img">
                    <img src="{{ optional($home)->img ? asset('admin/img/'.optional($home)->img) : 'https://img.freepik.com/premium-vector/red-stop-button_875240-2899.jpg' }}" class="mt-2" width="30%" height="100px">
                    @error('img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Select book img</label>
                    <input type="file" class="form-control" id="exampleInputUsername1" name="book_img">
                    <img src="{{ optional($home)->book_img ? asset('admin/img/'.optional($home)->book_img) : 'https://img.freepik.com/premium-vector/red-stop-button_875240-2899.jpg' }}" alt="" class="mt-2" width="30%" height="100px">
                    @error('book_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>

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
