<form method="POST" action="{{ route('update',$students->id ) }}">
    @csrf
    name: <input placeholder="{{ $students->name }}" name="name" type="text" />
    <br><br>
    email: <input placeholder="{{ $students->email }}" name="email" type="text" />
    <br><br>
    <button name="update">update</button>

</form>
@php
$nm=$students->id;
    echo  $nm ;
@endphp
<style>
    *{
        text-align: center;
        font-size: 20pt;
        margin-top: 25px;
    }
</style>