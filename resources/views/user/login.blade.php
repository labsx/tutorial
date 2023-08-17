

@include('partials._header')

    <header>
        <a href="">
            <h1 style="text-align: center">Student Login</h1>

        </a>
    </header>
    <main>
       
        <p  style="text-align: center">  Sign in to your account</p>
        <section style="text-align: center"> 
            <form action="/login/process" method="POST">
                <div>
                    <label for="email" >Email</label>
                    <input type="email" placeholder="email" name="email">
                </div>
                <div style="margin-top: 5px">
                    <label for="email" >Password</label>
                    <input type="password" placeholder="password" name="password">
                </div>
                <div style="margin-top: 5px">
                 <button type="submit">Login</button>
                </div>
            </form>
        </section>
    </main>

@include('partials.footer')