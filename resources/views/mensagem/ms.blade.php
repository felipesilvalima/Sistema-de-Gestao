@if(session('cadastrado'))
<p style="color:chartreuse;">{{session('cadastrado')}}</p>
@endif

@if(session('edita'))
<p style="color:chartreuse;">{{session('edita')}}</p>
@endif

@if(session('id'))
<p style="color:crimson;">{{session('id')}}</p>
@endif

@if(session('delete'))
<p style="color:crimson;">{{session('delete')}}</p>
@endif


@if(session('enviado'))
<p style="color:chartreuse;">{{session('enviado')}}</p>
@endif

@if(session('errorvenda'))
<p style="color:crimson;">{{session('errorvenda')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
   <p style="color:crimson;">{{$error}}</p> <br>
    @endforeach
@endif

