@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">about Page Update</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('about.details.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Filed Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="filed_name" value="">
                    @error('filed_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Filed Value</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="filed_value" value="">
                    @error('filed_value')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>

        </div>
    </div>

    <div class="card">
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
                    @foreach ($about_details as $key => $details)
                    
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $details->filed_name }}</td>
                            <td>{{ $details->filed_value }}</td>
                            <td>
                                <a href="{{ route('about.details.edit', $details->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('about.details.delete', $details->id) }}" class="btn btn-danger">Delete</a>
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
