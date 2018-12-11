<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Calegoria</th>
        <th>Slug</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->category_name }}</td>
        <td>{{ $model->category_slug }}</td>
        <td>{{ $model->category_description }}</td>
    </tr>
</table>
