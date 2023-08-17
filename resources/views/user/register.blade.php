

@include('partials._header')

    <header>
        <a href="">
            <h1 style="text-align: center">Student Registration</h1>

        </a>
    </header>
    <main>
        {{-- <section style="text-align: center">Welcome to Studen System</section> --}}
        <p  style="text-align: center">  Sign up to your account</p>
       
            <div>
                <p style="text-align: center">Sign in a your account <a href="/login"> here</a></p>
            </div>
        </div>
        <section style="text-align: center"> 
            <form action="/store" method="POST">
            @csrf
                <div>
                    <label for="name" >Name</label>
                    <input type="name" placeholder="Name" name="name" value="{{old('name')}}">
                    @error('name')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
                   
                </div>
                <div style="margin-top: 5px">
                    <label for="email" >Email</label>
                    <input type="email" placeholder="Email" name="email" value="{{old('email')}}">
                    @error('email')
                    <p style="font-size: x-small">{{$message}}</p>
                @enderror
                </div>
                <div style="margin-top: 5px">
                    <label for="password" >Password</label>
                    <input type="passsword" placeholder="Password" name="password">
                    @error('password')
                    <p style="font-size: x-small">{{$message}}</p>
                @enderror
                </div>

                <div style="margin-top: 5px">
                 <button type="submit">Sign Up</button>
                 
                </div>
            </form>
            
        </section>
    </main>

@include('partials.footer')