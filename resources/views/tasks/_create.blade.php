  <div class="card">
    <div class="card-header">Create new Task</div>
    <div class="card-body">
      <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        @include('tasks._form')
      </form>
    </div>
  </div>