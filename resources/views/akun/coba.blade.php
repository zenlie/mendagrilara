@extends('layouts.main')

@section('container')
<h3>Laravel APP - {{ $title }}</h3>
<div id="ajax">TEST</div>
<div id="msg"></div>
@endsection

@section('jsscript')
<script>
 $(document).ready(function() {
    $(document).on('click', '#ajax', function () {
      $.ajax({
         type:'POST',
         url:'/coba/csrf',
         datatype:'json',
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         success:function(ret){
            $("#msg").append(ret.pesan);
         },
         error:function(e){
            console.log(e.responseJSON.message);
         }
      });
    });
});
</script>
@endsection