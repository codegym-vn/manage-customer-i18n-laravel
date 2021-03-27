@extends('home')
@section('title', __('language.add_new_customers'))

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>{{__('language.add_new_customers')}}</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>{{__('language.name_customer')}}</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('language.birth_day')}}</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('language.add_new')}}</button>
                    <button class="btn btn-secondary"
                            onclick="window.history.go(-1); return false;">{{__('language.cancel')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
