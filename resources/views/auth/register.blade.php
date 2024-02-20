<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">


                <form class="mt-5" action="/register" method="POST">
                    @csrf
                    <h1>Registrati</h1>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input name="name" type="text" class="form-control" id="name"
                             placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Enter email">
                    </div>
                   
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Psw confirm</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                             placeholder="Enter password">
                    </div>
                     
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Register</button>
                       
                </form>


            </div>
        </div>


</x-layout>
