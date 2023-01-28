<x-app-layout>

<div class="container my-3">
  <div class="row">
    <div class="col-md-6">
      
      @if (session()->has('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('info') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
      <div class="card">
        <div class="card-header">Welcome to my site.</div>
        <div class="card-body">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus aliquid ut ipsam nemo iste perspiciatis. Iure sint, id ipsa a distinctio eveniet nisi eius alias fugit, non vitae corrupti aspernatur!</p>
          <p>Ut at neque saepe provident itaque libero natus consequatur qui quo odio totam pariatur temporibus quae accusamus similique possimus architecto quaerat aut harum, iure ipsa. Voluptate dolore deleniti sequi minus?</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- JS for alert --}}
<script>
  var alertList = document.querySelectorAll('.alert');
  alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
  })
</script>

</x-app-layout>
