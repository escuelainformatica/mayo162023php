{{ usuario() }}
@if (usuario("user"))
    <h2>El usuario tiene rol user</h2>
@else
    <h2>El usuario tiene un rol diferente {{usuario()->rol}}</h2>
@endif

