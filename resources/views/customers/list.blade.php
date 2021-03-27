@extends('home')
@section('title', __('language.customer_list'))

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h3>{{__('language.customer_list')}}</h3>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('language.name_customer') }}</th>
                    <th scope="col">{{ __('language.birth_day') }}</th>
                    <th scope="col">Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">{{__('language.no_data')}}</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->dob }}</td>
                            <td>{{ $customer->email }}</td>
                            <td><a href="{{ route('customers.edit', $customer->id) }}">{{ __('language.update') }}</a></td>
                            <td><a href="{{ route('customers.destroy', $customer->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">{{__('language.delete')}}</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('customers.create') }}">{{__('language.add_new')}}</a>
        </div>
    </div>
@endsection
