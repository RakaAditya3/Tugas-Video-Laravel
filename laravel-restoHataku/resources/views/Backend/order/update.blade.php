@extends('Backend.back')

@section('admincontent')
<div class="row">
    <div>
        <h1>{{ number_format($order->total) }}</h1>
    </div>
    <div class="col-6">
        <form action="{{ url('admin/order/'.$order->idorder) }}" method="post">
            @csrf
            
            @method('PUT')



            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                    {{ Session::get('pesan') }}
                </div>
            @endif
            <di class="mt-2">
                <label class="form-label" for="">Total</label>
                <input class="form-control" min="{{ $order->total }}" value="{{ $order->total }}" type="text" name="bayar" id="">
                <span class="text-danger">
                    @error('total')
                        {{ $message }}
                    @enderror
                </span>
            </di>
            <div>
                <button class="btn btn-danger mt-4" type="submit">Bayar</button>
            </div>
        </form>
    </div>
</div>
@endsection