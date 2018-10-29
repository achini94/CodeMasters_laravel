@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Update Meeting</h2>

            </div>

        </div>

    </div>

   
<div class="row">
    
    <div class="col-md-4"> 

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

  

        <form action="{{ route('meetings.update',$meeting->id) }}" method="POST">

        @csrf

        @method('PUT')

   
            <div class="form-group">

                <label for="P-MemberId">P-Member Id</label>

                <input type="text" name="P_Member_Id" value="{{ $meeting->P_Member_Id }}" class="form-control" placeholder="enter p-member id">

            </div>

            
            <div class="form-group">

                <label for="Date">Date</label>

                <input type="date" name="Date" value="{{ $meeting->Date }}" class="form-control">

            </div>


            <div class="form-group">

                <label for="Time">Time</label>

                <input type="time" name="Time" value="{{ $meeting->Time }}" class="form-control">

            </div>

           
            <br><br>
            <div class="btn2">

                <a class="btn btn-primary" href="{{ route('meetings.index') }}">Cancel</a>

                <button type="submit" class="btn btn-primary">Update</button>

            </div>

        </form>

    </div>
    
</div>

   

    

@endsection