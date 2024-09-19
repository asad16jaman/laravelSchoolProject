@php
    $value = null;
    for ($i=0; $i < $child_category->level; $i++){
        $value .= '--';
    }
@endphp
<option value="{{ $child_category->id }}" @if($child_category->id == $p_id) selected @endif>{{ $value." ".$child_category->name }}</option>
@if ($child_category->categories)
    @foreach ($child_category->categories as $childCategory)
        @include('laravel-examples.category.child', ['child_category' => $childCategory])
    @endforeach
@endif