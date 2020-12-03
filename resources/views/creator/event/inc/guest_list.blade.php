<table class="table table-striped mt-5">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Guest Name</th>
        <th scope="col">Guest Email</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($event->users as $guest)
        <tr>
            <td><a @auth href="{{ route('creator.event.edit', $event) }}" @endauth>{{ $event->title }}</a>
            </td>
            <td>{{ $guest->id }}</td>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->email }}</td>
            <td>{{ $guest->updated_at }}</td>
            <td>
                <form action="{{ route('creator.event.show', $event) }}" method="GET">
                    @csrf
                    <button type="submit" name="" class="btn btn-primary">Detail</button>
                </form>
            </td>
            @auth
                <td>
                    <form action="{{ route('creator.event.destroy', $event) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            @endauth
        </tr>
    @endforeach
    </tbody>
</table>
