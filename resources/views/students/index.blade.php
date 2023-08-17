
@include('partials._header')

<nav style="text-align: right">
    <div>
        <a href="/">
        <span>
            Student System
        </span>
        </a>
    </div>
    <div id="navbar-main">
        @auth
        <li>

            <li>
                <a href="/add/student">Add New</a>
            </li>            
            <form action="/logout" method="POST">
                @csrf
            <button>Logout</button>
        </form>
      
        @else
        <li>
            <a href="/register">Sign Up</a>
        </li>
    </li>
    <li>
        <a href="/login">Sign in</a>
    </li>
        
        @endauth
    </div>
</nav>

<x-message />


<header>
    <a href="">
        <h1 style="text-align: center">Student List</h1>

    </a>
</header>

<section >
    <div > 
        <table >
            <thead style="text-align: center">
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
        {{$students->links()}}
    </div>
</section>
   

@include('partials.footer')
    