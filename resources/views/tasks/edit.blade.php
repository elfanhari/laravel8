<x-app-layout>

  <div class="row">
    <div class="col-md-6 my-3 offset-3">
      <div class="card">
        <div class="card-header">Edit the Task</div>
        <div class="card-body">
          <form action="{{ route('tasks.update', $task->id) }}" method="post">
            @csrf
            @method('PUT')
            @include('tasks._form')
          </form>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
