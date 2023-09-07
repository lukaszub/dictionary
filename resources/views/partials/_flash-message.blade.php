@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3500)" x-show="show" class="alert alert-success fixed-top text-center" role="alert">
  {{session('message')}}
</div>
@endif
