<x-layout>
  <div class="container py-5">
    <h1 class="mb-4">Register</h1>

    <form action="/register" method="POST" class="row g-3">
      @csrf
      @if($errors->any())
      @foreach($errors->all() as $error)
      <div>{{ $error }}</div>
        @endforeach
        @endif
      <div class="col-12">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required  value="{{ old("name") }}">
      </div>
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required value="{{ old("email") }}">
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="col-12">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>

    <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Log in here</a>.</p>
  </div>
</x-layout>
