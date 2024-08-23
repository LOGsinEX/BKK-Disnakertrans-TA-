@extends('layouts.app')

@section('main')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Data Diri</h2>
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

                            <form class="card" action="{{ route('jobseeker.profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row row-cards">
                                        <div class="col-md-8">
                                            <span class="avatar avatar-xl mb-3 rounded" style="background-image: url('{{ asset('storage/profile_pictures/' . $jobSeeker->profile_picture) }}')"></span>

                                            <div class="mb-3">
                                                <label class="form-label">Foto Profil</label>
                                                <input type="file" class="form-control" name="profile_picture">
                                                @if ($jobSeeker->profile_picture)
                                                    <div class="form-text">
                                                        Foto Terbaru: <a href="{{ asset('storage/profile_pictures/' . $jobSeeker->profile_picture) }}" target="_blank">{{ $jobSeeker->profile_picture }}</a>
                                                    </div>
                                                @else
                                                    <div class="form-text">
                                                        Unggah Foto Profil Anda (ukuran maksimal: 2MB)
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="job_seeker_name" placeholder="John Doe" value="{{ $jobSeeker->job_seeker_name ?? '' }}" autofocus required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="job_seeker_phone" placeholder="08xxxxxxxx" value="{{ $jobSeeker->job_seeker_phone ?? '' }}" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" value="{{ $jobSeeker->user->email }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="job_seeker_address" placeholder="Alamat Rumah" value="{{ $jobSeeker->job_seeker_address ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Jenis Kelamin</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="job_seeker_gender" id="male" value="laki-laki" {{ $jobSeeker->job_seeker_gender == 'Laki-laki' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="male">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="job_seeker_gender" id="female" value="perempuan" {{ $jobSeeker->job_seeker_gender == 'Perempuan' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="female">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="job_seeker_birthdate" value="{{ $jobSeeker->job_seeker_birthdate ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3 mb-0">
                                                <label class="form-label">Deskripsi Anda</label>
                                                <textarea rows="5" class="form-control" name="job_seeker_resume" placeholder="Tuliskan deskripsi singkat anda">{{ $jobSeeker->job_seeker_resume ?? '' }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">CV</label>
                                                <input type="file" class="form-control" name="cv">
                                                @if ($fileJobSeeker && $fileJobSeeker->cv)
                                                    <div class="form-text">
                                                        CV Terbaru: <a href="{{ asset('storage/' . $fileJobSeeker->cv) }}" target="_blank">{{ basename($fileJobSeeker->cv) }}</a>
                                                    </div>
                                                @else
                                                    <div class="form-text">
                                                        Unggah CV (ukuran maksimal: 5MB)

                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Sertifikat</label>
                                                <input type="file" class="form-control" name="certificate">
                                                @if ($fileJobSeeker && $fileJobSeeker->certificate)
                                                    <div class="form-text">
                                                        Sertifikat Terbaru: <a href="{{ asset('storage/' . $fileJobSeeker->certificate) }}" target="_blank">{{ basename($fileJobSeeker->certificate) }}</a>
                                                    </div>
                                                @else
                                                    <div class="form-text">
                                                        Unggah Sertifikat (ukuran maksimal: 5MB)
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection

@section('customjs')
    <script>
        // Tambahkan kode JavaScript khusus jika diperlukan
    </script>
@endsection
