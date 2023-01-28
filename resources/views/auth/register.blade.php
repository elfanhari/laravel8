<x-app-layout>
  <div class="container">
    <div class="col-md-6">
      <div class="card my-3">
        <div class="card-header">
          Create new account.
        </div>
        <div class="card-body">
  
          @include('auth._registerform')
          
        </div>
      </div>
    </div>
  </div>
</x-app-layout>