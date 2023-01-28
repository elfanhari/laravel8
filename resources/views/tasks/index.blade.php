<x-app-layout>

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-6  my-3">
        @include('tasks._create')
      </div>
    </div>

    @if ($tasks->count() > 0)
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">List</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $index => $task)
              <tr class="">
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $task->list }}</td>
                <td>
                  <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a> |
                  <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      Data tidak ada!
    @endif


  </div>
</x-app-layout>
