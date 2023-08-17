



<header>
    <a href="">
        <h1 style="text-align: center">Student List</h1>

    </a>
</header>

<section>
    <div>
        <table>
            <thead>
                <tr>
                    <th>
                        First Name
                    </th>
                    <th>
                        Last Name
                    </th>
                    <th>
                       Email
                    </th>
                    <th>
                        age
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>
                        {{ $student->first_name }} 
                    </td>
                    <td>
                        {{ $student->last_name }} 
                    </td>
                    <td>
                        {{ $student->email }} 
                    </td>
                    <td>
                        {{ $student->age }} 
                    </td>

                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</section>
   

@include('partials.footer')
 {{-- @foreach ($students as $student)
       <li>{{ $student->first_name }} {{ $student->last_name }}</li>
       
    @endforeach --}}