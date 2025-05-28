@props(['color', 'bgColor'=>'white'])
<div  {{$attributes->class('card')}}>
    <div class="card-header">{{$title}}</div>
    {{$slot}}
    <div class="card-footer">{{$footer}}</div>
</div>
