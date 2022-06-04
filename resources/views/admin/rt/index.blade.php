@extends('layouts.admin')
@section('title', 'Laravel')

@section('content-header')
    <div class="section-header">
        <h1>Data RT</h1>
        <div class="section-header-button">
            <a href="{{ route('rt.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
@endsection

@section('content-body')

    <div class="mt-4 row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data RT</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">No. RT</th>
                                <th>Nama Ketua RT</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($list_rt as $rt)
                                <tr>
                                    <td class="text-center" style="width: 10%">
                                        {{ $rt->no_rt }}
                                    </td>
                                    <td style="width: 65%">
                                        @foreach ($rt->civilian as $ketua)
                                            {{ $ketua->full_name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn btn-icon btn-primary icon-left text-light"
                                            href="{{ route('rt.edit', $rt) }}"><i class="far fa-edit"></i> Edit </a>
                                        <button class="btn btn-icon btn-danger icon-left text-light"
                                            onclick="showDeleteModal({{ $rt->id }}, `{{ $rt->no_rt }}`)">
                                            <i class="fas fa-trash-can"></i>
                                            Hapus </button>
                                    </td>
                                </tr>
                            @endforeach()
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('modal')

    <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapu Data RT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus <span id="modal-no_rt"></span>?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="modal-confirm_delete" type="button" class="btn btn-danger">Hapus</button>
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
    <script src="{{ asset('assets/stisla/js/page/bootstrap-modal.js') }}"></script>
    <script>
        function showDeleteModal(id, name) {
            $('#modal-no_rt').html("Data RT No " + name);
            $('#modal-confirm_delete').attr('onclick', `confirmDelete(${id})`);
            $('#deleteModal').modal('show');
        }

        function confirmDelete(id) {
            console.log(id);
            $.ajax({
                url: 'rt/' + id,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#deleteModal').modal('hide');
                    window.location.reload() 
                },
                error: function(error) {

                }
            });
        }
    </script>
@endpush
