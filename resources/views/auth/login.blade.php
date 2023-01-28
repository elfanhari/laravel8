<x-app-layout>
  <div class="container">
    <div class="col-md-6">

      @if (session()->has('info'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
          {{ session('info') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="card my-3">
        <div class="card-header">
          Sign in your account.
        </div>
        <div class="card-body">
  
          @include('auth._loginform')
          
        </div>
      </div>
    </div>
  </div>
</x-app-layout>