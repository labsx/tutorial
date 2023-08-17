@include('partials._header')

<header>

</header>
<main>
   <h1 style="text-align: center">EDIT DATA
    {{$student->first_name}}  {{$student->last_name}}
    </h1>
   
    <section style="text-align: center"> 
       
        <form action="/student/{{$student->id}}" method="POST">
            @method('PUT')
            @csrf
            
            <div>
                <label for="first_name" >First Name</label>
                <input type="text" placeholder="First Name" name="first_name" value=" {{$student->first_name}} ">
                @error('first_name')
                    <p style="font-size: x-small">{{$message}}</p>
                @enderror
                
            </div>
            <div>
                <label for="last_name" >Last Name</label>
                <input type="text" placeholder="Last Name" name="last_name" value="{{$student->last_name}} ">
                @error('last_name')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
                
            </div>
            <div style="margin-top: 5px">
                <label for="gender" >Gender</label>
                <select type="gender"  name="gender">
                    <option value=""{{$student->gender == "" ? 'selected': ''}}></option>
                    <option value="Male" {{$student->gender == "Male" ? 'selected': ''}}>Male</option>
                    <option value="Female" {{$student->gender == "Female" ? 'selected': ''}}>Female</option>
                </select>
                @error('gender')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
               
            </div>
            <div>
                <label for="age" >Age</label>
                <input type="number" placeholder="age" name="age" value="{{$student->age}}">
                @error('age')
                        <p style="font-size: x-small">{{$message}}</p>
                    @enderror
                
            </div>

            <div style="margin-top: 5px">
                <label for="email" >Email</label>
                <input type="email" placeholder="Email" name="email" value="{{$student->email}} ">
                @error('email')
                <p style="font-size: x-small">{{$message}}</p>
            @enderror
            </div>
          
            <div style="margin-top: 5px">
             <button type="submit">Update</button>
            </div>
        </form>
    </section>
</main>


@include('partials.footer')