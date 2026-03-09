@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            {{-- @dd($book); --}}

            <form class="forms-sample" action="{{ route('book_link_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Platform Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title"
                        name="link_title" value="  ">

                    @error('link_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Platform Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Link"
                        name="platform_link" value=" ">

                    @error('platform_link')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="book_id" value="{{ $book->id }}">
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
                    @foreach ($links as $key => $details)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $details->book_platform_name }}</td>
                            <td>{{ $details->book_platform_link }}</td>
                            <td>
                                <a href="{{ route('book_links_delete', $details->id) }}" class="btn btn-danger">Delete</a>
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
