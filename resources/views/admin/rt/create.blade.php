@extends('layouts.admin')
@section('title', 'Laravel')

@push('page-styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush()

@section('content-header')
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('rt.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data RT</h1>
    </div>
@endsection

@section('content-body')

    <div id="contentBody" class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data RT</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rt.store') }}">
                            @csrf
                            <div class="mb-4 form-group row">
                                <label for="no_rt" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No
                                    RT</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control mb-2 @error('no_rt') border-danger @enderror" name="no_rt" id="no_rt">
                                    @error('no_rt')
                                    <span class="text-sm text-danger">
                                         {{ $message }}
                                    </span>
                                    @enderror
                                </div>


                            </div>

                            <div class="mb-4 form-group row">
                                <label for="head_of_rt" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ketua
                                    RT</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control select2" name="head_of_rt" id="head_of_rt">
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 form-group row">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
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
    <script>

        $('document').ready(function () {
            $('.select2').select2({
                placeholder: 'Cari warga...',
                ajax: {
                    url: '/civilian-search',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function (data) {
                        console.log(data);
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.full_name,
                                    value: item.id,
                                    id: item.id,
                                }
                            })
                        };
                    },
                    cache: true
                },
            });
        });
    </script>
@endpush



