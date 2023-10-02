<div hx-trigger="every 1s" hx-get="{{request()->header('Hx-Current-Url')}}">
{!! $content !!}
</div>
