<html>
<table>
    <thread>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thread>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{$dataku['id']}}</td>
            <td>{{$dataku['nama']}}</td>
            <td>{{$dataku['harga']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</html>
       
