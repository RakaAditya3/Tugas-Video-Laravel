@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Order Detail</h1>
    </div>
    <div>
                <form action="{{ url('admin/orderdetail/create') }}" method="get">
                    
                <div class="row">
                    @if (Session::has('pesan'))
                        <div class="alert alert-danger">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif
                    <div class="mt-2 col-4">
                        <label class="form-label" for="">Tanggal Mulai</label>
                        <input class="form-control" type="date" name="tglmulai" id="">
                    </div>
                    <div class="mt-2 col-4">
                        <label class="form-label" for="">Tanggal Akhir</label>
                        <input class="form-control" type="date" name="tglakhir" id="">
                    </div>
                    <div class="mt-3 col-4">
                        <button class="btn btn-danger mt-4" type="submit">Cari</button>
                    </div>
                </div>
                </form>
            </div>
        
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nomer</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>


                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($details as $detail )
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $detail->tglorder }}</td>
                        <td>{{ $detail->pelanggan }}</td>
                        <td>{{ $detail->menu }}</td>
                        <td>{{ $detail->harga }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>{{ $detail->total }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $details->withQueryString()->links() }}
    </div>
@endsection