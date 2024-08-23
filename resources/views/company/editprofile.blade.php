@extends('company.layouts.app')

@section('main')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Edit Profil Perusahaan</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="col-lg-12">
                    <div class="row row-cards">
                        <div class="col-12">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form class="card" action="{{ route('company.updateprofile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row row-cards">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    Nama Perusahaan <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="company_name" placeholder="Nama Perusahaan" value="{{ $company->company_name ?? '' }}" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    Telepon Perusahaan <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="company_phone" placeholder="Telepon" value="{{ $company->company_phone ?? '' }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat Email</label>
                                                <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat Perusahaan</label>
                                                <input type="text" class="form-control" name="company_address" placeholder="Alamat Perusahaan" value="{{ $company->company_address ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Website Perusahaan</label>
                                                <input type="text" class="form-control" name="company_website" placeholder="Website Perusahaan" value="{{ $company->company_website ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Logo Perusahaan</label>
                                                <input type="file" class="form-control" name="company_logo" accept="image/*">
                                            </div>
                                            @if ($company && $company->company_logo)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $company->company_logo) }}" alt="Logo Perusahaan" class="img-fluid" style="max-height: 150px;">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 mb-0">
                                                <label class="form-label">Tentang Perusahaan</label>
                                                <textarea rows="5" class="form-control" name="company_description" placeholder="Tentang Perusahaan">{{ $company->company_description ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary">Perbarui Profil</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customjs')
    <script>
        // Tambahkan kode JavaScript khusus jika diperlukan
    </script>
@endsection
