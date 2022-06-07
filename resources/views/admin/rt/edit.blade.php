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
        <h1>Edit Data RT</h1>
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
                        <form method="POST" action="{{ route('rt.update', $rt) }}">
                            @csrf

                            {{ method_field('PUT') }}
                            <div class="mb-4 form-group row">
                                <label for="no_rt" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No
                                    RT</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="no_rt" id="no_rt"
                                           value="{{ $rt->no_rt }}">
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
                                    <button class="btn btn-primary">Update</button>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @if(!($rt->civilian->isEmpty()))
        <script>
            if ($('#head_of_rt').find("option[value='" + {{ $rt->civilian->first()->id }} + "']").length) {
                $('#head_of_rt').val({{ $rt->civilian->first()->id }}).trigger('change');
            } else {
                // Create a DOM Option and pre-select by default
                var newOption = new Option(`{{ $rt->civilian->first()->full_name }}`,{{ $rt->civilian->first()->id }}, true, true);
                // Append it to the select
                $('#head_of_rt').append(newOption).trigger('change');
            }
        </script>
    @endif
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
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.full_name,
                                    value: item.id,
                                    id: item.id,
                                    selected: true,
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
