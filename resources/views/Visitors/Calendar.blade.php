@extends('UserLayout.main')

@section('main-section')
    @push('title-tag')
        <title>Naudi Estate - Consultation Calendar</title>
    @endpush

<div class="w-full my-10">
    <div class="w-80 md:w-4/5 mx-auto calendly-inline-widget"
        data-url="https://calendly.com/bilalmuhammadyousuf543/30min?background_color=2d241a&text_color=ffffff&primary_color=c9a578"
        style="min-width:320px;height:700px;">
    </div>
</div>

    @push('script-tag')
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    @endpush
@endsection
