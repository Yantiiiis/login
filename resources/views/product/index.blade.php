<html>
    <title>Product</title>
    <body>
        <h2>List Product</h2>
        <hr>
        <a href="{{ URL ('product/create')}}">Create Product</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
        </tbody>
            @forelse ($product as $data)
                <tr>
                    <td>{{ $data->id }} </td>
                    <td> {{ $data->product}} </td>
                    <td>{{ $data->price}}</td>
                    <td>{{ $data->stock}} </td>
                </tr>
            @empty
                <tr>
                    <td coslpan="4">List Product Empety</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </body>
</html>

</html>