@extends('Backend.Layouts.app')
@section('app-content')
    <div class="container">
        <h1 class="text-center">Has Many Through</h1>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Country</th>
                <th>Ciry</th>
                <th>Shop</th>
            </tr>
            @foreach ($countries as $country)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $country->name }}</td>
                <td>
                    @foreach ($country->cities as $city)
                        <span class="badge badge-secondary">{{ $city->name }}</span>
                    @endforeach
                </td>
                {{-- <td>
                    @foreach ($country->cities as $city)
                        @foreach ($city->shops as $shop)
                            <span class="badge badge-secondary">{{ $shop->name }}</span>
                        @endforeach
                    @endforeach
                </td> --}}
                <td>
                    @foreach ($country->countryWiseShops as $shop)
                    <span class="badge badge-secondary">{{ $shop->name }}</span>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
