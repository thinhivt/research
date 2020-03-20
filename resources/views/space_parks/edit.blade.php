@extends('layouts.app')
@section('content')
	<!-- title edit -->
	<div class="bg-info text-white py-2 px-2">
		<h4 class="">Edit space park</h4>
	</div>
	<div class="row">
		<div class="card-body col-md-5 border border-muted mx-auto mt-4">
			<h5 class="text-center ml-2">Form edit</h5>
            <form action="{{Route('update-space-park', $space_park->id)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-group" >
                        <label for="number" class="text-info font-weight-bold"><i class="fas fa-laptop"></i>number</label>
                        <input type="text" class="form-control" id="trouble" name="number" placeholder="Fill number for space_card" value="{{$space_park->number}}">
                        <span class="text-danger font-weight-bold text-capitalize"></span>
                    </div>
                	<div class="form-group">
                        <label for="group_id" class="text-info font-weight-bold">Group park</label>
                        <select class="form-control" id="group_id" name="group_id" value="{{}}">
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="2"> 3</option>
                        </select>
                         <span class="text-danger font-weight-bold text-capitalize"></span>
                    </div>
	                <div class="form-group" >
	                    <label for="trouble" class="text-info font-weight-bold"><i class="fas fa-laptop"></i>Trouble</label>
	                    <input type="text" class="form-control" id="trouble" name="trouble" placeholder="Fill trouble for space_card" value="<?php echo (!$space_park->trouble) ? null: $space_park->trouble; ?>">
	                    <span class="text-danger font-weight-bold text-capitalize"></span>
	                </div>
	                <div class="form-group">
                        <label class="text-info font-weight-bold">Status</label>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5 col-sm-5">
                          <label for="status" class="text-muted mx-4">ON</label>
                          <input type="radio" name="status" value="0"  <?php if($space_park->status == 0) echo 'checked'; else echo null; ?>>
                          <span class="text-warning font-weight-bold text-capatalizer"></span>
                        </div>
                        <div class="form-group col-md-5 col-sm-5">
                            <label for="status" class="text-muted mx-4">OFF</label>
                            <input type="radio" name="status" value="1" <?php if($space_park->status == 1) echo 'checked'; else echo null; ?>>
                            <span class="text-warning font-weight-bold text-capatalizer"></span>
                        </div>
                    </div>
                <div class="form-group row col-md-12 justify-content-center">
                    <button type="submit" class="rounded bg-info text-white form-control col-md-2 col-sm-12 mr-4">Save</button>
                </div>
            </form>
        </div>
	</div>
@endsection