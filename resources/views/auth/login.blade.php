<x-layout>
   
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <h1>Login</h1>

                <form class="mt-5" action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Password">
                      @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Login</button>
                       
                </form>


            </div>
        </div>


</x-layout>