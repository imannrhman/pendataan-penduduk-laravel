@extends('layouts.admin')
@section('title', 'Laravel')

@section('content-header')
    <div class="section-header">
        <h1>Import Data</h1>
    </div>
@endsection

@section('content-body')

    <div class="mt-4 row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Import Data Keluarga</h4>
                </div>
                <div class="card-body">
                    <div class="row center">
                        <div class="col-md-2">
                            <select class="form-control selectric">
                                <option selected disabled>Pilih No RT</option>
                                @foreach($list_rt as $rt)
                                    <option value="{{ $rt->id }}">RT 0{{ $rt->no_rt }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <button href="#" class="text-white btn btn-icon icon-left" style="background-color: #3bb557"><i class="fas fa-file-excel"></i> Import Data dari Excel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-footer')
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2018
            <div class="bullet"></div>
            Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
            2.3.0
        </div>
    </footer>
@endsection

@push('page-scripts')
    <script src="{{asset('assets/stisla/js/page/forms-advanced-forms.js')}}"></script>
@endpush

