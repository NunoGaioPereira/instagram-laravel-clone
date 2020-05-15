@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flis5-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.flis5-1.fna.fbcdn.net&_nc_ohc=ge4mrh4zMFAAX8sQZ7e&oh=c08e7b9db5c9838c5360096a0af1ff57&oe=5EE5AAC6" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-3"><strong>153</strong> posts</div>
                <div class="pr-3"><strong>23k</strong> followers</div>
                <div class="pr-3"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://instagram.flis5-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/95420667_2836106886485660_1097563618110868931_n.jpg?_nc_ht=instagram.flis5-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=4gQY9R-4jooAX_5OBID&oh=255719ce1be6149dfdf66795dc611130&oe=5EE81CA9" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.flis5-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/95420667_2836106886485660_1097563618110868931_n.jpg?_nc_ht=instagram.flis5-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=4gQY9R-4jooAX_5OBID&oh=255719ce1be6149dfdf66795dc611130&oe=5EE81CA9" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.flis5-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/95420667_2836106886485660_1097563618110868931_n.jpg?_nc_ht=instagram.flis5-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=4gQY9R-4jooAX_5OBID&oh=255719ce1be6149dfdf66795dc611130&oe=5EE81CA9" alt="">
        </div>
    </div>
</div>
@endsection
