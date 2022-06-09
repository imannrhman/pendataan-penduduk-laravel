@extends('layouts.admin')
@section('title', 'Laravel')

@section('content-header')
    <div class="section-header">
        <h1>Data Keluarga</h1>
        <div class="section-header-button">
            <a href="{{route('keluarga.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
@endsection

@section('content-body')

    <div class="mt-4 row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Keluarga Per RT</h4>
                </div>
                <div class="card-body">
                    <div class="float-left">
                        <select class="form-control selectric">
                            @foreach($list_rt as $rt)
                                <option value="{{ $rt->id }}">RT 0{{ $rt->no_rt }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="float-right">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>No Kartu Keluarga</th>
                                <th>Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                            @php($i = 1)
                            @foreach($families as $family)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        {{ $family->no_kk }}
                                    </td>
                                    <td>
                                        {{ $family->familyMember()->where('family_status_id', '1')->first()->full_name }}
                                    </td>
                                    <td>
                                        {{ $family->address }}
                                    </td>
                                    <td>
                                        <a href="{{ route('keluarga.show', \Illuminate\Support\Facades\Crypt::encrypt($family->id, true)) }}" class="btn btn-icon btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                @php($i++)
                            @endforeach
                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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

