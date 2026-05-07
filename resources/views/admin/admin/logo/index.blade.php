@extends('layouts.app')
@section('content')

    <div class="row g-6">
        <div class="col-12 col-lg-6">
            <div class="card h-100 mb-0">
                <div class="card-header">
                    <h5 class="card-title mb-0">Admin Logo</h5>
                </div>
                <div class="card-body">
                  <form action="{{ route('admin.logo.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                        <div class="row">
                            <!-- Header Logo -->
                            <div class="col-md-6 mt-5">
                                <label class="form-label">Header Logo Preview:</label>
                                <div class="mb-2">
                                    <img id="header-preview" src="{{ $logo?->header_logo ? asset('uploads/admin_logos/'.$logo->header_logo) : asset('placeholder.png') }}" alt="header preview"
                                        class="img-thumbnail" style="max-height: 150px;">
                                </div>
                                <input type="file" class="form-control" name="headerlogo" accept="image/*"
                                    onchange="previewFile(this, 'header-preview')">
                            </div>
                             @error('headerlogo')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror

                            <!-- Footer Logo -->
                            <div class="col-md-6 mt-5">
                                <label class="form-label">Footer Logo Preview:</label>
                                <div class="mb-2">
                                    <img id="footer-preview" src="{{ $logo?->footer_logo ? asset('uploads/admin_logos/'.$logo->footer_logo) : asset('placeholder.png') }}" alt="footer preview"
                                        class="img-thumbnail" style="max-height: 150px;">
                                </div>
                                <input type="file" class="form-control" name="footerlogo" accept="image/*"
                                    onchange="previewFile(this, 'footer-preview')">
                            </div>
                            @error('footerlogo')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror
                        </div>


                        <div class="col-md-6 mt-3">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('footer')
<script>
    function previewFile(input, previewId) {
        const file = input.files[0];
        const preview = document.getElementById(previewId);

        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    }
</script>

{{-- success message --}}
 @if(session('success'))
<script>
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif


@endsection
