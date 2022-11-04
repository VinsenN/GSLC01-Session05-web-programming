<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">{{$col1}}</th>
        <th scope="col">{{$col2}}</th>
        </tr>
    </thead>

    <tbody>
        <?php $index = 0; ?>
        @forelse ($data as $name => $val)
            <tr>
                <th scope="row">{{++$index}}</th>
                <td>{{$name}}</td>
                <td>{{$val}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">No Data</td>
            </tr>
        @endforelse
    </tbody>
</table>
