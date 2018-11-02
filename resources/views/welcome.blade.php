@extends('layouts.app')

@section('content')
    <div class="container  justify-content-center ">
        <div class="row card card-body col-md-8 offset-2">
            @auth
                <ul class="list-group">
                    <li class="list-group-item"> Thank You </li>
                    <li class="list-group-item"><b> Logout by clicking on your name at  nav</b> </li>
                    <li class="list-group-item"> Submitted By -:  Shrey Gupta </li>
                    <li class="list-group-item"> <a href="tel:+918726212000">+918726212000</a> </li>
                    <li class="list-group-item"> <a href="mailto:connectwithshrey@gmail.com">connectwithshrey@gmail.com</a> </li>
                </ul>
            @endauth
            @guest
                <ul class="list-group">
                    <li class="list-group-item"> Login And Registration Links are on the navigation Start There  </li>
                    <li class="list-group-item"> Submitted By -:  Shrey Gupta </li>
                    <li class="list-group-item"> <a href="tel:+918726212000">+918726212000</a> </li>
                    <li class="list-group-item"> <a href="mailto:connectwithshrey@gmail.com">connectwithshrey@gmail.com</a> </li>
                </ul>
             @endguest
        </div>

    </div>
@endsection