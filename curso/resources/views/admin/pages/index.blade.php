<table>
    <thead>
    <tr>
        <th>#</th>
        <th>title</th>
        <th>ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pages as $page)
    <tr>
        <td>{{ $page->id }}</td>
        <td>{{ $page->title }}</td>
        <td>#</td>
    </tr>
    @endforeach
    </tbody>
</table>