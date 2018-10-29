@extends('layouts.app')

@section('head')

@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-header">Create Meeting</div><br>



                <!--<div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>                            
                                @endforeach
                            </ul>
                        </div>
                    @endif
                -->


                    <div class="form">   
                        <form action="{{ route('meetings.store') }}" method="POST">
                            @csrf

                        
                            <div class="form-group row">
                                <label for="Title" class="col-sm-4 col-form-label text-md-right">Title <span style="color: red;">*</span></label>
                                    
                                <div class="col-md-6">
                                    <input type="textarea" class="form-control" id="Title" placeholder="enter title" name="title" required>
                                </div>

                            </div>



                            <div class="form-group row">
                                <label for="Date" class="col-sm-4 col-form-label text-md-right">Date <span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="Date" name="date" required>
                                </div>

                            </div>
                            



                            <div class="form-group row">
                                <label for="Time" class="col-sm-4 col-form-label text-md-right">Start Time <span style="color: red;">*</span></label>
                                
                                <div class="col-md-6">
                                    <input type="time" class="form-control" id="Time" name="start_time" required>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="Time" class="col-sm-4 col-form-label text-md-right">End Time <span style="color: red;">*</span></label>
                                
                                <div class="col-md-6">
                                    <input type="time" class="form-control" id="Time" name="end_time" required>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="Description" class="col-sm-4 col-form-label text-md-right">Description </label>
                                    
                                <div class="col-md-6">
                                    <input type="textarea" class="form-control" id="Description" placeholder="enter description" name="description">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="Invitees" class="col-sm-4 col-form-label text-md-right">Invitees </label>
                                    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="Invitees" placeholder="enter invitees" name="invitees">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="Status" class="col-sm-4 col-form-label text-md-right">Status <span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="Status" name="status" required>
                                </div>

                            </div>


                            <br>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">

                                    <input type="hidden" id="inlineCheckbox" name="Appointment" value="No">   
                                    <input type="checkbox" id="inlineCheckbox" name="Appointment" value="Yes"> Do you have an appointment<br>
                                </div>
                            </div>                   



                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">                           
                                <button type="submit" class="btn btn-primary">Create</button>
                                </div>         
                            </div><br>

                                

                        </form>

                    </div>
                    
                </div>
                
            </div>

        </div>

    </div>
</div>
@endsection