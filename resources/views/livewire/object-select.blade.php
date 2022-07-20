<div class="col-12 flex wrap">


    <div class="col-12 flex wrap" style="justify-content: space-between;">
        <div class="col-md-5 col-12">
            <label class="mt-3" for="station">Станция</label>
            <select class="form-control" id="station" name="station" wire:model="stationId">
                @foreach($stations as $station)
                <option class="form-control" value="{{ $station->id }}">{{ $station->title }}</option>
                @endforeach
            </select>
        </div>


        <div class="col-md-5 col-12">
            <label class="mt-3" for="object">Объекты станции</label>
            <select class="form-control" id="object" name="object" wire:model="objectId">

                @foreach($objects as $object)
                <option class="form-control" value="{{ $object->id }}">{{ $object->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-5 col-12">
            <label class="mt-3" for="object">Вид события</label>
            <select class="form-control" id="object" name="emergency" wire:model="emergencyId">

                @foreach($emergencies as $emergency)
                <option class="form-control" value="{{ $emergency->id }}">{{ $emergency->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-5 col-12">
            <label class="mt-3" for="object">Название события (необязательно)</label>
            <input type="text" class="form-control" style="margin: 10px 0 !important" name="title">
        </div>
    </div>

</div>