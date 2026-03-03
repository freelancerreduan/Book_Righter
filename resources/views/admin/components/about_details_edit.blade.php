@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">about Page Update</h5>
            {{-- @if (session('success'))
                <strong> {{ session('success') }} </strong>
            @endif --}}
            <form class="forms-sample" action="{{ route('about_details_update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Filed Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="filed_name" value="{{ $about->filed_name }}">
                    @error('filed_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Filed Value</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                        placeholder="Enter your name" name="filed_value" value="{{ $about->filed_value }}">
                    @error('filed_value')
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
