@extends('layout')
 
@section('content')
<h1>Járművek</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @include('success')
    <a href="{{ route('vehicles.create') }}"><button><i class="fa fa-new" title="Új"></i>Új</button></a>
</div>
@foreach($vehicles as $vehicle)
    <div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
        <div class="col id">{{ $vehicle->id }}</div>
        <div class="col">{{$vehicle->vin}}</div>        
        <div class="col">{{$vehicle->reg_plate}}</div>
        <div class="col">{{$vehicle->makers_id}}</div>
        <div class="col">{{$vehicle->models_id}}</div>
        <div class="col">{{$vehicle->bodies_id}}</div>
        <div class="right" style="display: flex; gap: 10px;">
            <div class="col">
                <a href="{{ route('vehicles.show', $vehicle->id) }}">
                    <button><i class="fa fa-binoculars" title="Mutat"></i>Mutat</button>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('vehicles.edit', $vehicle->id) }}">
                    <button><i class="fa fa-edit edit" title="Módosít"></i>Módosít</button>
                </a>
            </div>
            <div class="col">
                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="btn-del-fuel"><i class="fa fa-trash-can trash" title="Töröl"></i>Töröl</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection