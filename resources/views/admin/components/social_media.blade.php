@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Social Media</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('social_media.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Social Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter Social name" name="social_name" value="">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Social Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Social Link"
                        name="social_link" value="">

                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Social Icon Font Awesome 5</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Social Icon"
                        name="social_icon" value="">
                    @error('social_icon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Social Media List</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Social Name</th>
                            <th>Social Link</th>
                            <th>Social Icon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($social_media as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->social_name }}</td>
                                <td>{{ $item->social_link }}</td>
                                <td><i class="{{ $item->social_icon }}"></i></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
