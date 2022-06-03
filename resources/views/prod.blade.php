@extends('header')
@section('content')
    <section>
        <div class="container">
            <h1><center>Available products</center></h1>
            <div >
                @foreach($data ?? '' as $row)
               <center> <ul>
                    <li>
                        {{$row->categoryname}}
                    </li><br>
                </ul></center>
                    @endforeach
            </div>
        </div>
    </section>


@endsection
