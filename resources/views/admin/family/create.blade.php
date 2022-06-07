@extends('layouts.admin')
@section('title', 'Laravel')

@push('page-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
@endpush()

@section('content-header')
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('keluarga.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Keluarga</h1>
    </div>
@endsection

@section('content-body')
    <div id="contentBody" class="section-body">
        <form method="POST" action="{{ route('keluarga.store') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Keluarga</h4>
                        </div>
                        <div class="card-body">

                            <div class="mb-4 form-group row">
                                <label for="no_kk" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No
                                    KK</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="no_kk" type="text" class="form-control" name="no_kk">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="address"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="address" id="address">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="postal_code" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode POS</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="postal_code" type="text" class="form-control" name="postal_code">
                                </div>
                            </div>


                            <div class="mb-4 form-group row">
                                <label for="rt_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RT</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="rt_id" id="rt_id">
                                        @foreach ($list_rt as $rt)
                                            <option value="{{ $rt->id }}">RT 0{{ $rt->no_rt }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RW</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" value="RW 13" readonly>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="form-family-member" class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Anggota Keluarga</h4>
                        </div>

                        <div class="card-body">

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][no_nik]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">NIK</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="biodata[0][no_nik]"
                                           name="biodata[0][no_nik]">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][full_name]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Nama
                                    Lengkap</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[0][full_name]" name="biodata[0][full_name]" type="text"
                                           class="form-control" oninput="this.value = this.value.toUpperCase()">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis
                                    Kelamin</label>
                                <div class="col-sm-12 col-md-7 align-self-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" id="biodata[0][gender]" value="L"
                                               name="biodata[0][gender]">
                                        <label class="form-check-label" for="inlineradio1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="biodata[0][gender]" value="P"
                                               name="biodata[0][gender]">
                                        <label class="form-check-label" for="inlineradio2">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][birthplace]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Tempat
                                    Lahir</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[0][birthplace]" name="biodata[0][birthplace]" type="text"
                                           class="form-control autocomplete-birthplace"
                                           oninput="this.value = this.value.toUpperCase()">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][date]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Tanggal
                                    Lahir</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[0][date]" name="biodata[0][date]" type="text"
                                           class="form-control datepicker">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][religion]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Agama</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[0][religion]"
                                            id="biodata[0][religion]">
                                        @foreach ($religions as $religion)
                                            <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][education]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Pendidikan</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[0][education]"
                                            id="biodata[0][education]">
                                        @foreach ($educations as $edu)
                                            <option value="{{ $edu->id }}">{{ $edu->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][profession]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Jenis
                                    Pekerjaan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[0][profession]" name="biodata[0][profession]" type="text"
                                           class="form-control autocomplete-profession" oninput="this.value = this.value.toUpperCase()">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][blood_type]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Golongan
                                    Darah</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[0][blood_type]"
                                            id="biodata[0][blood_type]">
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][marital_status]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Status
                                    Perkawinan</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[0][marital_status]"
                                            id="biodata[0][marital_status]">
                                        @foreach ($maritalStatuses as $maritalStatus)
                                            <option
                                                value="{{ $maritalStatus->id }}">{{ $maritalStatus->status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][wedding_date]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Tanggal
                                    Perkawinan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control datepicker" name="biodata[0][wedding_date]"
                                           id="biodata[0][wedding_date]">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][family_status]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Status
                                    Hubungan Dalam Keluarga</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[0][family_status]"
                                            id="biodata[0][family_status]">
                                        @foreach ($familyStatuses as $familyStatus)
                                            <option value="{{ $familyStatus->id }}">{{ $familyStatus->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][citizenship]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">
                                    Kewarganegaraan
                                </label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[0][citizenship]"
                                            id="biodata[0][citizenship]">
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][no_paspor]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">No.
                                    Paspor</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="biodata[0][no_paspor]"
                                           name="biodata[0][no_paspor]">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][no_kitap]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">No.
                                    KITAP</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="biodata[0][no_kitap]"
                                           id="biodata[0][no_kitap]">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][father_name]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Nama
                                    Ayah</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control"
                                           oninput="this.value = this.value.toUpperCase()"
                                           name="biodata[0][father_name]" id="biodata[0][father_name]">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[0][mother_name]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Nama
                                    Ibu</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control"
                                           oninput="this.value = this.value.toUpperCase()"
                                           name="biodata[0][mother_name]" id="biodata[0][mother_name]">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-footer">
                            <button id="addData" class="btn btn-outline-primary">Tambah Data
                            </button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('assets/stisla/js/page/forms-advanced-forms.js') }}"></script>

    <script>
        $("document").ready(function () {

            $(".autocomplete-birthplace").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: "{{ url('birthplace-search') }}",
                        data: {
                            q: request.term
                        },
                        dataType: "json",
                        success: function (data) {
                            let resp = $.map(data, function (obj) {
                                return obj.name;
                            });

                            response(resp);
                        }
                    });
                },
            });

            $(".autocomplete-profession").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: "{{ url('profession-search') }}",
                        data: {
                            q: request.term
                        },
                        dataType: "json",
                        success: function (data) {
                            let resp = $.map(data, function (obj) {
                                return obj.name;
                            });

                            response(resp);
                        }
                    });
                },
            })
        });
    </script>

    <script type="text/javascript">
        let i = 1;
        $("#addData").click(function () {
            event.preventDefault();
            $("#form-family-member").append(
                `
   <div class="col-12" id="biodata_`+ i +`">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Anggota Keluarga</h4>
                            <button onclick="deleteItem(`+ i +`)" class="btn btn-outline-danger "><i class="fas fa-trash-can"></i> HAPUS</button>

                        </div>

                        <div class="card-body">

                            <div class="mb-4 form-group row">
                                <label for="biodata[` + i + `][no_nik]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">NIK</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="biodata[` + i + `][no_nik]"
                                           name="biodata[` + i + `][no_nik]">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[` + i + `][full_name]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Nama
                                    Lengkap</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[` + i + `][full_name]" name="biodata[` + i + `][full_name]" type="text"
                                           class="form-control" oninput="this.value = this.value.toUpperCase()">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis
                                    Kelamin</label>
                                <div class="col-sm-12 col-md-7 align-self-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" id="biodata[` + i + `][gender]" value="L"
                                               name="biodata[` + i + `][gender]">
                                        <label class="form-check-label" for="biodata[` + i + `][gender]">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="biodata[` + i + `][gender]" value="P"
                                               name="biodata[` + i + `][gender]">
                                        <label class="form-check-label" for="biodata[` + i + `][gender]">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[` + i + `][birthplace]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Tempat
                                    Lahir</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[` + i + `][birthplace]" name="biodata[` + i + `][birthplace]" type="text"
                                           class="form-control autocomplete-birthplace" oninput="this.value = this.value.toUpperCase()">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[` + i + `][date]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Tanggal
                                    Lahir</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="biodata[` + i + `][date]" name="biodata[` + i + `][date]" type="text"
                                           class="form-control datepicker">
                                </div>
                            </div>

                            <div class="mb-4 form-group row">
                                <label for="biodata[` + i + `][religion]"
                                       class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Agama</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="biodata[` + i + `][religion]"
                                            id="biodata[` + i + `][religion]">
                                        @foreach ($religions as $religion)
                                          <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                                        @endforeach
                </select>
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][education]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Pendidikan</label>
            <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="biodata[` + i + `][education]"
                        id="biodata[` + i + `][education]">
                        @foreach ($educations as $edu)
                            <option value="{{ $edu->id }}">{{ $edu->name }}</option>
                        @endforeach
                </select>
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][profession]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Jenis
                Pekerjaan</label>
            <div class="col-sm-12 col-md-7">
                <input id="biodata[` + i + `][profession]" name="biodata[` + i + `][profession]" type="text"
                       class="form-control autocomplete-profession" oninput="this.value = this.value.toUpperCase()">
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][blood_type]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Golongan
                Darah</label>
            <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="biodata[` + i + `][blood_type]"
                        id="biodata[` + i + `][blood_type]">
                    <option value="A">A</option>
                    <option value="AB">AB</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                </select>
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][marital_status]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Status
                Perkawinan</label>
            <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="biodata[` + i + `][marital_status]"
                        id="biodata[` + i + `][marital_status]">
@foreach ($maritalStatuses as $maritalStatus)
                <option
                    value="{{ $maritalStatus->id }}">{{ $maritalStatus->status }}</option>
                                        @endforeach
                </select>
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][wedding_date]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Tanggal
                Perkawinan</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control datepicker" name="biodata[` + i + `][wedding_date]"
                       id="biodata[` + i + `][wedding_date]">
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][family_status]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Status
                Hubungan Dalam Keluarga</label>
            <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="biodata[` + i + `][family_status]"
                        id="biodata[` + i + `][family_status]">
@foreach ($familyStatuses as $familyStatus)
                <option value="{{ $familyStatus->id }}">{{ $familyStatus->name }}</option>
                                        @endforeach
                </select>
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][citizenship]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">
                Kewarganegaraan
            </label>
            <div class="col-sm-12 col-md-7">
                <select class="form-control selectric" name="biodata[` + i + `][citizenship]"
                        id="biodata[` + i + `][citizenship]">
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                </select>
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][no_paspor]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">No.
                Paspor</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" id="biodata[` + i + `][no_paspor]"
                       name="biodata[` + i + `][no_paspor]">
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][no_kitap]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">No.
                KITAP</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="biodata[` + i + `][no_kitap]"
                       id="biodata[` + i + `][no_kitap]">
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][father_name]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Nama
                Ayah</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control"
                       oninput="this.value = this.value.toUpperCase()"
                       name="biodata[` + i + `][father_name]" id="biodata[` + i + `][father_name]">
            </div>
        </div>

        <div class="mb-4 form-group row">
            <label for="biodata[` + i + `][mother_name]"
                   class="col-form-label text-md-right col-12 col-md-3 col-lg-3 align-self-center">Nama
                Ibu</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control"
                       oninput="this.value = this.value.toUpperCase()"
                       name="biodata[` + i + `][mother_name]" id="biodata[` + i + `][mother_name]">
            </div>
        </div>

    </div>

</div>
</div>

`);

            ++i;
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });


        function deleteItem(index) {
            $('#biodata_' + index).remove();
        }
    </script>
@endpush
