@extends('clients.nabav.layout')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product User Table</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>

        <h2>Product User Table</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>User ID</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favProds as $item)
                    @php 
                        $idProd = $item->product_id 
                    @endphp
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            @foreach ($products as $p )
                                @if ($p->id == $idProd)
                                    <img src="{{ asset('images/' . $p->image) }}" alt="{{ $p->name }}" width="100px" height="80px">
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>
                            @foreach ($products as $p )
                                @if ($p->id == $idProd)
                                    {{ $p->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>

    </html>
@endsection
