@if(Session::has("success"))
<script type="text/javascript">
swal("{{Session::get('success')}}");

</script>

  <!-- <div class="alert alert-success">
  <a href="#" class="close">&times; </a>
  {{  Session::get("success") }}
  </div> -->
@endif
