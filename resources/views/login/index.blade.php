@include('partials.header_before')
@if (session()->has('registered'))
    <script type="text/javascript">
        window.alert("Already Registered Please Login")
    </script>
@endif
<section id="form" class="form">
    <div class="container w-50" data-aos="fade-up">

        <div class="section-title">
            <h2>Form Login</h2>
        </div>
        <form method="POST" accept="{{ url('/login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <small class="d-block text-center">Already Registered? <a href="/login">Login here!</a></small>
        </form>
    </div>
</section>
@include('partials.footer')
