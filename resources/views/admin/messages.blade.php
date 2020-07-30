@extends('admin.layout_post')
@section('content')
<style>
    th {
        font-weight: 200 !important;
    }

    @media only screen and (max-width: 600px) {
        table {
            font-size: 10px;
        }
    }
</style>
<div class="container" style="margin-top:20px;">
    <h4><b>Inbox</b></h4>
    <hr>
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            @if(count($messages)>0)
            @foreach($messages as $message)
            <tr class="odd gradeX">
                <td>{{$message->id}}</td>
                <td>{{$message->contact_name}}</td>
                <td>{{$message->contact_email}}</td>
                <td>{{$message->contact_message}}</td>
                <td>
                    <center><a class="delete-msg" href="delete_message-{{$message->id}}"><i class="fa fa-trash"></i></a></center>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection