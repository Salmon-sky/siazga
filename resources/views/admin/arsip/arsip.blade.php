@extends('layouts.admin.app')

@section('title', 'Arsip Digital')

@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">File E-Raport</h5>
                    @if ($arsip->file_eraport != null)
                    <iframe src="{{ asset('assets/file_eraport/'.$arsip->file_eraport) }}" style="width: 100%; height: 400px;"></iframe>
                    @else
                    <br>
                    <p class="fw-bold">File Tidak Ada</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">File Sertifikat</h5>
                    @if ($arsip->file_sertifikat != null)
                    <iframe src="{{ asset('assets/file_sertifikat/'.$arsip->file_sertifikat) }}" style="width: 100%; height: 400px;"></iframe>
                    @else
                    <br>
                    <p class="fw-bold">File Tidak Ada</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

@endsection
