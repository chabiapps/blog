@extends('users.layout')

@section('content')
<div class="edit container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12">
                <h2>Laravel 6 CRUD </h2>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
            <table class="edit__table">
                <tr>
                    <td class="edit__table--td-padding">Name</td>
                    <td class="edit__table--td-padding">
                        <input class="edit__table--input-padding"
                        type="text"
                        name="name"
                        value="{{ $user->name }}" />
                    </td>
                </tr>
                <tr>
                    <td class="edit__table--td-padding">Email</td>
                    <td class="edit__table--td-padding">
                        <input class="edit__table--input-padding"
                        type="text"
                        name="email"
                        value="{{ $user->email }}" />
                    </td>
                </tr>
                <tr>
                    <td class="edit__table--td-padding">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>
            </table>

        </form>

        </div>
    </div>
</div>
@endsection
