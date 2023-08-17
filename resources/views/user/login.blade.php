

@include('partials._header')

    <header>
        <a href="">
            <h1 style="text-align: center">Student Login</h1>

        </a>
    </header>
    <main>
       
        <p  style="text-align: center">  Sign in to your account</p>
        <section style="text-align: center"> 
            <div>
                <p>Sign up a new account <a href="/register"> here</a></p>
            </div>
            <form action="/login/process" method="POST">
                @csrf
                
                <div>
                    <label for="email" >Email</label>
                    <input type="email" placeholder="email" name="email">
                    @error('email')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
                    
                </div>
                <div style="margin-top: 5px">
                    <label for="email" >Password</label>
                    <input type="password" placeholder="password" name="password">
                    @error('password')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
                </div>
                <div style="margin-top: 5px">
                 <button type="submit">Login</button>
                </div>
            </form>
        </section>
    </main>

@include('partials.footer')