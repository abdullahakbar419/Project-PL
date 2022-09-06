@include('partials.header_before')
<section id="form" class="form">
    <div class="container w-50" data-aos="fade-up">

        <div class="section-title">
            <h2>Form Registration</h2>
        </div>
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama Pengguna</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" id="name" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" id="email" required>
                @error('email')
                    <small class="py-2 text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password" required>
                @error('password')
                    <small class="py-2 text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary btn-block justify-content-center">Register</button>
            </div>

            <small class="d-block text-center">Already Registered? <a href="/login">Login here!</a></small>
        </form>
    </div>
</section>
@include('partials.footer')
