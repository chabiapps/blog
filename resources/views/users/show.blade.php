@extends('users.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12">
                <h2>Laravel 6 CRUD </h2>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col-lg-12">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>

                <tr>
                    <td> {{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </table>

        </div>
    </div>
</div>
@endsection
