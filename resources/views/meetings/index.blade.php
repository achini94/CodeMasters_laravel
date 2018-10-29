@extends('layouts.app')


@section('head')

<style>
        
    .table{ 
        margin-top: 25px;
        text-align: center;
    }

    th{
        text-align: center;
        }

</style>

@endsection



@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

                <h2><center>Meeting Details</center></h2>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table">
        <tr>

            <th>Meeting No</th>
            <th>Title</th>
            <th>Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Description</th>
            <th>Invitees</th>
            <th>Status</th>
            <th>Appointment</th>
            <th width="280px">Action</th>

        </tr>

        @foreach ($meetings as $meeting)

        <tr>

            <td>{{ ++$id }}</td>
            <td>{{ $meeting->title }}</td>
            <td>{{ $meeting->date }}</td>
            <td>{{ $meeting->start_time }}</td>
            <td>{{ $meeting->end_time }}</td>
            <td>{{ $meeting->description }}</td>
            <td>{{ $meeting->invitees }}</td>
            <td>{{ $meeting->status }}</td>
            <td>{{ $meeting->Appointment }}</td>


            <td>

                <form action="{{ route('meetings.destroy',$meeting->id) }}" method="POST">


                <div class="btn3">

                    <a class="btn btn-primary" href="{{ route('meetings.edit',$meeting->id) }}">Edit</a>
   
                    @csrf

                    @method('DELETE')

      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                </form>

            </td>

        </tr>

        @endforeach
    </table>

  

    {!! $meetings->links() !!}

      

@endsection