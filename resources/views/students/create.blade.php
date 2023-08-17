@include('partials._header', [$title])

<header>

</header>
<main>
   <h1 style="text-align: center">ADD NEW DATA</h1>
   
    <section style="text-align: center"> 
       
        <form action="/add/student" method="POST">
            @csrf
            
            <div>
                <label for="first_name" >First Name</label>
                <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                @error('first_name')
                    <p style="font-size: x-small">{{$message}}</p>
                @enderror
                
            </div>
            <div>
                <label for="last_name" >Last Name</label>
                <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                @error('last_name')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
                
            </div>
            <div style="margin-top: 5px">
                <label for="gender" >Gender</label>
                <select type="gender"  name="gender">
                    <option value=""{{old('gender') == "" ? 'selected': ''}}></option>
                    <option value="Male" {{old('gender') == "Male" ? 'selected': ''}}>Male</option>
                    <option value="Female" {{old('gender') == "Female" ? 'selected': ''}}>Female</option>
                </select>
                @error('gender')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
               
            </div>
            <div>
                <label for="age" >Age</label>
                <input type="number" placeholder="age" name="age" value="{{old('age')}}">
                @error('age')
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
             <button type="submit">Login</button>
            </div>
        </form>
    </section>
</main>


@include('partials.footer')