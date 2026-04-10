<x-layout>
  <div class="container py-5">
    <h1 class="mb-4">Login</h1>

    <form action="/login" method="POST" class="row g-3">
      @csrf
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Log In</button>
      </div>
    </form>

    <p class="mt-3">Don't have an account? <a href="{{ route('register') }}">Register here</a>.</p>
  </div>
</x-layout>
