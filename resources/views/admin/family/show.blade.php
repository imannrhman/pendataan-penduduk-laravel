@extends('layouts.admin')
@section('title', 'Kartu Keluarga')
@section('content-body')
    <div class="invoice">
        <div class="invoice-print">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-title">
                        <h2 class="col-auto">Kartu Keluarga</h2>
                        <div class="invoice-number">No KK : {{$family->no_kk}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                           <table>
                               <tr>
                                   <td style="width: 45%">
                                       Nama Kepala Keluarga
                                   </td>
                                   <td class="text-center"  style="width: 30%"> : </td>
                                   <td><b>{{$family->familyMember()->where('family_status_id', '1')->first()->full_name}}</b></td>
                               </tr>
                               <tr>
                                   <td>
                                       Address
                                   </td>
                                   <td class="text-center" > : </td>
                                   <td><b>{{$family->address}}</b></td>
                               </tr>
                               <tr>
                                   <td>
                                       RT/RW
                                   </td>
                                   <td class="text-center"> : </td>
                                   <td><b>00{{$family->rt->no_rt}}/013</b></td>
                               </tr>
                               <tr>
                                   <td>
                                       Desa
                                   </td>
                                   <td class="text-center"> : </td>
                                   <td><b>Cibiru Wetan</b></td>
                               </tr>
                           </table>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <table>
                                <tr>
                                    <td style="width: 45%">
                                      Kecamatan
                                    </td>
                                    <td class="text-center" style="width: 30%"> : </td>
                                    <td><b>Cibiru</b></td>
                                </tr>
                                <tr>
                                    <td>
                                       Kabuten/Kota
                                    </td>
                                    <td class="text-center"> : </td>
                                    <td><b>Bandung</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        Kode POS
                                    </td>
                                    <td class="text-center"> : </td>
                                    <td><b>{{$family->postal_code}}</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        Provinsi
                                    </td>
                                    <td class="text-center"> : </td>
                                    <td><b>Jawa Barat</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="section-title">Anggota Keluarga</div>
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-hover table-md">
                            <tr>
                                <th class="text-center align-middle" style="width: 15%;">Nama</th>
                                <th class="text-center align-middle"  style="width: 10%;">NIK</th>
                                <th class="text-center align-middle">Jenis Kelamin</th>
                                <th class="text-center align-middle">Tempat Lahir</th>
                                <th class="text-center align-middle">Tanggal Lahir</th>

                                <th class="text-center align-middle">Agama</th>
                                <th class="text-center align-middle" style="width: 15%;">Pendidikan</th>
                                <th class="text-center align-middle" style="width: 15%;">Jenis Pekerjaan</th>
                            </tr>

                            @foreach($family->familyMember()->get() as $member)
                                <tr>
                                    <td>
                                        {{ $member->full_name  }}
                                    </td>
                                    <td>
                                        {{ $member->nik }}
                                    </td>
                                    <td>
                                        {{ $member->gender  == 'L' ? 'LAKI-LAKI' : 'PEREMPUAN'}}
                                    </td>
                                    <td>
                                        {{ $member->birthplace->name }}
                                    </td>
                                    <td>
                                        {{ $member->date_of_birth }}
                                    </td>
                                    <td>
                                        {{ $member->religion->name }}
                                    </td>
                                    <td>
                                        {{ $member->education->name }}
                                    </td>
                                    <td>
                                        {{ $member->profession->name }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-md">
                            <tr class="table-default">
                                <th class="text-center align-middle" style="width: 10%" rowspan="2">Status Perkawinan</th>
                                <th class="text-center align-middle" style="width: 15%" rowspan="2">Status Hubungan Dalam Keluarga</th>
                                <th class="text-center align-middle" style="width: 15%" rowspan="2">Kewarganegaraan</th>
                                <th class="text-center align-middle" style="width: 30%" colspan="2">Dokumen Imigrasi</th>
                                <th class="text-center align-middle" style="width: 35%" colspan="2">Nama Orang TUa</th>
                            </tr>
                            <tr class="table-default">
                                <th class="text-center align-middle">No. Paspor</th>
                                <th class="text-center align-middle">No. Kitas/No. Kitap</th>
                                <th class="text-center align-middle">Ayah</th>
                                <th class="text-center align-middle">Ibu</th>

                            </tr>
                            @foreach($family->familyMember()->get() as $member)
                                <tr class="text-center">
                                    <td class="align-middle">
                                        {{ $member->maritalStatus->status  }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->familyStatus->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->citizenship}}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->no_paspor ?? "-" }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->no_kita ?? "-" }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->father_name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->mother_name }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="text-md-right">
            <div class="float-lg-left mb-lg-0 mb-3">
                <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
            </div>
            <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
        </div>
    </div>
@endsection
